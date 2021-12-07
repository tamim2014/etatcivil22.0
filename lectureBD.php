
<?php session_start(); if(!isset($_SESSION["pref"])) $_SESSION["pref"]=""; $s=$_SESSION["pref"]; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
     <title> Acces en Lecture a la base etatcivil: connexion,recupreation affichage</title>
     <link href="css/template.css"  rel="stylesheet" type="text/css" >
	 <link href="css/accueil22.css" rel="stylesheet"   />
     <link href="css/slide.css"     rel="stylesheet"   />
	 <link href="css/dropdown.css"  rel="stylesheet"    />
	 
	 <link href="css/lectureBD.css" rel="stylesheet" title="Style" />
	 
	 <script src="js/jquery.js"></script>
	 <script src="js/capture_items.js"></script>    <!--    <script src="js/acteOutSlide.js"></script> -->
	 <script src="js/lectureBD.js"></script>
</head>

<body>
    <header>
		<div class="en-tete">	
			<div class="hollowTop"   >				   
			   <input type=image src="img/drapeau.png" align="left" class="flag" />
			   <p class="text_header">OFFICE   <br> D'&Eacute;TAT CIVIL </p>			  
			</div> 				
		</div>		
		<div class="menu topnav"  id="myTopnav"> 
				<?php include("inc/accueil/accueil_menucentral.php"); ?> 
		</div>
    </header>

	<div class="contenu" style="margin-bottom:0;"  >
		<!-- LE PANNEAU DE GAUCHE :  -->
		<div class="colonne_laterale" >
			<aside style="padding:0; " >
				<table class="tablegauche" style="margin-bottom:0;"> 
				     <caption  style="caption-side:top; box-shadow: 0 0 65px #cdbe9f inset, 0 0 20px #beae8c inset, 0 0 5px #816f47;  "> 
						<font color="gray" style="line-height:2;">
							<h3> UNION DES COMORES  </h3>
							<h6> Unit&eacute;-Solidarit&eacute;-D&eacute;veloppement  </h6>
							<h4> MINISTERE DE L'INTERIEUR  </h4>
						</font>
					     <img src="img/armoirie.png" style="z-index:3; transform: translate(100%, 0);  "  />
					 </caption>
					 <tr><td>
						 <?php include("inc/lecture/menugauche.php"); ?>  
					 </td></tr>
				</table>
			</aside>
		</div>
		<!-- LE PANNEAU DE DROITE :  -->
		<div class="colonne_contenu" style="padding:0;">
			<aside>
				<table  class="tabledroite" style="padding-top:0;">
				     <!-- <caption style="caption-side:top"> <font color="#FFFFFF"><h3> Liste des actes de naissance </h3></caption> -->
					 <tr><td > 
                         <div class="mnayvawo"><button  class="boutoyahemnayivawo"> Actes extraits de la pr&eacute;fecture de:<span id="wilaya_" style="color:#000066;  font-size: 17px; font-style: italic; font-family: \"Times New Roman\", Georgia, Serif;" > <?php  echo  $s; ?></span> </button>   </div>					 
						 <div class="line1" style="width:98%; height:5px; margin:auto;"></div>
						 <div id="yivawo"  ></div> 
					 </td></tr>
				</table>
		        <?php include("inc/lecture/sousmenu.php"); ?> 
            </aside>
        </div>			
	</div> <!-- fin  <div class="contenu"  >  -->
	
	<div class="footer" style="margin-top:0;">
        Pied de Page
    </div>
    <!-- <div class="mnayvawo">  <button  class="boutoyahemnayivawo"> Actes extraits de la pr&eacute;fecture de:<span id="wilaya_" style="color:#000066;  font-size: 17px; font-style: italic; font-family: \"Times New Roman\", Georgia, Serif;" > <?php  echo  $s; ?></span> </button>   </div>  -->
<body>
</html>


     
