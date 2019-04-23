<?php

namespace Controller;

use Model\DB_Connection;
use Model\StudentDB;
use Model\Students;

class StudentController
{
    public $studentDB;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=Test";
        $user = "root";
        $password = "Vuvanmanh@1";
        $connect = new DB_Connection($dsn, $user, $password);
        $this->studentDB = new StudentDB($connect->connect());

    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'View/create.php';
        } else {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $student = new Students($name, $phone, $email);
            $this->studentDB->create($student);
            echo  'Customer created';
            include 'View/create.php';
        }
    }



public
function delete()
{


}

public
function update()
{


}

public
function index()
{
    $listStudents = $this->studentDB->getAll();
    include "View/list.php";
}
}