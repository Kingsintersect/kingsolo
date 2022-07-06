<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session ;
use Core\Router;
use App\Models\Services;
use App\Models\Users;

class ServicesController extends Controller
{
    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->view->setLayout('default');
        $this->load_model('Services');
    }

    public function indexAction() {
        $services = $this->ServicesModel->findAll();
        $this->view->services = $services;
        $this->view->render('services/index');
    }

    public function addAction() {
        $service = new Services();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $service->assign($this->request->get());
            // $service->user_id = Users::currentUser()->id;
            if($service->save()){
                Session::addMsg('success', 'New Service Has Been Added Successfully!');
                Router::redirect('services');
            }
        }
        $this->view->service = $service;
        $this->view->displayErrors = $service->getErrorMessages();
        $this->view->postAction = PROOT . 'services' . DS . 'add';
        $this->view->render('services/add');
    }

    public function editAction($id) {
        $service = $this->ServicesModel->findProjectById((int)$id);
        if(!$service) Router::redirect('services');
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $service->assign($this->request->get());
            if($service->save()){
                Session::addMsg('success', 'Service Has Been Edited Successfully!');
                Router::redirect('services');
            }
        }
        $this->view->displayErrors = $service->getErrorMessages();
        $this->view->service  = $service;
        $this->view->postAction  = PROOT . 'Services' . DS . 'edit' . DS . $service->id;
        $this->view->render('services/edit');
    }

    public function detailsAction($id) {
        $service = $this->ServicesModel->findProjectById((int)$id);
        if(!$service) {
            Router::redirect('services');
        }
        $this->view->service  = $service;
        $this->view->render('services/details');
    }

    public function deleteAction($id) {
        $service = $this->ServicesModel->findProjectById((int)$id);
        if($service){
            $service->delete();
            Session::addMsg('success', 'Service Has Been Deleted!');
        }
        Router::redirect('services');
    }
    
    public function servicesAction(){
        $this->view->render('portfolio/services');
    }
}