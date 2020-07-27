<div class="card mb-3" >
    <div class="card-header">
        <h4 align="right" style="color: darkred"> افزودن دسته بندی</h4>
    </div>
    <div class="card-body">
        <span style="float: right">
        <form action="action.php?add-cat" method="post" >
            <input name="cat" type="text" id=""
                   placeholder="دسته بندی را وارد کنید">
            <input value="افزودن" type="submit" class="btn btn-primary btn-lg">
        </form>
        </span>
    </div>
</div>
<div class="card mb-3">
    <div class="card-header">
        <h4 align="right" style="color: darkred"> دسته بندی ها</h4>
    </div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table float-right" style="direction: rtl">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>حذف</th>
            </tr>
            </thead>
            <tbody>
            <?php
             $num=1;
             $cat_query=mysqli_query($connection,
                 "SELECT * FROM category");
             while($cat_row=mysqli_fetch_array($cat_query)):
            ?>
            <tr>
                <td><?php echo $num++; ?></td>
                <td><?php echo $cat_row['cat_name']; ?></td>
                <td> <a href="action.php? delete_cat=
                <?php echo $cat_row['id']; ?>"
                        class="btn btn-danger">حذف</a> </td>
            </tr>
            <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>
</div>