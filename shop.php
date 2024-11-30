<?php
include 'connect.php';
include 'header.php';
if (isset($_GET['category_id'])) {
    $category_id = $_GET['category_id'];
    ?>
    <style>
        .big-product .product-flex {
            justify-content: center;
            gap: 20px;
        }
    </style>
    <div class="container-fluid p-5 text-center position-relative" style="margin-top: 4rem;">
        <img src="product_img/IMG_4544.JPG" alt=""
            style="position:absolute; top:0; left:0;bottom:0; right:0; width:100%; height:100%; object-fit:cover; z-index:-1">
        <h1 class="text-white fw-bolder" style="text-shadow:3px 3px 4px black;letter-spacing:5px"><?php echo $category_id ?>
        </h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xl-3 d-none d-md-block d-lg-block mb-5" style="margin-top: 100px;">
                <div class="container-fluid">
                    <div class="card">
                        <article class="card-group-item">
                            <div class="card-header">
                                <h6 class="title">Category </h6>
                            </div>
                            <div class="filter-content">
                                <div class="card-body">

                                    <div class="form-group form-check">
                                        <input type="radio" class="form-check-input" id="all_products" value="All Products"
                                            name="cat_check" onchange="cat_filter(this.value)" <?php if ($category_id == 'All Products') {
                                                echo ('checked');
                                            } ?> style="cursor:pointer">
                                        <label class="form-check-label" for="all_products" style="cursor:pointer">All Products</label>
                                    </div>

                                    <?php
                                    $cat = mysqli_query($connection, 'SELECT * FROM categories');
                                    foreach ($cat as $data) {
                                        ?>
                                        <div class="form-group form-check">
                                            <input type="radio" class="form-check-input" id="check<?php echo $data['id'] ?>"
                                                value="<?php echo $data['c_name'] ?>" name="cat_check"
                                                onclick="cat_filter(this.value)" <?php if ($data['c_name'] == $category_id) {
                                                    echo ('checked');
                                                } ?> style="cursor:pointer">
                                            <label class="form-check-label" for="check<?php echo $data['id'] ?>"
                                                style="cursor:pointer"><?php echo $data['c_name'] ?></label>
                                        </div>
                                        <?php
                                    }
                                    ?>

                                </div>
                            </div>
                        </article>
                        <article class="card-group-item">
                            <div class="card-header">
                                <h6 class="title">Price Range </h6>
                            </div>
                            <div class="filter-content">
                                <div class="card-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label>Min</label>
                                            <input type="number" class="form-control" id="price_filter_min"
                                                placeholder="$0">
                                        </div>
                                        <div class="form-group col-md-6 text-right">
                                            <label>Max</label>
                                            <input type="number" class="form-control" placeholder="$1,000"
                                                id="price_filter_max">
                                        </div>
                                        <div class="form-group col-md-6 mt-2">
                                            <button class="btn btn-outline-success w-100" id="filter_price">Filter</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <!-- filter -->
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-xl-9">
                <div class="big-product">
                    <div class="product-flex">
                   

                        <?php
                        if ($category_id == "All Products") {
                            $sql = mysqli_query($connection, 'SELECT * FROM product');
                        } else {
                            $sql = mysqli_query($connection, 'SELECT * FROM product WHERE p_category="' . $category_id . '"');
                        }
                        if (mysqli_num_rows($sql) > 0) {
                            foreach ($sql as $data) {
                                ?>
                                <div class="product-one" style="width: 200px;">
                                    <div class="product-image" style="width: 200px;height: 200px;">
                                        <img style="width: 100%;height: 100%;" src="product_img/<?php echo $data['p_img'] ?>"
                                            alt="">
                                        <div class="overlay">
                                            <a href="detail.php?product_id=<?php echo $data['id'] ?>" class="text-dark"><i
                                                    class="fas fa-shopping-bag"></i></a>
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
                        } else {
                            echo '<h3 class="text-center p-5">No products found</h3>';
                        }


                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    echo "<div class='container-fluid d-flex justify-content-center align-items-center p-5 mt-5 min-vh-100'>
    <h1 class='text-center'>Page not found</h1></div>";
}
?>

<?php
include 'footer.php';
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function cat_filter(value) {
        window.location.href = "shop.php?category_id=" + value
    }
</script>