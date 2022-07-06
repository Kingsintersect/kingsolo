<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator ;
use Core\Validators\MaxValidator ;

class Biuldtables extends Model
{
    private $DBName = 'kingsolomon';
    private $resetAll = false; // change this to true if you want drop the existing database and tables

    public $messages = [];

    public function __construct() {
        $table = 'contacts';
        parent::__construct($table);
        $this->_softDelete = true;
    }

    /*
     *  creatDB() sould not be run because it will delete the database 
     *  and the connection to the database will be lost when the next function is called
     *  so the system connects to a database before any operation can be done on the database
     *  so database is created in the phpmyadmin before running this operations
     */
    private function createDB(){
        try {        
            if($this->resetAll == true){
                $sql = "DROP DATABASE IF EXISTS `".$this->DBName."`";
                $this->_db->query($sql);
                $this->messages[] = $this->DBName." Database Droped Successfully";
            }
            
            $sql = "CREATE DATABASE IF NOT EXISTS `".$this->DBName."`";
            $this->_db->query($sql);
            $this->messages[] = $this->DBName." Database Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createCompanyInfoTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(50) NOT NULL,
                logo VARCHAR(250) NOT NULL,
                sliders VARCHAR(250) NOT NULL,
                branches VARCHAR(250) NOT NULL,
                address VARCHAR(100) NOT NULL,
                website VARCHAR(100) NOT NULL,
                date TIMESTAMP
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createProfileTable($table_name){//ANY SOFTWARE USING THIS FRAMEWORK MUST HAVE THIS TABLE
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(70) NOT NULL,
                lname VARCHAR(70) NOT NULL,
                username VARCHAR(70) NOT NULL,
                password VARCHAR(70) NOT NULL,
                email VARCHAR(100) NOT NULL,
                social_network TEXT NULL,
                phone VARCHAR(50) NOT NULL,
                state VARCHAR(50) NOT NULL,
                address VARCHAR(100) NOT NULL,
                pix VARCHAR(100) NOT NULL,
                skills VARCHAR(255) NULL,
                tools TEXT NULL,
                description TEXT NOT NULL,
                acl VARCHAR(255) NULL,
                deleted tinyint(1) DEFAULT 0
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createUserSessionsTable($table_name){//ANY SOFTWARE USING THIS FRAMEWORK MUST HAVE THIS TABLE
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                user_id int(11) NOT NULL,
                session varchar(255) NOT NULL,
                user_agent varchar(255) NOT NULL
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createReachmeTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                fname VARCHAR(70) NOT NULL,
                lname VARCHAR(70) NOT NULL,
                email VARCHAR(100) NOT NULL,
                subject VARCHAR(250) NOT NULL,
                body TEXT NOT NULL
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createPortfolioTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(70) NOT NULL,
                web_url VARCHAR(100) NOT NULL,
                github_link VARCHAR(250) NOT NULL,
                type VARCHAR(5) NOT NULL,
                client VARCHAR(100) NOT NULL,
                description TEXT NOT NULL,
                screenshot VARCHAR(250) NOT NULL,
                date TIMESTAMP,
                deleted tinyint(1) DEFAULT 0
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createServicesTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(70) NOT NULL,
                description TEXT NOT NULL,
                date TIMESTAMP,
                deleted tinyint(1) DEFAULT 0
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    private function createNewsTable($table_name){
        try {        
            if($this->resetAll == true){
                $sql = "DROP TABLE IF EXISTS `".$table_name."`";
                $this->_db->query($sql);
                $this->messages[] = $table_name." Table Droped Successfully";
            }
            
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                title VARCHAR(70) NOT NULL,
                body TEXT NOT NULL,
                photo VARCHAR(250) NOT NULL,
                date TIMESTAMP,
                deleted tinyint(1) DEFAULT 0
            )";
            $this->_db->query($sql);
            $this->messages[] = $table_name." Table Created Successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function runAll(){ // run all queries
        $this->resetAll = false;
        $this->createCompanyInfoTable("company_info");
        $this->createProfileTable("profile");
        $this->createUserSessionsTable("user_sessions");
        $this->createReachmeTable("reachme");
        $this->createPortfolioTable("portfolio");
        $this->createServicesTable("services");
        $this->createNewsTable("news");
        return $this->messages;
    }

}
