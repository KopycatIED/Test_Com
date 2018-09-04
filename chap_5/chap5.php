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

        
        <meta name="description" content="Exercice formulaire à partir d'une présentation personnel"/>
        <meta name="author" content="Stéphane THOIRON"/>
    <link rel= "stylesheet" href="IED/presentation_01.css">
    </head>
    <body>
        <header>
            <div id= "conteneur">
                <div class="element">
                        <h2>Stéphane THOIRON</h2>
                        <h2>IED L1 Licence Informatique</h2>
                        <h2>Année 2017 - 2018</h2>
                </div>
                <div class="element">
                        <h2> Utilisation d'ordinateur en réseau</h2>
                        <h2> CHAPITRE 5</h2>
                        <h2> formulaire, PHP, MySQL</h2>
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
        <aside>
        	<h3>Se connecter</h3>
        	<div id="connexion">
        		<p>Login : <input type="text" name="login"/>
                <p>Mot de Passe : <input type="password" name="mot de passe" />
        	</div>
        	<h3>S'inscrire</h3>
        	<div id="inscrire">
        		<p>Prénom : <input type="text" name="prenom" />
        		<p>Nom : <input type="text" name="nom" />
        		<p>Adresse Mail : <input type="text" name="email" />
        		<p>ordinaire avant
        		<p><?php echo "ça va marcher maintenant" ?>
        		<p>ordianire après
        	</div>
        </aside>
        <section>
                <h3>Personnel</h3>
                    <p> Bonjour, je m'appelle Stéphane, j'ai 38 ans. Je suis le papa de deux enfants : une fille Colleen, 6 ans, et un  garçon, Camille, 2 ans <sup>1/2</sup>.</p>
                    <p> Mon maître mot : "<em>Excelsior</em>"</p>
                    <p> Je suis passionné d'arts martiaux. Je pratique l'aïkido depuis maintenant 17 ans. Je suis titulaire d'une ceinture noire IV<sup>ième</sup> dan.</p>
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
                <form method="post"
                    action="http://localhost:8765/clic"
                    style="background-color:aqua;">
                    <h3>Petit questionnaire</h3>
                        <p>Voici un petit questionnaire qui me permettra de mieux vous connaitre</p>
                        <p>Prénom : <input type="text" name="prenom"/>
                        <p>Nom : <input type="text" name="nom"/>
                        <p>Adresse mail :<input type="email">
                        <p>Age : <input type= "number" name="age"/>
                        <p>Vous aimez : 
                            <input type="checkbox" name="l'informatique"> l'informatique
                            <input type="checkbox" name="voyager"> voyager
                            <input type="checkbox" name="martialart"> les arts martiaux
                            <input type="checkbox" name="ADP"> le groupe ADP
                        <p>Vous préférez voyager à
                            <input type="radio" name="pref" value="NewYork" /> New York
                            <input type="radio" name="pref" value="Amsterdam" /> Amsterdam
                            <input type="radio" name="pref" value="Moscou" /> Moscou
                            <input type="radio" name="pref" value="Tokyo"/> Tokyo   
                        <p> <input type="submit">
                </form>
        </section>
    </body>
</html>