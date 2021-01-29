<?php 

require_once('connection.php');



if(isset($_POST['submitQuiz'])){
    $sql = "SELECT * FROM question_bank";
   // print_r($_POST);

    if(isset($_POST['answer'])){

        $answers = $_POST['answer']; // user answers

        $result = $conn->query($sql);

        $i = 0;
        $score = 0;
        while($row = $result->fetch_assoc()){
            if(isset($answers[$i])){
                if($answers[$i] == $row['answer']){
                    $score += 1;
                }
            }
            $i += 1;
        }
        
        echo "Your score is : ".($score/6)*100;
    }
    else{
        echo "Chutiya he kya bc!";
    }
}
?>