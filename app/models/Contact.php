<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;
use Core\Validators\MaxValidator;

class Contact extends Model
{
    public $id, $fname, $lname, $email, $subject, $body;

    public function __construct() {
        $table = 'reachme';
        parent::__construct($table);
    }

    public function validator(){
        $this->runValidation(new RequiredValidator($this, ['field'=>'fname', 'msg'=>'First Name is required.']));
        $this->runValidation(new MaxValidator($this, ['field'=>'fname', 'rule'=>150, 'msg'=>'First Name Must Be less than 150 Characters.']));

        $this->runValidation(new RequiredValidator($this, ['field'=>'lname', 'msg'=>'Last Name is required.']));
        $this->runValidation(new MaxValidator($this, ['field'=>'lname', 'rule'=>150, 'msg'=>'Last Name Must Be less than 150 Characters.']));
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
        return $this->fname . " " . $this->lname;
    }

    public function findContactById($contact_id, $params=[]) {
        $conditions = [
            'conditions' =>'id = ?',
            'bind' => [$contact_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->findFirst($conditions);
    }
}
