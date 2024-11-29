<?php
class StudentInfoController{
    private $db;

    public function __construct(){
        $host='localhost';
        $dbname='cics';
        $user='root';
        $password='';
        try{
            $this->db = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
        }
        catch(PDOException $e){
            return false;
        }
    }

    public function getStudent($id){
        try{
            $stmt-> $this->db->prepare("SELECT * FROM students WHERE ID = :id");
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            if($stmt->rowCount()>0){
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
            }
            return false;
        }
        catch(Throwable $th){
            return false;
        }
    }

    public function getAllStudents(){
        try{
            $stmt-> $this->db->prepare("SELECT * FROM students");
            $stmt->bindParam(':ID',$id);
            $stmt->execute();
            if($stmt->rowCount()>0){
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
            }
            return false;
        }
        catch(Throwable $th){
            return false;
        }
    }

    public function updateStudent($id,$name,$apaterno,$amaterno,$boleta,$unidad,$edad,$domicilio,$status){
        try{
            $stmt-> $this->db->prepare("UPDATE students set Name=:name, A_Paterno=:apaterno,A_Materno=:amaterno,Boleta=:boleta,Unidad=:unidad,Edad=:edad,Domicilio=:domicilio, status=:status WHERE ID=:ID");
            $stmt->bindParam(':ID',$id);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':apaterno',$apaterno);
            $stmt->bindParam(':amaterno',$amaterno);
            $stmt->bindParam(':boleta',$boleta);
            $stmt->bindParam(':unidad',$unidad);
            $stmt->bindParam(':edad',$edad);
            $stmt->bindParam(':domicilio',$domicilio);
            $stmt->bindParam(':status',$status);
            $stmt->execute();
            if($stmt->rowCount()>0){
                $result = $stmt->fetch(PDO::FETCH_ASSOC);
            }
            return false;
        }
        catch(Throwable $th){
            return false;
        }
    }

}