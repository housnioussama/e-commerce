<?php


class User {


    
    static public function getAll(){
          
        $stmt = DB::connect()->prepare('SELECT * FROM users ');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;

}

    static public function login($data){


        $username=$data["username"];
        try{

            $query= "SELECT * FROM users WHERE username = '$username'";
            $stmt=DB::connect()->prepare($query);
            $stmt->execute();
            $user =$stmt->fetch(PDO::FETCH_OBJ);
            return $user;



        }catch(PDOException $e){
            echo " error: ".$e->getMessage();
        }
    }
    static public function createUser($data){
        try{

   
            $stmt=DB::connect()->prepare('INSERT INTO users (fullname,username,email,password) VALUES (:fullname,:username,:email,:password)');
            $stmt->bindParam(':fullname',$data['fullname']);
            $stmt->bindParam(':username',$data['username']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':password',$data['password']);
            if($stmt->execute()){
                return 'ok';
                   }
            else{
                return 'error';
            }
            $stmt->close;
            $stmt=null;
        } catch(PDOException $e){
            echo "ERROR".$e->getMessage();
        }

    }
}