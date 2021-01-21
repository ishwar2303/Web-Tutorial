<?php 
    require_once('connection.php');
    $user_email = '';
    $user_password = '';
    $user_email_error = '';
    $user_password_error = '';

    function cleanInput($str){
        $str = trim($str); // remove white spaces
        $str = strip_tags($str); // remove html tags
        return $str;
    }
    function emailValidation($email_to_validate){
        $reg_exp = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/"; // regular expression for email
        return preg_match($reg_exp, $email_to_validate);
    }
    
    function passwordValidation($password_to_validate){
        $reg_exp = "/^(?=.*[0-9])"."(?=.*[a-z])(?=.*[A-Z])"."(?=.*[@#$%^&+=])"."(?=\\S+$).{8,20}$/"; // regular expression for password
        return preg_match($reg_exp, $password_to_validate);
    }
    

    if(isset($_POST['userEmail']) && isset($_POST['userPassword'])){
        // initialize variables with user data
        $user_email = $_POST['userEmail'];
        $user_password = $_POST['userPassword'];
        $control = 1;
        
        $user_email = cleanInput($user_email);
        if(!empty($user_email)){ // not empty
            if(!emailValidation($user_email)){ // call for email validation
                $user_email_error = 'Invalid E-mail';
                $control = 0;
            }
            else{ 

            }
        }
        else{
            $user_email_error = 'E-mail required';
            $control = 0;
        }

        $user_password = cleanInput($user_password);
        if(!empty($user_password)){ // not empty
            if(!passwordValidation($user_password)){ // call for password validation
                $user_password_error = 'Minimum 8 characters, at least one uppercase letter, one lowercase letter, one number and one special character
                <br>Maximum limit 20 characters';
                $control = 0;
            }
        }
        else{
            $user_password_error = 'Password required';
            $control = 0;
        }

        if($control){ 
            
        }
    }
?>

<html>
    <head>
        <title>WT | LOGIN</title>
        <link rel="stylesheet" type="text/css" href="pretty-forms-assets/css/form.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="wrapper">
            
            <div class="form-container login-form">
                <h5 class="form-header">
                    <label>User Login</label>
                </h5>
                <form action="" method="POST" id="validate-form" class="form-layout" novalidate>
                    <div class="set-row">
                        <div class="set-col">
                            <div class="input-container">
                                <label class="input-label">E-mail</label>
                                <div class="input-wrap-for-icon">
                                    <span>
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input id="email-validate" class="form-input" type="email" name="userEmail" value="<?php echo $user_email; ?>" placeholder="E-mail" required="">
                                </div>
                            </div>
                            <div id="email-validate-response" class="form-input-response">
                                <?php echo $user_email_error; ?>
                            </div>
                        </div>
                    </div>
                    <div class="set-row">
                        <div class="set-col">
                            <div class="input-container">
                                <label class="input-label">Password</label>
                                <div class="input-wrap-for-icon">
                                    <span>
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <input id="password" class="form-input" type="password" name="userPassword" value="<?php echo $user_password ?>" placeholder="Password" required="">
                                    <i id="password-show-eye-icon" class="fa fa-eye"></i>
                                    <i id="password-hide-eye-icon" class="fa fa-eye-slash"></i>
                                </div>
                            </div>
                            <div id="password-validate-response" class="form-input-response">
                                <?php echo $user_password_error; ?>
                            </div>
                        </div>
                    </div>
            
                    <div class="submit-btn-wrapper">
                        <button id="submit-btn">Login</button>
                    </div>
                </form>
                <div class="form-footer"></div>
            </div>
    
        </div>

        <script type="text/javascript" src="pretty-forms-assets/js/form.js"></script>

    </body>
</html>
