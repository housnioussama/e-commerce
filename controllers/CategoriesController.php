<?php

class CategoriesController{

public function getAllCategories(){

    $Categories = Category::getAll();
    return $Categories;
}

}