<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/style/style.css">
    <script src="https://kit.fontawesome.com/af529d8a47.js" crossorigin="anonymous"></script>
    <script src="js/index.js" ></script>

</head>
<body>
    
<section style="background-image: url('img/model.jpg')" id="hero">
    <h1 style="color:rgb(199, 223, 199)"> Lma7al Dyalk </h1>
    <h1 style="color:rgb(199, 223, 199)" > A Lala !</h1><br>
    <h3 >Profitez de nos offres </h3>
    <h3>  exceptionnelles</h3>
    <h3>sur tout les produits!</h3>

    <button id="lolol" onclick="window.location.href='<?php BASE_URL?>shop';"> View all products</button>
  

</section>

<?php 
        $data =new ProductController();
        
        
        $products =$data->getProductByPages();
       

?>


<section  id="product1" class="section-p1">
<?php  
                    if(count($products) > 0) :
                        
                ?>
                <?php   foreach($products as $product) :
                ?>

    <div Class="pro-container">
            <div class="pro" >
                
                
            <form style="padding:0;" id="proshow" method="post"  action="<?php echo BASE_URL; ?>show"> 
                            <input type="hidden" name="product_id" id="product_id"> </form>
                <img onclick="getProductShow(<?php echo $product['product_id'];?>)" src="./public/uploads/<?php echo $product["product_image"]?>" alt="image"> <div class="des">
                    <span><?php echo $product['product_title'] ?></span>
                        
                    <h4> <?php echo $product['product_price']  ?> DH</h4>
                </div>
               <a id="xd" href="<?php echo BASE_URL;?>cart"><i class="fa-solid fa-basket-shopping cart"></i></i></a>
        </div>

     </div>        <?php  endforeach; ?>  
                <?php endif; ?>
     
</section>
<section id="pagination" class="section-p1">
       
          

</section>
<section id="sm-banner"  class="section-p1">
    <div style="background-image:url('img/banner/b2.jpg');" class="banner-box">
        <h3 id="hamid">Wahd Lik W Wahd Li 3ziz 3lik !!!</h3><br>
        <h2 id="hamids">buy 1 get 1 for free</h2><br>
        <span id="hamidss">The best deals only at Swi9a</span><br>
        <button id="lolol"onclick="window.location.href='learnmore.html';">Learn More</button>
    </div>

</section>
    <section id="banner3" >
        <div  style="background-image:url('img/banner/b7.jpg');" class="banner-box">
          <h2>RKHA ALLAH !</h2>
        <h3>Winter Collection -50% OFF</h3>
        </div>
        <div style="background-image:url('img/banner/b4.jpg');" class="banner-box banner-box2">
            <h2>Women's Tops</h2>
          <h3>Check our new Collection</h3>
          </div>
          
    
    </section>

        
</body>
</html>
