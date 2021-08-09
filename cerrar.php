<?php session_start();

session_destroy();

$_SESSION = array();

header('Location: login.php');
/*
include_once 'user.php';
include_once 'user_session.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "Hay sesión";
} else if (isset($_POST['email']) && isset($_POST['password'])){
    // echo "Validación de login";
    
    $userForm = $_POST['email'];
    $passForm = $_POST['password'];

    if($user->Exists($userForm,$passForm)){
        // echo"usuario Validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'index.php';
    }else{
       // echo "Nombre de usuario y/o password incorrectos I";
        $errorLogin ="Nombre de usuario y/o password es incorrecto";
        include_once 'Login.php';
    }
}else{   
    echo "Login";
    include_once 'Login.php';
}
   */ 
  
?>
