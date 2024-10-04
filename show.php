<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  
  <table class="table" border="2">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
  <?php
    $conn = mysqli_connect("localhost","root","","ahmeddb");
$query= "select * from tbluser";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){

    while($data = mysqli_fetch_assoc($result)){
        echo '<tr>';
       echo '<th scope="row">'.$data["id"].'</th>';
       echo '<td>'.$data["name"].'</td>';
       echo '<td>'.$data["email"].'</td>';
       echo '<td>'.$data["age"].'</td>';
       echo '<td>'.'<a href="Delete.php?id='.$data["id"].'">Delete</a>'.'<td>'. '<td>'.'<a href="Update.php?id='.$data["id"].'">Update</a>'.'<td>';
      echo '</tr>';

        echo '';
        
    }
}

?>
    
    
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>