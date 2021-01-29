<?php 

    require_once('connection.php');
    if(isset($_POST['questionNumbers'])){
        $number_of_questions = $_POST['questionNumbers'];
    }
    else{
        echo "Kya yaar bhar to lete!";
        echo "chal ab 5 question to bhar hi le";
        $number_of_questions = 5;
    }

    if(isset($_POST['formSubmit'])){
        print_r($_POST);
        $questions = $_POST['question'];
        $answers = $_POST['answer'];

        for($i=0; $i<5; $i++){
            $sql = "INSERT INTO `question_bank` (`question_id`, `question`, `answer`) VALUES (NULL, '$questions[$i]', '$answers[$i]')";
            $conn->query($sql);
            
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <?php for($i=0; $i<$number_of_questions; $i++){ ?>
        <br/>
        <?php echo $i+1; ?>
        <textarea name="question[]" id="" cols="30" rows="10"></textarea>
        True
        <input type="radio" value="true" name="answer[<?php echo $i; ?>]">
        False
        <input type="radio" value="false" name="answer[<?php echo $i; ?>]">
        </br>
        </br>
        <?php } ?>

        <input type="submit" name="formSubmit" value="Save">

    </form>
</body>
</html>
