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
    
    if(isset($_GET['id_nationality'])){
        $id = $_GET['id_nationality'];
        $sql = "DELETE FROM `nationnality` WHERE id = $id";
        $query_run = mysqli_query($con , $sql);
        if($query_run) {
            echo "<script>alert('nationality deleted successfully!'); window.location.href='dashboard.php';</script>";
        } else {
            echo "<script>alert('Error deleted player: " . mysqli_error($con) . "');</script>";
        }
    }

    if(isset($_GET['id_club'])){
        $id = $_GET['id_club'];
        $sql = "DELETE FROM `club` WHERE id = $id";
        $query_run = mysqli_query($con , $sql);
        if($query_run) {
            echo "<script>alert('club deleted successfully!'); window.location.href='dashboard.php';</script>";
        } else {
            echo "<script>alert('Error deleted player: " . mysqli_error($con) . "');</script>";
        }
    }
?>
