


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style1.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="placed-orders">

   <h1 class="title">placed orders</h1>

   <div class="box-container">

     
      <div class="box">
         <p> user id : <span></span> </p>
         <p> placed on : <span></span> </p>
         <p> name : <span></span> </p>
         <p> number : <span></span> </p>
         <p> email : <span></span> </p>
         <p> address : <span></span> </p>
         <p> total products : <span></span> </p>
         <p> total price : <span>/-</span> </p>
         <p> payment method : <span></span> </p>
         <form action="" method="post">
            <input type="hidden" name="order_id" value="">
            <select name="update_payment">
               <option disabled selected></option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
            </select>
            <input type="submit" name="update_order" value="update" class="option-btn">
            <a href="admin_orders.php?delete=" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
         </form>
      </div>
      
   </div>

</section>