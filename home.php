
<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- <link rel="stylesheet" type = "text/css" href ="css/cart.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="home.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
       
        <title>Chat&nbsp;&nbsp; Web-Application</title>
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
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <!-- <li class="nav__item"><a href="#courses" class="nav__link">Courses</a></li> -->
                        <li class="nav__item"><a href="#contact-us" class="nav__link">Contact Us</a></li>
                        <li class="nav__item"><a href="#log" class="nav__link">Logout(<?php echo $_SESSION['login_user2'];?>)</a></li>
                        
                        <!-- <li class="nav__item"><a href="cart.html" class="nav__link">Members</a></li> -->
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

          <?php
if(isset($_SESSION['login_user1'])){

?>
<?php
}
else if (isset($_SESSION['login_user2'])) {
    ?>
              <ul class="nav__menu">
              (<?php
             
            }
              ?>)
              
            
          </ul>
          </div>

                

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br> Welcome  <span class="home__title-color"><?php echo $_SESSION['login_user2']; ?></span>&nbsp;to&nbsp;Chat Web-Application<br>Start Conversation By Clicking Start</h1>

                    
                </div>
                <br>
                <p align="center">
            <a href="conversation.php"><button type="button" class="btn btn-primary btn-lg">S&nbsp;T&nbsp;A&nbsp;R&nbsp;T</button></a>
        </p>
            </section>
            
            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="abr">
                        <img src="chat.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">&nbsp;&nbsp;Chat Web-Application</h2>
                        <p class="about__text">Send & receive messages instantly in real-time across any web, Android & iOS mobile applications. Group Chat.</p>   
                        <!-- <h2 class="about__subtitle">&nbsp;R&nbsp;E&nbsp;G&nbsp;I&nbsp;S&nbsp;T&nbsp;E&nbsp;R&nbsp;&nbsp;->&nbsp;&nbsp;L&nbsp;E&nbsp;A&nbsp;R&nbsp;N&nbsp;&nbsp;->&nbsp;&nbsp;I&nbsp;N&nbsp;V&nbsp;E&nbsp;N&nbsp;T</h2>  -->
                             
                    </div>                                   
                </div>
            </section>

           \

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact-us">
                <h2 class="section-title">Contact Us</h2>

                <div class="contact__container bd-grid">
                    <form action="userinfodata.php" method="post" class="contact__form" >
                        <input type="text" placeholder="Name" name="user" class="contact__input" required>
                        <input type="mail" placeholder="Email" name="email" class="contact__input" required>
                        <textarea  placeholder="Comment" cols="0" name="comment" rows="10" class="contact__input"></textarea>
                        <input type="submit" value="Submit" class="contact__button button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Chat&nbsp;&nbsp; Web-Application</p>
            <div class="footer__social">
                <a href="https://www.facebook.com/loving.sandip/" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/sandipkedia3/?hl=en" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <a href="https://twitter.com/TheSandY15?s=08" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2020 all right reserved</p>
            <h1 class="animate__animated animate__shakeX  animate__infinite	infinite animate__slower	2s"><p id="log"><a href="logout_u.php" ><i style="font-size:24px" class="fa">&#xf011; Logout from <?php echo $_SESSION['login_user2'];?></a></p></i></h1>  
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="main.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
            
        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
       
    </body>
</html>