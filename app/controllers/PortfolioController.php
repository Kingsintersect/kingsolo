<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session ;
use Core\Router;
use Core\H;
use App\Models\Users;
use App\Models\Services;
use App\Models\Portfolio;

class PortfolioController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('default');
        $this->load_model('Portfolio');
    }

    public function indexAction(){
        $portfolio = $this->PortfolioModel->findAll();
        $this->view->portfolio = $portfolio;
        if(Users::currentUser()) {
            $this->view->render('portfolio/ad_index');
        }else {
            $this->view->render('portfolio/index');
        }
    }
    
    public function addAction() {
        $product = new Portfolio();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $product->assign($this->request->get());
            // $product->user_id = Users::currentUser()->id;
            if($product->save()){
                Session::addMsg('success', 'New Product Has Been Added Successfully!');
                Router::redirect('portfolio');
            }
        }
        $this->view->product = $product;
        $this->view->displayErrors = $product->getErrorMessages();
        $this->view->postAction = PROOT . 'portfolio' . DS . 'add';
        $this->view->render('portfolio/add');
    }

    public function editAction($id) {
        $product = $this->PortfolioModel->findProjectById((int)$id);
        if(!$product) Router::redirect('portfolio');
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $product->assign($this->request->get());
            if($product->save()){
                Session::addMsg('success', 'Product Has Been Edited Successfully!');
                Router::redirect('portfolio');
            }
        }
        $this->view->displayErrors = $product->getErrorMessages();
        $this->view->product  = $product;
        $this->view->postAction  = PROOT . 'portfolio' . DS . 'edit' . DS . $product->id;
        $this->view->render('portfolio/edit');
    }

    // public function detailsAction($id) {
    //     $product = $this->PortfolioModel->findProjectById((int)$id);
    //     if(!$product) {
    //         Router::redirect('portfolio');
    //     }
    //     $this->view->product  = $product;
    //     $this->view->render('portfolio/details');
    // }

    public function deleteAction($id) {
        $product = $this->PortfolioModel->findProjectById((int)$id);
        if($product){
            $product->delete();
            Session::addMsg('success', 'Product Has Been Deleted!');
        }
        Router::redirect('portfolio');
    }

    public function servicesAction(){
        $serve = new Services();
        $this->view->service = $serve->findAll();
        $this->view->render('portfolio/services');
    }

    public function detailsAction(){
        $this->view->render('portfolio/details');
    }
}
