<?php 
    session_start();
    if(!isset($_SESSION['login_time'])){
        header('Location: login.php');
    }
    else{
        $login_time = $_SESSION['login_time'];
        $current_time = time();
        if($current_time - $login_time > 300){
            header('Location: logout.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/common.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <header>
        <div class="header-left">
            <label>WEB TUTORIAL</label>
        </div>
        <div class="header-right">
            <ul>
                <li>
                    <a href="">Menu 1</a>
                </li>
                <li>
                    <span>Menu 2</span>
                    <i class="fa fa-caret-down"></i>
                    <ul>
                        <li>
                            <a href="">Sub menu 1</a>
                        </li>
                        <li>
                            <a href="">Sub menu 2</a>
                        </li>
                        <li>
                            <a href="">Sub menu 3</a>
                        </li>
                        <li>
                            <a href="">Sub menu 4</a>
                        </li>
                        <li>
                            <a href="">Sub menu 5</a>
                        </li>
                    </ul>
                </li>
                </a>
                <li>
                    <a href="">Menu 3</a>
                </li>
                <li>
                    <a href="">Menu 4</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </header>
    <div class="">
        <h3>Current Session status</h3>
        <table>
            <tr>
                <th>Serial No</th>
                <th>Key</th>
                <th>Value</th>
            </tr>
        <?php 
            $serial_no = 1;
            foreach($_SESSION as $key=>$value){
                ?>
                <tr>
                    <td> <?php echo $serial_no; ?> </td>
                    <td> <?php echo $key; ?> </td>
                    <td> <?php echo $value; ?> </td>
                </tr>
                <?php
                $serial_no += 1;
            }
        ?>
        </table>
    </div>
</body>
</html>