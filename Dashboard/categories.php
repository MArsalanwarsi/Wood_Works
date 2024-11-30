<?php
include '../connect.php';
include 'header.php';
?>
<style>
    .sidebar a:nth-child(2) {
        text-decoration: underline;
        text-underline-offset: 10px;
        color: grey;
        text-shadow: 2px 2px 1px #4b6cb7;
    }
</style>

<!-- Main Content -->
<div class="col-10 col-md-10 col-sm-10 col-lg-10">
    <div class="row mt-4">
    </div>

    <!-- Table Section -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addcategoryies" class="btn btn-outline-light">
                        Insert Category
                    </button>

                    <!-- ========== INSERT Section ========== -->
                    <div class="modal fade" id="addcategoryies" tabindex="-1" aria-labelledby="addcategoryiesLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="../connect.php" method="POST" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h5 class="modal-title" id="addcategoryiesLabel">Add Category</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <div class="col-sm-12 p-2">
                                                <input type="text" class="form-control" name="category_name" id="new_name" placeholder="Category Name" required>
                                            </div>
                                            <div class="col-sm-12 p-2">
                                                <input type="file" name="img" class="form-control" id="new_file" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="add_category" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sno = 1;
                            $result = mysqli_query($connection, 'SELECT * FROM categories');
                            foreach ($result as $data) {
                            ?>
                                <tr>
                                    <td><?php echo $sno++; ?></td>
                                    <td><?php echo $data['c_name']; ?></td>
                                    <td>

                                        <img src="../category_img/<?php echo $data['c_img']; ?>" style="width: 100px;height:100px;border-radius:50%" alt="Category Image">
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#update_<?php echo $data['id'] ?>" style="margin-right:10px;">Update</button>
                                        <button class="btn btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete_<?php echo $data['id'] ?>">Delete</button>
                                    </td>
                                </tr>
                                <!-- Update  -->


                                <div class="modal fade" id="update_<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="categories.php" method='post' enctype="multipart/form-data">
                                            <div class="modal-content ">
                                                <div class="modal-header text-bg-primary">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <div class="col-12 p-2">
                                                            <label for="category_name">Category Name</label>
                                                            <input type="hidden" name='id' value="<?php echo $data['id'] ?>">
                                                            <input type="text" class="form-control " name="category_name"
                                                                value="<?php echo $data['c_name'] ?>" id="category_name"
                                                                placeholder="Category Name">
                                                        </div>

                                                        <div class="col-4 p-2">
                                                            <label for="file_update">Upload Image</label>
                                                            <input type="text" name="img" class="form-control " placeholder="Upload New Image" onclick="type='file'" id="file_update">
                                                        </div>
                                                    </div>


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="update_category" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <!-- Update  -->
                                <!-- Delete -->
                                <div class="modal fade" id="delete_<?php echo $data['id'] ?>" tabindex="-1" role="dialog"
                                    aria-labelledby="delete_<?php echo $data['id'] ?>" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form action="categories.php" method='POST' enctype="multipart/form-data">
                                            <div class="modal-content ">
                                                <div class="modal-header bg-danger">
                                                    <h5 class="modal-title" id="delete_<?php echo $data['id'] ?>">Delete Company</h5>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name='delete_id' value="<?php echo $data['id'] ?>">
                                                    <p>Are you sure you want to delete this Company ?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="delete_company" class="btn btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <!-- Delete -->
                            <?php
                            }
                            ?>
                            <?php
                            if (isset($_POST['update_category'])) {
                                $id = $_POST['id'];
                                $category_name = $_POST['category_name'];

                                if (empty($category_name)) {
                                    echo "<script>alert('Please Enter Category Name'); location.assign('categories.php');</script>";
                                } else {
                                    if (!empty($_FILES['img']['name'])) {
                                        $img = $_FILES['img']['name'];
                                        $tmp_name = $_FILES['img']['tmp_name'];
                                        $destination = "../category_img/" . $img;
                                        $extension = pathinfo($img, PATHINFO_EXTENSION);
                                        $allowed_extensions = ['png', 'jpg', 'jpeg', 'jfif', 'webp', 'PNG', 'JPG', 'JPEG', 'JFIF', 'WEBP'];

                                        // Check if file extension is allowed
                                        if (in_array($extension, $allowed_extensions)) {
                                            // Move the uploaded file
                                            if (move_uploaded_file($tmp_name, $destination)) {
                                                // Update query with file upload
                                                $update = mysqli_query($connection, "UPDATE categories SET c_name = '$category_name', c_img = '$img' WHERE id = '$id'");
                                                if ($update) {
                                                    echo "<script>alert('Category Updated successfully'); location.assign('categories.php');</script>";
                                                } else {
                                                    echo "<script>alert('Database Update Failed'); location.assign('categories.php');</script>";
                                                }
                                            } else {
                                                echo "<script>alert('Failed to Upload File, try again'); location.assign('categories.php');</script>";
                                            }
                                        } else {
                                            echo "<script>alert('File Format Not Supported'); location.assign('categories.php');</script>";
                                        }
                                    } else {
                                        // Update query without file upload
                                        $update = mysqli_query($connection, "UPDATE categories SET c_name = '$category_name' WHERE id = '$id'");
                                        if ($update) {
                                            echo "<script>alert('Category Updated successfully'); location.assign('categories.php');</script>";
                                        } else {
                                            echo "<script>alert('Database Update Failed'); location.assign('categories.php');</script>";
                                        }
                                    }
                                }
                            }
                            if (isset($_POST['delete_company'])) {
                                include "../config.php";
                                $id = $_POST['delete_id'];
                                $delete = mysqli_query($connection, "DELETE FROM categories WHERE id ='$id'");
                            ?>
                                <script>
                                    alert('categories Deleted successfully');
                                    location.assign('categories.php');
                                </script>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>