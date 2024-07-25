<?php
session_start();
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
include_once('connect.php');
if(isset($_POST['login']))
	{
		$username = $_POST['username'];
		$otp = $_POST['otp'];
    $password = $_POST['password'];

		//$user_type = 'customer';
		$query = mysqli_query($con, "SELECT * FROM tbl_admin WHERE username = '$username' AND otp='$otp' AND password ='$password'");
		if(mysqli_num_rows($query)>0)
		{
			$u = mysqli_fetch_array($query);
			$_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
			$_SESSION['email_address'] = $u['email_address'];
			
			
			//$_SESSION['email'] = 'shaikh@gmail.com';
			//$_SESSION['city'] = 'Parbhani';
			echo "<script>alert('Login Successfull');window.location='index.php';</script>";
		}	
		else
		{
			echo "<script>alert('Login Failed');window.location='login.php';</script>";
		}	
	}
$email_address = $_SESSION['email_address'];
 $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Rentswale</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

       <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
		<!-- <link type="text/css"  hreef="https://use.fontawesome.com/releases/v5.15.4/js/v4-shims.js";/> -->

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		
		

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/style_new.css">


    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">

			
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>+918530066744</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i>info@rentswale.com
						</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> 108-Yash101 sus Baner,Pune .</a></li>
					</ul>
					<ul class="header-links pull-right">
						<!-- <li><a href="post1.php"><i class="fa-brands fa-product-hunt"></i> PostProduct</a></li> -->
						<!-- <li><a href="header.php"><i class="fa fa-user-o"><input style="color:white; background-color:#D10024; border-redius:3px; " type="button" value="login" onclick="showPopup()"></i></a></li> -->
                       <!-- Button trigger modal -->
<?php
									if (!isset($_SESSION['username']))
									{
										echo $unmae = $_SESSION['username'];
								?>
								<li><a href="#"><!--<i class="fa fa-lock"></i>Login--><button type="button" class="btn btn-primary get" data-toggle="modal" data-target="#myModal" style=" margin-top: 0px!important;"><i class="fa fa-lock" ></i> Login / Signup</button></a></li>
								<!--<li><a href="vendor.php"><button type="button" class="btn btn-primary get"  style=" margin-top: 0px!important;"> Upload For Vendor</button></a></li>-->
								<li><a href="vendor.php" style="font-size:12px;">Partner Registration</a></li>
								<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
								<?php
									}else{
								?>
								<li>
								<div class="dropdown">
                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding:4px !important;color:#fff;">
                                    My Account
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="padding:2px !important; color:#D10024">
                                        <a class="dropdown-item" href="profile.php">My Account</a><br>
                                        <a class="dropdown-item" href="order_history.php">Order History</a><br>
                                        <a class="dropdown-item" href="my_order.php">My Orders</a><br>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                        <style>

                                            
                                    </style>
                                    </div>
                                </div>
                                </li>

								<li><a href="signup.php"><i class="fa fa-user-o"></i><?php echo $_SESSION['username'];?></a></li>

								<?php
									} ?>
                                    <li><a href="login.php"><i class="fa fa-user-o"></i>login </a></li>

					   <!-- <li><a><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter"></a>Login</li> -->
						<li><a href="signup.php"><i class="fa fa-user-o"></i>Sign up</a></li>

					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->




		
			<!-- MAIN HEADER -->
			 
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div  class="header-logo">
								<a href="index.php" class="logo">
									<img src="./img/log.png" alt="img">
                
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>				
<script type="text/javascript">
  $(document).ready(function(){
    $("#city_name").change(function(){
      var city_name = $(this).val();
      //  alert(city_name);
      $.ajax({ 
        type: "POST", 
        url: "fetch_product.php", 
        data: "city_name="+city_name, 
        success: function(result){ 
        // alert(result); 
          $("#pro_details").html(result); 
        }
      });

    });
  });
