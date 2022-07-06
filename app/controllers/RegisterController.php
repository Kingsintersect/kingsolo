<?php
namespace App\Controllers;
use Core\Controller;
use Core\Router;
use Core\Session;
use Core\H;
use App\Models\Users;
use App\Models\Login;

class RegisterController extends Controller
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('Users');
        $this->view->setLayout('default');
    }

    public function indexAction(){
        $profile = $this->UsersModel->findByUsername("solomon");//H::dnd($profile);
        $this->view->profile = $profile;
        if(Users::currentUser()) {
            $this->view->render('register/index');
        }
    }
    
    public function editAction($id) {
        $profile = $this->UsersModel->findProfileById((int)$id);
        if(!$profile) Router::redirect('register');
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $profile->assign($this->request->get());
            $profile->setConfirm($this->request->get('confirm'));
            if($profile->save()){
                Session::addMsg('success', 'Profile Information Has Been Edited Successfully!');
                Router::redirect('register');
            }
        }
        $this->view->displayErrors = $profile->getErrorMessages();
        $this->view->profile  = $profile;
        $this->view->postAction  = PROOT . 'register' . DS . 'edit' . DS . $profile->id;
        $this->view->render('register/edit');
    }

    public function loginAction() {
        $loginModel = new Login();
        if($this->request->isPost()) {
            // form validation
            $this->request->csrfCheck();
            $loginModel->assign($this->request->get());
            $loginModel->validator();
            if($loginModel->validationPassed()) {
                $user = $this->UsersModel->findByUsername($_POST['username']);
                if($user && password_verify($this->request->get('password'), $user->password)) {
                    $remember = $loginModel->getRememberMeChecked();
                    $user->login($remember);
                    Router::redirect('register');
                }else {
                    $loginModel->addErrorMessage('username', "There is an error with your username and password.");
                }
            }
        }
        $this->view->login = $loginModel;
        $this->view->displayErrors = $loginModel->getErrorMessages();
        $this->view->render('register/login');
    }

    public function logoutAction() {
        if(Users::currentUser()) {
           Users::currentUser()->logout();
        }
        Router::redirect('home');
    }

    public function registerAction() {
        $newUser = new Users();
        if($this->request->isPost()) {
            $this->request->csrfCheck();
            $newUser->assign($this->request->get());
            $newUser->setConfirm($this->request->get('confirm'));
            if($newUser->save()){
                Router::redirect('register/login');
            }
        }
        $this->view->newUser = $newUser;
        $this->view->displayErrors = $newUser->getErrorMessages();
        $this->view->render('register/register');
    }
}
