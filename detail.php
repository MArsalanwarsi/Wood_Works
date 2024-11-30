<?php
include 'connect.php';
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];
    $sql = "SELECT * FROM product WHERE id = '$product_id'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);

include 'header.php';
?>
<link rel="stylesheet" href="detail.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

<!-- Libraries Stylesheet -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Shop Detail Start -->
<div class="container-fluid py-5" style="margin-top: 100px">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5" style="max-height: 500px">
            <img class="w-100 h-100" src="product_img/<?php echo $row['p_img'] ?>" alt="Image" />
        </div>

        <div class="col-lg-7 pb-5 d-flex justify-content-center align-items-center">
            <div class="container-fluid p-5">
            <h3 class="font-weight-semi-bold"><?php echo $row['p_name'] ?> </h3>
            <p class="mb-4"><?php echo $row['p_description'] ?> .</p>
            <div class="d-flex align-items-center mb-4 pt-2">
                <a href=" https://wa.me/+923152027265" class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Chat on Whatsapp</a>
            </div>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->

<!-- Products Start -->
<div class="container-fluid py-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">You May Also Like</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
                <?php 
                // get random 5 rows from products
                $sql = "SELECT * FROM product ORDER BY RAND() LIMIT 8";
                $result = mysqli_query($connection, $sql);
                foreach($result as $row){
                ?>
                <div class="card product-item border-0">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" style="height: 300px" src="product_img/<?php echo $row['p_img'] ?>" alt="" />
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $row['p_name'] ?></h6>
                    </div>
                    <div class="card-footer d-flex justify-content-center bg-light border">
                        <a href="detail.php?product_id=<?php echo $row['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                    </div>
                </div>
                <?php
                }
                ?>
                
          
            </div>
        </div>
    </div>
</div>
<!-- Products End -->

<?php
include 'footer.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
        // Related carousel
        if (typeof $('.owl-carousel') !== 'undefined' && $('.owl-carousel').length > 0) {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 29,
                nav: false,
                autoplay: true,
                smartSpeed: 1200,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    }
                }
            });
        }

</script>
<?php
}
?>