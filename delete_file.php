<?php
include('admin/connect.php');
$get_id = $_POST['file_id'];
$class_id=$_POST['class_id'];

mysqli_query($conn,"delete from files where file_id='$get_id'") or die(mysqli_error($conn));
?>


<script type="text/javascript">
    window.location="class.php<?php echo '?id=' . $class_id; ?>";                          
</script>

