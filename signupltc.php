<?php
	session_start();
        $nom="";
        $prenom="" ;
        $login="";
        $pass1="";
        $pass2="";
	$message="";
        include "form.php";
	$str="ABCDEFGHIJKLMNPQRSTUVWXYZ123456789";
	$max=5;
	$cap="";
	for($i=0;$i<$max;$i++){
		$cap.=substr($str,rand(0,strlen($str)-1),1);
	}
	if(isset($valider)){
		if(!preg_match("#^[a-zA-zéèêïÉÈÊÏ \-]+$#",$nom))
			$message="<div class='erreur'>Nom invalide!</div>";
		elseif(!preg_match("#^[a-zA-zéèêïÉÈÊÏ \-]+$#",$prenom))
			$message="<div class='erreur'>Prénom invalide!</div>";
		elseif(!preg_match("#^\w{6,12}$#",$login))
			$message="<div class='erreur'>Login invalide!</div>";
		elseif(preg_match("#[a-z]#",$pass1)+preg_match("#[A-Z]#",$pass1)+preg_match("#[0-9]#",$pass1)!=3 || strlen($pass1)<6)
			$message="<div class='erreur'>Mot de passe invalide!</div>";
		elseif($pass1!=$pass2)
			$message="<div class='erreur'>Mot de passes non identiques!</div>";
		elseif(strtoupper($captcha)!=$capgen)
			$message="<div class='erreur'>Code de vérification invalide!</div>";
		if(empty($message)){
			$fp=fopen("shadowi.txt","r");
			$existe=false;
			while(!feof($fp)){
				$tab=explode(":",fgets($fp));
				if($tab[2]==$login){
					$message="<div class='erreur'>Login existe déjà!</div>";
					$existe=true;
					;
				}
			}
			if(!$existe){
				$fp=fopen("shadowi.txt","a+");
				fputs($fp,$nom.":".$prenom.":".$login.":".md5($pass1)."\n");
				header("location:loginltc.php");
			}
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
	color:#0C0;
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
		<title>Contrôle de saisie</title>
	</head>
	<body>
		<form name="fo" method="post" action="">
			<h1 class="h1title">Inscription </h1>
			<div class="label msg">Vous avez dejà un compte? <a href="loginltc.php" class="insc">Authentifiation</a></div>
			<?=$message?>
			<div class="label">Nom <span>*</span></div>
			<div class="input">
				<input type="text" name="nom" class="zdt" value="<?=$nom?>" required/>
			</div>
			<div class="label">Prénom <span>*</span></div>
			<div class="input">
				<input type="text" name="prenom" class="zdt" value="<?=$prenom?>" required/>
			</div>
			<div class="label">Login <span>*</span><i>Entre 6 et 12 caracètres alphabétiques, numériques et _</i></div>
			<div class="input">
				<input type="text" name="login" class="zdt" value="<?=$login?>" required/>
			</div>
			<div class="label">Mot de passe <span>*</span><i>Minimum 6 caracètres combinant minuscule, majuscule et chiffre</i></div>
			<div class="input">
				<input type="password" name="pass1" class="zdt" value="<?=$pass1?>" required/>
			</div>
			<div class="label">Confirmation du mot de passe <span>*</span></div>
			<div class="input">
				<input type="password" name="pass2" class="zdt" value="<?=$pass2?>" required/>
			</div>
			<div class="label captcha"><?=$cap?></div>
			<div class="label">Veuillez saisir le code de vérification ci-dessus <span>*</span></div>
			<div class="input">
				<input type="hidden" name="capgen" class="zdt" value="<?=$cap?>" required/>
				<input type="text" name="captcha" class="zdt" />
			</div>
			<div class="input">
				<input type="submit" name="valider" class="zdt submit" value="S'inscrire" />
			</div>
		</form>
	</body>
</html>
