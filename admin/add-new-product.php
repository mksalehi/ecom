
<div  class="card mb-3" >
    <div class="card-header">
        <h4 align="right" style="color: darkred"> افزودن محصول جدید</h4>
    </div>
    <div class="card-body">
        <!-- form area -->

        <form action="action.php? add-new-product"
              method="post" enctype="multipart/form-data" style="text-align: right;" >
            <div class="row">

                <div class="col-md-8">

                    <div class="form-group">
                        <input style="text-align: right" type="text" name="title" class="form-control" placeholder="عنوان محصول">
                    </div>
                    <div class="form-group">
                        <textarea style="text-align: right" name="desc" cols="30" rows="10" class="form-control" placeholder="توضیحات محصول"></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-3">
                            <input style="text-align: right" type="number" name="price" class="form-control" style="margin-left: 14px;" size="60" placeholder="قیمت">
                        </div>

                    </div>

                </div><!--Main Content-->
                <aside class="col-md-4">
                    <div class="form-group">
                        <input type="reset" class="btn btn-warning btn-lg" value="پاک کردن">
                        <input type="submit" class="btn btn-primary btn-lg" value="افزودن">
                    </div>
                    <div class="form-group">
                        <select style="text-align: right" name="cat" class="form-control">
                            <?php
                            $query=mysqli_query($connection,
                                "SELECT * FROM category");
                            while($row=mysqli_fetch_array($query)):
                            ?>
                            <option value="<?php echo $row['id']; ?>">
                                <?php echo $row['cat_name']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input name="image" type="file" class="form-control-file">
                    </div>
                </aside><!--SIDEBAR-->
            </div>
        </form>


        <!-- end form -->
