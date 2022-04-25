<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9a6ad59c4f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/style/style.css">
</head>
<body>

<?php 
       
         $categories =new CategoriesController();
            $categories =$categories->getAllCategories();
    
        if(isset($_POST["cat_id"])){
            $productsByCat= new ProductController();
            $products=$productsByCat->getProductsByCategory($_POST["cat_id"]);
        }

        else{
            $data =new ProductController();
          $products =$data->getProductByPages();
        }
        

?>
<section style="background-image:url('img/model2.jpg');" id="page-header">
 
 <h3 style="color:white ;background-color:black">READY TO WEAR </h3><br>
 <h3 style="color:black ;background-color:white"> STYLES AT EVERYDAY </h3><br>
 <h1 style="color:white ;background-color:black">LOW PRICES</h1>


</section>
<form action="">
   <label for="">Min:</label> <input type="number" min="50" max="1000">- <label for="">Max</label><input type="number" min="50" max="1000">
  <select name="" id="">
      <option value="">Les Plus demandés</option>
      <option value="">Prix croissant</option>
      <option value="">Prix decroissant</option>
      <option value="">Nouvel arrivge</option>
      
  </select>
<button type="submit">Filtrer</button>
</form>
<section id="product1" class="section-p1">

  

 <div class="list-categ">
     <h3 style="color: black;">Categories</h3>
     <ul>
        
         <?php
         foreach($categories as $category) :
         ?>
            <li> <form  id="catpro" method="post"  action="<?php echo BASE_URL; ?>shop"> 
                    <input type="hidden" name="cat_id" id="cat_id"> </form>
                <a onclick="getProductByCat(<?php echo $category['cat_id'];?>)"> <?php echo $category['cat_title']; ?> </a>
            </li>
        <?php  endforeach; ?>
     </ul>
 </div>
                <?php  
                    if(count($products) > 0) :
                ?>

                <?php   foreach($products as $product) :
                ?>

<div Class="pro-container">
            <div class="pro" >
                
                    <form style="padding:0;" id="proshow" method="post"  action="<?php echo BASE_URL; ?>show"> 
                            <input type="hidden" name="product_id" id="product_id"> </form>
                <img onclick="getProductShow(<?php echo $product['product_id'];?>)" src="./public/uploads/<?php echo $product["product_image"]?>" alt="image">
                <div class="des">
                    <span><?php echo $product['product_title'] ?></span>
                        
                    <h4> <?php echo $product['product_price']  ?> DH</h4>
                </div>
               <a id="xd" href="<?php echo BASE_URL;?>cart"><i class="fa-solid fa-basket-shopping cart"></i></i></a>
        </div> 

     </div>
       <?php  endforeach; ?>  
                 <?php else : ?>    
                    <div class="alert alert-info" role="alert">
                        No products found
                    </div>   
                <?php endif; ?>    
 
 
 
 </section>
<section id="pagination" class="section-p1">
  

</section>
</body>
</html>
