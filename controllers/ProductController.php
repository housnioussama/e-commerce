<?php

class ProductController{

public function getAllProduct(){

    $products = Product::getAll();
    return $products;
}
public function getProductsByCategory($id){

    if(isset($id)){
        $data = array('id' => $id);
        $products = Product::getProductByCat($data);
        return $products;
    }
}
public function getProductByPages(){
    $products =Product::getProductByPage();
    return $products;
}

public function getProduct(){

    if(isset($_POST["product_id"])){
        $data = array('id' => $_POST["product_id"]);
        $product = Product::getProductById($data);
        return $product;
    }
}

public function emptyCart($id,$price){
    unset($_SESSION["products_".$id]);
    $_SESSION["count"]-=1;
    $_SESSION["totau"]-=$price;
    Redirect::to("cart");
}

public function newProduct(){
    if(isset($_POST["submit"])){
        $data = array (
            "product_title" => $_POST["product_title"],
            "product_desc" => $_POST["product_desc"],
            "product_price" => $_POST["product_price"],
            "product_quantity" => $_POST["product_quantity"],
            "product_image" => $this->uploadPhoto(null,''),
            "product_image1" => $this->uploadPhoto(null,1),
            "product_image2" => $this->uploadPhoto(null,2),
            "product_image3" => $this->uploadPhoto(null,3),
            "product_image4" => $this->uploadPhoto(null,4),
            "product_category_id" => $_POST["product_category_id"]
        );
        
        $result=Product::addProduct($data);
        if($result === "ok"){
            Session::set("success","Product has add");
            Redirect::to("Products");
        }else{
            echo $result;
        }
    }
}
public function uploadPhoto($oldImage,$id){
    $direct ="public/uploads";
    $time = time();
    $name =str_replace(' ','-',strtolower($_FILES["product_image$id"]["name"]));
    $type=$_FILES["product_image$id"]["type"];
    $ext = substr($name,strpos($name,'.'));
    
    $ext = str_replace('.','',$ext);
    $name = preg_replace("/\.[^.\s]{3,4}$/","",$name);
    $imageName =$name.'-'.$time.'.'.$ext;
    if(move_uploaded_file($_FILES["product_image$id"]["tmp_name"],$direct."/".$imageName)){
        return $imageName;
        
    }
    return $oldImage;
}
public function removeProduct(){
    if(isset($_POST["delete_product_id"])){
        $data =array(
            "id" => $_POST["delete_product_id"]
        );
        $result = Product::deleteProduct($data);
        if($result === "ok"){
            Session::set("success","Product delete");
            Redirect::to("Products");
        }else{
            echo $result;
        }
    }

}
public function  updateProduct(){
    
    if(isset($_POST["submit"])){
        $oldImage=$_POST["product_current_image"];
        $data = array (
            "product_id" => $_POST["product_id"],
            "product_title" => $_POST["product_title"],
            "product_desc" => $_POST["product_desc"],
            "product_price" => $_POST["product_price"],
            "product_quantity" => $_POST["product_quantity"],
            "product_image" => $this->uploadPhoto(null,''),
            "product_image1" => $this->uploadPhoto(null,1),
            "product_image2" => $this->uploadPhoto(null,2),
            "product_image3" => $this->uploadPhoto(null,3),
            "product_image4" => $this->uploadPhoto(null,4),
            "product_category_id" => $_POST["product_category_id"]
        );
        
        $result=Product::editProduct($data);
        if($result === "ok"){
            Session::set("success","Product has update");
            Redirect::to("Products");
        }else{
            echo $result;
        }
    }
}
}