<?php 

include 'connect.php';

if(isset($_POST['cadastro'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $telefone=$_POST['telefone'];
    $endereco=$_POST['endereco'];

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(name,email,password,telefone,endereco)
                       VALUES ('$name','$email','$password','$telefone','$endereco')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index2.php" );
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['login'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['id'] = $users['id'];
    $_SESSION['email']=$row['email'];
    header("Location: /tcc - new/index_teste.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}

?>