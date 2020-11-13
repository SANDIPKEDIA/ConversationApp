<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: home.php"); 
}
?>
<!DOCTYPE html>
<html lang="en"></html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
       
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0">
        <title> Chat Web-Application</title>
        <script defer src="http://localhost:8000/socket.io/socket.io.js"></script>
        <script defer src="client.js"></script>
        <link rel="stylesheet" href="chat.css">
</head>
    
<body>
    <!--===== HEADER =====-->
    <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo"><h1 class="animate__animated animate__heartBeat animate__infinite	infinite">Chat&nbsp;&nbsp; Web-Application</h1></a>
                </div>
         
              
            
          

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <!-- <li class="nav__item"><a href="home.php#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#courses" class="nav__link">Courses</a></li> -->
                        <!-- <li class="nav__item"><a href="#contact-us" class="nav__link">Contact Us</a></li> -->
                        <li class="nav__item"><a href="logout_u.php" class="nav__link"><style="font-size:20px" class="fa">&#xf011;&nbsp; Logout(<?php echo $_SESSION['login_user2'];?>)</u></a></b>
                        
                        <!-- <li class="nav__item"><a href="cart.html" class="nav__link">Members</a></li> -->
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
 
    
        <!-- <img class="logo" src="chat.jpg" alt=""> -->
      

    <div class="container">
        <!-- <div class="message right">Sandy:How are you</div>
        <div class="message left">Arko:Good</div>            -->
    </div>
    <style>
            input[type="text"]::placeholder { 
                text-align: center; 
                text
            } 
        </style>
    <div class="send">
        <form action="#" id="send-container">
            <input  type="text" placeholder="Type a message" name="messageInp" id="messageInp">
             <button class="btn"  type="submit">Send</button>
           
            
        </form>
    </div>
    <script src="main.js"></script>
</body>
</html>