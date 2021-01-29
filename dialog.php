<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dialog</title>
    <style>
        .dialog-box{
            box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.6);
            max-width: 350px;
            padding: 10px;
            border-radius: 10px;
            display: none;
            position: absolute;
            left : 50%;
            top : 50%;
            transform: translate(-50%, -50%);
            position: fixed;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .dialog-box-content{
            display: flex;
            flex-direction: column;
        }
        .msg-heading{
            font-weight: 600;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 10px;
        }
        .msg-block{
            font-weight: 400;
            font-size: 16px;
        }
        .dialog-btn-container{
            display: flex;
            justify-content: space-evenly;
            padding-top: 10px;
        }
        #dialog-cancel-btn{
            padding: 10px;
            border-radius: 3px;
            background: rgba(0,0,0,0.1);
            border: 0.5px solid rgba(0,0,0,0.2);
            cursor: pointer;
        }
        #dialog-ok-btn{
            padding: 10px 15px;
            border-radius: 3px;
            background: linear-gradient(45deg, rgba(0,255,0), rgba(0,255,0,0.3));
            border: 0.5px solid rgba(0,0,0,0.7);
            cursor: pointer;
        }
    </style>
</head>
<body>
<h1>JavaScript custom function for dialog box</h1>
<h3>function : showDialogBox(message-heading, heading-color, message, message-color, url)</h3>
<h3>5 Parameters</h3>
<h4>URL : Dialog box will redirect to the given url if Ok is pressed</h4>
    <a id="link" onclick="return showDialogBox('Delete', 'red', 'Your resource will be permanently deleted No recovery', 'red', 'login.php')" href="login.php">Click to open dialog box for confirmation</a>
    
    <div class="wrapper">
        <div class="dialog-box">
            <div class="dialog-box-content">
                <div class="msg-heading">

                </div>
                <div class="msg-block">
                </div>
                <div class="dialog-btn-container">
                    <div id="dialog-cancel-btn">
                        <span>Cancel</span>
                    </div>
                    <div id="dialog-ok-btn">
                        <span class="fas fa">Ok</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>

<script>
    function showDialogBox(heading, headingColor, message, messageColor, url){
        if(heading == '')
            heading = 'Confirmation'
        if(message == '')
            message = 'Are you sure!'
        if(headingColor == '')
            headingColor = 'rgba(50,50,50)'
        if(messageColor == '')
            messageColor = 'blue'
        let dialogBox = document.getElementsByClassName('dialog-box')[0]
        let headingElement = document.getElementsByClassName('msg-heading')[0]
        headingElement.innerHTML = heading
        headingElement.style.color = headingColor
        let msgElement = document.getElementsByClassName('msg-block')[0]
        msgElement.innerHTML = message
        msgElement.style.color = messageColor
        dialogBox.style.display = 'block'
        document.getElementById('dialog-cancel-btn').addEventListener('click', () => {
            dialogBox.style.display = 'none'
            return false
        })
        document.getElementById('dialog-ok-btn').addEventListener('click', () => {
            location.href = url
        })
        return false
    }
</script>