<?php
    $username = null;
    session_start(); //starts the session
    if(isset($_SESSION['usr'])){
        $username = $_SESSION['usr'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controls</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    
</head>
<body>
    <!--NAVBAR-->

<!-- Nav Login -->
<nav class="navbar text-light bg-dark justify-content-end" style="height:8vh;font-size:110%;">
 	<ul class="nav">
	  <li class="nav-item">
	    	<?php
                if($username==null){
                    echo '<a class="nav-link" href="login.php"><i class="fas fa-user"></i> Login';
                }else{
                    echo '<a>'.$username.'</a>';
                }
            ?>
	    </a>
	  </li>
      <li style="width:1vw;"></li>
	  <li class="nav-item">
	  	
          <?php
          if($username==null){
                    echo '<a class="nav-link"><i class="ml-23 fas fa-check"></i> Signup';
                }else{
                    echo '<a href="logout.php">Cerrar Session</a>';
                }
	    	?>
	    </a>
	  </li>
	</ul>	
</nav>
<!-- Fim Nav Login -->
<style>
        .wrapper {
            display: grid;
            gap: 1rem;
            grid-auto-rows: 30rem;
            grid-template-columns: repeat(auto-fill, minmax(min(100%,25rem), 1fr));
            grid-auto-flow: dense;
            grid-gap: 5px;
            width:80vw;
            margin:0 auto;
            text-align:center;
        }
        .options-admin{
            height:250px;
            width:250px;
            background-image:url('./Assets/images/tech.gif');
            border-radius:15px;
            margin:15% auto;

        }
        .image-option{
            height:160px;
            width:160px;
            background-size: contain;
            background-repeat:no-repeat;
            margin:15% auto;
            display:block;
            
        }
        .wrapper>.options-admin>p{
            font-weight:bold;
        }

    </style>
<center><h1 style="font-size:450%">CONTROLS</h1></center>
<div class="wrapper">

    <div class="options-admin">
        <img src="./Assets/images/terminal.png" class="image-option"></br>
        <p>Controla la terminal del dispositivo</p>
    </div>
    
    <div class="options-admin">
        <a href="speedtest.php" onclick="alert('Este proceso puede demorar unos minutos. Porfavor Espere');">
            <img src="./Assets/images/speedtest.png" class="image-option"></br>
            <p>Mide la Velocidad de Internet que tiene posee tu red</p>
        </a>
    </div>

    <div class="options-admin">
        <img src="./Assets/images/eraseinfo.png" class="image-option"></br>
        <p>Elimina información del disco</p>
    </div>

    <div class="options-admin">
        <img src="./Assets/images/adminuser.png" style="filter:invert(1)" class="image-option"></br>
        <p>Administre los usuarios del sistema. Recupere Contraseñas asigne nuevos,elimine usuarios...</p>
    </div>

    <div class="options-admin">
        <img src="./Assets/images/terminal.png" class="image-option"></br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>

    <div class="options-admin">
        <img src="./Assets/images/terminal.png" class="image-option"></br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>

</div>


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
	
	if (screen.width < 800) {
		$("nav").removeClass("sticky-top");
	}

</script>

    <!--/NAVBAR-->
</body>
</html>