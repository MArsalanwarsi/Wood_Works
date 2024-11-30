<?php
session_start();


$connection = mysqli_connect('sql212.infinityfree.com', 'if0_37514017', 'masterwoodworks', 'if0_37514017_project');

function conn()
{
    $connection = mysqli_connect('sql212.infinityfree.com', 'if0_37514017', 'masterwoodworks', 'if0_37514017_project');
    return $connection;
}
// Admin Insert Data
if (isset($_POST['add_category'])) {
    // Get category name from POST request
    $category_name = $_POST['category_name'];

    // Check if the category name is empty
    if (empty($category_name)) {
        echo "<script>
        alert('Category Name is Required');
        location.assign('Dashboard/categories.php');
        </script>";
    }
    // Check if a file has been uploaded
    else if (empty($_FILES['img']['name'])) {
        echo "<script>
        alert('Please select a file to upload');
        location.assign('Dashboard/categories.php');
        </script>";
    } else {
        $img = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $destination = "category_img/" . $img; // Use basename for security
        $extension = pathinfo($img, PATHINFO_EXTENSION); // Ensure extension check is case-insensitive

        // Define allowed image extensions
        $allowed_extensions = ['png', 'jpg', 'jpeg', 'jfif', 'webp', 'PNG', 'JPG', 'JPEG', 'JFIF', 'WEBP'];

        // Check if the file is a valid image type
        if (in_array($extension, $allowed_extensions)) {
            // Attempt to move the uploaded file to the destination folder
            if (move_uploaded_file($tmp_name, $destination)) {
                // Insert data into database
                $insert = mysqli_query($connection, "INSERT INTO categories (c_name, c_img) VALUES ('$category_name', '$img')");

                if ($insert) {
                    echo "<script>
                        alert('Category Added Successfully');
                        location.assign('Dashboard/categories.php');
                    </script>";
                } else {
                    echo "<script>
                        alert('Failed to insert category into the database');
                        location.assign('Dashboard/categories.php');
                    </script>";
                }
            } else {
                echo "<script>
                    alert('Failed to upload file');
                    location.assign('Dashboard/categories.php');
                </script>";
            }
        } else {
            echo "<script>
                alert('Please upload a valid image');
                location.assign('Dashboard/categories.php');
            </script>";
        }
    }
}

//Insert Product
if (isset($_POST['add_product'])) {
    if (empty($_FILES['img']['name'])) {
        echo "<script>
        alert('Please select a file to upload');
        location.assign('product.php');
        </script>";
    } elseif (empty($_POST['category_name']) || empty($_POST['product_name']) || empty($_POST['product_desc'])) {
        echo "<script>
        alert('Please fill all the fields');
        location.assign('Dashboard/product.php');
        </script>";
    } else {
        $img = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        $destination = "product_img/" . $img;
        $extension = strtolower(pathinfo($img, PATHINFO_EXTENSION));

        if (in_array($extension, ['png', 'jpg', 'jpeg', 'jfif', 'webp'])) {
            if (move_uploaded_file($tmp_name, $destination)) {
                $Product_name = $_POST['product_name'];
                $Product_description = $_POST['product_desc'];
                $Product_category = $_POST['category_name'];
                $escaped_description = mysqli_real_escape_string($connection, $Product_description);
                $insert = mysqli_query($connection, "INSERT INTO product (p_name, p_img, p_category, p_description) VALUES ('$Product_name', '$img', '$Product_category', '$escaped_description')");
                echo "<script>
                alert('Product Uploaded Successfully');
                location.assign('Dashboard/product.php');
                </script>";
            } else {
                echo "<script>
                alert('File Not Uploaded');
                location.assign('Dashboard/product.php');
                </script>";
            }
        } else {
            echo "<script>
            alert('Please Upload Only Image File');
            location.assign('Dashboard/product.php');
            </script>";
        }
    }
}
