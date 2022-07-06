<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use App\Models\Users;

class AboutController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('default');
        $this->load_model('Users');
    }

    public function indexAction(){
        $about = $this->UsersModel->findprofileById((int)1);
        $this->view->about = $about;
        $this->view->render('about/index');
    }
}
