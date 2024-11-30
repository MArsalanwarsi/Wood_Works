<?php
include "../connect.php";
include 'header.php';

// Handle product deletion
if (isset($_POST['delete_product'])) {
    $product_id = $_POST['product_id'];
    $deleteQuery = "DELETE FROM product WHERE id='$product_id'";
    mysqli_query($connection, $deleteQuery);
}

// Handle product update
if (isset($_POST['update_product'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_desc = $_POST['product_desc'];
    $category_name = $_POST['category_name'];
    $img = $_FILES['img']['name'];
    $escaped_description = mysqli_real_escape_string($connection, $product_desc);

    // Handle image upload
    if (!empty($img)) {
        move_uploaded_file($_FILES['img']['tmp_name'], "../product_img/" . $img);
       
        $updateQuery = "UPDATE product SET p_name='$product_name', p_description='$escaped_description', p_category='$category_name', p_img='$img' WHERE id='$product_id'";
    } else {
        $updateQuery = "UPDATE product SET p_name='$product_name', p_description='$escaped_description', p_category='$category_name' WHERE id='$product_id'";
    }

    mysqli_query($connection, $updateQuery);
}
?>

<style>
    .sidebar a:nth-child(3) {
        text-decoration: underline;
        text-underline-offset: 10px;
        color: grey;
        text-shadow: 2px 2px 1px #4b6cb7;
    }
</style>

<!-- Main Content -->
<div class="col-10 col-md-10 col-sm-12 col-lg-10">
    <div class="row mt-4">
        <!-- Table Section -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#insertProduct" class="btn btn-outline-light">
                            Add Product
                        </button>
                    </div>
                    <div class="card-body" style="overflow-x:auto">
                        <table class="table table-bordered" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product Name</th>
                                    <th>Product Category</th>
                                    <th>Product Description</th>
                                    <th>Product Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $fetchAllproduct = mysqli_query($connection, "SELECT * FROM product");
                                $sno = 1;
                                foreach ($fetchAllproduct as $data) {
                                ?>
                                    <tr>
                                        <td><?php echo $sno;
                                            $sno++; ?></td>
                                        <td><?php echo $data['p_name'] ?></td>
                                        <td><?php echo $data['p_category'] ?></td>
                                        <td><?php echo substr($data['p_description'], 0, 180) . ' ...';   ?></td>
                                        <td><img src="../product_img/<?php echo $data['p_img'] ?>" style="width: 100px;height:100px;border-radius:50%" alt="Product Image"></td>
                                        <td class="d-flex gap-2 justify-content-center align-items-center">
                                            <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#updateProduct<?php echo $data['id']; ?>">Update</button>
                                            <form action="" method="POST" style="display:inline;">
                                                <input type="hidden" name="product_id" value="<?php echo $data['id']; ?>">
                                                <button type="submit" name="delete_product" class="btn btn-outline-danger">Delete</button>
                                        </td>
                                    </tr>
                                    </form>



                                    <!-- Update Modal -->
                                    <div class="modal fade" id="updateProduct<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="updateProductLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="modal-content">
                                                    <div class="modal-header text-bg-primary">
                                                        <h5 class="modal-title" id="updateProductLabel">Update Product</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <input type="hidden" name="product_id" value="<?php echo $data['id']; ?>">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12 p-2">
                                                                <input type="text" class="form-control" name="product_name" value="<?php echo $data['p_name']; ?>" required>
                                                            </div>
                                                            <div class="col-sm-12 p-2">
                                                                <input type="text" class="form-control" name="product_desc" value="<?php echo $data['p_description']; ?>" required>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <select class="form-control" name="category_name" required>
                                                                    <option value="">Select Category</option>
                                                                    <?php
                                                                    $allCompany = mysqli_query($connection, "SELECT * FROM categories");
                                                                    foreach ($allCompany as $category) {
                                                                        $selected = ($category['c_name'] == $data['p_category']) ? 'selected' : '';
                                                                        echo "<option value='{$category['c_name']}' $selected>{$category['c_name']}</option>";
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-sm-12 p-2">
                                                                <input type="file" name="img" class="form-control">
                                                                <small>Leave blank to keep the current image.</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="update_product" class="btn btn-primary">Update Product</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Insert Modal -->
        <div class="modal fade" id="insertProduct" tabindex="-1" aria-labelledby="insertProductLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="../connect.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-content">
                        <div class="modal-header text-bg-primary">
                            <h5 class="modal-title" id="insertProductLabel">Add Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group row">
                                <div class="col-sm-12 p-2">
                                    <input type="text" class="form-control" name="product_name" placeholder="Product Name" required>
                                </div>
                                <div class="col-sm-12 p-2">
                                    <input type="text" class="form-control" name="product_desc" placeholder="Description" required>
                                </div>
                                <div class="col-sm-12">
                                    <select class="form-control" name="category_name" required>
                                        <option value="">Select Category</option>
                                        <?php
                                        $allCompany = mysqli_query($connection, "SELECT * FROM categories");
                                        foreach ($allCompany as $data) {
                                        ?>
                                            <option value="<?php echo $data['c_name'] ?>">
                                                <?php echo $data['c_name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-sm-12 p-2">
                                    <input type="file" name="img" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>