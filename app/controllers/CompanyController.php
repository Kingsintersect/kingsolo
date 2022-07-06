<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session ;
use Core\Router;
use Core\H;
use App\Models\Users;
use App\Models\Company;

class CompanyController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('default');
        $this->load_model('Company');
    }

    public function indexAction(){
        $company = $this->CompanyModel->findCompanyById((int)1);
        $this->view->company = $company;
        if(Users::currentUser()) {
            $this->view->render('company/index');
        }
    }
    
    public function addAction() {
        $company = new Company();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $company->assign($this->request->get());
            // $company->user_id = Users::currentUser()->id;
            if($company->save()){
                Session::addMsg('success', 'New Company Infomation Has Been Added Successfully!');
                Router::redirect('company');
            }
        }
        $this->view->company = $company;
        $this->view->displayErrors = $company->getErrorMessages();
        $this->view->postAction = PROOT . 'company' . DS . 'add';
        $this->view->render('company/add');
    }

    public function editAction($id) {
        $company = $this->CompanyModel->findCompanyById((int)$id);
        if(!$company) Router::redirect('company');
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $company->assign($this->request->get());
            if($company->save()){
                Session::addMsg('success', 'Company Infomation Has Been Edited Successfully!');
                Router::redirect('company');
            }
        }
        $this->view->displayErrors = $company->getErrorMessages();
        $this->view->company  = $company;
        $this->view->postAction  = PROOT . 'company' . DS . 'edit' . DS . $company->id;
        $this->view->render('company/edit');
    }

    // public function detailsAction($id) {
    //     $company = $this->CompanyModel->findCompanyById((int)$id);
    //     if(!$company) {
    //         Router::redirect('company');
    //     }
    //     $this->view->company  = $company;
    //     $this->view->render('company/details');
    // }

    public function deleteAction($id) {
        $company = $this->CompanyModel->findCompanyById((int)$id);
        if($company){
            $company->delete();
            Session::addMsg('success', 'Company Has Been Deleted!');
        }
        Router::redirect('company');
    }

    public function servicesAction(){
        $this->view->render('company/services');
    }

    public function detailsAction(){
        $this->view->render('company/details');
    }
}
