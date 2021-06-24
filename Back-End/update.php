<?php
$con=mysqli_connect("localhost","username","password","DatabaseName");
if(isset($_POST['updatebtn']))
{
  if(isset($_SESSION['loginid')) #this if condition is all about checking whether the user present in the session or not 
  {
     /* Collecting form data in to php variables starts here */
          $emailid=$_SESSION['loginid'];
          $name=$_POST['name']);
          $mobileno=$_POST['mno']);
          $aadharno=$_POST['aadharno']);
          $address=$_POST['address']);
     /* Collecting form data in to php variables Ends here */
      
     #Update user data starts here
          $update="update `student` set name='$name', mno='$mobileno', aadharno='$aadharno', address='$address'  where emailid='$emailid'";
          if(mysqli_query($con, $update))
          {
                echo "Data Updated Succesfully";
          }
          else
          {
              echo "Something Wrong in the Query";
          }
     #Update user data Ends here
  }
}
?>
© 2021 GitHub, In
