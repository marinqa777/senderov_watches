
<?php
            require_once 'db.php';
           
            $name = $_POST['name'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $pnumber = $_POST['pnumber'];
            $comm = $_POST['comm'];
            $country = $_POST['country'];
            $question = $_POST['question'];
            $survey = $_POST['survey'];
                                            
            
           
            $sql = "INSERT INTO ContactUs (
                First_name,
                Last_name,
                Email,
                Phone_number,
                Comments,
                Country,
                Question,
                Survey)
            VALUES (
            
            '$name',
            '$lname',
            '$email',
            '$pnumber',
            '$comm','$country','$question','$survey')";
                   if ($conn->query($sql)=== TRUE){
                echo "New record created successfully";
                 header("Location: http://localhost:8888/PhpProject3/contactus.php");
         } else {echo "Error: " . $sql . "<br>" . $conn->error;}
           
           
           
            
            $conn->close();
            echo "<meta http-equiv=\"refresh\" content=\"0;url=index.html\">"
            ?>
                    
       