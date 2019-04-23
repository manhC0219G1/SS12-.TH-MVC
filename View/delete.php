<h1>Bạn chắc chắn muỗn xóa khách hàng này?</h1>
id'];
<h3><?php echo $student->name; ?></h3>

<form action="./index.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $student->id; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="index.php">Cancel</a>
    </div>
</form>