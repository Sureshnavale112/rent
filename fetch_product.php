<?php
	include_once('connect.php');
	$city_name = $_POST['city_name'];
	$query=mysqli_query($con,"select * from tbl_item_master where city_name ='$city_name'");
	while($row=mysqli_fetch_array($query))
	{
      //echo $row['city_name'];
?>
<!-- <div class="col-sm-4">
	<div class="product-image-wrapper">
		<div class="single-products">
				<div class="productinfo text-center">
					<img src="admin/<?php echo $row['item_img'];?>" alt="" />
					<h2> Rs &nbsp;<?php  echo $row['price'];?></h2>
					<p><?php echo $row['item_name']  ?></p>
					<a href="product.php?category_id=<?php echo $row['category_id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-overlay">
					<div class="overlay-content">
						<h2> Rs &nbsp;<?php  echo $row['price'];?></h2>
						<p><?php echo $row['item_name']  ?></p>
						<a href="product.php?category_id=<?php echo $row['category_id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
					</div>
				</div>
		</div>
	</div>
</div> -->


  <div class="col-md-3 col-xs-6">
                    <div class="product">
                    <a href="product.php?item_master_id=<?php echo $row['item_master_id'];?>" >
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
                        </div></a>
                    </div>
                </div>


<!-- <div class="col-sm-3">
	<div class="product-image-wrapper">
		<div class="single-products">
				<div class="productinfo text-center">
					 <img src="images/home/p1.jpg" alt="" /> -->
					<!-- <img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" />
					<h2> Rs &nbsp;<?php  echo $row['price'];?></h2>
					<p><?php echo $row['item_name']  ?></p>
                  	<h2><?php echo $row['item_name']  ?></h2> 
					<p> Rs &nbsp;<?php  echo $row['price'];?></p>
					<a href="product.php?item_master_id=<?php echo $row['item_master_id'];?>" class="btn btn-primary1 btn-danger add-to-cart"><i class="fa fa-eye"></i>See more</a>
				</div>
		</div>
	</div>
</div> -->
<?php 
	}	
?>