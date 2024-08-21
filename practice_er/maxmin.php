<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>maxmin</title>
</head>
<body>
    <form action="" method="post" style="width: fit-content;">
        <fieldset>
            <legend>maxmin</legend>
            <input type="text" name="num" placeholder="enter numbers"> <br>
            <input type="submit" value="check" name='submit'>
        </fieldset>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $num=$_POST['num'];
        $me=explode(",",$num);
    
        $max=$me[0];
        $min=$me[0];

        for($i=0;$i<count($me);$i++){
            if($me[$i]>$max){
                $max=$me[$i];
            }
            if($me[$i]<$min){
                $min=$me[$i];
            }
        }
        echo "among $num <br>";
        echo "$max is the largest and <br>";
        echo "$min  is the smallest";
    
    }
    
    ?>
</body>
</html>