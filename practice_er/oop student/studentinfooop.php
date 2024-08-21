<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <select name="stid">
        <option value="">Choose one</option>
        <option value="1">Ami</option>
        <option value="2">tumi</option>
        <option value="3">sey</option>
        <option value="4">tara</option>
    </select>
    <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $stid=$_POST['stid'];
        $obj = new students('info.txt');
        $obj->gilty($stid);
    }
    class students{
        public $data;
        public $arraydata;
        public function __construct($x){
            $this->data=$x;
            $this->arraydata=file($this->data);

        }
        public function gilty($stid){
            foreach ($this->arraydata as $data) {
                $line=explode("|",$data);
                list($id,$name,$score,$result)=$line;
                if($id==$stid){
                    $output=$id.$name.$score.$result;
                }

            }
            echo $output;
        }
    }
    
    
    
    ?>
</body>
</html>