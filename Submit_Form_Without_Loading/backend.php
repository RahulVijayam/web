<?php
$conn=mysqli_connect("localhost","root","","test");
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    /* Collecting form data in to php variables starts here */
    $name =$_POST['name'];
    $email =$_POST['email'];
   
    /* Collecting form data in to php variables Ends here */
     
  /* Trying to Check the user is already registered or not ! Starts Here */
  $query="select * from subscribers WHERE `email`='$email'";
  $query_run=mysqli_query($conn,$query);
/* Trying to Check the user is already registered or not ! Ends Here */

    if(mysqli_num_rows($query_run)>0)
    {
        #this block code is executed if the user is already registerd
        echo  ' <p style="color:red;"> Already Subscribed! Please  try with  another email id  </p>';
    }
    else
    {
        #storing user data in the table starts here
            $query="insert into subscribers VALUES('$name','$email')";
            $query_run=mysqli_query($conn,$query);
            if($query_run)
            {
                echo ' <p style="color:green;">Thanks for Subscribing </p>'; 

            }
            else
            {
                echo ' Something Error! Please Contact Site Owner!! ';
            }
        #storing user data in the table Ends here
    } 
 }

?>