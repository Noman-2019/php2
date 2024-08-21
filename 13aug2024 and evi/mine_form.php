<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>

<body>
    <h1>Registration Form</h1>
    <?php

    if (isset($_POST['submit'])) {
        extract($_POST);

        $msz = 'name';
        $msz1 = 'add';
        $msz2 = '';
        $msz3 = '';
        $msz4 = '';
        $msz5 = '';

        if (empty($name) && empty($add) && empty($date) && empty($gender) && empty($district) && empty($hobby) ) {
            $error = "Filled up this field";
        }
        // if (empty($add)) {
        //     $msz1 = "Filled up this field";
        // }
        // if (empty($date)) {
        //     $msz2 = "Filled up this field";
        // }
        // if (empty($gender)) {
        //     $msz3 = "Filled up this field";
        // }
        // if (empty($district)) {
        //     $msz4 = "Filled up this field";
        // }
        // if (empty($hobby)) {
        //     $msz5 = "Filled up this field";
        // } 
        if(!empty($name) & !empty($add) & !empty($date) & !empty($gender) & !empty($district) & !empty($hobby)) {
            echo " <h2 style=color:green>Validation ok</h2>";
        }
        // foreach($error as $err){
        //     echo $err;
        // }
    }


    ?>

    <form action="" method="post">
        Name: <br>
        <input type="text" name="name"><br>
        <?php if (isset($_POST['submit'])) {
            echo "<h4 style=color:red>$error</h4>";
        } ?>

        Address: <br>
        <textarea name="add" ></textarea><br>
        <?php if (isset($_POST['submit'])) {
            echo "<h4 style=color:red>$error</h4>";
        } ?>

        Date of birth : <br>
        <input type="date" name="date"><br>
        <?php if (isset($_POST['submit'])) {
            echo "<h4 style=color:red>$error</h4>";
        } ?>

        Gender : <br>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female <br>
        <?php if (isset($_POST['submit'])) {
            echo "<h4 style=color:red>$error</h4>";
        } ?>

        District: <br>
        <select name="district">
            <option value="">Select one</option>
            <option value="Cumilla">Cumilla</option>
            <option value="Dhaka">Dhaka</option>
            <option value="Bhola">Bhola</option>
        </select><br>
        <?php if (isset($_POST['submit'])) {
            echo "<h4 style=color:red>$error</h4>";
        } ?>

        Hobbies: <br>
        <input type="checkbox" name="hobby" value="cricket">Cricket
        <input type="checkbox" name="hobby" value="Football">Football
        <input type="checkbox" name="hobby" value="Tennies">Tennies <br>
        <?php if (isset($_POST['submit'])) {
            echo "<h4 style=color:red>$error</h4>";
        } ?>

        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>