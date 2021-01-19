<html>
    <head>
        <title>Web Tutorial</title>
    </head>
    <body>
        <h1 onmouseover="this.style.background='blue'" style="color:red;">Welcom to tutorial</h1>
        <?php 
            echo '<h1>Pankaj</h1>';
        ?>
        <h2>Samarth</h2>
        <?php 
            $num1 = 10;
            $num2 = 20;
            $sum = $num1 + $num2;
        ?>
        <h1><?php echo $sum; ?></h1>
        <h3>Akash</h3>
        <?php 
            $string1 = 'Hello';
            $string2 = 'World';

            echo "$string1.$string2";
            $name ="Ishwar Baisla";
        ?>
        <?php 
            for($i=1; $i<=10; $i++){
                echo $i;
                echo "<br/>";
            }
        ?>
        
    </body>
</html>