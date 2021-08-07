<?php

    require 'dbconnect.php';

    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        if($_FILES['image']['name']){
        $image_file = time(). $_FILES['image']['name'];

        move_uploaded_file($temp, "uploads/".$image_file);

        $temp = $_FILES['image']['tmp_name'];

        $sql = "INSERT INTO posts(title,description,image) VALUE (:title,:description, :image)";
        }else{
            $sql = "INSERT INTO posts(title,description) VALUE (:title,:description)";
        }
        
       
        $message = '';
        $query = $pdo->prepare($sql);

        if (empty($title)) {
            $message = "Title is required!";
        } else {
            $query->bindParam('title',$title);
        }
        if (empty($description)) {
            $message = "Description is required!";
        } else {
            $query->bindParam('description',$description);
        }
        if (empty($image_file)) {
            $message = "Image is required!";
        } else {
            $query->bindParam('image',$image_file);
        }

        if($query->execute()){
            $message = "Successfully added your post!";
            header("Location: index.php?page=posts");
        } else {
            $message = "A problem occured creating your post!";   
        }    
    }

?>
<div class="mt-2">
    <div class="container">
    <?php if (!empty($message)) : ?>
                <div class="alert alert-primary">
                    <?php echo $message ?>
        </div>
    <?php endif; ?>
        <div class="card">
            <div class="card-header">
                Add post
            </div>
            <form method="post" class="p-1" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" required maxlength="30">
                    
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" id="description" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" id="image" class="form-control" accept=".jpg, .jpeg, .png">
                </div>
                <input type="submit" name="submit" value="Add Post" class="btn btn-primary mt-1">
            </form>
        </div>
    </div>
</div>