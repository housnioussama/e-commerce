<?php

class Product{


    static public function getAll(){
          
            $stmt = DB::connect()->prepare('SELECT * FROM produits ');
            $stmt->execute();
            return $stmt->fetchAll();
            $stmt->close();
            $stmt=null;

    }

    static public function getProductByPage(){
      try{

        $stmt = DB::connect()->prepare('SELECT * FROM produits LIMIT 0,20 ');
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
        $stmt=null;
      }
      catch(PDOException $e){
          echo "erreur ".$e->getMessage();
      }

    }
    static public function getProductByCat($data){
        $id=$data['id'];
       
       try{
          $stmt = DB::connect()->prepare("SELECT * FROM produits WHERE product_category_id= '$id'");
          $stmt->execute();
         return $stmt->fetchAll();
         $stmt->close();
         $stmt=null;
       }
       catch(PDOException $e){
           echo "erreur " .$e->getMessage();
       }
       
    }
    static public function getProductById($data){
      $id=$data['id'];
     
     try{
        $stmt = DB::connect()->prepare("SELECT * FROM produits WHERE product_id= '$id'");
        $stmt->execute();
        $product=$stmt->fetch(PDO::FETCH_OBJ);
        return $product;
       $stmt->close();
       $stmt=null;
     }
     catch(PDOException $e){
         echo "erreur " .$e->getMessage();
     }
     
  }
  static public function addProduct($data){
    try{

   
      $stmt=DB::connect()->prepare('INSERT INTO produits (product_title,product_desc,product_quantity,product_image,product_price ,product_category_id,product_image1,product_image2,product_image3,product_image4) 
      VALUES                                             (:product_title,:product_desc,:product_quantity,:product_image,:product_price ,:product_category_id,:product_image1,:product_image2,:product_image3,:product_image4)');
      $stmt->bindParam(':product_title',$data['product_title']);
      $stmt->bindParam(':product_desc',$data['product_desc']);
      $stmt->bindParam(':product_quantity',$data['product_quantity']);
      $stmt->bindParam(':product_image',$data['product_image']);
      $stmt->bindParam(':product_price',$data['product_price']);
      $stmt->bindParam(':product_category_id',$data['product_category_id']);
      $stmt->bindParam(':product_image1',$data['product_image1']);
      $stmt->bindParam(':product_image2',$data['product_image2']);
      $stmt->bindParam(':product_image3',$data['product_image3']);
      $stmt->bindParam(':product_image4',$data['product_image4']);
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
  }}
  
  static public function editProduct($data){
    try{

   
      $stmt=DB::connect()->prepare('UPDATE produits SET 
      product_title=:product_title,
      product_desc=:product_desc,
      product_quantity=:product_quantity,
      product_image=:product_image,
      product_price =:product_price,
      product_category_id=:product_category_id,
      product_image1=:product_image1,
      product_image2=:product_image2,
      product_image3=:product_image3,
      product_image4=:product_image4
      WHERE product_id=:product_id
         ');
         $stmt->bindParam(':product_id',$data['product_id']);
      $stmt->bindParam(':product_title',$data['product_title']);
      $stmt->bindParam(':product_desc',$data['product_desc']);
      $stmt->bindParam(':product_quantity',$data['product_quantity']);
      $stmt->bindParam(':product_image',$data['product_image']);
      $stmt->bindParam(':product_price',$data['product_price']);
      $stmt->bindParam(':product_category_id',$data['product_category_id']);
      $stmt->bindParam(':product_image1',$data['product_image1']);
      $stmt->bindParam(':product_image2',$data['product_image2']);
      $stmt->bindParam(':product_image3',$data['product_image3']);
      $stmt->bindParam(':product_image4',$data['product_image4']);
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
  static public function deleteProduct($data){
    
    $id=$data['id'];
     
    try{
       $stmt = DB::connect()->prepare("DELETE * FROM produits WHERE product_id= '$id'");
       $stmt->execute();
       $product=$stmt->fetch(PDO::FETCH_OBJ);
       if($stmt->execute()){
        return 'ok';
           }
    else{
        return 'error';
    }
      $stmt->close();
      $stmt=null;
    }
    catch(PDOException $e){
        echo "erreur " .$e->getMessage();
    }

  }
  

}