<?php


  
if(isset($_POST["product_id"])){
    $id=$_POST["product_id"];
    $data=new ProductController();
    $product=$data->getProduct();
    if($_SESSION["products_".$id]["title"] === $_POST["product_title"]){
        Session::set("info","alredy had this product in the cart");
        Redirect::to("cart");
    }else{
        if($product->product_quantity < $_POST["product_qte"]){
            Session::set("info","The quantity in stock is :".$product->product_quantity);
            Redirect::to("cart");
        }
        else{
            $_SESSION["products_".$product->product_id] = array(
                "id" => $product->product_id,
                "title" => $product->product_title,
                "price" => $product->product_price,
                "qte" => $_POST["product_qte"],
                "img" => $product->product_image,
                "total" => $product->product_price*$_POST["product_qte"],
            );
            
            $_SESSION["totau"]+=$_SESSION["products_".$product->product_id]["total"];
            $_SESSION["count"]+=1;
            Redirect::to("cart");
        }
    }
}