</script>		
	<!-- SEARCH BAR -->


	<script language="Javascript" type="text/javascript">
 
              function onlyAlphabets(e, t) 
              {
                try {
                  if (window.event) {
                    var charCode = window.event.keyCode;
                  }
                  else if (e) {
                    var charCode = e.which;
                  }
                  else { return true; }
                  if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123 && charCode!=46))
                    return true;
                  else
                    return false;
                }
                catch (err) {
                  alert(err.Description);
                }
              }
          
 
          function onlyNos(e, t)
          {
            try {
              if (window.event) {
                var charCode = window.event.keyCode;
              }
              else if (e) {
                var charCode = e.which;
              }
              else { return true; }
              if (charCode > 31 && (charCode < 48 || charCode > 57)) 
              {
                return false;
              }
              return true;
            }
            catch (err) {
              alert(err.Description);
            }
          }
 
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script type="text/javascript">
  $(document).ready(function(){
    $("#mobile").change(function(){
      var mobile = $(this).val();
      $.ajax({ 
        type: "POST", 
        url: "fetch_mobile.php", 
        data: "mobile="+mobile, 
        success: function(result){ 
		//alert(result);
			$('#mobile').focus();
			$("#phn_error").html(result); 
        }
      });

    });
  });
  
</script>	
	<div class="col-md-6">
							<div class="header-search">
							<form action="#" method="post">
							<select  style='border:color red'; id="city_name" class="input-select">
							<option value="">City</option>
        						<?php
        							$resA = mysqli_query($con, "SELECT * FROM city");
        							while($rowA = mysqli_fetch_array($resA))
        							{
        							
        						?>
        						<option value="<?php echo $rowA['name'];?>"><?php echo $rowA['name'];?>
							</option>
        						<?php
        							}
        						?>
        					</select>
        						<input class="input" name="item_name" type="text" placeholder="Search Product" required="" style="width: 35%;">
        						<button type="submit"  aria-label="Left Align" name="search"  class="search-btn" style="color:red background-color:green; padding: 8px 20px !important;">
        							<span class="fa fa-search" aria-hidden="true"> </span>
        						</button>
        					</form>
                        </div>
						</div>
					
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		


  <!-- nav start -->
	<nav id="navigation">
	
	<div class="container">
		<div id="responsive-nav">
			<ul class="main-nav nav navbar-nav">
				<li class="active"><a href="index.php">Home</a></li>
				
				<?php  
				
				$res = mysqli_query($con, "SELECT * FROM tbl_category_master");
				
				while($row = mysqli_fetch_array($res)) {
				
					echo '<li><a href="subcategory.php?category_id=' . $row['category_id'] . '">' . $row['category_master'] . '</a></li>';
          
				}
				?>
			</ul>
		</div>
	</div>
	</nav>


  <!-- /nav End -->
			
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      

      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal Title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <div class="modal-body">
        <div id="popupContainer" class="popup">
          <div class="popup-content">
            <div class="login-container">
        <div class="login-image">
            <img src="admin/uploads/source/signup.png" alt="Login Image">
        </div>
        <div action="" class="login-form">
            <h2>Sign In Now</h2>
            <small>We are happy to have you join us.</small>
            <div class="login-form">
                                    <h2>Login to your account</h2>
                                    <form method="post" action="header.php">
                                           <label for="username">Username:</label>
                                           <input type="number" id="username" name="username" maxlength="10" required><br><br>
                                           
                                           <label for="otp">OTP:</label>
                                           <input type="text" id="otp" name="otp" required><br><br>
                                           
                                           <input type="submit" name="login" value="login">
                                     </form>
                                </div>
        </div>
</div>
            
          </div>
        </div>
      </div>
      
      <div class="modal-footer">
        <button id="closeBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      
    </div>
  </div>
</div>


<?php

