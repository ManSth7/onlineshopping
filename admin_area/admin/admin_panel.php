<?php
include("../functions/functions.php");
session_start();
include_once '../includes/dbconnect.php';

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


    <link rel="stylesheet" type="text/css" href="../../styles/style.css" media="all" />


  
</head>



<body>
    
    
<!--Main Container starts here-->
    <div class="main_wrapper">


    <!--Header starts here-->
        <div class="header_wrapper">

            <img id="logo" src="../../images/logo.png" width="400px" height="100px"/>
            <img id="banner" src="../../images/ad.gif" width="600px" height="100px"/>

        </div>
    <!--Header ends here-->
  

    <!--Navigation bar starts-->
    <div class="menubar">
        <ul class="menu" id="menu">
            <li><a href="home.php">Home</a></li>
            <li><a href="all_products(login).php">All products</a></li>
                   
            <li><a href="../contact.php">Contact us</a></li>

            
        </ul>

        <div id="content">
            Hi' <?php echo $userRow['user_name']; ?>&nbsp;<a href="../login/logout.php?logout">Sign Out</a>
        </div>

        <div id= "content2">

            <h1 align=center>Admin Panel!!!!!</h1>

        </div>

    </div>


        

           

    <!--Navigation bar ends-->

<div id="content3" >

<table id="option" width="1000px" >


    <tr align="center" height="50px">

            <td>****OPTIONS****</td>


        </tr>

    <tr align="center">

            <td><a href="admin_panel.php?type=user">1..Users Setting</a></td>

        </tr>

        <tr align="center">
            <td><a href="../insert_product.php"><br>2..Inseret Product</a></td>
        
        </tr>
                        
        </ul>

</table>

        <div>

        <?php
            if(isset($_GET['type']) && !empty($_GET['type'])){
                ?>

                <table>

                    <tr align="center">
                        <td width="200px" ><b><u>Users</td>
                        <td><b><u>Options</td>
                        </tr>

                        <?php

                        $list_query= mysql_query("select user_id,user_name,user_level from users");

                        while($run_list = mysql_fetch_array($list_query)){
                            $u_id=$run_list['user_id'];
                            $u_username=$run_list['user_name'];
                            $u_level=$run_list['user_level'];

                            ?>

                            <tr align="center">
                                <br><br>
                                <td><?php echo $u_username ?></td>

                                <td>
                                    <?php
                                    if($u_level =='2'){

                                        echo "<a href='option.php?u_id=$u_id&user_level=$u_level'>Delete</a>";

                                    }

                                    else{

                                         echo "Admin";

                                    }


                                    ?>
                            </td></tr>

                            <?php
                               }
                        ?>


                    


                </table>




                    <?php
                     }
                     ?>

                 </div>

            



       

            
</div>

    
            
           </div>     

    

</body>
</html>