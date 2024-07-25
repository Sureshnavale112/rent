<?php
include_once('connect.php');
	$sub_category_id = $_POST['sub_category_id'];
	$res = mysqli_query($con, "SELECT * FROM tbl_item_master where sub_category_id = '$sub_category_id'");
	while($row = mysqli_fetch_array($res))
	{
	
?>

                      <div class="col-md-3 col-xs-4">
                        <div class="product">
                        <a href="product.php?item_master_id=<?php echo $row['item_master_id'];?>" >
                            <div class="product-img">
                                    <img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" />
                            </div>
                              <!-- <a href="product.php?item_master_id=<?php echo $row['item_master_id'];?>" >   this line defined all dive in a -->
                            <div class="product-body">
                                <!-- <p class="product-category"><?php echo $row['category_id']; ?></p> -->
                                <h3 class="product-name"><a href="#"><?php echo $row['item_name']; ?></a></h3>
                                <h4 class="product-price"><i class="fa-solid fa-rupee"></i> 
                                <?php
                                 //echo $row['price']; 
                                
                                 if ($row['tenure'] == 'Per Day') {
                                    echo  $row['price'];
                                } else if ($row['tenure'] == 'Per Month')  {
                                    echo  $row['price_month'];
                                }
                                
                                ?>/<p style="font-color:black;"><?php echo $row['tenure']; ?></p>
                            
                                
                                <div class="product-btns">
                                    <button class="add-to-wishlist"><i class="fa-solid fa-user"></i><span class="tooltipp">Ref by Suresh</span></button>
                                    <button class="quick-view"><i class="fa-solid fa-location"></i><span class="tooltipp"><?php echo $row['locality'];?></span></button>
                                    <span><button class="see-more "><i class="fa fa-eye"></i> See More</button><span>
                                </div>
                            </div></a>
                        </div>
                    </div>

<!--
<div class="col-sm-3">
	<div class="product-image-wrapper">
		<div class="single-products">
				<div class="productinfo text-center">
					<img src="admin/uploads/item/<?php echo $row['item_img'];?>" alt="" />
					<h2> Rs &nbsp;<?php  echo $row['price'];?></h2>
					<p><?php echo $row['item_name']  ?></p>
					<a href="product.php?item_master_id=<?php echo $row['item_master_id'];?>" class="btn btn-primary add-to-cart"><i class="fa fa-eye"></i>See more</a>
				</div>
		</div>
	</div>
</div>-->
<?php
	}
?>