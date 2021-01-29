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
    <?php 
        while($row = $result->fetch_assoc()){
            //print_r($row);
            ?>
            <h4> <?php echo $row['question']; ?> </h4>
            
            <a href="delete-question.php?questionID=<?php echo $row['question_id']; ?>">Delete</a>
            <?php
        }
    ?>
</body>
</html>