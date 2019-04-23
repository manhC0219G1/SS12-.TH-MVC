<?php
namespace Model;

class StudentDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public function getAll(){
        $sql = "SELECT * FROM `Students`";
        $data = $this->connection->query($sql);//array
        return $data->fetchAll();
    }
    public function getInfoStudent($id){
        $sql = "SELECT * FROM Students WHERE id = $id";
        $info = $this->connection->query($sql );
        $row = $info->fetch();
        $student = new \Model\Students($row['name'],$row['phone'],$row['email']);
        return $student;
    }
    public function create($student){
        $sql = "INSERT INTO Students(`name`, `phone`, `email`) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $student->name);
        $statement->bindParam(2, $student->phone);
        $statement->bindParam(3, $student->email);
        return $statement->execute();
    }

}