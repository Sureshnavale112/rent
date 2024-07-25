<?php include ("header.php");

$category_id = $_GET['category_id'];

?>

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3 class="title"><?php echo $rowA['name']; ?></h3>
                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>				
            <script type="text/javascript">
            $(document).ready(function(){
                $(".sub_category_id").change(function(){
                    var sub_category_id = $(this).val();
                    // alert(sub_category_id);
                    $.ajax({ 
                        type: "POST", 
                        url: "fetch_product_list.php", 
                        data: "sub_category_id=" + sub_category_id, 
                        success: function(result){ 
                            // alert(result); 
                            $("#pro_details").html(result); 
                        }
                    });
                });
            });
            </script>

            <!-- SECTION -->
            <div class="section">
                <!-- container -->
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <!-- ASIDE -->
                        <div id="aside" class="col-md-3">
                            <!-- aside Widget -->
                            <div class="aside">
                                <h3 class="aside-title">Sub-Categories</h3>
                                <div class="checkbox-filter">
                                    <?php
                                    $category_id = isset($_GET['category_id']) ? mysqli_real_escape_string($con, $_GET['category_id']) : null;
                                    $resA = mysqli_query($con, "SELECT * FROM `tbl_subcategory` WHERE category_id='$category_id'");
                                    while ($rowA = mysqli_fetch_array($resA)) {
                                        ?>
                                        <div class="input-checkbox">
                                            <input type="checkbox" name="cat" id="cat<?php echo $rowA['sub_category_id']; ?>" class="checked cat sub_category_id" value="<?php echo $rowA['sub_category_id']; ?>">
                                            <label for="cat<?php echo $rowA['sub_category_id']; ?>">
                                                <span></span>
                                                <?php echo $rowA['sub_category']; ?>
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!-- /ASIDE -->

                        <!-- MAIN -->
                        <div class="col-md-9">
                            <?php
                            if (isset($_GET['category_id'])) {
                                $category_id = mysqli_real_escape_string($con, $_GET['category_id']);
                                $query = "SELECT * FROM tbl_category_master WHERE category_id = '$category_id'";
                                $res = mysqli_query($con, $query);

                                if (mysqli_num_rows($res) > 0) {
                                    while ($row = mysqli_fetch_assoc($res)) {
                                        ?>
                                        <div class="text-center">
                                            <h3 class="title"><?php echo $row['category_master']; ?></h3>
                                        </div>
                                        <?php
                                    }
                                } else {
                                    echo "No categories found.";
                                }
                            }
                            ?>

                            <div class="row">
                                <div id="pro_details">
                                    <?php
                                    if (isset($_GET['category_id'])) {
                                        $category_id = mysqli_real_escape_string($con, $_GET['category_id']);
                                        $query = "SELECT * FROM tbl_item_master WHERE city_name = 'Pune' AND category_id = '$category_id'";
                                        $res = mysqli_query($con, $query);

                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_assoc($res)) {
                                                ?>
                                                <div class="col-md-3 col-xs-4">
                                                    <div class="product">
                                                        <a href="product.php?item_master_id=<?php echo $row['item_master_id']; ?>">
                                                            <div class="product-img">
                                                                <img src="admin/uploads/item/<?php echo $row['item_img']; ?>" alt="" />
                                                            </div>
                                                            <div class="product-body">
                                                                <h3 class="product-name"><a href="#"><?php echo $row['item_name']; ?></a></h3>
                                                                <h4 class="product-price"><i class="fa-solid fa-rupee"></i> 
                                                                    <?php
                                                                    if ($row['tenure'] == 'Per Day') {
                                                                        echo $row['price'];
                                                                    } else if ($row['tenure'] == 'Per Month') {
                                                                        echo $row['price_month'];
                                                                    }
                                                                    ?>/<p style="font-color:black;"><?php echo $row['tenure']; ?></p>
                                                                <div class="product-btns">
                                                                    <button class="add-to-wishlist"><i class="fa-solid fa-user"></i><span class="tooltipp">Ref by name</span></button>
                                                                    <button class="quick-view"><i class="fa-solid fa-location"></i><span class="tooltipp"><?php echo $row['locality']; ?></span></button>
                                                                    <span><button class="see-more "><i class="fa fa-eye"></i> See More</button><span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            echo "<p>No products found for this category.</p>";
                                        }
                                    } else {
                                        echo "<p>No category ID specified.</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /MAIN -->
                    </div>
                    <!-- /row -->
                </div>
                <!-- /container -->
            </div>
            <!-- /SECTION -->
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
