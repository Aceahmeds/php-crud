
<?php
    $conn = mysqli_connect("localhost","root","","ahmeddb") or die("database error");
    
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT * FROM tbluser WHERE id = $id";
        $result = mysqli_query($conn, $query);
     while($data = mysqli_fetch_array($result)) {
        $name = $data[1];
        $email = $data[2];
        $age = $data[3];
     }
    
    }
if(isset($_POST["updatebtn"])) {
    $id = trim($_GET['id']);
    $name =trim($_POST['name']);
    $email = trim($_POST['email']);
    $age = trim($_POST['age']);
    
    $query = "UPDATE tbluser SET name='$name', email='$email', age='$age' WHERE `id` = $id";
    $result = mysqli_query($conn, $query);
    
    if($result) {
        // echo "Update data successfully";
        header("location:show.php");
        exit();
    } else {
        echo "Not inserted data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <label for="">Name</label>    
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
        <br>
        <label for="">Email</label>    
        <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>"> 
        <br>
        <label for="">Age</label>    
        <input type="text" name="age" value="<?php echo htmlspecialchars($age); ?>"> 
        <br><br>    
        <input type="submit" name="updatebtn" value="submit">
    </form>

</body>
</html>
