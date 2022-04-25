

<?php 
       
       if(isset($_SESSION["admin"]) && $_SESSION['admin'] == true){
          $data =new ProductController();
         $products=$data->getAllProduct(); 
        
       }else {
            Redirect::to("home");}

         
      ?>
      <a class="btn btn-primary"  style="margin:20px 0 20px 40% ; width:10%;" type="button"  href="<?php echo BASE_URL?>addProduct">Add</a> 
      
  <form id="proshow" action="<?php echo BASE_URL;?>updateProduct" method="post">
    <input type="hidden" name="product_id" id="product_id">
  </form>
       
  <form id="delete-form" action="<?php echo BASE_URL;?>deleteProduct" method="post">
    <input type="hidden" name="delete_product_id" id="delete_product_id">
  </form>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Libelle</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">description</th>
      <th scope="col">image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($products as $product) : ?>
            <tr>
                <td>  <?php echo $product["product_title"]?></td>
                <td><?php echo $product["product_price"]?>   </td>
                <td> <?php echo $product["product_quantity"]?></td>
                 <td><?php echo $product["product_desc"]?></td>
                <td> <img src="./public/uploads/<?php echo $product["product_image"]?>"  width="40px"; height="40px" alt="image"></td>
                <td><button  onclick="deleteForm(<?php echo $product['product_id']?>)"  style="margin-right:5px" type="button"  class="btn btn-danger">Delete
              </button><button type="button" onclick="getProductShow(<?php echo $product['product_id'];?>)"class="btn btn-info">Update</button></td>
            </tr>
     
    
     <?php endforeach;?>
  </tbody>
</table>

       
      

