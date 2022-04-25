

        <?php
         
            $products= new ProductController();
            $product=$products->getProduct();
             
        ?>
<section id="prodetails" class="section-p1">
    <div class="single-pro-image">
        <img src="./public/uploads/<?php echo $product->product_image?>" width="100%" id="mainimg" alt="">
        <div class="small-img-group">
            <div class="small-img-col"    >
                <img src="./public/uploads/<?php echo $product->product_image1?>" width="100%" class="small-img">
            </div>
            <div class="small-img-col"    >
                <img src="./public/uploads/<?php echo $product->product_image2?>" width="100%" class="small-img">
            </div>
            <div class="small-img-col"    >
                <img src="./public/uploads/<?php echo $product->product_image3?>" width="100%" class="small-img">
            </div>
            <div class="small-img-col"    >
                <img src="./public/uploads/<?php echo $product->product_image4?>" width="100%" class="small-img">
            </div>
        </div>
    </div>
    <div class="single-pro-details">
        <h6>Home / Dresses</h6>
        <h4><?php echo $product->product_title;?></h4>
        <span> Solid Tie Back Flounce Hem Dress</span>
        <h2><?php echo $product->product_price;?> DH</h2>
       <form action="<?php echo BASE_URL?>checkout" method="post" >
            <input type="hidden"  name="product_title" value="<?php echo $product->product_title;?>">
            <input type="hidden" name="product_id" value="<?php echo $product->product_id;?>">
           
            <input type="number" name="product_qte" value="1"> 
               
            <button  type="submit" class="normal" name="submitForm" id="dakbutton">Add to Cart</button>
            
        </form>

      
        <h4>Product details</h4>
        <span ><?php echo $product->product_desc;?>
        </span>

    </div>
   
</section>
<script>
var mainimg=document.getElementById("mainimg");
var smallimg=document.getElementsByClassName("small-img")
smallimg[0].onclick=function(){
    mainimg.src=smallimg[0].src; }
    smallimg[1].onclick=function(){
    mainimg.src=smallimg[1].src; }
    smallimg[2].onclick=function(){
    mainimg.src=smallimg[2].src; }
    smallimg[3].onclick=function(){
    mainimg.src=smallimg[3].src; }




</script>

     