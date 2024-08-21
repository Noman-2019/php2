<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" style="width: fit-content;">
        <fieldset>
            <legend>emailvalidation</legend>
            <input type="text" name="user" placeholder="enter email"><br>
            <input type="submit" value="submit" name="submit">
        </fieldset>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $user=$_POST['user'];

        $pattern='/^[a-z0-9]+@[A-z]{4,8}$/';
        if(preg_match($pattern,$user)){
            echo "ok";}
            else  {
            echo "not ok";
        }
        }
    
    
    ?>
</body>
</html>