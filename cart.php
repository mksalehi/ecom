<?php  require_once 'inc/config.php'; ?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" >

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li>
                        <form action="index.php" method="get">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control">
                                <button class="btn btn-primary" name="search-btn">Go</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php 

$_SESSION['userlogin'] = 'sdfsdfsddfd';
$session = $_SESSION;
$cart = [];
foreach($session as $keySession => $value){
    if(substr($keySession, 0, 5) == 'cart_'){
      $cart[$keySession] = $value;
    }
}

?>
    <div class="col-sm-12">
        <table class="table table-hover">


        <thead>

        <tr>
        <th>نام محصول</th>
        <th>تعداد</th>
        <th class="text-center">قیمت</th>
        <th class="text-center">قیمت کل</th>
        <th> </th>
        </tr>
        
        </thead>


        <tbody>


<?php foreach($cart as $item => $values):  ?>
        <tr>

            <td class="col-sm-8 col-md-6">
                <div class="media">
                <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                <div class="media-body">
                <h4 style="margin-left:10px;" class="media-heading"><a href="#"><?php echo $values['name']; ?></a></h4>
                </div>
                </div>
            </td>
            <td class="col-sm-1 col-md-1" style="text-align: center">
                <?php echo $values['quantity']; ?>
            </td>
            <td class="col-sm-1 col-md-1 text-center"><strong><?php  echo $values['price'] / $values['quantity']; ?></strong></td>
            <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $values['price']; ?></strong></td>
                


            <td class="col-sm-1 col-md-1">
                <a href="cartController.php?remove-cart=<?php echo $values['id'];  ?>" class="btn btn-danger">
                <span class="fa fa-remove">حذف </span>
                </a>
            
            </td>


            <td class="col-sm-1 col-md-1">
                <a href="cartController.php?add-to-cart=<?php echo $values['id'];  ?>" class="btn btn-warning">
                <span class="fa fa-remove">افزایش</span>
                </a>
            
            </td>

            <td class="col-sm-1 col-md-1">
                <a href="cartController.php?minus=<?php echo $values['id'];  ?>" class="btn btn-primary">
                <span class="fa fa-remove">کاهش</span>
                </a>
            
            </td>

        </tr>


<?php endforeach; ?>
    
        </tbody>
        </table>
        </div>

        <div class="row">
            <div class="col-md-3">
                <table class="table">
                    <tr>

                        <td><h5>جمع کل:</h5></td>
                        <td><?php
                            $price=array_column($cart,'price');
                            $price=array_sum($price);
                             echo $price; ?>ریال</td>
                        <td><a href="http://localhost:8181/ecom/Zsend.php" class="btn btn-primary">پرداخت</a></td>
                        </tr>

                </table>
            </div>
        </div>
    
<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
