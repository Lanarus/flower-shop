






<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>update product</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style1.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="update-product">



<form action="" method="post" enctype="multipart/form-data">
   <img src="" class="image"  alt="">
   <input type="hidden" value="" name="update_p_id">
   <input type="hidden" value="" name="update_p_image">
   <input type="text" class="box" value="" required placeholder="update product name" name="name">
   <input type="number" min="0" class="box" value="" required placeholder="update product price" name="price">
   <textarea name="details" class="box" required placeholder="update product details" cols="30" rows="10"></textarea>
   <input type="file" accept="image/jpg, image/jpeg, image/png" class="box" name="image">
   <input type="submit" value="update product" name="update_product" class="btn">
   <a href="admin_products.php" class="option-btn">go back</a>
</form>



</section>
