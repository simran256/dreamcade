<?php 
include"header.php";
$url=$_GET['alias'];
$product=mysqli_fetch_assoc(mysqli_query($conn,"select * from cat_prod where ct_pd_url='$url'"));


?>


    <!--breadcrumb section start-->
    <div class="breadcrumb-section pt-40 pb-40" data-background="<?=$site?>assets/images/shapes/breadcrumb-bg.jpg">
        <div class="container">
            <p class="breadcrumb-text fw-light mb-0"><a href="<?=$site?>">Home</a> / <a href="#">Products</a> / <span class="primary-text-color"><?php echo $product['ct_pd_name']; ?></span></p>
        </div>
    </div>
    <!--breadcrumb section end-->

    <!--product details start-->
    <section class="ptb-120 bg-white">
        <div class="container pb-5 pb-sm-0">
            <div class="product-single">
                <div class="row g-4">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="product-single-slider d-flex">
                            
                            
                            
                            
                                  <section id="default" class="padding-top0">
          <div class="container">
    <div class="row">
    
      <div class="large-5 column">
        <div class="xzoom-container">
    <?php
    // Query to get the subcategory based on the `ct_pd_url`
    $query = "SELECT * FROM cat_prod WHERE ct_pd_url = '$url' AND status = '1' LIMIT 1";
    $header = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($header) > 0) {
        $header1 = mysqli_fetch_assoc($header);
        $product_images = explode(",", $header1['cat_pd_image']);
        
        // Check if there is at least one image
        if (!empty($product_images) && !empty(trim($product_images[0]))) {
            $firstImage = trim($product_images[0]);
    ?>
        <img class="xzoom" id="xzoom-default" 
             src="<?=$site?>admin/uploads/product/cat_pd_image/<?php echo $firstImage; ?>" 
             xoriginal="<?=$site?>admin/uploads/product/cat_pd_image/<?php echo $firstImage; ?>" />
        <div class="xzoom-thumbs">
            <?php 
            // Loop through the array and generate thumbnails for all valid images
            foreach ($product_images as $key => $image) {
                $image = trim($image); // Trim spaces from the image name
                if (!empty($image)) { 
            ?>
                <a href="<?=$site?>admin/uploads/product/cat_pd_image/<?php echo $image; ?>">
                    <img class="xzoom-gallery" width="80" 
                         src="<?=$site?>admin/uploads/product/cat_pd_image/<?php echo $image; ?>" 
                         xpreview="<?=$site?>admin/uploads/product/cat_pd_image/<?php echo $image; ?>">
                </a>
            <?php 
                }
            } 
            ?>
        </div>
    <?php 
        } else {
            echo "<p>No product images available.</p>";
        }
    }
    ?>
</div>

      </div>
      </div>
    </div>
    </section>
   


                                  
                                
                                
                            
                            
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                        <div class="single-product-info">
                            <a href="" class="category-btn text-uppercase text-dark fs-sm  d-inline-block mb-3">Neaklace</a>
                            <h3 class="mb-4"><?php echo $product['ct_pd_name']; ?></h3>
                            <div class="item-reivew d-flex align-items-center gap-3">
                                <ul class="rating-star d-flex align-items-center gap-1 fs-sm">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                             
                            <div class="short-description mt-40">
                                <p class="mb-0 fw-light">   <?php echo $product['small_description']; ?></p>
                            </div>
                            
                            <div class="d-flex align-items-center mt-40 gap-3 flex-wrap">
                                
                                <button type="button" class="add_to_cart_btn">Yes I'm Interested<span class="ms-2"> </span></button>
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

               
                
            </div>
        </div>
    </section>
   <!-- default start -->
   
    <!--product details end-->
<br><br><br><br>
 <?php
include"footer.php"
?>