<?php
    class Students
    {
        public $first_name, $last_name, $email, $phone;
        function display(){
            echo "First Name is - $this->first_name <br>";
            echo "Last Name is - $this->last_name <br>";
            echo "Phone Number is - $this->phone <br>";
            echo "Email Address is - $this->email <br>";
        }
    }

    $student1 = new Students;
    $student1->first_name = "John";
    $student1->last_name = "Walk";
    $student1->email = "John@gmail.com";
    $student1->phone = "514-111-1111";


    $student2 = new Students;
    $student2->first_name = "Adma";
    $student2->last_name = "Chohan";
    $student2->email = "Adma@gmail.com";
    $student2->phone = "514-222-2222";


    echo $student1->display();
    echo "<br><br>";
    echo $student2->display();
?>