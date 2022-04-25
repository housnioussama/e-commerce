<?php


class Session{


     static public function set($type,$mess){

        setcookie($type,$mess,time() + 5,"/");
     }
}