<?php
//Herencia
class Survey extends Database{

    public function all(){
        try{
            $result = parent::connect()->prepare("SELECT * FROM survey");
            $result->execute();
            return $result->fetchAll();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function register($data){
        try{
            $result = parent::connect()->prepare("INSERT INTO survey (question, answer) VALUES (?,?)");
            $result->bindParam(1, $data['question'], PDO::PARAM_STR);
            $result->bindParam(2, $data['answer'], PDO::PARAM_STR);
            return $result->execute();
        }catch (Exception $e){
           die("Error Survey->register() " . $e->getMessage());
        }
    }

    public function find($id){
        try{
            $result = parent::connect()->prepare("SELECT * FROM survey WHERE id = ?");
            $result->bindParam(1, $id, PDO::PARAM_INT);
            $result->execute();
            return $result->fetch();
        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function update_register($data){
        try{
            $result = parent::connect()->prepare("UPDATE survey SET question = ?, answer = ? WHERE id = ?");
            $result->bindParam(1, $data['question'], PDO::PARAM_STR);
            $result->bindParam(2, $data['answer'], PDO::PARAM_STR);
            $result->bindParam(3, $data['id'], PDO::PARAM_INT);
            return $result->execute();
        }catch (Exception $e){
            die("Error Survey->update_register() " . $e->getMessage());
        }
    }
}
