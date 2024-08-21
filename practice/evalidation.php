<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="email" id=""><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
       if(isset($_POST['submit'])){
        $email=$_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "not ok";
        }
        else{
            echo "ok";
        }
       } 
    
    
    ?>
</body>
</html>