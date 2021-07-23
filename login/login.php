<?php
    require '../function.php';

    // Cek login
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // pencocokan dengan database
        $cekdatabase = mysqli_query($conn, "SELECT * FROM login WHERE email='$email' and password='$password'");
        
        // hitung jumlah data
        $hitung = mysqli_num_rows($cekdatabase);
        
        if($hitung>0){
            $_SESSION['log'] = 'True';
			echo "<script>alert('Login Berhasil!');window.location='../index.php'</script>";
            // header('location:../index.php');
        } else {
			echo "<script>alert('Email/Password tidak terdaftar!');window.location='login.php'</script>";
            // header('location:login.php');
        };
    };

    if(!isset($_SESSION['log'])){

    } else {
		echo "<script>alert('Login Berhasil!');window.location='../index.php'</script>";
        // header('location:../index.php');
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1"><link href="../css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input class="input" id="inputEmail" name="email" type="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input id="inputPassword" name="password" type="password" class="input">
            	   </div>
            	</div>
            	
            	<input type="submit" class="btn" name="login" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>
