
<section id="header">
    <img onclick="window.location.href='#';" src="./img/logo.png" class="logo" alt="">
    <div>
        <ul id="navbar">
          
   
          <input type="text" name="search"  placeholder="Search...."><i id="search"  class="fa-solid fa-magnifying-glass"></i> 
          
           
            <li><a href="<?php echo BASE_URL;?>home" class="active">Home</a></li>
            <li> <a href="<?php echo BASE_URL;?>shop">Shop</a> 
            <li><a href="<?php echo BASE_URL;?>about">About</a></li>
            <?php  if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
               <li><a href="<?php echo BASE_URL;?>logout"><i class="fa-solid fa-right-from-bracket"></i></a></li>
               <?php  if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true):?>

               
                 <li><a href="<?php echo BASE_URL;?>dashboard">admin</a></li>
                 <?php endif;?>
                  
               
            <?php else: ?><li><a href="<?php echo BASE_URL;?>login">login</a></li>
            <li ><a  href="<?php echo BASE_URL;?>register">sign up</a></li>

            <?php endif;?>
                
           
           

            <li><a href="<?php echo BASE_URL;?>cart"><i class="fa-solid fa-bag-shopping"></i>(<?php echo isset($_SESSION["count"]) ? $_SESSION["count"]:0 ?>)</a></li>
        </ul>
    </div>
</section>

