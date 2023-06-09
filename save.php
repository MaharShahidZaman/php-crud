<?php
include 'conn.php';

if(isset($_POST['save'])){
    $name = $_POST['sname'];
    $email = $_POST['semail'];
    $password = $_POST['spassword'];
    $phone = $_POST['sphone'];

    $sql = "INSERT INTO `stable` (`sname`, `semail`, `spassword`, `sphone`) VALUES ('$name', '$email', '$password', '$phone')";
    $result = $conn->query($sql);
    if($result){
        ?>
       <script type="text/javascript">
        alert("Data Save Successfully");
        window.open("http://localhost/new_project/view.php","_self");
        </script>
        <?php
}else{
    ?>
       <script type="text/javascript">
        alert("Data Save Unsuccessfully");
        </script>
        <?php
}
}
?>
<!--
<div class="container">
<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Descruption</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>
<?php

    ?>