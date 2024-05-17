<?php
	session_start();

	error_reporting(E_ALL & ~E_WARNING);
	include("form.php");
	$message="";
	if(isset($valider)){
		$existe=false;
		$fp=fopen("shadowi.txt","r");
		while(!feof($fp)){
			$tab=explode(":",fgets($fp));
			if($tab[2]==$login && substr($tab[3],0,32)==md5($pass)){
				$existe=true;
				$_SESSION["autoriser"]="oui";
				$_SESSION["nomPrenom"]=strtoupper($tab[0]." ".$tab[1]);
				$_SESSION["login"]=$tab[2];
				header("location:session.php");
			}
		}
		if(!$existe){
			$message="<div class='erreur'>Mauvais login ou mot de passe!</div>";
		}
	}
?>   
<style>
	@font-face{
	font-family:roboto;
	src:url("../fonts/roboto.ttf");
}
@font-face{
	font-family:garamond;
	src:url("../fonts/garamond.ttf");
}
*{
	font-family:roboto,sans-serif;
}
.h1title{
	font-weight:normal;
	border-bottom:solid 0.5px #000;
	margin:20px 0;
	padding-bottom:10px;
	display:flex;
	align-items:center;
	justify-content:space-between;
}
.label{
	margin-top:20px;
	margin-bottom:6px;
}
.label>span{
	color:#C00;
}
.zdt{
	border:solid 1px #AAA;
	padding:10px;
	outline:none;
	width:400px;
	font-size:12pt;
	box-sizing:border-box;
}
.submit{
	margin-top:40px;
	background-color:rgba(0,0,0,1);
	border-color:#000;
	color:#FFF;
	cursor:pointer;
	transition:all 0.3s ease;
}
.submit:hover{
	background-color:rgba(0,0,0,0.8);
}
.erreur{
	padding:10px;
	background-color:#C00;
	color:#FFF;
	margin-top:10px;
}
.ok{
	padding:10px;
	background-color:#0C0;
	color:#FFF;
	margin-top:20px;
}
.captcha{
	font-size:30pt;
	color:#CCC;
	font-family:garamond;
	border-bottom:solid 1px #EEE;
	width:400px;
}
.dcnx{
	display:inline-block;
	font-size:12pt;
	padding:10px 20px;
	background-color:#000;
	color:#FFF;
	text-decoration:none;
	border:solid 0.5px #000;
	transition:all 0.3s ease;
}
.dcnx:hover{
	background-color:#FFF;
	color:#000;
}
.esph1{
	text-align:center;
	margin-top:100px;
}
.insc{
	color:#439b6e;
	text-decoration:none;
}
.insc:hover{
	text-decoration:underline;
}
.msg{
	background-color:#F8F8F8;
	padding:10px;
	width:400px;
	box-sizing:border-box;
}
.date{
	color:#AAA;
	font-size:12pt;
}
.label i{
	font-size:10pt;
	color:#AAA;
	display:block;
}
#ph_profil{
	display:block;
	margin:auto;
	width:200px;
	height:200px;
	border:solid 6px #CCC;
	border-radius:100%;
	display:flex;
	align-items: center;
	justify-content: center;
	transition:all 0.3s ease;
	cursor:pointer;
	background-size:cover;
	background-position:center center;
	background-color:#888;
}
#ph_profil:hover{
	transform:scale(1.1);
}
#ph_profil img{
	width:40%;
	filter:invert(1);
	opacity:0;
	transition:all 0.3s ease;
}
#ph_profil:hover img{
	opacity:1;
}
#inp_upload{
	display:none;
}
.erreur_photo{
	margin-bottom:20px;
}

</style>   
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		
	</head>
	<body>
		<form name="fo" method="post" action="">
			<h1 class="h1title">Authentification requise</h1>
			<div class="label msg">Vous n'avez pas encore de compte? <a href="signupltc.php" class="insc">Inscription</a></div>
			<?=$message?>
			<div class="label">Login <span>*</span></div>
			<div class="input">
				<input type="text" name="login" class="zdt" value="<?=$login?>" required/>
			</div>
			<div class="label">Mot de passe <span>*</span></div>
			<div class="input">
				<input type="password" name="pass" class="zdt" required/>
			</div>
			
			<div class="input">
				<input type="submit" name="valider" class="zdt submit" value="S'authentifier" />
			</div>
		</form>
	</body>
</html>  
    
