<?php
     session_start(); 
     $username = "undefined";
     $user = 'undefined';
     $respuesta = 0;
     
     if(isset($_SESSION['usr'])){
        $username = $_SESSION['usr'];
     }
     if(isset($_REQUEST['respuesta'])){
        $respuesta = $_REQUEST['respuesta'];
     }

     if($respuesta != 0){
        echo '<span style="background-color:red;color:white; padding:10px;border-radius:15px;">Username Or Password Invalid!</span>';
    }
     if(isset($_REQUEST['user'])){
        $user = $_REQUEST['user'];
     }
     if(isset($_REQUEST['password'])){
        $password = md5($_REQUEST['password']);
     }
     //$password = md5($password);
     //print_r($GLOBALS);
     //echo $password;
     /*
     <?php
        $mysqli = new mysqli("localhost", "root", "", "sysadmin");
	    $result = $mysqli->query("SELECT count(username) FROM users WHERE username = ".$user." AND password = ".$password);
    ?>
     */
     if($user == 'root' &&  $password == '552b2ebe774bb5aaa0ad2021da259d22'){//Admin1234!
        $_SESSION['usr'] = $user;
        echo '<a href="logout.php">Cerrar Session</a>';
        header("Location:index.php");
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>
<body>
    
<!-- Nav Login -->
    <nav class="navbar text-light bg-dark justify-content-end">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="projeto-lyceum-login.html">
                <i class="fas fa-user"></i> Login
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
                <i class="ml-23 fas fa-check"></i> Signup
            </a>
        </li>
        </ul>	
    </nav>
<!-- Fim Nav Login -->



<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
	
	if (screen.width < 800) {
		$("nav").removeClass("sticky-top");
	}

</script>
<div style="margin:0 auto; width:250px;height:250px;margin-top:30vh;">
    <form action="login.php" method="get" style="margin:20px;">
        <label for="user"><h5><b>Username</b></h5></label>
        <input type="text" name="user">
    </br>
        <label for="password"><h5><b>Password</b></h5></label>
        <input type="password" name="password">
        <input type="number" style="display:none;" name="respuesta" id="respuesta" value="1">
    </br>
    </br>
        <input type="submit" style="width:10vw;" value="Submit">
    </form>
</div>
</body>
</html>