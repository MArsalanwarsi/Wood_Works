<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for premium dashboard */
        body {
            background-color: #f8f9fa;
        }

        /* Navbar */
        .navbar {
            background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
        }

        .navbar-brand {
            font-size: 1.5rem;
            color: white;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: white;
            padding: 0.75rem 1rem;
        }

        .navbar-nav .nav-link:hover {
            background-color: #3c4a69;
            border-radius: 0.25rem;
        }

        /* Sidebar */
        .sidebar {
            min-height: 100vh;
            max-height: auto;
            background-color: #212529;
            color: white;
            padding-top: 20px;
            transition: all 0.3s;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px;
            margin-top: 20px;
            display: block;
            font-size: 1.1rem;
        }

        .sidebar a:hover {
            background-color: #343a40;
            padding-left: 20px;
            transition: all 0.3s;
        }

        /* Collapsible Sidebar */
        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar.collapsed a {
            text-align: center;
            padding-left: 0;
        }

        .sidebar.collapsed a i {
            display: block;
            font-size: 1.5rem;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        /* .card:hover {
            transform: translateY(-5px);
        } */

        .card-header {
            background: linear-gradient(90deg, #4b6cb7 0%, #182848 100%);
            color: white;
            border-bottom: none;
        }

        /* Table */
        .table th {
            background-color: #4b6cb7;
            color: white;
        }

        .hide_text {
            display: none !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="d-flex gap-1">
                <button class="navbar-toggler d-lg-none d-md-none d-xl-none d-block" type="button" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Admin Dashboard</a>
                <button class="navbar-toggler d-lg-block d-md-block d-xl-block d-none px-2" id="sidebar_collapse_btn"> <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- off canvas -->


    <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header ">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="container-fluid ">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-12 sidebar">
                    <a href="index.php"><i class="bi bi-house"></i> Dashboard </a>
                    <a href="categories.php"><i class="bi bi-graph-up"></i> Add Categories </a>
                    <a href="product.php"><i class="bi bi-file-earmark-text"></i> Add Products </a>
                    <a href="../index.php"><i class="bi bi-file-earmark-text"></i> Website </a>
                </div>
            </div>
        </div>
  </div>
</div>
    <!-- offcanvas end -->
    <!-- Container -->
    <div class="container-fluid ">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar d-none d-md-block d-lg-block d-xl-block" id="sidebar">
                <a href="index.php"><i class="bi bi-house"></i><span class="side_text d-none d-md-inline  d-lg-inline d-xl-inline"> Dashboard </span></a>
                <a href="categories.php"><i class="bi bi-graph-up"></i><span class="side_text d-none d-md-inline  d-lg-inline d-xl-inline"> Add Categories </span></a>
                <a href="product.php"><i class="bi bi-file-earmark-text"></i><span class="side_text d-none d-md-inline  d-lg-inline d-xl-inline"> Add Products </span></a>
                <a href="../index.php"><i class="bi bi-file-earmark-text"></i><span class="side_text d-none d-md-inline  d-lg-inline d-xl-inline"> Website </span></a>
               
            </div>