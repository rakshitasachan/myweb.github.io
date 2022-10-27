<?php
   $db_hostname="localhost";
   $db_username="root";
   $db_password="";
   $db_name="register";

    $conn=@new mysqli($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn)
    {
        echo"Connection Failed:",mysqli_connect_error();
        exit;
    }

    $name=$_POST['name'];
   
    $pass=$_POST['pass'];

    $age=$_POST['age'];
    $mobile=$_POST['number'];
    $email=$_POST['email'];


    if($name!="" && $pass!=""&& $age!=="" ){

    $sql="Insert into entry(name,password,age,mobile,email) values ('$name','$pass','$age','$mobile','$email')";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error: ",mysqli_error($conn,$sql);
        exit;
    }
    echo "Registered Successfully";
    mysqli_close($conn);

}
?>
  <script>
 
 alert("registration successfull");
 window.location="index1.php";


 </script>