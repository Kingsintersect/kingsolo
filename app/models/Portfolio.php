<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Portfolio extends Model
{
    public $id, $name, $web_url, $github_link, $type, $client, $description, $screenshot, $deleted = 0;

    public function __construct() {
        $table = 'portfolio';
        parent::__construct($table);
        $this->_softDelete = true;
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'name', 'msg'=>'Project Name is required.']));
        // $this->runValidation(new MaxValidator($this, ['field'=>'fname', 'rule'=>150, 'msg'=>'First Name Must Be less than 150 Characters.']));

        // $this->runValidation(new RequiredValidator($this, ['field'=>'lname', 'msg'=>'Last Name is required.']));
        // $this->runValidation(new MaxValidator($this, ['field'=>'lname', 'rule'=>150, 'msg'=>'Last Name Must Be less than 150 Characters.']));
    }

    public function findAll() {
        return $this->find();
    }

    public function findAllByUserId($user_id, $params=[]) {
        $conditions = [
            'conditions' => 'user_id = ?',
            'bind' => [$user_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
    }

    public function displayName() {
        return $this->name;
    }

    public function findProjectById($project_id, $params=[]) {
        $conditions = [
            'conditions' =>'id = ?',
            'bind' => [$project_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->findFirst($conditions);
    }

}
