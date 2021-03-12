<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
        <h1>Registration Form</h1>
        <form id = "form1" method = "post" action= "display.php" >
            <label for="first_name" >First name:</label><br />
            <input id="first_name" type="text" name="first_name" placeholder="" required="required"><br />
            <br />
            <label for="last_name" >Last name:</label><br />
            <input id="last_name" type="text" name="last_name" placeholder="" required="required"><br /> 
            <br />
            <label for="nick_name" >Nick name:</label><br />
            <input id="nick_name" type="text" name="nick_name" placeholder="" required="required"><br /> 
            <br />
            <label for="email" >Email:</label><br />
            <input id="email" type="text" name="email" placeholder="" required="required"><br /> 
            <br />
            <label for="phone" >Phone number:</label><br />
            <input id="phone" type="text" name="phone" placeholder="" required="required"><br />
            <br />
            
            <input id="inputsubmit" type="submit" name="submit" value="SUBMIT" /> 
            <br /><br/><br /><br/>
        </form> 
        <form id= "form2" method= "post" action= "display.php">
            <label for="id" >Input Id to delete:</label><br />
            <input id="id" type="number" name="id" placeholder="" required="required"><br />
            <br />
            
            <input id="idsubmit" type="submit" name="delete" value="DELETE" /> 
        </form>    
    </body>
</html>