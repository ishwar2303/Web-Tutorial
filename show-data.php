<?php 

    require_once('connection.php');

    $sql = "SELECT user_name, user_email FROM `user_registration`";
    
    //$sql = "SELECT user_name, user_email FROM `user_registration` WHERE user_email='ishwar2303@gmail.com'";
    $result = $conn->query($sql);

    /*
    $row_count = $result->num_rows;
    print_r($result);
    for($i=0; $i<$count; $i++){
        $row = $result->fetch_assoc();
        
        echo "<br>";
        print_r($row);
        echo "<br>";
    }
    */
?>

<html>
    <head>
        <title>View Data</title>
        <style>
            table{
                margin-top : 10px;
                border : 0.5px solid #bdc3c7;
                border-radius : 5px;
                border-collapse : collapse;
            }
            th,td{
                padding : 10px;
                border : 0.5px solid #bdc3c7;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User E-mail</th>
            </tr>
            <?php 

                /*
                $serial_no = 1;
                while($row = $result->fetch_assoc()){
                   
                   echo "<tr><th>$serial_no</th><th>$row[user_name]</th><th>$row[user_email]</th></tr>";
                   $serial_no = $serial_no + 1;
                }
                */
            ?>

            <?php    

                $serial_no = 1;
                while($row = $result->fetch_assoc()){

            ?>
                    <tr>
                        <td> <?php echo $serial_no; ?></td>
                        <td> <?php echo $row['user_name']; ?></td>
                        <td> <?php echo $row['user_email']; ?></td>
                    </tr>
            <?php       
                   
                   $serial_no = $serial_no + 1;
                }
            
            ?>

        </table>
    </body>
</html>

<?php 

    $conn->close();

?>
