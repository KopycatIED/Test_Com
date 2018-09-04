<!DOCTYPE html>
<html lang ="fr"> 
    <head>
        <title>Ma présentation</title>
        <meta charset="utf-8">
        
    
    <!-- Présentation pour le cours de Réseaux Chapitre 2  -->
    <!--Sources : https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/ -->
    <!--Sources : https://validator.w3.org/nu/#textarea -->
    <!--Correction fautes d'orthogrtaphe : "Caro", ma femme -->
    
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    <!-- V2 à fournir suivant demande de correction de Mr P. KISLIN ci-dessous -->
    <!--  Attention, sur Safari, votre page ne s'affiche pas correctement (chapitre 3). -->
    <!-- Et pour le chapitre 2 (TB vos commentaires !!), pourriez-vous ne pas utiliser -->
    <!-- de feuille de style, centrer une de vos images (hall) si nécessaire (balise <center>) -->
    <!-- ou dans un tableau par ex, ajouter des balises <META> afin de décrire le contenu de votre page. -->
    <!--  xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
    <!--Sources V2 : https://www.alsacreations.com/article/lire/628-balises-meta.html -->
    <!-- Sources V2 :https://www.w3schools.com/css/css_dimension.asp -->
    <!-- Ajout des balises meta  -->
    <!-- Ajout du commentaire de la photo Orly H2  -->

    <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    <!--Chapitre 5 : PHP Mysql
        Connexion à la base de donnée 17809772
        Stéphane THOIRON / IED Informatique L1 / N°17809772
        V1 du 22/05/2018
        Cours Réseau Chapitre 5

        Sources :
        http://php.net/manual/fr/mysqli.prepare.php
        https://www.youtube.com/watch?v=mpQts3ezPVg
        Aide des élèves de 2ème année pour l'activation de :"mysqli_" -->

    <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    <!--xxxxxxxxxxxx Chapitre 6 : JAVASCRIPT xxxxxxxxxxxxxx -->
    <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    
    <!--xxxxxxxxxxxxxxxxxxx Sources xxxxxxxxxxxxxxxxxxxxxxx -->

    <!-- Eloquent JavaScript, 2nd Edition: A Modern Introduction to Programming de Marijn Haverbeke (Auteur) -->
    <!--https://openclassrooms.com/courses/1916641-dynamisez-vos-sites-web-avec-javascript/ -->
    <!-- https://www.w3schools.com/jS/default.asp -->

        
        <meta name="description" content="Exercice formulaire à partir d'une présentation personnel"/>
        <meta name="author" content="Stéphane THOIRON"/>
    <link rel= "stylesheet" href="IED/presentation_01.css">
    </head>
    
    
    
    <body>
        <header>
            <!-- Renvoie Javascript -->
           <!-- <script src="chap_6/tableau_openc_01.js"> </script> -->


            <div id= "conteneur">
                <div class="element">
                        <h2>Stéphane THOIRON</h2>
                        <h2>IED L1 Licence Informatique</h2>
                        <h2>Année 2017 - 2018</h2>
                </div>
                <div class="element">
                        <h2> Utilisation d'ordinateur en réseau</h2>
                        <h2> CHAPITRE 6</h2>
                        <h2> Javascript</h2>
                </div>
                <div class="element"> <img src="IED/image/logo-paris8_200.jpg" alt="logo IED"/> </div>
            </div>
            
            

        </header>
        
        
        <nav>
            <h3>Lien</h3>
            <div><a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/memento-des-balises-html">Mémento HTML </a></div>
            <div><a href="http://www.parisaeroport.fr/homepage-groupe#">Site du Goupe ADP</a></div>
            <div id="portrait"> <img src="IED/image/Portrait_150-2.JPG" alt="Stéphane THOIRON"/> </div>
        </nav>
        
        
        <section>
            <div id= "conteneur_2">
                <div class="element_2">  
                    <h3>Interactif</h3>
                    <div><a href="chap_6/Exemple_DOM_2.html">Exercice sur le DOM</a></div> <br>

                    
                        <button onclick="alert('boom!');">Ne pas clicker</button> 
                        

                          <h3>Personnel</h3>
                        <p> Bonjour, je m'appelle Stéphane, j'ai 39 ans. Je suis le papa de deux enfants : Colleen et Camille.</p>
                        <p> Mon maître mot : "<em>Excelsior</em>"</p>
                        <p> Je suis passionné d'arts martiaux. Je pratique l'aïkido depuis maintenant 18 ans. Je suis titulaire d'une ceinture noire IV<sup>ième</sup> dan.</p>
                        <p> Je donne  cours à titre bénévole depuis 6 ans en tant que moniteur dans la région sud seine et marne.</p>
                    <h3>Travail</h3>
                    <div>
                        <p> Je travaille pour le Groupe ADP depuis Septembre 2016. J'occupe un poste d'agent technique automatisme sur Orly.</p>
                        <p> J'appartiens au pôle "<strong>Systèmes Aéroportuaires Automatisés</strong>". Ce dernier a pour but la maintenance et les améliorations </p> 
                        <p> du process bagages tant sur la partie automatisme que sur la partie informatique industrielle. L'équipe est composée de quatre techniciens. </p>
                        <p> Je fais le suivi des prestataires pour le déploiement de projets plus conséquents,</p>
                        <p> que cela soit pour un tirage de fibre optique, alimentation, ou pour de l'ingénierie aéroportuaire.</p>
                        <p> Nous sommes très vigilants sur la qualité des équipements informatiques. Ils remplissent un cahier des charges de certification du point de vu cyber-sécurité (hardware et software).</p>
                        <p> Architecture réseau, Installation des postes informatique, Serveurs d'acquisition, sur la zone de tri des bagages.</p>
                    </div>
                    <div>
                        <p> Quelques points supplémentaires :</p>
                            <ul>
                                <li>Les principaux langages de programmation : VB, javascript, SQL.</li>
                                <li>Paramétrages de switches, firewall/routeurs.</li>
                                <li>Installation de postes opérateurs, Interface Homme Machine sous licence Codra-Panorama.</li>        
                            </ul>
                    </div>
                    <div>
                        <div> Voici le Hall 2 de l'aérogare Ouest : </div>
                        <div><img src="image/orly_ouest_low.jpg" alt="Hall 2 aérogare Ouest"/> </div>

                    </div>
                    <h3>IED Informatique Université Paris 8</h3>
                        <p>Ma formation en Informatique licence L1 a commencé en Novembre 2017. Ces cours sont dispensés à distance,</p>
                        <p> ce qui est pratique pour coordonner ma vie familiale et ma vie professionnelle. </p>
                        <p> Ma formation vise à obtenir une licence d'informatique. Cette dernière me permettra d'optimiser au mieux le poste que j'occupe actuellement.</p>
                        <p> Elle sera également nécessaire pour parfaire mon évolution de carrière.</p>
            
            	   <h3>TEST MYSQL - ATTENTION LA BASE N'EST PLUS VALIDE</h3>
                        <div>
                            <form method="post" action="http://www.kopycat.fr">
                                    <p>Entrer vos coordonnées</p>
                                   <table border="0">
                                    <tr>
                                        <td>Prénom :</td>
                                        <td align= "center"><input type="text" name="prenom" size="20"/></td>
                                    </tr>
                                    <tr>
                                        <td>Nom :</td>
                                        <td align= "center"><input type="text" name="nom" size="20"/></td>                     
                                    </tr>
                                    <tr>
                                        <td>Adresse mail :</td>
                                        <td align= "center"><input type="email" name="email" size="20"/></td>
                                    </tr>
                                    <tr> 
                                        <td> <input type="submit" name="submit" value="Envoyer"></td>
                                    </tr>
                                    <div><a href="http://www.kopycat.fr/IED/getstudentinfo.php">Affichage de la Base</a></div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!-- *************************** -->
                <!--PHP -->
                
                
                <?php

                if(isset($_POST['submit'])) //Determine si une variable est définie et est non NULL
                {
                    $data_missing = array(); // Tableau d'affichage des valeurs non remplie

                        if(empty($_POST['nom'])) // Détermine si la variable nom est vide
                            {
                                $data_missing[]='nom'; // Renvoie la valeur nom dans le tableau
                            }
                        else {
                            $nom = trim($_POST['nom']); // Supprime les espaces en début et en fin de chaimne
                            }

                        if(empty($_POST['prenom'])) 
                            {
                                $data_missing[]='prenom'; 
                            }
                        else {
                                $prenom = trim($_POST['prenom']);
                            }

                        if(empty($_POST['email']))
                            {
                                $data_missing[]='email';
                            }
                        else {
                            $email = trim($_POST['email']);
                            }

                        if(empty($data_missing)) // Détermine si la variable $data_missing est vide
                            {
                                require_once ('mysqli_connect.php');  // Structure de contrôle, exécute le fichier
                                
                                $query = "INSERT INTO user (prenom, nom, email) VALUES (?,?,?)"; // Requête SQL
                                $stmt = mysqli_prepare($dbc, $query) ; // Prepare une requête SQL pour l'exécution
                        
                                mysqli_stmt_bind_param($stmt,'sss', $nom, $prenom, $email); // Sert à lier des variables à une requete préparé par mysqli_prepare
                                
                            // i : Integers
                            // d : Doubles
                            // b : Blobs, qui sera envoyé par paquets
                            // s : Type chaine

                                mysqli_stmt_execute($stmt); // Exécute une requête préparée
                                
                                $affected_rows = mysqli_stmt_affected_rows($stmt); // Retourne le nombre total de lignes modifiées, effacées ou insérées par la derinère requête
                    

                                if ($affected_rows==1)  // dans la cas où la requête est valide
                                {
                                    echo '<br>Inscription validée';
                                    mysqli_stmt_close($stmt); // ferme stmt
                                    mysqli_close($dbc2);  // ferme la connexion à la base de donnée
                                } 
                            
                                else {
                                    echo '<br>Une erreur est arrivée <br />';  // dans la cas contraire, affiche le texte
                                    echo mysqli_error(); // affiche les erreurs mysqli
                                    mysqli_stmt_close($stmt); // ferme stmt
                                    mysqli_close($dbc2);  // ferme mysqli
                                }
                                
                            } 

                        else {
                            echo 'Vous devez entrer les données suivantes <br />'; // Dans le cas où un champ n'a pas été rempli
                            foreach($data_missing as $missing) // rempli le tableau
                                {
                                    echo "$missing<br />";  // Affiche le tableau
                                }
                            }
                    }   

                ?>

        </section>
    </body>
</html>
    
 