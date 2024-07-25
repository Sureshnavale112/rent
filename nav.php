<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Categories</h3>
                </div>
            </div>
			<?php  $res = mysqli_query($con, "SELECT * FROM tbl_category_master");
        						while($row = mysqli_fetch_array($res))
        						{
        						    //echo $row['slider_image'];
        					?>

                <a href="subcategory.php?category_id=<?php echo $row['category_id'];?>">
            <div class="col-md-2-new col-xs-6">
                <div class="-iconproduc">
                    <!-- <div class="product-img"> -->
					<div class="iconproducct-img  icon">
                        <img   src="admin/uploads/icon/<?php echo $row['icon'];?>" alt="">
                    </div>
                    <div class="iconproduct-body">
                        <!--<p class="product-category">Category</p>-->
                        <h3  class="iconproduct-name-"><a href="#"><?php echo $row['category_master'];?></a></h3>
                    </div>
                   
                </div>
            </div>
								</a>
<?php } ?>
		 
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /Section -->

<!-- /End icons  -->


<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title">Related Products</h3>
                </div>
            </div>
            <div id="pro_details">


            <?php
						    if(isset($_POST['search']))
        					{
    							$item_name = $_POST['item_name'];
    							//$res = mysqli_query($con, "SELECT * FROM tbl_item_master where city_name = 'Pune' GROUP BY `category_id`");
    							
    							$res = mysqli_query($con, "select * from tbl_item_master where item_name like '%".$item_name."%' order by item_name ASC");
    							
    							while($row = mysqli_fetch_array($res))
    							{
							
						?>

                <a href="product.php?item_master_id=<?php echo $row['item_master_id'];?>">
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                    <!-- <a href="product.php?item_master_id=<?php echo $row['item_master_id'];?>" > -->
                        <div class="product-img">
                            <img src="admin/uploads/item/<?php echo $row['item_img']; ?>" alt="<?php echo $row['item_name']; ?>">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#"><?php echo $row['item_name']; ?></a></h3>
                            <h4 class="product-price">
                                <i class="fa-solid fa-rupee"></i>
                                <?php
                                if ($row['tenure'] == 'Per Day') {
                                    echo $row['price'];
                                } elseif ($row['tenure'] == 'Per Month') {
                                    echo $row['price_month'];
                                }
                                ?> / <span style="color:black;"><?php echo $row['tenure']; ?></span>
                            </h4>
                            <div class="product-btns">
                                <button class="add-to-wishlist">
                                    <i class="fa-solid fa-user"></i>
                                    <span class="tooltipp"><?php echo $row['Refby']; ?></span>
                                </button>
                                <button class="quick-view">
                                    <i class="fa-solid fa-location"></i>
                                    <span class="tooltipp"><?php echo $row['locality']; ?></span>
                                </button>
                                <span><button class="see-more "><i class="fa fa-eye"></i> See More</button><span>
                 

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
 <?php }
       }
       else{
            $res = mysqli_query($con, "SELECT * FROM tbl_item_master where city_name = 'Pune' and status = 'Y'");
            while ($row = mysqli_fetch_array($res))
             {
            ?>
               <a href="product.php?item_master_id=<?php echo $row['item_master_id'];?>" >
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="admin/uploads/item/<?php echo $row['item_img']; ?>" alt="<?php echo $row['item_name']; ?>">
                        </div>
                        <div class="product-body">
                            <h3 class="product-name"><a href="#"><?php echo $row['item_name']; ?></a></h3>
                            <h4 class="product-price">
                                <i class="fa-solid fa-rupee"></i>
                                <?php
                                if ($row['tenure'] == 'Per Day') {
                                    echo $row['price'];
                                } elseif ($row['tenure'] == 'Per Month') {
                                    echo $row['price_month'];
                                }
                                ?> / <span style="color:black;"><?php echo $row['tenure']; ?></span>
                            </h4>
                            <div class="product-btns">
                                <button class="add-to-wishlist">
                                    <i class="fa-solid fa-user"></i>
                                    <span class="tooltipp"><?php echo $row['Refby']; ?></span>
                                </button>
                                <button class="quick-view">
                                    <i class="fa-solid fa-location"></i>
                                    <span class="tooltipp"><?php echo $row['locality']; ?></span>
                                </button>
                                <span><button class="see-more "><i class="fa fa-eye"></i> See More</button><span>
                 

                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            <?php } 
            }  ?>
                            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->


















