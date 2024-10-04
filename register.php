
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="#"  method="post">
    <label for="">Name</label>    
    <input type="text" name="name">
    <br>
    <label for="">Email</label>    
    <input type="text" name="email">
    <br>
    <label for="">Age</label>    
    <input type="text" name="age">
    <br>
    <br>    
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
    $conn = mysqli_connect("localhost","root","","ahmeddb")or die("database error");
    if(isset($_POST["submit"])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $query = "INSERT INTO tbluser (name, email, age) VALUES ('$name','$email','$age')";
    $result= mysqli_query($conn,$query);
    if($result){
        echo ("insert data succesfully");
    }
    else{
        echo ("Not inserted data");
    }

    }

    

    ?>              