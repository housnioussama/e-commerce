

<?php 
       
       if(isset($_SESSION["admin"]) && $_SESSION['admin'] == true){
          $data =new CategoriesController();
         $categories=$data->getAllCategories(); 
        
       }else {
            Redirect::to("home");}

         
      ?>
    
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
     
    </tr>
  </thead>
  <tbody>
    
    <?php foreach($categories as $categorie) : ?>
            <tr>
                <td>  <?php echo $categorie["cat_id"]?></td>
                <td><?php echo $categorie["cat_title"]?>  
            </tr>
     
    
     <?php endforeach;?>
  </tbody>
</table>

       
      

