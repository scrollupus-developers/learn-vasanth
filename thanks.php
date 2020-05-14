<?php
   $conn=new mysqli('localhost','root','','scrollupus');

   if($conn->connect_errno){
    $conn->connect_errno;
    die();
 }
 
?>

<?php
    if(isset($_POST['submit'])){
     
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $mail = $_POST['email'];
    $msg = $_POST['message'];

    $sql = "INSERT INTO thanks(NAME,PHONE,MAIL,MESSAGE) VALUES('$name',$phone,'$mail','$msg')";
    $conn->query($sql);
   } 
?>

<!doctype html>
<html lang="en">

<head>
  <title>Scrollupus-Pushing the digital limits</title>
  <link rel="icon" href="images/symbol black.png" type="image/ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">


  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">

<style type="text/css">
  body {
  background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
  background-size: 400% 400%;
  animation: gradient 15s ease infinite;
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
  }
  50% {
    background-position: 100% 50%;
  }
  100% {
    background-position: 0% 50%;
  }
}

.swing {
    animation: swing ease-in-out 1s infinite alternate;
    transform-origin: center -20px;
    float:left;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
}
.swing img {
    border: 5px solid #f8f8f8;
    display: block;
}
.swing:after{
    content: '';
    position: absolute;  
    width: 20px; height: 20px;  
    border: 1px solid #999;
    top: -10px; left: 52%;
    z-index: 0;
    border-bottom: none;
    border-right: none;
    transform: rotate(45deg);
}
/* nail */
.swing:before{
    content: '';
    position: absolute;
    width: 5px; height: 5px;
    top: -14px;left: 54%;
    z-index: 5;
    border-radius: 50% 50%;
    background: #000;
}
 
@keyframes swing {
    0% { transform: rotate(3deg); }
    100% { transform: rotate(-3deg); }
}
</style>
</head>

<body>
  <div class="container">
  <figure class="swing">
  <img src="images/logo 1 white.png" width="325" height="80">
</figure>
  </div>

<div class="container"><h1 class="text-light " style="text-align: center;margin-top: 20%">THANK YOU!!!</h1>
  <center>
    <p style="color: white;">Support us for your future works.
            <i class="fa fa-heart text-danger" aria-hidden="true"></i></p>
<p><a href="index.html" class="btn btn-outline-white px-4 py-3" style="margin-top: 2%;">Go home</a></p>
</center>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
</body>  
</html>