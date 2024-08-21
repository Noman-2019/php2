<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <select name="stid" >
            <option >Select one</option>
            <option value="1">noman</option>
            <option value="2">men</option>
            <option value="3">superMan</option>
            <option value="4">maan</option>
            <option value="5">kaan</option>
            <option value="6">chaan</option>
        </select><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
    if(isset($_REQUEST['submit'])){
        $stid=$_REQUEST['stid'];
        $obj =new student('student.txt');
        $obj->meth($stid);
    }
        class student{
            public $data;
            public $dat;
            public function __construct($file){
                $this->data=$file;
                $this->dat=file($this->data);
            }   
            public function meth($stid){
                foreach($this->dat as $dataa){
                    $line=explode("|",$dataa);
                    list($id,$name,$score,$result)=$line;
                    if($id==$stid){
                        $output="ID :".$id ."<br>".
                        "Name :".$name ."<br>".
                        "Score:".$score ."<br>".
                        "Result :".$result;
                        break;
                    }
                }
                echo $output;
            }  
        }  
    ?>
</body>
</html>