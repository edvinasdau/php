<?php
 
date_default_timezone_set('Europe/Vilnius');
set_error_handler("customError");
 
define('SERVER', "localhost");
define('USER', "root");
define('PASS', "");
define('DATABASE', "fakeapplication");
 
function customError($error_level,$error_message, $error_file,$error_line,$error_context) {
 
    echo "<div class='container alert alert-danger'>Error!<br>$error_message<br>$error_file @ $error_line</div>";
 
    try {
 
        $conn = new PDO("mysql:host=" . SERVER .";dbname=" . DATABASE . ";charset=utf8", USER, PASS);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
        $conn->query("INSERT INTO errors (time, file, line, error) VALUES ('".date("Y-m-d H:i:s")."','$error_file','$error_line','$error_message')");
     
 
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
 
try {
 
    $conn = new PDO("mysql:host=" . SERVER .";dbname=" . DATABASE . ";charset=utf8", USER, PASS);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    $q = $conn->prepare("SELECT * FROM errors");
    $q->execute();
 
    $errors = $q->fetchAll(PDO::FETCH_ASSOC);
 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

echo $fake_error;
   
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Error Log</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Time</th>
                        <th>File</th>
                        <th>Line</th>
                        <th>Error</th>
                    </tr>
 
                </thead>
                <tdata>
                    <?php
                        foreach ($errors as $error) {
                            echo "<tr>
                            <td>".$error['id']."</td>
                            <td>".$error['time']."</td>
                            <td>".$error['file']."</td>
                            <td>".$error['line']."</td>
                            <td>".$error['error']."</td>
                            </tr>";
                        }
                    ?>
                </tdata>
            </table>
        </div>
    </div>
   
</body>
</html>