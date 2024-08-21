<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form enctype="multipart/form-data" method="post">
    <fieldset>
        <legend>file photo upload</legend>
        <input type="file" name="photo" id=""> <br>
        <input type="submit" value="submit" name="submit">
    </fieldset>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $photo=$_FILES['photo'];
        $obj1= new file($photo);
        $obj1->upload();
    }
    class file{
        public $image;
        public $name;
        public $tmp;
        public $size;
        public $ext;
        public function __construct($x){
            $this->image=$x;
            $this->name=$this->image['name'];
            $this->tmp=$this->image['tmp_name'];
            $this->size=$this->image['size'];
            $filedata=pathinfo($this->name);
            $this->ext=strtolower($filedata['extension']);
        }
        public function upload(){
            $upload='photo/'.$this->name;
            $allow_size=307200;
            $allowed_ext=["jpg","jpeg","png"];
            $error=[];
            if($this->size>$allow_size){
                $error[]="upto 300kb allowed";
            }
           if(!in_array($this->ext,$allowed_ext)){
            $error[]="only jpeg,jpg,png file are allowed";
           } 
           if(count($error)>0){
            foreach($error as $err){
                echo $err."<br>";
            }
           }
           else{
            $status=move_uploaded_file($this->tmp,$upload);
                if($status)echo "uploaded successfully";
                
            }
           }
        }
?>
</body>
</html>