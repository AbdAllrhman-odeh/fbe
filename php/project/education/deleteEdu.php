<?php
require('../configuration/config.php');

if ($_GET && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM education WHERE eduId = '$id'";
    $stmt = $conn->prepare($sql);
    // echo($_GLOBALS['id']);
    session_start();
    $userId=$_SESSION['id'];


    try {
        $stmt->execute();
        $_SESSION['delete_msg'] = 'Record deleted successfully';
        
    } catch (PDOException $e) {
        echo('Error: ');
        echo($e->getMessage());
        $msg = "Error on delete <br>";
    }
    header('Location:../admin.php?id=' . $userId);
} else {
    echo('Error in the id or the method...');
}
?>
