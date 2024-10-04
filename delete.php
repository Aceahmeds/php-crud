<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php
    $conn = mysqli_connect("localhost","root","","ahmeddb");
    if(isset($_POST["deletebtn"])){
        $id = $_POST["id"];
        $query = "delete from tbluser where id=$id";
        $result = mysqli_query($conn,$query);
        if($result){
            // echo "delete succesfully";
            header("location:show.php");
            exit();
        }
        else{
            echo "Not deleted";
        }
    }

?>
    <form action="" method="post">
        <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id" >
        <input type="submit" value="Yes" name="deletebtn">
    <a href="show.php">No</a>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>