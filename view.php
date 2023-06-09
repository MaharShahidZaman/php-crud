<html>
    <head>
        <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Student Form</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="view.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Add</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        
        <button class="btn btn-outline-success" name = "save" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
</body>
</head>     
</html>
<?php
include 'conn.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Project</title>
  </head>
  <body>
  <div class="container mt-5">
  <h3>All Record of Student</h3>
<table class ="table" border ="20px" bordercolor = 'green'>
<thead>
  <tr>
    <th scope="col">ID</th>
    <th scope="col">Name</th>
    <th scope="col">Email</th>
    <th scope="col">Password</th>
    <th scope="col">Contects</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<?php
$sql = "SELECT * FROM stable";
$result = $conn->query($sql);
//$sid = 0;
//if($result->num_rows){
    while($row = $result->fetch_assoc()){
   // $sid++;
?>
<tbody>
<tr>
   <th scope="row"><?php echo $row['sid'] ?></th>
    <td><?php echo $row['sname'] ?></td>
    <td><?php echo $row['semail'] ?></td>
    <td><?php echo $row['spassword'] ?></td>
    <td><?php echo $row['sphone'] ?></td>
    <td><a href="update.php?id=<?php echo $row['sid'] ?>" class= "btn btn-primary">Edit</a> <a onclick="return conferm('Are You shure?')" href="delete.php?id=<?php echo $row['sid'] ?>" class= "btn btn-primary">Delete</a></td>
  </tr>
</tbody>
<?php
}
?>
</table>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  </body>
</html>