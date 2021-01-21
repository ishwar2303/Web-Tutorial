<?php 
    require_once('connection.php');
    $registration_id_error = '';
    $data_exist = 0;
    $query_become = '';
    $db_error = '';
    if(isset($_POST['registrationId'])){
        $registration_id = $_POST['registrationId'];
        $control = 1;
        //$registration_id = addslashes($registration_id); stop sql injection
        if(empty($registration_id)){
            $registration_id_error = 'ID required';
            $control = 0;
        }

        if($control){
            $sql = "SELECT * FROM user_registration WHERE registration_id = '$registration_id'";
            $query_become = 'Query executed : '.$sql;
            $result = $conn->query($sql);
            $db_error = $conn->error;
            if($db_error == ''){
                $data_exist = $result->num_rows;
                if(!$data_exist){
                    $registration_id_error = 'No user with this ID';
                }
            }
        }
    }
?>

<html>
    <head>
        <title>SQL Injection</title>
        <link rel="stylesheet" type="text/css" href="public/css/common.css">
        <link rel="stylesheet" type="text/css" href="pretty-forms-assets/css/form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
        <body>
            <h2 class="heading">SQL Injection</h2>
            <h3>SQL Query : "SELECT * FROM user_registration WHERE registration_id = 'Enter by client'"</h3>
            <h3>What if user enters sql query part instead of normal data?</h2> 
            <h5>Try entering : <span style="background : rgba(0,255,0,0.3);padding: 5px 10px;border-radius:5px;">something' OR 1='1</span></h5>
            <h5>Query become : SELECT * FROM user_registration WHERE registration_id = 'ishwar' OR 1 = '1'</h5>
            <h5>1 = '1' is always true so database will give you all data</h5>
            <h5>Use addslashes(string) function to add backslashes to predefined characters : double quotes, single quotes, NULL, backslash</h5>
            <?php if($db_error != ''){ ?>
                <h3 class="error"><?php echo $db_error; ?></h3>
            <?php } ?>
            <?php if($query_become != ''){ ?>
                <h3 class="success"><?php echo $query_become; ?></h3>
            <?php } ?>
            <div class="wrapper">
            
                <div class="form-container login-form">
                    <h5 class="form-header">
                        <label>Check your credentials</label>
                    </h5>
                    <form action="" method="POST" id="validate-form" class="form-layout" novalidate>
                        <div class="set-row">
                            <div class="set-col">
                                <div class="input-container">
                                    <label class="input-label">Registration ID</label>
                                    <div class="input-wrap-for-icon">
                                        <span>
                                            <i class="fa fa-id-badge"></i>
                                        </span>
                                        <input  class="form-input" type="text" name="registrationId"  >
                                    </div>
                                </div>
                                <div class="form-input-response">
                                    <?php echo $registration_id_error; ?>
                                </div>
                            </div>
                        </div>
                
                        <div class="submit-btn-wrapper">
                            <button id="submit-btn">Fetch Details</button>
                        </div>
                    </form>
                    <div class="form-footer"></div>
                </div>
    
            </div>
            <?php 
                if($data_exist){
            ?>
                <h1>User Details</h1>
                <table>
                    <tr>
                        <th>User Name</th>
                        <th>User E-mail</th>
                        <th>User Password</th>
                    </tr>
                <?php 
                        while($row = $result->fetch_assoc()){
                            ?>
                            <tr>
                                <td> <?php echo $row['user_name']; ?> </td>
                                <td> <?php echo $row['user_email']; ?> </td>
                                <td> <?php echo $row['user_password']; ?> </td>
                            </tr>
                            <?php
                        }

                ?>
                </table>
            <?php 
                } 
            ?>

        </body>
</html>