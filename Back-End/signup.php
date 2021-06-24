<?php 
$conn=mysqli_connect("localhost","username","password","databasename");

#isset statement block Starts here
if(isset($_POST['submit_btn']))
{
  /* Collecting form data in to php variables starts here */
       $username =$_POST['name'];
       $course =$_POST['course'];
       $mail =$_POST['email'];
       $password =$_POST['pass'];
   /* Collecting form data in to php variables Ends here */
  
   $encrypted_password=md5($password);   # password  is converting in to md5 password
  
  /* Trying to Check the user is already registered or not ! Starts Here */
     $query="select * from user_detail WHERE `u_email`='$mail'";
     $query_run=mysqli_query($conn,$query);
   /* Trying to Check the user is already registered or not ! Ends Here */
  
       if(mysqli_num_rows($query_run)>0)
       {
           #this block code is executed if the user is already registerd
           echo  ' <script type="text/javascript"> alert("User already exits! Please  try with  another email id")</script>';
       }
       else
       {
           #storing user data in the table starts here
               $query="insert into `user_detail` (`u_name`,`u_email`,`u_pass`,`u_course`) VALUES('$username','$mail','$encrypted_password','$course')";
               $query_run=mysqli_query($conn,$query);
               if($query_run)
               {
                   echo ' <script type="text/javascript"> alert("User Registered!")</script>'; 

               }
               else
               {
                   echo ' <script type="text/javascript"> alert("Something Error! Please Contact Site Owner!!")</script>';
               }
           #storing user data in the table Ends here
       } 
}
#isset statement block ends here

?>
