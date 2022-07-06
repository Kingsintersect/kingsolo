<?php
namespace App\Controllers;
use Core\Controller;
use Core\H;
use App\Models\Users;

class HomeController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->view->setLayout('default');
        $this->load_model('Users');
    }

    public function indexAction(){
        $about = $this->UsersModel->findprofileById((int)1);
        $this->view->about = $about;
        $this->view->render('home/index');
    }

    public function testAjaxAction(){
        $resp = ['success'=>true, 'data'=>['id'=>23, 'name'=>'solomon', 'favorite_food'=>'beans']];
        $this->jsonResponse($resp);
    }
}
