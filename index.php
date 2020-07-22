<?php  require_once 'inc/config.php'; ?>
<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>فروشگاه اینترنتی آوارین</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">فروشگاه اینترنتی آوارین</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">درباره ما</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">پنل مدیریت</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">تماس با ما</a>
                    </li>
                    <li>
                        <form action="index.php" method="get">
                            <div class="input-group">
                                <input type="text" name="search"
                                       class="form-control">
                                <button class="btn btn-primary"
                                        name="search-btn">جستجو</button>
                            </div>

                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container" >

        <div class="row">

            <div class="col-lg-3 " style="text-align: right">

                <h1 class="my-4" >دسته بندی ها</h1>
                <div class="list-group">

                    <?php
                    $query=mysqli_query($connection,"SELECT * FROM category");
                    while($row=mysqli_fetch_array($query)):
                    ?>
                        <a href="index.php?cat=<?php echo $row['id']; ?>" class="list-group-item" >
                            <?php echo $row['cat_name'];  ?></a>
                    <?php
                    endwhile;
                    ?>

                </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">
                <br>
                <div class="row">
                    <?php
                    if(isset($_GET['search-btn'])){
                      $search=$_GET['search'];
                      $query=mysqli_query($connection,
                        "SELECT * FROM products WHERE title 
                        LIKE '%$search%' OR description LIKE '%$search%'OR
                        price LIKE '%$search%' ");

                    }elseif(isset($_GET['cat'])){
                       $cat=$_GET['cat'];
                       $query=mysqli_query($connection,"SELECT * FROM products WHERE cat_id='$cat'");

                    }else{

                        $query = mysqli_query($connection, "SELECT * FROM products");
                    }
                    while($row=mysqli_fetch_array($query)):
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="inc/uploads/<?php echo $row['image']; ?>" alt=""></a>
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a href="#"> <?php echo $row['title']; ?></a>
                                </h4>
                                <h5><?php echo $row['price']; ?>ریال </h5>
                                <p class="card-text">
                                    <?php echo $row['description'] ?>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">افزودن به سبد</a>
                                <a href="single.php?id=<?php echo $row['id']; ?>" class="btn btn-success">توضیحات</a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    <br>
       <div class="row">
           <div class="col-md-12">
                <ul class="pagination pull-left pagination-lg paging-me">
        <li class="btn btn-primary active"><a href="#">1</a></li>
        <li class="btn btn-primary active"><a href="#">2</a></li>
        <li class="btn btn-primary active"><a href="#">3</a></li>
    </ul>
           </div>
       </div>
    <br>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Avariyan 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