if(isset($_POST['signup'])) {
    
   
    $username = mysqli_real_escape_string($con, trim($_POST['username']));
    $password= mysqli_real_escape_string($con, trim($_POST['password']));
    $type = mysqli_real_escape_string($con, trim($_POST['type']));
    

    $query = mysqli_query($con, "SELECT * FROM tbl_admin WHERE username = '$username'");
    if(mysqli_num_rows($query) == 0) {	
       
        $queryInsertAdmin = mysqli_query($con, "INSERT INTO tbl_admin(username,password,type) VALUES ('$username','$password','$type')");
        
        $queryInsertCustomer = mysqli_query($con, "INSERT INTO customer(username,password,type) VALUES ('$username','$password','$type')");
        
        if($queryInsertAdmin && $queryInsertCustomer) {
           
            $new_otp = mt_rand(1000, 9999);
            
           
            $sql = "UPDATE tbl_admin SET otp = '$new_otp' WHERE username = '$username'";
            $sql2 = "UPDATE customer SET otp = '$new_otp' WHERE username = '$username'";
            
            if (mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
                
                echo "OTP updated successfully";
                //echo "<script>alert('OTP updated successfully');window.location='index.php';</script>";
                $emailA = 'support@softhubtechno.com'; 
                $toEmail = 'example@example.com';    
                $emailSubject = 'Account Created Successfully';
                $htmlContent = '<h2>Your Login Details</h2>
                                <b>Login Id : </b>'.$username.'<br>
                                <b>Password : </b>'.$password.'<br>';
                
                //Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: '.$emailA. "\r\n";
                
                // Send email
                if(mail($toEmail, $emailSubject, $htmlContent, $headers)) {
                    $statusMsg = 'Your contact request has been submitted successfully!';
                    $msgClass = 'succdiv';
                } else {
                    $statusMsg = 'Your contact request submission failed, please try again.';
                    $msgClass = 'errordiv';
                }
            } else {
                echo "Error updating OTP: " . mysqli_error($con);
				$new_otp = mt_rand(1000, 9999);
        
       
				$sql = "UPDATE tbl_admin SET otp = '$new_otp' WHERE username = '$username'";
				$sql2 = "UPDATE customer SET otp = '$new_otp' WHERE username = '$username'";
				
				if (mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
				   
					echo "OTP updated successfully";
				} else {
					echo "Error updating OTP: " . mysqli_error($con);
				}
				
				echo "<script>alert('Username already exists');window.location='login.php';</script>";
            }
        } else {
            echo "<script>alert('Failed');window.location='login.php';</script>";
        }
    } else {
        
        $new_otp = mt_rand(1000, 9999);
        
       
        $sql = "UPDATE tbl_admin SET otp = '$new_otp' WHERE username = '$username'";
        $sql2 = "UPDATE customer SET otp = '$new_otp' WHERE username = '$username'";
        
        if (mysqli_query($con, $sql) && mysqli_query($con, $sql2)) {
           
          header("Location: login.php?username=". urlencode($username));
        } else {
            echo "Error updating OTP: " . mysqli_error($con);
        }
        
        echo "<script>alert('Username already exists  222');window.location='login.php';</script>";
        ?>
        <!-- <script type="text/javascript">
							alert("OTP Sent to your mobile number");
							var newLocation = "<?php echo  'verify_otp.php?username='.$username ?> ";
							window.location = newLocation;
						</script> -->
    <?php
    }

}
?>



<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 0px solid #e5e5e5;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">
            </div>
            <div class="category-tab shop-details-tab" style="margin-bottom: 7px !important;">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#reviews" data-toggle="tab">Login</a></li>
                        <li><a href="#details" data-toggle="tab">Signup</a></li>  
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade" id="details">
                        <div class="col-md-12">
                            <div class="login-container">
                                <div class="login-image">
                                    <img src="admin/uploads/source/signup.png" alt="Signup Image">
                                </div>
                                <div class="login-form">
                                    <h2>Sign up Now</h2>
                                    <small>We are happy to have you join us.</small>
                                    <form action="" method="post">
                                        <label for="username">Username:</label>
                                        <input type="number" id="username" name="username" maxlength="10" required>
                                        <button name="signup" class="btn btn-danger">SendOtp</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade active in" id="reviews">
                        <div class="col-md-12">
                            <div class="login-container">
                                <div class="login-image">
                                    <img src="admin/uploads/source/login.png" alt="Login Image">
                                </div>
                                <div class="login-form">
                                    <h2>Login to your account</h2>
                                    <form method="post" action="header.php">
                                           <label for="username">Username:</label>
                                           <input type="number" id="username" name="username" maxlength="10" required><br><br>
                                           
                                           <label for="otp">OTP:</label>
                                           <input type="text" id="otp" name="otp" required><br><br>
                                           2222s
                                           <input type="submit" name="login" value="login">
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-sm-12">
                    <ul class="nav nav-tabs tect-center">
                        <li class="active"><a href="#reviews" data-toggle="tab">Login</a></li>
                        <li><a href="#details" data-toggle="tab">Signup</a></li>  
                    </ul>
                </div>

        </div>
    </div>
</div>
 