<?php 
    session_start();
    if(!isset($_SESSION['login_time'])){
        header('Location: login.php');
    }
    else{
        $login_time = $_SESSION['login_time'];
        $current_time = time();
        $left_seconds = 900 - ($current_time - $login_time); 
        if($current_time - $login_time > 900){
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
    <style>
        #timer{
            color: green;
            font-weight: 600;
            font-size: 30px;
            background: rgba(0,255,0,0.2);
            padding: 10px 20px;
            border-radius: 10px;
            margin: 10px;
            position: absolute;
            right: 0px;
            top: 50px;
        }
    </style>
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

    <div id="timer"><?php echo $left_seconds; ?></div>


    <script>
        let seconds = <?php echo $left_seconds; ?>;
        function timer(){
            console.log('Seconds left : ' + seconds)
            let hour = parseInt(seconds/(3600))
            let timeLeft = seconds - hour*3600

            let minute = parseInt(timeLeft/60)
            timeLeft = timeLeft - minute*60

            let second = timeLeft
            
            hour = hour.toString()
            minute = minute.toString()
            second = second.toString()
            if(hour.length == 1)
                hour = '0' + hour
            if(minute.length == 1)
                minute = '0' + minute
            if(second.length == 1)
                second = '0' + second
            
            let watch = hour + ' : ' + minute + ' : ' + second

            let timerElement = document.getElementById('timer')
            timerElement.style.display = 'block'
            timerElement.innerHTML = watch
            seconds--
            console.log(watch)
            if(seconds < 60){
                timerElement.style.color = 'red'
                timerElement.style.background = 'rgba(255,0,0,0.2)'
                setTimeout(() => {timerElement.style.display = 'none'},600)
            }
            if(seconds < 0)
                location.href = 'logout.php'
        }
        setInterval(timer, 1000)
    </script>
</body>
</html>