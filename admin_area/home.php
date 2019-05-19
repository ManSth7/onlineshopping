<?php
include("functions/functions.php");
session_start();
include_once 'includes/dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: home.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_name']; ?></title>


    <link rel="stylesheet" type="text/css" href="../styles/style.css" media="all" />


    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/full-slider.css" rel="stylesheet">
</head>



<body>
    
    
<!--Main Container starts here-->
    <div class="main_wrapper">


    <!--Header starts here-->
        <div class="header_wrapper">

            <img id="logo" src="../images/logo.png" width="400px" height="100px"/>
            <img id="banner" src="../images/ad.gif" width="600px" height="100px"/>

        </div>
    <!--Header ends here-->
  

    <!--Navigation bar starts-->
    <div class="menubar">
        <ul class="menu" id="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="all_products(login).php">All products</a></li>
            <li><a href="customer/my_account.php">My account</a></li>
            <li><a href="cart.php">Shopping Cart</a></li>           
            

            
        </ul>

        <div id="content">
            Hi' <?php echo $userRow['user_name']; ?>&nbsp;<a href="login/logout.php?logout">Sign Out</a>
        </div>

        

                
    </div>

    <!--Navigation bar ends-->

<div style="background-image: url(../images/background.jpg); height: 850px; width: 1000;"  >

    
            
                

    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill">
                    <img src="../images/slide1.jpg" width="1000px" height="300px">
                </div>
                
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" >
                <img src="../images/slide5.jpg" width="1000px" height="300px">
            </div>
                
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" >
                <img src="../images/slide3.jpg" width="1000px" height="300px">
            </div>
               
            </div>

            <div class="item">
                <!-- Set the fourth background image using inline CSS below. -->
                <div class="fill" >
                <img src="../images/slide4.jpg" width="1000px" height="300px">
            </div>
               
            </div>

            <div class="item">
                <!-- Set the fifth background image using inline CSS below. -->
                <div class="fill" >
                <img src="../images/slide2.jpg" width="1000px" height="300px">
            </div>
               
            </div>


<div class="item">
                <!-- Set the sixth background image using inline CSS below. -->
                <div class="fill" >
                <img src="../images/slide6.jpg" width="1000px" height="300px">
            </div>
               
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>

      <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2000 //changes the speed
    })
    </script>
                <div>
                    <img src="../images/desc.png" width="1000px" >
            
        </div>

       <div>
                <marquee behavior="alternate" scrollamount="20" direction="left" bgcolor="black" ><hh>!**********!New Products!**********!</hh> </marquee>

            </div>
          
            
        
        <table align="center" width="1000px" border="5px" >

            <tr >
                <td width="50px" align="center"  bgcolor="brown"> <img src="../images/Delonghi(kettle).jpg" width="100px" height="120px"/></td>
                <td width="400px" height="50" bgcolor="brown"><h>Unique high gloss finish with chromed details
1.7 litre capacity and 360 degree swivel base
Detachable base for cord-free convenience
Water level indicator and flat stainless steel concealed element
3-level safety protection-auto shut-off when water begins to boil, thermal cut-off and auto shut-off when body is lifted from base
Removable, washable scale filter and cord storage
Warranty: 1 years on product
Power: 2000 Watts</h></td>

        

        <td width="50px" align="center"  bgcolor="brown" > <img src="../images/wave(ifb).jpg" width="100px" height="120px"/></td>
                <td width="400px" height="50" bgcolor="brown"><h>Stainless steel cavity and LED display with clock
10 power levels and 10 temperature levels
Grill, microwave and convection
Speed defrost and multi stage cooking
24 auto cook menus
Express cooking quick start, auto reheat, keep warm and child safety lock
Warranty: 1 year on machine, 3 years on Magnetron and Cavity</h></td>


            </tr>
            



            


            <tr>
                <td width="50px" align="center" bgcolor="brown"> </td>
                <td width="400px" height="40" bgcolor="brown"></td>
                    <td width="50px" align="center"  bgcolor="brown"></td>
                <td width="400px" height="40" bgcolor="brown"></td>


            </tr>

            <tr >
                <td width="50px" align="center"  bgcolor="brown"> <img src="../images/air frier(kenstar).jpg" width="100px" height="120px"/></td>
                <td width="400px" height="50" bgcolor="brown"><h>Handle for easy carrying
Thermostat and timer dials
3 litre Frying Basket
Warranty: 2 years on product
Power: 1500 watts; Operating Voltage: 220-240 volts
Includes: Oxy Fryer and Recipe book</h></td>

        

        <td width="50px" align="center"  bgcolor="brown" > <img src="../images/griller.jpg" width="100px" height="120px"/></td>
                <td width="400px" height="50" bgcolor="brown"><h>Quick to assemble
Coal based cooking
Detachable legs
Portable case
Easy to clean
Warranty: 1 year on product</h></td>


            </tr>



              <tr>
                <td width="50px" align="center" bgcolor="brown"> </td>
                <td width="400px" height="40" bgcolor="brown"></td>
                    <td width="50px" align="center"  bgcolor="brown"></td>
                <td width="400px" height="40" bgcolor="brown"></td>


            </tr>

            <tr >
                <td width="50px" align="center"  bgcolor="brown"> <img src="../images/chopper.jpg" width="100px" height="120px"/></td>
                <td width="400px" height="50" bgcolor="brown"><h>Small compact size capacity 400 ml
Food grade transparent PC bowl for clear visibility
Plus start
Rust resistant stainless steel blades
Non-slip ring for stability
Warranty: 1 year on product
Power: 250 watts; Operating voltage: 210-250 volts
Includes: Mini chopper, Instruction manual and Warranty card</h></td>

        

        <td width="50px" align="center"  bgcolor="brown" > <img src="../images/rice(panasonic2).jpg" width="100px" height="120px"/></td>
                <td width="400px" height="50" bgcolor="brown"><h>Convenient bridge handle
Auto cooking/scoop holder
4 hours keep warm function
Clear steaming basket
Lid holder
Anchor coated non-stick cooking pan
Warranty: 2 years on product and 5 years on heater</h></td>


            </tr>

              <tr>
                <td width="50px" align="center" bgcolor="brown"> </td>
                <td width="400px" height="50" bgcolor="brown"></td>
                    <td width="50px" align="center"  bgcolor="brown"></td>
                <td width="400px" height="50" bgcolor="brown"></td>


            </tr>

            


    

        </table>

        <div id="footer">
            <h2 style="text-align:center; padding-top:10px">&copy; 2016 by www.eshop.com</h2>
        </div>








    </div>

    <!--Main Container ends here-->

</body>
</html>