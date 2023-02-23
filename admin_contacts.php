

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
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php @include 'admin_header.php'; ?>

<section class="messages">

   <h1 class="title">messages</h1>

   <div class="box-container">


   <div class="box">
         <p>user id : <span></span> </p>
         <p>name : <span></span> </p>
         <p>number : <span></span> </p>
         <p>email : <span></span> </p>
         <p>message : <span></span> </p>
         <a href="admin_contacts.php?delete=" class="delete-btn">delete</a>
      </div>

    </div>

</section>