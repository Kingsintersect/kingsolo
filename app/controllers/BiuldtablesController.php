<?php
namespace App\Controllers;
use Core\Controller;
use App\Models\Users;

class BiuldtablesController extends Controller 
{
    public function __construct($controller, $action){
        parent::__construct($controller, $action);
        $this->load_model('Biuldtables');
        $this->view->setLayout('no_top_nav');
    }

    public function indexAction(){
        $Biuldtables = $this->BiuldtablesModel->runAll();
        $this->view->Biuldtables = $Biuldtables;
        $this->view->render('biuldtables/index');
    }

}
