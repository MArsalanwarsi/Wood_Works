
// <div style="background: url('pic/webblock.jpeg');background-position: center;
//     background-repeat: no-repeat;
//     background-size: cover;
//     width: 100%;
//     height: 100%;"></div>
<?php
// die();
include 'connect.php';
include 'header.php';
?>


<!-- start home  -->

<div class="big-bg" id="home">
    <div class="bg-content">
        <h1>Quality is the best thing <br> in the business</h1>
        <hr>
        <p>
            We make our products in the best shape for your happiness, <br> so we hope to build a bridge of trust with you.
        </p>
        <div class="bg-link">
            <a href="shop.php?category_id=All Products">shop Now</a>
        </div>
    </div>
</div>
<!-- end home  -->

<!-- start second section  -->


<div class="big-collection">
    <div class="collect-flex">
        <?php
        $category = mysqli_query($connection, "SELECT * FROM categories");
        foreach ($category as $data) {
        ?>
            <div class="collect">
                <a href="shop.php?category_id=<?php echo $data['c_name'] ?>">
                    <div class="image" style="width: 200px;height: 200px;padding: 2px;">
                        <img style="width: 100%;height: 100%;" src="category_img/<?php echo $data['c_img'] ?>" alt="">
                    </div>
                </a>
                <div class="link">
                    <a class="text-dark" href="shop.php?category_id=<?php echo $data['c_name'] ?>"><?php echo $data['c_name'] ?></a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>


<!-- end second section  -->


<!-- start section three  -->


<div class="big-shop" id="shop">
    <div class="shop-title">
        <h2>
            we are very proud to present you <br> our furniture
        </h2>
        <p>
            Quality is the easiest way to make beautiful products.
        </p>
    </div>
    <div class="shop-flex">
        <div class="shop-one">

            <div class="image-one">
                <img src="pic/furn1.jpg" alt="">
                <div class="overlay">
                    <div class="txt">
                        <h3>Dressing Tables</h3>
                        <section>
                            <span>Furniture</span> / Design
                        </section>
                    </div>
                </div>
            </div>

            <div class="image-one">
                <img src="pic/furn2.jpg" alt="">
                <div class="overlay">
                    <div class="txt">
                        <h3>Blue Chair</h3>
                        <section>
                            <span>Furniture</span> / Design
                        </section>
                        <div class="link">
                            <a href="#">Shop Now <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="shop-one">

            <div class="image-one">
                <img src="pic/furn3.jpg" alt="">
                <div class="overlay">
                    <div class="txt">
                        <h3>Wardrobes</h3>
                        <section>
                            <span>Furniture</span> / Design
                        </section>
                        <div class="link">
                            <a href="hop.php?category_id=All Products">Shop Now <i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image-one">
                <img src="pic/furn4.jpg" alt="">
                <div class="overlay">
                    <div class="txt">
                        <h3></h3>
                        <section>
                            <span>Furniture</span> / Design
                        </section>
                    </div>
                </div>
            </div>

        </div>

        <div class="shop-two">
            <img src="pic/furn6.jpg" alt="">
            <div class="overlay">
                <div class="txt">
                    <h3>Brown Chairs</h3>
                    <section>
                        <span>Furniture</span> / Design
                    </section>
                    <div class="link">
                        <a href="hop.php?category_id=All Products">Shop Now <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- end section three  -->

<!-- start section four  -->


<div class="big-product" id="features">
    <div class="product-title">
        <p>
            browse our items
        </p>
        <h2>
            Ideal for your home
        </h2>
        <hr>
    </div>
    <div class="product-flex">

        <?php
        $sql = mysqli_query($connection, 'select * from product ORDER BY id DESC limit 8');
        foreach ($sql as $data) {
        ?>
            <div class="product-one" style="width: 300px;">
                <div class="product-image" style="width: 300px;height: 300px;">
                    <img style="width: 100%;height: 100%;" src="product_img/<?php echo $data['p_img'] ?>" alt="">
                    <div class="overlay">
                        <a href="detail.php?product_id=<?php echo $data['id'] ?>" class="text-dark">
                            <i class="fas fa-shopping-bag"></i></a>
                    </div>
                </div>
                <div class="content" style="width:100%">
                    <div class="left">
                        <h4>
                            <?php echo $data['p_name'] ?>
                        </h4>
                    </div>
                </div>
                <article><?php echo $data['p_category'] ?></article>
            </div>
        <?php
        }

        ?>

    </div>
</div>

<!-- end section four  -->

<!-- start section five -->

<div class="big-furn" id="new-arrival">
    <div class="furn-title">
        <h2>
            Discover our furniture from our <br> resources
        </h2>
        <p>
            View our everday amazing products.
        </p>
    </div>
    <div class="big-part">
        <img src="pic/bg_image.png" alt="">
        <div class="text-inside">
            <img src="pic/plus.png" alt="" class="plus">
            <div class="text-box">
                <div>
                    <img src="pic/product6.jpg" alt="">
                </div>
                <div>
                    <h5>new couch</h5>
                    <p>
                        take our furniture with perfect quality and price.
                    </p>
                    <div class="link">
                        <a href="hop.php?category_id=All Products">shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end section five -->

<!-- start section six -->

<div class="bg-show">
    <div class="link">
        <a href="#" class="link_a">play <img src="pic/right-chevron.png" alt=""></a>
    </div>
    <div class="overlay">
        <div class="image">
            <img src="pic/x.png" alt="" class="cancel">
            <video src="furniture.mp4" id="video"></video>
            <div class="bg-player">
                <img class="player" src="pic/play.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- end section six -->
<?php
include 'footer.php';
?>