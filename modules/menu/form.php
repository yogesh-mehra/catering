<?php

$obj = DB('menu');
if(isset($_POST['item'])){
       $info=[
        'item'=>$_POST['item'],
        'description' =>$_POST['description'],
        'category' =>implode(',',$_POST['category']),
        'status'=> $_POST['status']
       ];        
  if($obj->save($info)){
        redirect("menu");
  }else{
        echo "Something Went Wrong!";
  }
}
?>
<form method="post">
    <div class="mb-3">
        <label for="item">Item Name</label>
        <input type="text" class="form-control" placeholder="Enter Item Name" required name="item" id="item">
</div>
<div class="mb-3">
        <label for="description">Description</label>
        <textarea class="form-control" rows="10" placeholder="Enter Item Description" name="description" id="description"
        id="description"></textarea>
</div>
<div class="mb-3">
        <label >Select Category <small>(Hold ctrl button for multiple selection)</small></label>
        <select name="category[]" calss="from-select" multiple>
   <option value="Starter">Starter</option>
   <option value="Main Course">Main Course</option>
   <option value="Fast Food">Fast Food</option>
   <option value="Dessert">dessert</option>
   <option value="Sweets">Sweets</option>

</select>
</div>
<div class="mb-3">
        <label >Status</label>
        <select name="status" calss="from-select" >
             <option value="yes">Yes</option>
             <option value="no">No</option>
</select>
</div> 
<div class="mb-3 text-center">
        <button class="btn btn-success">Save</button>
</div>
</form>

