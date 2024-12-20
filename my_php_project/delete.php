<?php
    include('./assets/backend/config.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM `player` WHERE id = $id";
        $query_run = mysqli_query($con , $sql);
        if($query_run) {
            echo "<script>alert('Player deleted successfully!'); window.location.href='dashboard.php';</script>";
        } else {
            echo "<script>alert('Error deleted player: " . mysqli_error($con) . "');</script>";
        }
    }
    
?>
