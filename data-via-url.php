<html>
    <head>
        <title>PHP Tutorial</title>
    </head>
    <body>
        <h1>Sending data through URL</h1>
        <h3>URL limit 2048 characters</h3>
        <h3>data expose (email, password)</h3>
        <form action="submit-data.php" method="GET">
            Full Name :
            <input type="text" name="fullname">
            <br/>
            <br/>
            E-mail : 
            <input type="email" name="userEmail">
            <br/>
            <br/>
            Password : 
            <input type="password" name="userPassword">
            <br/><br/>
            <input type="submit" value="submit">
        </form>

    </body>
</html>