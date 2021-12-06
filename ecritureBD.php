<?php session_start();  //echo "Acte<br>".$_SESSION["showInPop"]; ?>
 
<!DOCTYPE html>
<html lang="fr">
<head>
	 <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"> <!-- local storage -recup Acte n° pour transmission à la pop -->
	 <title> Acces en Ecriture &aacute; la base etatcivil</title>
	 <link href="css/template.css"  rel="stylesheet" type="text/css" >
	 <link href="css/accueil22.css" rel="stylesheet"   />
	 
	 <link href="css/slide.css"     rel="stylesheet"   /> 
	 <link href="css/dropdown.css"  rel="stylesheet"    />
	 <link href="css/lectureBD.css" rel="stylesheet" title="Style" />  <!-- pour les bouton du panneau central -->
	 <link href="css/ecritureBD.css" rel="stylesheet" title="Style" /> 

	 <script src="js/jquery.js"></script>
	 <script src="js/ecritureBD.js"></script>
</head>

<body>
	<!-- <div id="acteN"></div> -->
	<header>
		<div class="en-tete">
				<h1>Etat civil </h1>
				<h2> PHP ( sans framwork ) </h2>
		</div>		
		<div class="menu topnav"  id="myTopnav"> 
			<ul>

			  <li style="width:auto; color:inherit;">.</li>
			</ul> 
		</div>
    </header>
	<div class="contenu">
		<form action ="SERVEUR/ecritureBD_insertionSQL.php" method="post" name="form1" >
			<!-- LE PANNEAU DE GAUCHE :  -->
			<div class="colonne_laterale" style="width: 33%; ">
				<aside style="padding:0; background:inherit;">			    
		             <?php include("inc/ecriture/ecritureBD_panodegauche.php"); ?>
            	</aside>
			</div>

			 <!-- LE PANNEAU DE DROITE devient le panneau centrale:  -->
            <div class="colonne_contenu" style="padding:0; width: 40%;">
			     <aside style="padding:0; background:#ececea;">
					<table class="tabledroite"  >
					    <caption style="caption-side:top"> <font style="color:#ECECEA;"><h4> acte de naissance  </h4></caption>
						<p class="showacte"> <!-- Pour afficher l'acte modifiÃ© dans la partie droite de la page modifie_.php  -->
							<tr> 
								 <td> <input type="text" name="naissance_jour_moi"  placeholder=" Le" > </td>
								 <td> <input type="text" name="naissance_an"  placeholder=" ici l'an"> </td>
							</tr>
							<tr> 
								 <td> <input type="text" name="naissance_heure"  placeholder=" heure"> </td>
								 <td> <input type="text" name="naissance_minuite"  placeholder=" minuite" > </td>
							</tr>
							
							 <tr> <td> <input type="text" name="naissance_nom_prenom" placeholder="est n&eacute;(e)" ></td></tr>
							 <tr> <td> <input type="text" name="naissance_lieu"  placeholder=" &agrave;(lieu)" > </td></tr>
							 <tr> <td> <input type="text" name="naissance_sexe"   placeholder=" du sexe" > </td></tr>
							 
							 <tr><td> <font color="##1D702D"><b>Le p&egrave;re</b></font></td> </tr>
							 <tr> <td> <input type="text" name="pere_nom_prenom"  placeholder=" fils(fille) de" > </td></tr>
							 <tr> <td> <input type="text" name="pere_datenaisance"  placeholder=" n&eacute; le"> </td></tr>
							 <tr> <td> <input type="text" name="pere_lieunaissance"   placeholder=" n&eacute; &agrave;" > </td></tr>
							 <tr> <td> <input type="text" name="pere_profession"    placeholder=" profession "   > </td></tr>
							 <tr> <td> <input type="text" name="pere_villederesidence"   placeholder=" demeurant &agrave;"  > </td></tr>
							
							 <tr><td> <font color="##1D702D"><b>La m&egrave;re</b></font></td> </tr>
							 <tr> <td> <input type="text" name="mere_nom_prenom"  placeholder=" et de" > </td></tr>
							 <tr> <td> <input type="text" name="mere_datenaisance"  placeholder="n&eacute;e le"  > </td></tr>
							 <tr> <td> <input type="text" name="mere_lieunaissance"      placeholder=" &agrave;"> </td></tr>
							 <tr> <td> <input type="text" name="mere_profession"       placeholder=" profession" ></td></tr>
							 <tr> <td> <input type="text" name="mere_villederesidenc"   placeholder=" demeurant &agrave;"> </td></tr>
							 
							 <tr><td> <font color="##1D702D"><b>La d&eacute;claration</b></font></td> </tr>
							 <tr> 
								 <td> <input type="text" name="declaration_faite_par" placeholder=" faite par:"> </td>
								 <td style="text-align: left; margin-left:10px;"> <span style=" margin-left:13px;" >  Emetteur jugement</span></td>
							 </tr>
							 <tr> 
								 <td > <input type="text" name="declaration_recue_pa" placeholder=" re&ccedil;ue par"> </td>
								 <td style="text-align: left; margin-left:10px;"> <span style=" margin-left:13px;" >  Titre  recepteur</span></td>
							 </tr>
							 <tr> 
								 <td> <input type="date" name="datejugement" placeholder=" date jugement : " style="height:15px;"> </td>
								 <td style="text-align: left; margin-left:10px;"> <span style=" margin-left:13px;" >Date  jugement</span></td>
							 </tr>
						 </p>
						 <tr> 
							<td>
								 <!-- recuperer  une veriable javascripte +actesaisi+  en php -->
								<?php if(!isset($_POST["acte"])) $_POST["acte"]=""; $valeurphp= $_POST["acte"]; ?> <!-- +sieurs 10zaines de jour de galere!!! alors que la solution été si simple! Trouvé vend 25.09.16 à 16h50 à cité des sicience. shukran li l'ALLAH.   -->
								<a id="acteAJAX" href="afficher2.php?n=<?php echo $valeurphp; ?>"   onclick="    window.open(this.href, 'Popup', 'scrollbars=1,resizable=1,height=409,width=918 ,  top=258, left=175 '); return false; " >
									<input type="button"  value="Afficher l'acte" align="center"  style="background-color: #cdbe9f;"   />  
								</a>
							</td>
							<?php if(!isset($donnees["ID"])) $donnees["ID"]=1;  ?>
							<td> <a  href="afficher.php?n=<?php echo $donnees["ID"];?> "  ><input type="button"  value="Imprimer l'acte" align="center"  style="background-color: #cdbe9f;"/></a></td>
						 </tr>
					</table>
				</aside>
			</div>
			<!-- LE PANNEAU DE DROITE: -->
			<div class="colonne_laterale" style="width: 25%; ">
				<aside style="padding:0; background:inherit; padding-top:0;">			    
		            <table  class="tablemenu" style="min-height:35.5em; padding-bottom:11em;" ><caption style="caption-side:top"> <font color="#ececea"><h4> Enregistrement  </h4></caption>     
						<tr><td>
							<?php include("inc/ecriture/ecritureBD_menucentre.php"); ?>
						</td></tr>
					</table>
            	</aside>
			</div>
		</form>
	</div>
    <div class="footer">
        Pied de Page
    </div>	
</body>
</html>
<?php
  //header('Location: ecritureBD.php');//Warning: Cannot modify header information - headers already sent by
 include("SERVEUR/verif_num_acte.php"); 
?>




  

