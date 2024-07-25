<?php
include "header.php";
?>
	
	
<?php
if(isset($_POST['vendor_signup']))
	{
		$error = "";	
						
		$file = $_FILES ['adhar_card'];
		$name1 = $file ['name'];
		$type = $file ['type'];
		$size = $file ['size'];
		$tmppath = $file ['tmp_name']; 

		    if($name1!="")
			{
			    move_uploaded_file ($tmppath,'admin/uploads/'.$name1);              
			}
		$file = $_FILES ['shop_act'];
		$name2 = $file ['name'];
		$type = $file ['type'];
		$size = $file ['size'];
		$tmppath = $file ['tmp_name']; 

		    if($name2!="")
			{
			    move_uploaded_file ($tmppath,'admin/uploads/'.$name2);              
			}
		$file = $_FILES ['pan_card'];
		$name3 = $file ['name'];
		$type = $file ['type'];
		$size = $file ['size'];
		$tmppath = $file ['tmp_name']; 

		    if($name3!="")
			{
			    move_uploaded_file ($tmppath,'admin/uploads/'.$name3);              
			}	
		
		
		$category_id = trim($_POST['category_id']);
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$contact = trim($_POST['contact']);
		$address = trim($_POST['address']);
		$city = trim($_POST['city']);
		$date = date('Y-m-d');
  
		$query=mysqli_query($con, "INSERT INTO vendor_enquiry(category_id, name, email, contact, address, city, adhar_card, shop_act, pan_card, date) VALUES('$category_id','$name','$email','$contact','$address','$city','admin/uploads/$name1','admin/uploads/$name2','admin/uploads/$name3','$date')");	
		
		if($query)
		{
			echo"<script>alert('Vendor added Successfully');window.location='vendor.php';</script>";
			
			$emailA = $email;
			if(filter_var($emailA, FILTER_VALIDATE_EMAIL) === false){
                $statusMsg = 'Please enter your valid email.';
                $msgClass = 'errordiv';
            }else{
				// Recipient email
              $toEmail = $email;
                $emailSubject = 'Vendor Registration Successfully '.''.$name;
                $htmlContent = '<h2>Vendor Registration Successfully</h2>
                    <b>Name : </b>'.$name.'<br>
                    <b>Contact : </b>'.$contact.'<br>';
                   

                // Set content-type header for sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                // Additional headers
                $headers .= 'From: '.$name.'<'.$emailA.'>'. "\r\n";

                // Send email
                if(mail($toEmail,$emailSubject,$htmlContent,$headers)){
                    $statusMsg = 'Your contact request has been submitted successfully !';
                    $msgClass = 'succdiv';
                }else{
                    $statusMsg = 'Your contact request submission failed, please try again.';
                    $msgClass = 'errordiv';
                }
				//print_r($htmlContent);
            } 
		}
		else
		{
			echo"<script>alert('Failed');window.location='vendor.php';</script>";
		}
	}

?>
		
	<section id="form" style="margin-bottom: 30px !important;margin-top: 30px !important;"><!--form-->
		<div class="container">
			<div class="row">
				
				<div class="col-sm-1"></div>
				<div class="col-sm-5">
					<div class="signup-form"><!--sign up form-->
						<h2 class="title text-center" style="color:#D10024;"><b>Partner with Rentswale</b></h2>
						<form action="#" method="post" enctype="multipart/form-data">
							<select  name="category_id" id="category_id" required="">
								<option value="">Select Category</option>
        						<?php
        							$resA = mysqli_query($con, "SELECT * FROM tbl_category_master");
        							while($rowA = mysqli_fetch_array($resA))
        							{
        							
        						?>
        						<option value="<?php echo $rowA['category_id'];?>"><?php echo $rowA['category_master'];?></option>
        						<?php
        							}
        						?>
        					</select><br><br>
							<input type="text" name="name" required placeholder="Name" onkeypress="return onlyAlphabets(event,this);"/>
							<input type="text" name="contact" required placeholder="Contact No" maxlength="10" onkeypress="return onlyNos(event,this);" />
							<input type="email" name="email" placeholder="Email Address"/>
							<input type="text" name="address" placeholder="Address"/>
							<input type="text" name="city" placeholder="City" onkeypress="return onlyAlphabets(event,this);" />
							
							Adhar Card <input class="form_control" required type="file" name="adhar_card" placeholder="image">
							Pan Card <input class="form_control" required type="file" placeholder="Pan Card" name="pan_card">
							Shop Act <input class="form_control" required type="file" placeholder="" name="shop_act">
						
							<!--<button type="submit" class="btn btn-default">Signup</button>-->
							<input type="submit" name="vendor_signup" value="Signup"  class="btn btn-primary">	
						</form>
					</div><!--/sign up form-->
				</div>
				<div class="col-sm-5">
				<div class="clearfix">&nbsp;</div><div class="clearfix">&nbsp;</div>
					<center><img src="images/shop/images_log.jpg" class="girl img-responsive" alt="" /><center>
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
	</section><!--/form-->

	<section style="background-color: #f6f7f7;" >
		<div class="container">
			<div class="row">
				
				<div class="col-sm-12">
				<div class="clearfix">&nbsp;</div>
					<div class="blog-post-area">
						<h2 class="title text-center">How it works?</h2>
						<div class="single-blog-post">
							<!--<h3>Girls Pink T Shirt arrived in store</h3>
							
							<a href="">
								<img src="images/blog/blog-one.jpg" alt="">
							</a>-->
						<!--	<p>
								SPOT BAZAR LLP was established in 2020 and is headquartered in Pune. We engaged in 
provide good quality various products to our valuable customer by online service. We offer to come people 
together, shop together, earn together and grow together.
</p> --><br>

							

							
						</div>
					</div><!--/blog-post-area-->


					<div class="col-sm-12">
						<div class="col-sm-4">
							<div class="media commnets">
								<a class="pull-left" href="#">
									<img class="media-object" src="images/home/f1.PNG" alt="">
								</a>
								<div class="media-body">
									<h4 class="media-heading">Finest-quality products</h4>
									<p>Quality matters to you, and us! That's why we do a strict quality-check for every product.
									
									</p>
									
								</div>
							</div><!--Comments-->
						</div>
						<div class="col-sm-4">
							<div class="media commnets">
								<a class="pull-left" href="#">
									<img class="media-object" src="images/home/f1.PNG" alt="">
								</a>
								<div class="media-body">
									<h4 class="media-heading">Finest-quality products</h4>
									<p>Quality matters to you, and us! That's why we do a strict quality-check for every product.
									
									</p>
									
								</div>
							</div><!--Comments-->
						</div>
						<div class="col-sm-4">
						<div class="media commnets">
							<a class="pull-left" href="#">
								<img class="media-object" src="images/home/mob.PNG" alt="">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Free relocation</h4>
								<p>Changing your house or even your city? We'll relocate your rented products for free.</p>
								<br>
							</div>
						</div><!--Comments-->
						</div>

					
					
					</div>
					
				</div>	
			</div>
		</div>
	</section>
	
	

	
<?php
include "footer.php";
?>
	