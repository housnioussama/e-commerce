

<?php 
       
       if(isset($_SESSION["admin"]) && $_SESSION['admin'] == true){
          $data =new UsersController();
         $orders=$data->getAllUsers(); 
        
       }else {
            Redirect::to("home");}

         
      ?>
      <table class="table">
  

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Remove</th>
      <th scope="col">Image</th>
      <th scope="col">Product</th>
      <th scope="col">price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Subtotal</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($orders as $order) : ?>
            <tr>
                <td>  <?php echo $order["fullname"]?></td>
                <td><?php echo $order["username"]?>   </td>
                <td> <?php echo $order["email"]?></td>
                 <td><?php echo $order["password"]?></td>
                <td><?php  if($order["admin"]){echo "admin";}
                else {echo "not admin";}  ?></td>
               
            </tr>
     
    
     <?php endforeach;?>
  </tbody>
</table>

       
      

