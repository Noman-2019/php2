<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prime</title>
</head>
<body>
    <form action="" method="post" style="width: fit-content;">
        <fieldset>
            <legend>prime number</legend>
            <input type="number" name="num" placeholder="enter number"><br>
            <input type="submit" value="check" name="submit">
        </fieldset>
    </form>
<?php
if(isset($_POST['submit'])){
    $num=$_POST['num'];
    echo primecheck($num);
}
function primecheck($num){
    if($num==1){
    return $num." is not a prime number";
    }
   else if ($num==2){
return $num." is a prime number";
    }
    else{for($i=2;$i<$num;$i++){
        if($num%$i==0){
            return $num." is not a prime number";
        }
        }
        return $num." is a prime number";
    }
}



?>    
</body>
</html>