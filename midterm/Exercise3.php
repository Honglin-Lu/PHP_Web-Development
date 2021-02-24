<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form id = "form" method = "post" action= "Exercise3HonglinLu.php" >
            <label for="first_name" >First name:</label><br />
            <input id="first_name" type="text" name="first_name" placeholder="" required="required"><br />
            <br />
            <label for="last_name" >Last name:</label><br />
            <input id="last_name" type="text" name="last_name" placeholder="" required="required"><br /> 
            <br />
            <label for="phone" >Phone:</label><br />
            <input id="phone" type="text" name="phone" placeholder="" required="required"><br />
            <br />
            <label for="email" >Email:</label><br />
            <input id="email" type="text" name="email" placeholder="" required="required"><br /> 
            <br />
            <input id="inputsubmit" type="submit" name="submit" value="SUBMIT" /> 
            <br /><br/>
        </form>
        <?php
            class Customers{
                public $first_name, $last_name, $email, $phone;
                function display(){
                    echo "First Name: $this->first_name <br>";
                    echo "Last Name: $this->last_name <br>";
                    echo "Phone: $this->phone <br>";
                    echo "Email: $this->email <br>";
                }
            }
            

            if(isset($_POST['submit'])){
                $current_customer = new Customers;
                $current_customer->first_name = $_POST['first_name'];
                $current_customer->last_name = $_POST['last_name'];
                $current_customer->phone = $_POST['phone'];
                $current_customer->email = $_POST['email'];
                echo $current_customer->display();
            }
        ?>
    </body>
</html>