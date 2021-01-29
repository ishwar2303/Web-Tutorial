<?php 
    require_once('connection.php');
    if(isset($_GET['questionID'])){
        $ID = $_GET['questionID'];
        $sql = "DELETE FROM question_bank WHERE question_id = '$ID'";
        $conn->query($sql);
        echo "question delete successfully";
        header('Location: quiz.php');
        exit;
    }
    else{
        echo "index not set";
    }
?>