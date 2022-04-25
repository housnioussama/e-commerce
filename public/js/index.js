
function getProductByCat($id){
  const input=document.querySelector("#cat_id");
  const form =document.querySelector("#catpro");
  input.value=$id;
  form.submit();

}
function getProductShow($show){
  const input=document.querySelector("#product_id");
  const form =document.querySelector("#proshow");
  input.value=$show;
  form.submit();
}

function deleteForm($id){
  const input=document.querySelector("#delete_product_id");
  const form =document.querySelector("#delete_form");
  input.value=$id;
  form.submit();
}
