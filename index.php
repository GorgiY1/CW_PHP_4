<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User form</title>
</head>
<body>
<?php
if ( $_FILES && $_FILES [ "filename" ][ "error" ]== UPLOAD_ERR_OK)
{
   $name = $_FILES [ "filename" ][ "name" ];
   move_uploaded_file ( $_FILES [ "filename" ][ "tmp_name" ], $name );
   echo "Файл завантажений" ;
}
?>
<h2> Завантаження файлу </h2>
<form method = "post" enctype = "multipart/form-data" >
Виберіть файл: <input type = "file" name = "filename" size = "10"/><br/><br/>
<input type = "submit" value = "Завантажити" />
</form >
    <?php if(isset($_GET["users"])){
    $users = $_GET["users"];
    foreach ($users as $user) {
        echo "<p>$user</p>";
    }
} ?>

<?php
if ( isset ( $_POST [ "course" ]))
{
   $course = $_POST [ "course" ];
   echo $course ;
}
?>
<h3>Форма введення даних</h3>
<form method="POST">
    <select name="course" size="1">
        <option value="ASP.NET">ASP.NET</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">RUBY</option>
        <option value="Python">Python</option>
    </select>
    <input type="submit" value="Надіслати">
</form>

    <?php if(!isset($_GET["login"]) and !isset($_GET["password"])) {?>
    <form action="" method="get">
        <p>Login: <input type="text" name="login"></p>
        <p>Password: <input type="password" name="password"></p>
        <p><input type="submit" value="send"></p>
    </form>
    <?php } else { ?>
        <!-- <h1><?php echo htmlentities($_GET["login"]); ?></h1>
        <h1><?php echo htmlentities($_GET["password"]); ?></h1> -->
        <!-- <h1><?php echo htmlspecialchars($_GET["login"]); ?></h1>
        <h1><?php echo htmlspecialchars($_GET["password"]); ?></h1> -->

        <h1><?php echo strip_tags($_GET["login"]); ?></h1>
        <h1><?php echo strip_tags($_GET["password"]); ?></h1>
    <?php }?>

</body>
</html>