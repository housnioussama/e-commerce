
<section id="cart" class="section-p1">
    <table width="100%">
        <thead><tr>
            <td>Remove</td>
            <td>Image</td>
            <td>Product</td>
            <td>Price</td>
            <td>Quantity</td>
            <td>Subtotal </td></tr>
        </thead>
        <tbody>
            <?php foreach($_SESSION as $name => $product): ?>
                <?php if(substr($name,0,9) == "products_") :?>
            <tr>
                <td>
                            <form style="padding:0;" action="<?php echo BASE_URL?>cancelCart" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product["id"];?>">
                            <input type="hidden" name="product_price" value="<?php echo $product["price"];?>">
                            <button type="submit"> <i class="fas fa-times-circle"></i></button>
                            </form>
                </td>
                <td><img src=" ./public/uploads/<?php echo $product["img"]?>">   </td>
                <td> <?php echo $product["title"]?></td>
                 <td><?php echo $product["price"]?></td>
                <td><input type="number" value="<?php echo $product["qte"]?>"></td>
                <td><?php echo $product["total"]?></td>
            </tr>
             <?php endif;?>
            <?php endforeach;?>
            
           
          
           
        </tbody>

    </table>
    
    <?php  if(isset($_SESSION["count"])):?>
                         <form style="padding:0;" action="<?php echo BASE_URL?>emptyCart" method="post">
                           
                            <button type="submit"> EmptyAllCart<i class="fa-solid fa-trash"></i></button>
                           
                            </form>
                         
            
    
</section>
<section id="cart-add" class="section-p1">
    <div id="subtotal" >
        <h3 style="color:black">Cart Totals:<?php echo isset($_SESSION["count"]) ? $_SESSION["count"]:0 ?></h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td><?php echo isset($_SESSION["totau"]) ? $_SESSION["totau"]:0 ?>DH</td>

            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong><?php echo isset($_SESSION["totau"]) ? $_SESSION["totau"]:0 ?>DH</strong></td>
            </tr>
        </table>
        <form style="padding:0;" method="post" action="<?php echo BASE_URL?>addOrder">
        <?php if(isset($_SESSION["count"]) &&  $_SESSION["count"] > 0 && isset($_SESSION["logged"] )) : ?>
           <button type="submit" Class="normal">Confirm</button></form>
           <?php else: ?>
            <a href="<?php echo BASE_URL;?>login">login?</a>
            <?php endif;?>
    </div>
    <?php  endif;?></section>