<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<input type="text" name="number" placeholder="enter number"> <br>
<input type="submit" value="submit" name="submit">
</form>
    <?php
    if(isset($_POST["submit"])){
        $number=$_POST["number"];
        $me=explode(",",$number);
    
    $max=$me[0];
    $min=$me[0];

    for($i=1;$i<count($me);$i++){
        if($me[$i]>$max){
            $max=$me[$i];
};
        if($me[$i]<$min){
            $min=$me[$i];
        }
    }
    echo $max;
    echo $min;
}
    
    
    
    ?>
</body>
</html>