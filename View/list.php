<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        width: 100%;
       border-collapse: collapse;
    }
</style>
<!--<a href="View/create.php?page=create">ADD STUDENT</a>-->
<a href="index.php?page=add">Thêm mới</a>
    <body>
    <table border="1">
        <caption>LIST STUDENTS</caption>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>phone</th>
            <th>email</th>
            <th>ACTION</th>
        </tr>
        <?php foreach ($listStudents as $index => $student): ?>
            <tr>
                <td><?php echo $student['id'] ?></td>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo $student['phone'] ?></td>
                <td><?php echo $student['email'] ?></td>
                <td>
                    <div>
                    <a href="index.php?page=update">UPDATE</a>
                    </div>
                    <a href="index.php?page=delete">DELETE</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </body>
</html>