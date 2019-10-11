<?php

function nettoyage($string){

return ctype_alpha($string);
}

function error($message,$color){

return "<small class = '$color'><strong>$color: $message</strong></small>";
}
function ok($is){
	if(empty($is)&& isset($submit)){
}
return $is;
}


$name = $_POST['nam'];
$prenom = $_POST['prenom']; 
$message = $_POST['message'];
$email = $_POST['email'];
$submit = $_POST['envoyer'];




//if($name != nettoyage($name) AND ok($name)){
//	echo error('Nom incorrect','Erreur');
//}

//if($prenom != nettoyage($prenom) AND ok($prenom)){
//	echo error('Prenom incorrect','Erreur');
//}

//if($message != nettoyage($message) AND ok($message)){
//	echo error('Message incorrect','Erreur');
//}

//if($email != filter_var($email, FILTER_SANITIZE_EMAIL) AND ok($email)){
//	echo error('E-mail incorrect','Erreur');
//}

//if(ok($genre)){
//echo error('Genre non selectioner','Erreur');
//}

//if(ok($pays)){
//echo error('Pays non selectioner','Erreur');
//}

//if(ok($produit)){
//echo error('Produit non selectioner','Erreur');
//}



//if(empty($nameok)){
 
//echo '<div>"Merci"</div>';
//}



$subject = 'Merci pour votre inscription';
$txt = 'Bonjour'.$prenomok .$nomok.'Votre demande est envoyer' ;
$headers = 'poulette@hotmail.com';

mail($emailok,$subject,$txt,$headers);








?>



<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/style.css" title="style.css" />
    <title>Contact</title>
  </head>

<body>
<section class="container col-8 offset col-4 " id="fd">


<img class="col-12" src="assets/image/hackers-poulette-logo.png" alt="logo poulette" />


	<form action="" method="post" accept-charset="utf-8">
		<section class=" form-row "  title="Formulaire nom et prenom">	
			<label  for="name">Entrez votre nom </label>
			<input class="form-control" name="nam" type="text" id="name" maxlength="10" placeholder ="Dupont" /><?php 
				if($name != nettoyage($name) and ok($name)){
					echo error('Nom incorrect','Erreur');
					} else{ $name = $nameok;}
					if(empty($name) && isset($submit)){
						echo error('Entrez un nom','Attention');
						}	
?>
		</section>
		<section class="form-row"   title="Formulaire nom et prenom">
			<label for="prenom">Entrez votre prénom </label>
			<input class="form-control" name="prenom" type="texte" id="prenom" maxlength="10" placeholder="Jhony" /><?php 
				if($prenom != nettoyage($prenom)and ok($prenom)){
					echo error('Prenom incorrect','Erreur');
					}else{ $prenom = $prenomok;}
					if(empty($prenom) && isset($submit)){
						echo error('Entrez un Prenom','Attention');	
				}
				?>
		</section>

		<section name="genre" class=" form-row" title="Formulaire Choisir un genre">
				<section class="col-4 form-check form-check-inline" > 	
					<input class="form-check-input" id="homme" type="radio" value="homme" /> Homme<?php 
						if(empty($genre) && isset($submit)){
						echo error('Choisi un genre','Attention');
						}
						?>
				</section>
				<section class="form-row">
					<input class="form-check-input" id="femme" type="radio" value="femme" /> Femme<?php 
					if(empty($genre) &&  isset($submit)){
						echo error('Choisi un genre','Attention');
						}
						?>
				</section>
		</section>

		<section class="form-row" >
			<label for="mail" title="Formulaire e-mail"  >Entrez votre e-mail</label>
			<input  class="form-control " name="email"  id="mail" placeholder="Jhony@hotmail.com"/><?php 
				if($email != filter_var($email, FILTER_SANITIZE_EMAIL)){
					echo error('E-mail incorrect','Erreur');
					}else{ $email = $emailok; }
					if(empty($email) && isset($submit)){
						echo error('Entrez une adresse e-mail','Attention');
					}
					?>
		</section> 
		
		<section class="form-row">
			 <label name="produit" for="produit" title="Formulaire selectionnée produit">De quel Rasbery avez vous besoin ?</label>
             <select class="form-control" id="produit">
           <option name="produit" value="kit-desktop">kit desktop</option>
           <option name="produit" value="kit-gaming">kit gaming</option>
           <option name="produit" value="kit-officiel">kit officiel</option>
			</select>
		</section>
		
		<section class="form-row">
			<label for="pays" name="pays" title="Formulaire selectionnée pays">Dans quel pays habitez-vous ?</label><br />
			<select class="form-control" id="pays">
			<option value="france">France</option>
			<option value="espagne">Espagne</option>
			<option value="italie">Italie</option>
			<option value="royaume-uni">Royaume-Uni</option>
			<option value="canada">Canada</option>
			<option value="etats-unis">États-Unis</option>
			<option value="chine">Chine</option>
			<option value="japon">Japon</option>
			</select>
		</section>

		<section class="form-row">
			<textarea  class="form-control" name="message" rows="10" cols="40" maxlength="50" title="texte message a Envoyer" placeholder="Ecrivez nous un message ici"></textarea><?php 
				if($message != stripslashes(htmlspecialchars(strip_tags($message)))){
					echo error('Message incorrect','Erreur');
					}else{ $message = $messageok; }
					if(empty($message) && isset($submit)){
						echo error('Entrez un message','Attention');
					}
					?> 
			</section>
		
		<button  class="btn btn-info btn-lg  " title="button d'envois" name="envoyer" type="submit">Envoyer</button>

	</form>




   <!-- H o n e y p o t -->

<form class="honey">
    <label class="honey" for="name">Your Name</label>
    <input class="honey" type="text" id="name" name="name" placeholder="Your name here" required maxlength="100">
    <label class="honey" for="email">Your E-mail</label>
    <input class="honey" type="email" id="email" name="email" placeholder="Your e-mail here" required>
</form>


</section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
