            
<?php 
$contact = mysqli_fetch_assoc(mysqli_query($conn,"select * from users"));
?>


<?php $site = 'https://www.dreamcadcam.com/';?>

<!--footer section start-->
    <footer class="footer-style-3  pt-50 pb-3 pb-xl-0">
        <div class="container-large">
            <div class="row">
                <div class="col-xl-8">
                    <div class="row g-4">
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                            <div class="ur3-footer-widget">
                                <a href="#" class="footer-logo"><img style="    width: 170px;    height: 160px;"  src="<?=$site?>assets/images/logo-0.png" alt="logo" class="img-fluid" height="100"></a>
                                <span class="text-mm text-light fw-medium fs-sm d-block mt-40">Quick Contact</span>
                                <a href="#"><h3 class="text-mm text-light fw-normal mt-1">+91-9033568465</h3></a>
                                <div class="ur3-footer-social mt-32">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 ps-lg-5 ps-xl-0 col-md-6">
                            <div class="ur3-footer-widget">
                                <h4 class="text-mm widget-title mb-40 text-light fw-normal">Useful Links</h4>
                                <ul class="ur3-footer-links">
                                   <li><a href="<?=$site?>">Home</a></li>
                                    <li><a href="<?=$site?>about.php">About us</a></li>
                                    <li><a href="<?=$site?>">Products</a></li>
                                    <li><a href="<?=$site?>contact.php">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 ps-xl-5 ps-xxl-0 col-lg-4 col-md-6">
                            <div class="ur3-footer-widget">
                                <h4 class="text-mm text-light widget-title mb-40 fw-normal">Product category</h4>
                                <ul class="ur3-footer-links">
                           <?php
$query2 = mysqli_query($conn,"select ct_pd_name,ct_pd_url from cat_prod where sub_category_id='0' && sub_category_id1='0' limit 5");
while($sql5 = mysqli_fetch_assoc($query2)){

?>                                     
                                    <li><a href="<?=$site?>products/<?=$sql5['ct_pd_url']?>"><?php echo $sql5['ct_pd_name']; ?></a></li>
                                    
<?php 
}
?>                                    
   
                                </ul>
                            </div>
                        </div>
                    </div>
                
                   
                </div>
                <div class="col-xl-4">
                    <ul class="footer-instagram-gallery ps-xl-5">
                        <li>
                            <img src="<?=$site?>img/1.jpg" alt="gallery image" class="img-fluid">
                            <a href="<?=$site?>img/1.jpg" data-fancybox="gallery2"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <img src="<?=$site?>img/2.jpg" alt="gallery image" class="img-fluid">
                            <a href="<?=$site?>img/2.jpg" data-fancybox="gallery2"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <img src="<?=$site?>img/3.jpg" alt="gallery image" class="img-fluid">
                            <a href="<?=$site?>img/3.jpg" data-fancybox="gallery2"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <img src="<?=$site?>img/4.jpg" alt="gallery image" class="img-fluid">
                            <a href="<?=$site?>img/4.jpg" data-fancybox="gallery2"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <img src="<?=$site?>img/5.jpg" alt="gallery image" class="img-fluid">
                            <a href="<?=$site?>img/5.jpg" data-fancybox="gallery2"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <img src="<?=$site?>img/1.jpg" alt="gallery image" class="img-fluid">
                            <a href="<?=$site?>img/1.jpg" data-fancybox="gallery2"><i class="fab fa-instagram"></i></a>
                        </li>
                      
                    </ul>
                </div>
            </div>
             <div class="ur3-footer-copyright">
                        <div class="row align-items-center g-3">
                            <div class="col-md-9">
                                <p class="mb-0 text-light">© 2024 Dream Cad Cam. All Rights Reserved. Designe & Developed by Web2tech Solutions</p>
                            </div>
                            <div class="col-md-3">
                                <div class="text-md-end">
                                    <img src="<?=$site?>assets/images/icons/cards.png" alt="cards" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </footer> 
    <!--footer section end-->


    <!--scroll top button start-->
    <button type="button" class="scroll-top-btn"><i class="fa-solid fa-hand-pointer"></i></button>
    <!--scroll top button end-->


    <!--product modal start-->
    <!--<div class="modal fade" id="product_quickview">-->
    <!--    <div class="modal-dialog modal-dialog-centered">-->
    <!--        <div class="modal-content">-->
    <!--            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>-->
    <!--            <div class="row">-->
    <!--                <div class="col-xl-6">-->
    <!--                    <div class="feature-image bg-light">-->
    <!--                        <img src="<?=$site?>assets/images/products/product-lg-1.png" alt="not found" class="img-fluid">-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="col-xl-6">-->
    <!--                    <div class="single-product-info">-->
    <!--                        <a href="#" class="category-btn text-uppercase fs-sm secondary-text-color d-inline-block mb-3">Neaklace</a>-->
    <!--                        <h3 class="mb-4">Tony Gold Neaklace</h3>-->
    <!--                        <div class="item-reivew d-flex align-items-center gap-3">-->
    <!--                            <ul class="rating-star d-flex align-items-center gap-1 fs-sm">-->
    <!--                                <li><i class="fas fa-star"></i></li>-->
    <!--                                <li><i class="fas fa-star"></i></li>-->
    <!--                                <li><i class="fas fa-star"></i></li>-->
    <!--                                <li><i class="fas fa-star"></i></li>-->
    <!--                                <li><i class="fas fa-star"></i></li>-->
    <!--                            </ul>-->
    <!--                            <span class="primary-text-color fw-light">(1 Customer review)</span>-->
    <!--                        </div>-->
                            
    <!--                        <div class="short-description mt-40">-->
    <!--                            <p class="mb-0 fw-light">Eget taciti odio cum habitant egestas conubia turpis phasellus, ante parturient-->
    <!--                                donec duis primis nam faucibus augue malesuada venenatis</p>-->
    <!--                        </div>-->
                           
    <!--                        <div class="d-flex align-items-center mt-40 gap-3 flex-wrap">-->
                               
    <!--                            <button type="button" class="add_to_cart_btn">Enquiry Now<span class="ms-2"></span></button>-->
                            
    <!--                        </div>-->
                          
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!--product modal end-->

    <!--Esential Js Files-->
    <script src="<?=$site?>assets/js/setup.js"></script>
    <script src="<?=$site?>assets/js/jquery.min.js"></script>
    <script src="<?=$site?>assets/js/popper.min.js"></script>
    <script src="<?=$site?>assets/js/bootstrap.min.js"></script>
    <script src="<?=$site?>assets/js/slick.js"></script>
    <script src="<?=$site?>assets/js/jquery-ui.js"></script>
    <script src="<?=$site?>assets/js/nice-select.js"></script>
    <script src="<?=$site?>assets/js/fancybox.js"></script>
    <script src="<?=$site?>assets/js/countdown.min.js"></script>
    <script src="<?=$site?>assets/js/wow.js"></script>
    <script src="<?=$site?>assets/js/script.js"></script>
    
</body>

</html>