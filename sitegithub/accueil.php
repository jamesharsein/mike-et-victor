 <?php
    session_start();
    if (!$_SESSION['mdp']) {
    }
    ?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>DIPEPA JAMES</title>
     <link rel="stylesheet" href="jojooooojlm.css">
     <meta charset="UTF-8" />
 </head>
 <style>
     body {
         background-color: aqua;
         width: 100%;
         height: 100vh;
         background-attachment: scroll;
     }

     .menuderoulant {
         height: 60px;
         list-style: none;
         padding: 10px;
         margin: 40px;
     }

     .menuderoulant li {
         float: left;
         width: 135px;
     }

     .menuderoulant li a:link,
     .menuderoulant li a:visited {
         display: block;
         color: #FFFFFF;
         background: #293245;
         padding: 6px 10px;
         border-right: 1px solid #FFFFFF;
         border-radius: 100px 100px 100px 100px;
         text-align: center;
         text-decoration: none;
     }

     .menuderoulant li a:hover {
         background-color: #1998D2;
     }

     .menuderoulant li a:active {
         background-color: #808080;
     }

     .menuderoulant .sousmenu {
         list-style-type: none;
         display: none;
         padding: 0;
         margin: 0;
         position: absolute;
     }

     .menuderoulant .sousmenu li {
         float: none;
         margin: 0;
         padding: 0;
         border-top: 1px solid transparent;
         border-right: 1px solid transparent;
     }

     .menuderoulant .sousmenu li a:link,
     .menuderoulant li a:visited {
         display: block;
         color: #FFFFFF;
         text-decoration: none;
         background-color: #808080;
     }

     .menuderoulant .sousmenu li a:hover {
         background-color: #1998D2;
     }

     .menuderoulant li:hover .sousmenu {
         display: block;
     }

     .slide {
         float: left;
     }

     h1 {
         border: 15px blue solid;
         border-radius: 15px 15px 15px 15px;
         color: rgb(5, 5, 5);
         background-image: url(https://st2.depositphotos.com/3889193/7086/i/600/depositphotos_70863797-stock-photo-diy-and-home-improvement-banner.jpg);
         text-align: center;
         margin-left: 25px;
         margin-right: 25px;
         font-family: 'Send Flowers', cursive;
     }

     .container {
         margin-top: 30px;
         margin-bottom: 80px;
         margin-left: 600px;
         margin-right: 30px;
         padding: 20px;
         font-family: 'Roboto Mono', monospace;
         position: absolute;
         top: 45%;
         background: blue;
         box-sizing: border-box;
         border-radius: 10px;
         box-shadow: 0 15px 50px rgba(0, 0, 0, 2);
     }

     .container .circle {
         border: 5px black solid;
     }

     hr {
         margin-top: 35px;
         margin-bottom: 5px;
     }

     .circle {
         width: 200px;
         height: 200px;
         background: url(https://st2.depositphotos.com/3889193/7086/i/600/depositphotos_70863797-stock-photo-diy-and-home-improvement-banner.jpg);
         background-size: 100% 100%;
         border-radius: 50%;
         float: left;
         shape-outside: circle();
         margin: 30px;
     }

     .text {
         font-family: 'Roboto Mono', monospace;
         margin-top: 50px;
         margin-bottom: 50px;
         margin-right: 50px;
         margin-left: 50px;
         display: block;
     }

     .text .slidar {
         right: 50%;
         top: 50%
     }

     .slidar {
         width: 500px;
         height: 470px;
         overflow: hidden;
         overflow-block: none;

         -webkit-animation-name: slidar;
         -webkit-animation-duration: 20s;
         -webkit-animation-timing-function: linear;
         -webkit-animation-iteration-count: infinite;
         -webkit-animation-direction: normal;

         -moz-animation-name: slidar;
         -moz-animation-duration: 20s;
         -moz-animation-timing-function: linear;
         -moz-animation-iteration-count: infinite;
         -moz-animation-direction: normal;

         animation-name: slidar;
         animation-duration: 20s;
         animation-timing-function: linear;
         animation-iteration-count: infinite;
         animation-direction: normal;
     }

     @-webkit-keyframes slidar {
         0% {
             background-image: url("image1.png");
         }

         14% {
             background-image: url("image2.jpg");
         }

         28% {
             background-image: url("image3.jpg");
         }

         42% {
             background-image: url("image4.jpg");
         }

         56% {
             background-image: url("image5.jpg");
         }

         70% {
             background-image: url("image6.jpg");
         }

         84% {
             background-image: url("image7.jpg");
         }

         100% {
             background-image: url("image1.jpg");
         }
     }

     @-moz-keyframes slidar {
         0% {
             background-image: url("image1.png");
         }

         14% {
             background-image: url("image2.jpg");
         }

         28% {
             background-image: url("image3.jpg");
         }

         42% {
             background-image: url("image4.jpg");
         }

         56% {
             background-image: url("image5.jpg");
         }

         70% {
             background-image: url("image6.jpg");
         }

         84% {
             background-image: url("image7.jpg");
         }

         100% {
             background-image: url("image1.jpg");
         }
     }

     @keyframes slidar {
         0% {
             background-image: url("image1.png");
         }

         14% {
             background-image: url("image2.jpg");
         }

         28% {
             background-image: url("image3.jpg");
         }

         42% {
             background-image: url("image4.jpg");
         }

         56% {
             background-image: url("image5.jpg");
         }

         70% {
             background-image: url("image6.jpg");
         }

         84% {
             background-image: url("image7.jpg");
         }

         100% {
             background-image: url("image1.jpg");
         }
     }

     .containeer {
         width: 900px;
         height: 520px;
         display: flex;
         flex-direction: column;
         align-items: center;
         flex-wrap: wrap;
         background-color: aqua;
         border-radius: 0px;
         padding-top: 0px;
         margin-left: 10%;
         margin-right: 50%;
         margin-bottom: 0%;
         padding-bottom: 5px;
         padding-left: 29px;
         padding-right: 29px;
     }

     .card {
         height: 250px;
         width: 310px;
         margin-left: 5px;
         margin-right: 5px;
         margin-top: 5px;
         margin-bottom: 5px;
         transform-style: preserve-3d;
         transition: all 1.5s ease;
     }

     .card:hover {
         transform: rotateY(180deg);
     }

     .devant {
         position: absolute;
         width: 100%;
         height: 100%;
         backface-visibility: hidden;
         background-color: blue;
         border-radius: 40px;
         color: blanchedalmond;
         font-weight: bold;
     }

     .derrière {
         position: absolute;
         width: 100%;
         height: 100%;
         backface-visibility: hidden;
         background-color: white;
         border-radius: 40px;
         color: rgb(3, 3, 3);
         text-align: center;
         font-weight: bold;
         word-wrap: break-word;
         transform: rotateY(180deg);
     }

     .circle1 {
         width: 100px;
         height: 100px;
         background: url(https://st2.depositphotos.com/3889193/7086/i/600/depositphotos_70863797-stock-photo-diy-and-home-improvement-banner.jpg);
         background-size: 100% 100%;
         border-radius: 50%;
         float: left;
         shape-outside: circle();
         margin: 30px;
     }

     .circle2 {
         width: 100px;
         height: 100px;
         background: url(https://st2.depositphotos.com/3889193/7086/i/600/depositphotos_70863797-stock-photo-diy-and-home-improvement-banner.jpg);
         background-size: 100% 100%;
         border-radius: 50%;
         float: left;
         shape-outside: circle();
         margin: 30px;
     }

     .circle3 {
         width: 100px;
         height: 100px;
         background: url(https://st2.depositphotos.com/3889193/7086/i/600/depositphotos_70863797-stock-photo-diy-and-home-improvement-banner.jpg);
         background-size: 100% 100%;
         border-radius: 50%;
         float: left;
         shape-outside: circle();
         margin: 30px;
     }

     .circle4 {
         width: 100px;
         height: 100px;
         background: url(https://st2.depositphotos.com/3889193/7086/i/600/depositphotos_70863797-stock-photo-diy-and-home-improvement-banner.jpg);
         background-size: 100% 100%;
         border-radius: 50%;
         float: left;
         shape-outside: circle();
         margin: 30px;
     }

     .circle5 {
         width: 100px;
         height: 100px;
         background: url(https://st2.depositphotos.com/3889193/7086/i/600/depositphotos_70863797-stock-photo-diy-and-home-improvement-banner.jpg);
         background-size: 100% 100%;
         border-radius: 50%;
         float: left;
         shape-outside: circle();
         margin: 30px;
     }

     .circle6 {
         width: 100px;
         height: 100px;
         background: url(https://st2.depositphotos.com/3889193/7086/i/600/depositphotos_70863797-stock-photo-diy-and-home-improvement-banner.jpg);
         background-size: 100% 100%;
         border-radius: 50%;
         float: left;
         shape-outside: circle();
         margin: 30px;
     }
 </style>

 <body>
     <div class="accueil">
         <h1 align="center">MIKE-VICTOR Co</h1>
         <nav>
             <ul class="menuderoulant">
                 <li><a href="#">DECORATION</a>
                     <ul class="sousmenu">
                         <li><a href="decoration.php">aller à</a></li>
                     </ul>
                 </li>
                 <li><a href="#">LOGEMENT</a>
                     <ul class="sousmenu">
                         <li><a href="logement.php">aller à</a></li>
                     </ul>
                 </li>
                 <li><a href="#">TRAITEUR</a>
                     <ul class="sousmenu">
                         <li><a href="traiteur.php">aller à</a></li>
                     </ul>
                 </li>
                 <li><a href="#">BABYSITTING</a>
                     <ul class="sousmenu">
                         <li><a href="babysitting.php">aller à</a></li>
                     </ul>
                 </li>
                 <li><a href="#">REPETITIONS</a>
                     <ul class="sousmenu">
                         <li><a href="repetitions.php">aller à</a></li>
                     </ul>
                 </li>
                 <li><a href="#">MENAGE</a>
                     <ul class="sousmenu">
                         <li><a href="menage.php">aller à</a></li>
                     </ul>
                 </li>
                 <li><a href="#">JARDINAGE</a>
                     <ul class="sousmenu">
                         <li><a href="jardinage.php">aller à</a></li>
                     </ul>
                 </li>
                 <li><a href="#">RESTAURATION</a>
                     <ul class="sousmenu">
                         <li><a href="restauration.php">aller à</a></li>
                     </ul>
                 </li>
                 <li><a href="#">BUREAUTIQUE</a>
                     <ul class="sousmenu">
                         <li><a href="bureautique.php">aller à</a></li>
                     </ul>
                 </li>
             </ul>
             <div class="slider">
                 <div class="slides">
                     <slide><img src="servicetraiteur.jpg" alt="oups!" /></slide>
                     <slide><img src="jardinage.jpg" alt="oups!" /></slide>
                     <slide><img src="bureautique1.jpg" alt="oups!" /></slide>
                 </div>
             </div>
             <section>
                 <div class="container">
                     <div class="circle"></div>
                     <h3><B>bricolage à domicile</B></h3>
                     <p>vous avez besoin de petits travaux de bricolage à domicile? faites appel aux professionnels
                         MIKE-VICTOR co formés et entièrement equipés pour repondre à tous types de demandes.Forfait
                         mensuel,de 2h ou à la demande,c'est vous qui choisissez suivant vos besoins! NOS
                         SERVICES:-decoration,-logement,-service traiteur,-restauration en ligne,-bureautique,-garde des
                         enfants,-soutien scolaire,-menage àdomicile,-jardinage,-bricolage. </p>
                 </div>
             </section>
             <hr>
             <div>
                 <div class="text">
                     <p>
                         <i>
                             LE BRICOLAGE AVEX MIKE-VICTOR CO COMPREND QUOI?
                             <br> Vous n'avez pas necéssaire au remplacement d'une prise électrique?
                             <br> vous ne vous sentez pas capable d'installer vous meme une tringle à rideau?ou vous ne
                             souhaitez tout simplement pas perdre de temps avec de stravaux de bricolages?
                             <br> vos techniciens bricoleurs MIKE-VICTOR CO sont là pour vous.
                             <br> decouvrez ce qu'ils peuvent faire pour vous simplifier la vie !
                         </i>
                     </p>
                     <div class="containeer">
                         <div class="card">
                             <div class="devant">
                                 <div class="circle1"></div>
                             </div>
                             <div class="derrière"> LES TRAVAUX D'ELECTRICITE
                                 <br>• Remplacement des prises électriques
                                 <br>• changement d'ampoules
                                 <br>• Remplacements de prises électriques
                                 <br>• Changement d’ampoules
                                 <br>• Pose d’une applique murale
                                 <br>• Installation électrique
                                 <br>• Autres problèmes liés à l’électricité
                             </div>
                         </div>
                         <div class="card">
                             <div class="devant">
                                 <div class="circle2"></div>
                             </div>
                             <div class="derrière">
                                 Les travaux de plomberie
                                 <br>• Remplacement d’un robinet
                                 <br>• Réparation en cas de fuite d’eau
                                 <br>• Changement de flexibles
                                 <br>• Autres problèmes liés à la plomberie…
                             </div>
                         </div>
                         <div class="card">
                             <div class="devant">
                                 <div class="circle3"></div>
                             </div>
                             <div class="derrière">
                                 L’aménagement d’intérieur
                                 <br>• Montage de meubles
                                 <br>• Pose de tringle à rideaux
                                 <br>• Peinture d’une pièce de la maison
                                 <br>• Autres problèmes liés…
                             </div>
                         </div>
                         <div class="card">
                             <div class="devant">
                                 <div class="circle4"></div>
                             </div>
                             <div class="derrière">
                                 Le nettoyage des vitres
                                 <br>• Nettoyage des fenêtres en hauteur
                                 <br>• Nettoyage de verrières
                                 <br>• Nettoyage de vérandas... et autres
                                 <br>Les travaux du froid et climatisation
                                 <br>Les travaux du bâtiments (peintures et autres)

                             </div>
                         </div>
                         <div class="card">
                             <div class="devant">
                                 <div class="circle5"></div>
                             </div>
                             <div class="derrière">
                                 Nos techniciens bricoleurs peuvent aussi vous aider pour :
                                 <br>Les travaux d’économie d’énergie
                                 <br>• Remplacements d’ampoules
                                 <br>• Pose d’équipements économiseurs d’eau...
                             </div>
                         </div>
                         <div class="card">
                             <div class="devant">
                                 <div class="circle6"></div>
                             </div>
                             <div class="derrière">
                                 La sécurisation à domicile
                                 <br>• Installation de détecteurs de fumée
                                 <br>• Pose de rambarde ou de barres d'appui…
                                 <br>• Pose de verrou et de judas
                             </div>
                         </div>
                     </div>
                     <p>
                         <i>
                             <br>Tout commence par une visite à domicile sans engagement
                             <br>Le chef d'équipe Bricolage Mike-Victor Co se déplace à votre domicile pour échanger avec
                             vous sur vos besoins et envies. Suite à sa visite, il vous remet un devis personnalisé,
                             gratuit et sans engagement.
                         </i>
                     </p>
                     <div class="slidar">

                     </div>
                     </p>
                 </div>
                 <script>
                     prompt("BIENVENU!,COMMENT ALLEZ-vous?");
                 </script>
             </div>
             <a href="deconnexion.php">
                 <button align="right">se déconnecter</button>
             </a>
 </body>

 </html>