

<?php 
       
       if(isset($_SESSION["admin"]) && $_SESSION['admin'] == true){
          $data =new OrdersController();
         $orders=$data->getAllOrders(); 
        
       }else {
            Redirect::to("home");}

         
      ?>
      <table class="table">
  

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">name</th>
      <th scope="col">product</th>
      <th scope="col">Quantity</th>
      <th scope="col">price</th>
      <th scope="col">total</th>
      <th scope="col">date</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($orders as $order) : ?>
            <tr>
                <td>  <?php echo $order["fullname"]?></td>
                <td><?php echo $order["product"]?>   </td>
                <td> <?php echo $order["qte"]?></td>
                 <td><?php echo $order["price"]?></td>
                <td><?php echo $order["total"]?></td>
                <td><?php echo $order["done_at"]?></td>
            </tr>
     
    
     <?php endforeach;?>
  </tbody>
</table>

       
      

