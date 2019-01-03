<?php
if(isset($_GET['id'])){
    include_once ('../includes/functions.php');
    $cat_id = $_GET['id'];
    $category = get_all_categories("cat_id = $cat_id");
    if(count($category)>0){
        $cat_title = $category[0]['cat_title'];
        ?>
        <form action="includes/edit_data.php" method="post" role="form">
            <input type="hidden" name="cat_id" value='<?php echo $cat_id; ?>'>
            <div class="form-group">
                <label for="cat_title">Category Title</label>
                <input type="text" class="form-control" name="cat_title" id="cat_title" value='<?php echo $cat_title; ?>'>
            </div>

            <button type="submit" class="btn btn-warning" name="edit_category">Edit Category</button>
        </form>
<?php
    }
}
?>