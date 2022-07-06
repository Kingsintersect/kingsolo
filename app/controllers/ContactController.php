<?php
namespace App\Controllers;
use Core\Controller;
use Core\Session ;
use Core\Router;
use Core\H;
use App\Models\Users;
use App\Models\Contact;

class ContactController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('default');
        $this->load_model('Contact');
    }

    public function indexAction(){
        if(Users::currentUser()) {
            $contact = $this->ContactModel->findAll();
            $this->view->contact = $contact;
            $this->view->render('contact/ad_index');
        }else{
            $contact = new Contact();
            if($this->request->isPost()) {
                $this->request->csrfCheck();
                $contact->assign($this->request->get());
                // $contact->user_id = Users::currentUser()->id;
                if($contact->save()){
                    Session::addMsg('success', 'New Contact Infomation Has Been Added Successfully!');
                    Router::redirect('contact');
                }
            }
            $this->view->contact = $contact;
            $this->view->displayErrors = $contact->getErrorMessages();
            $this->view->postAction = PROOT . 'contact';
            $this->view->render('contact/index');
        }
    }

    public function detailsAction($id) {
        $contact = $this->ContactModel->findContactById((int)$id);
        if(!$contact) {
            Router::redirect('contact');
        }
        $this->view->contact  = $contact;
        $this->view->render('contact/details');
    }

    public function replyAction($id) {
        $contact = $this->ContactModel->findContactById((int)$id);
        if(!$contact) {
            Router::redirect('contact');
        }
        $this->view->contact  = $contact;
        $this->view->render('contact/reply');
    }

    public function deleteAction($id) {
        $contact = $this->ContactModel->findContactById((int)$id);
        if($contact){
            $contact->delete();
            Session::addMsg('success', 'Contact Has Been Deleted!');
        }
        Router::redirect('contact');
    }

    public function servicesAction(){
        $this->view->render('contact/services');
    }

}
