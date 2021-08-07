<?php 
    include 'dbconnect.php';
    if ($_SESSION['permission'] == 1) {


        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $query = "DELETE FROM nova WHERE id = :id";
        $query = $pdo->prepare($query);

        $query->execute(['id'=>$id]);

        header("Location: index.php?page=users");

    } else {
        header("Location: test.php");
    }
?>