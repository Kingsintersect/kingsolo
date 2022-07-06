<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session ;
use Core\Router;
use Core\H;
use App\Models\News;
use App\Models\Users;

class NewsController extends Controller
{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->view->setLayout('default');
        $this->load_model('News');
    }

    public function indexAction() {
        $news = $this->NewsModel->findAll();
        $this->view->news = $news;
        if(Users::currentUser()) {
            $this->view->render('news/ad_index');
        }else {
            $this->view->render('news/index');
        }
    }

    public function addAction() {
        $news = new News();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $form_value = $this->request->get();
            $file_name = $news->savefile($news, 'photo', 'news');
            $form_value['photo'] = $file_name;
            $news->assign($form_value);
            if($news->save()){
                Session::addMsg('success', 'New News Has Been Added Successfully!');
                Router::redirect('news');
            }
        }
        $this->view->news = $news;
        $this->view->displayErrors = $news->getErrorMessages();
        $this->view->postAction = PROOT . 'news' . DS . 'add';
        $this->view->render('news/add');
    }

    public function editAction($id) {
        $news = $this->NewsModel->findNewsById((int)$id);
        if(!$news) Router::redirect('news');
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            // H::dnd($_FILES["photo"]["tmp_name"]);
            if(!empty($_FILES["photo"]["tmp_name"])){
                $form_value = $this->request->get();
                $file_name = $news->savefile($news, 'photo', 'news');
                $form_value['photo'] = $file_name;
                $news->assign($form_value);
            }else{
                $news->assign($this->request->get());
            }
            
            if($news->save()){
                Session::addMsg('success', 'News Has Been Edited Successfully!');
                Router::redirect('news');
            }
        }
        $this->view->displayErrors = $news->getErrorMessages();
        $this->view->news  = $news;
        $this->view->postAction  = PROOT . 'news' . DS . 'edit' . DS . $news->id;
        $this->view->render('news/edit');
    }

    public function detailsAction($id) {
        $news = $this->NewsModel->findNewsById((int)$id);
        $allnews = $this->NewsModel->findAll();
        if(!$news) {
            Router::redirect('news');
        }
        $this->view->news  = $news;
        $this->view->allnews  = $allnews;
        $this->view->render('news/details');
    }

    public function deleteAction($id) {
        $news = $this->NewsModel->findNewsById((int)$id);
        if($news){
            if($news->delete()){
                if (file_exists($news->photo)) {
                    unlink($news->photo);
                }
                Session::addMsg('success', 'News Has Been Deleted!');
            }
        }
        Router::redirect('news');
    }
}