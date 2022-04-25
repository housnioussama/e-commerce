<!DOCTYPE HTML>
<html>

<head>



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="public/style/login.css" >

</head>

<body>
    
<?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
      $categories =new CategoriesController();
      $categories =$categories->getAllCategories();
    if(isset($_POST["submit"])){
        $product= new ProductController();
        $product->newProduct();
      

    }
    }else{
        Redirect::to("home");
    }
    ?>

<div class="container " ><!-- container Starts -->

<form class="form-login" action="" enctype="multipart/form-data" method="post" ><!-- form-login Starts -->

<h2 class="form-login-heading" >Add product</h2>
<input type="text" class="form-control" name="product_title" placeholder="Title" required >
<select name="product_category_id" id="">
   <?php  foreach($categories as $categorie):?>
    <option value="<?php echo $categorie["cat_id"];?>"><?php echo $categorie["cat_title"];?></option>
    <?php endforeach;?>
</select>

<input type="number" class="form-control" name="product_price" placeholder="price" required >

<input type="number" class="form-control" name="product_quantity" placeholder="Quantity" required >

<textarea name="product_desc" id=""   cols="60" placeholder="Description" rows="10"></textarea>
<input type="file"  class="form-control" id="file" name="product_image"  >
<input type="file"  class="form-control" id="file" name="product_image1"  >
<input type="file"  class="form-control" id="file" name="product_image2"  >
<input type="file"  class="form-control" id="file" name="product_image3"  >
<input type="file"  class="form-control" id="file" name="product_image4"  >


<button class="btn btn-lg btn-primary btn-block"  name="submit" >

add 

</button>


</form><!-- form-login Ends -->


</div><!-- container Ends -->



</body>

</html>