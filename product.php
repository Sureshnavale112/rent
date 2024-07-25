
<?php
include_once("header.php");
$item_master_id = $_GET['item_master_id'];

?>

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

                <!-- <div id="product-view"> -->
                <?php  

           $res = mysqli_query($con, "SELECT * FROM tbl_item_master  where item_master_id = '$item_master_id'");
								$row = mysqli_fetch_array($res);
    ?> 
					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
								
                                <img  src="admin/uploads/item/<?php echo $row["item_img"] ; ?>" />
							</div>

							<div class="product-preview">
                                <img  src="admin/uploads/item/<?php echo $row["item_img_one"] ; ?>" />
							</div>

							<div class="product-preview">
                              <img  src="admin/uploads/item/<?php echo $row["item_img_two"] ; ?>" />
							</div>

							<div class="product-preview">
                             <img  src="admin/uploads/item/<?php echo $row["item_img_three"] ; ?>" />
							</div>
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
						<div class="product-preview">
								
                                <img  src="admin/uploads/item/<?php echo $row["item_img"] ; ?>" />
							</div>

							<div class="product-preview">
                                <img  src="admin/uploads/item/<?php echo $row["item_img_one"] ; ?>" />
							</div>

							<div class="product-preview">
                              <img  src="admin/uploads/item/<?php echo $row["item_img_two"] ; ?>" />
							</div>

							<div class="product-preview">
                             <img  src="admin/uploads/item/<?php echo $row["item_img_three"] ; ?>" />
							</div>
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
                            <h2 class="product-name"><?php echo $row['item_name'];?></h2>
                           
							<div>


								<h3 class="product-price"><i class="fa-solid fa-rupee"></i> 
                                <?php
                                 //echo $row['price']; 
                                
                                 if ($row['tenure'] == 'Per Day') {
                                    echo  $row['price'];
                                } else if ($row['tenure'] == 'Per Month')  {
                                    echo  $row['price_month'];
                                }
                                ?>/<p style="font-color:black;"><?php echo $row['tenure']; ?></p>
                          
							</div>
							<p><?php echo $row['description'];?></p>
                            <!-- <div class="button-row"> -->
							<div class="add-to-cart">
							<a href="https://web.whatsapp.com/"><button style="color: white; background-color: green; text-transform: lowercase;" class="add-to-cart-btn"><i style="color: white;" class="fab fa-whatsapp"></i> WhatsApp</button></a>
                              <a href="index.php" style="text-transform: lowercase;"><button style="text-transform: lowercase;" class="add-to-cart-btn"><i class="fa-solid fa-light fa-phone"></i> Call</button></a>

                        </div>
					
					</div>
					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
<?php include 'footer.php' ?>

