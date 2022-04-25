<?php

class OrdersController{
    
public function getAllOrders(){

    $order = Order::getAll();
    return $order;
}

    public function addOrders($data){
        $result=Order::createOrder($data);
      
       
        if($result === "ok"){ 
      
            foreach($_SESSION as $name => $prduct){
                    if( substr($name,0,9) == "products_"){
                        unset($_SESSION[$name]);
                        unset($_SESSION["count"]);
                        unset($_SESSION["totau"]);
                        Redirect::to("cart");
                    }
            }
                Session::set("success","Command has contnuie succusfuly");
                Redirect::to("home");
        }  
    }




}