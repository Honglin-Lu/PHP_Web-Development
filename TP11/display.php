<?php
    
    if(isset($_POST['submit'])){
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $nname = $_POST['nick_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        require_once 'login.php';
        $conn = new mysqli($hn, $un, $pw);
        if ($conn->connect_error)die("Fatal Error");
        //check if the db exits
        $select_db = mysqli_select_db($conn, 'tp11_db');
        if(!$select_db){
            $createdb_sql = "CREATE DATABASE tp11_db";
            if($conn->query($createdb_sql) === true){
                mysqli_select_db($conn, 'tp11_db');
                $createtb_sql = "CREATE TABLE users
                (id Int(9) PRIMARY KEY AUTO_INCREMENT,
                fname VARCHAR(30),
                lname VARCHAR(30),
                nname VARCHAR(30),
                email VARCHAR(100),
                pnumber VARCHAR(15)
                )CHARACTER SET utf8 COLLATE utf8_general_ci";
                if($conn->query($createtb_sql)===false){
                    echo "Creating table failed";
                }
            }else{
                echo "Creating database failed";
            }
        }    
       
        
        $connect = new mysqli($hn, $un, $pw, 'tp11_db');
        $sql = "INSERT INTO users (fname, lname, nname, email, pnumber) VALUES ('$fname', '$lname', '$nname', '$email', '$phone')";
        if($connect->query($sql) === true){
            //echo "New record created successfully";
            $query = "SELECT * FROM users";
            $result = $connect->query($query);
            if (!$result){
                die("Fatal Error");
            }else{
                $rows = $result->num_rows;
                for($j = 0; $j < $rows ; $j++){
                    $result->data_seek($j);
                    echo "Id: ".htmlspecialchars($result->fetch_assoc()['id'])."<br>";
                    $result->data_seek($j);
                    echo "First name: ".htmlspecialchars($result->fetch_assoc()['fname'])."<br>";
                    $result->data_seek($j);
                    echo "Last name: ".htmlspecialchars($result->fetch_assoc()['lname'])."<br>";
                    $result->data_seek($j);
                    echo "Nick name: ".htmlspecialchars($result->fetch_assoc()['nname'])."<br>";
                    $result->data_seek($j);
                    echo "Email: ".htmlspecialchars($result->fetch_assoc()['email'])."<br>";
                    $result->data_seek($j);
                    echo "Phone number: ".htmlspecialchars($result->fetch_assoc()['pnumber'])."<br>";
                }
                $result->close();
            }
        }else{
            echo "Error";
        }
        $connect->close();
        $conn->close();
    }

    if(isset($_POST['delete'])){
        $id = $_POST['id'];
        require_once 'login.php';
        $conn = new mysqli($hn, $un, $pw, $db);
        if ($conn->connect_error)die("Fatal Error");

        $query = "DELETE FROM users WHERE id = $id";
        $result = $conn->query($query);
        $num = $conn->affected_rows;
        if($num == 0){
            echo "DELETE failed";
        }else{
            $query = "SELECT * FROM users";
            $result = $conn->query($query);
            if (!$result)die("Database access failed");

            $rows = $result->num_rows;
            for ($j = 0; $j < $rows; $j++){
                $result->data_seek($j);
                echo "Id: ".htmlspecialchars($result->fetch_assoc()['id'])."<br>";
                $result->data_seek($j);
                echo "First name: ".htmlspecialchars($result->fetch_assoc()['fname'])."<br>";
                $result->data_seek($j);
                echo "Last name: ".htmlspecialchars($result->fetch_assoc()['lname'])."<br>";
                $result->data_seek($j);
                echo "Nick name: ".htmlspecialchars($result->fetch_assoc()['nname'])."<br>";
                $result->data_seek($j);
                echo "Email: ".htmlspecialchars($result->fetch_assoc()['email'])."<br>";
                $result->data_seek($j);
                echo "Phone number: ".htmlspecialchars($result->fetch_assoc()['pnumber'])."<br>";
            }
            $result->close();
        }
        $conn->close();

    }

    
?> 
<br><br>
<a href="form.php"><h4>Go back to registration form !</h4></a>     
        
        
