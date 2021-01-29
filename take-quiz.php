<?php 
    require_once('connection.php');

    $sql = "SELECT * FROM question_bank";
    $result = $conn->query($sql);
    echo "Total questions in bank : ".$result->num_rows;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="quiz-analyze.php" method="POST">
    <?php 
        $i=0;
        while($row = $result->fetch_assoc()){
            //print_r($row);
            ?>
            <h4> <?php echo $row['question']; ?> </h4>
            True
            <input type="radio" name="answer[<?php echo $i; ?>]" value="true">
            False
            <input type="radio" name="answer[<?php echo $i; ?>]" value="false">
            <?php
            $i += 1;
        }
    ?>
    <br/>
    <input type="submit" value="Submit Quiz" name="submitQuiz">
    </form>
</body>
</html>