<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $countries=[
        "Bangladesh"=>"Dhaka",
        "srilanka"=>"Colombo",
        "Uganda"=>"Campala",
        "China"=>"Beijing",
    ];
    foreach ($countries as $country => $capital) {
        echo "$country->$capital<br>"; 
    }

    ksort($countries);
    echo "<hr>";
    foreach($countries as $country=>$capital){
        echo "$country->$capital<br>";
    }



    
    ?>
    
</body>
</html>