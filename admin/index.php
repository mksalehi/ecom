<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin panel</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>

</head>
<body>
<nav class="nav top-bar">
<h2 class="float-left">Admin Panel</h2>
</nav>
   
   <div class="container-fluid">
        <div class="row admin-panel">
            <div class="col-2">
                <div class="list-item">
                    <a href="index.php">پیشخوان </a>
                    <a href="../">مشاهده فروشگاه</a>
                    <a href="index.php?add-new-product">محصول جدید</a>
                    <a href="index.php?order">سفارشات</a>
                    <a href="index.php?cats">دسته بندی ها</a>
                    <a href="index.php?comments">مدیریت نظرات</a>
                    <a href="#">خروج</a>
                </div>
            </div>
            <div class="col-10">
            <?php
            if(isset($_GET['add-new-product'])){
                echo '<h1>add-new-product</h1>';

            }elseif(isset($_GET['order'])){
                require_once 'orders.php';

            }elseif(isset($_GET['cats'])){
                echo '<h1>cats</h1>';

            }elseif(isset($_GET['comments'])){
                require_once 'comments.php';

            }else{

            }
            ?>


                <!-- table list -->
<div class="card mb-3">
    <div class="card-header">
        لیست نمایش
    </div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table float-right" style="direction: rtl">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>تصویر</th>
                <th>نام</th>
                <th>دسته بندی</th>
                <th>قیمت</th>
                <th>مشاهده</th>
                <th>حذف</th>
                <th>ویرایش</th>

            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td><img src="../uploads/1.jpg" width="100px" height="70px"></td>
                <td>تست</td>
                <td>تست</td>
                <td>100</td>
                <td><a href="#" class="btn btn-primary">مشاهده</a></td>
                <td>
                    <a href="#" class="btn btn-danger">حذف</a>
                </td>
                <td>
                    <a href="#" class="btn btn-warning">ویرایش</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>




                <!-- products from -->
<div class="card mb-3">
    <div class="card-header">
        فرم افزودن و ویرایش محصول
    </div>
<div class="card-body">
        <!-- form area -->
<form>
    <div class="row">
        <div class="col-md-8">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="عنوان محصول">
            </div>
            <div class="form-group">
                <textarea cols="30" rows="10" class="form-control" placeholder="توضیحات محصول"></textarea>
            </div>
            <div class="form-group row">
                <div class="col-xs-3">
                    <input type="number" class="form-control" style="margin-left: 14px;" size="60" placeholder="قیمت">
                </div>
            </div>
        </div><!--Main Content-->
        <aside class="col-md-4">
            <div class="form-group">
                <input type="reset" class="btn btn-warning btn-lg" value="پاک کردن">
                <input type="submit" class="btn btn-primary btn-lg" value="افزودن">
            </div>
            <div class="form-group">
                <select class="form-control">
                    <option value="">دسته بندی محصول</option>
                </select>
            </div>
            <div class="form-group">
                <input type="file" class="form-control-file">
            </div>
        </aside><!--SIDEBAR-->
    </div>
</form>

                        <!-- end form -->
</div>
</div>
                <!-- end product form -->

            </div>
        </div>
   </div>
</body>
</html>