<?php
include 'conn.php';
$sid =$_GET['id'];
$sql = "DELETE FROM `stable` WHERE sid='$sid' ";
    $result = $conn->query($sql);
    if($result){
        ?>
       <script type="text/javascript">
        alert("Data Delete Successfully");
        window.open("http://localhost/new_project/view.php","_self");
        </script>
        <?php
}else{
    ?>
       <script type="text/javascript">
        alert("Data Delete Unsuccessfully");
        </script>
        <?php
}
?>