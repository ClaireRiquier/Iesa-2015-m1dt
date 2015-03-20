# Iesa-2015-m1dt

http://daringfireball.net/projects/markdown/

# Git hub
* commande dans Terminal pour enregistrer une version
    * git add .
    * git commit -m "un commentaire"
    * git push
    * git checkout . !warning! Reset le code après le dernier commit
* cmd t dans le terminal pour ouvrir une nouvelle fenêtre
    * clôner son repertoire git hub ds un nouveau avec l'url https://github.com/ClaireRiquier/Iesa-2015-m1dt.git (ds le repertory sur git hub)

# html 5 / JS
* Google Map : mettre les dimensions dans la div pour afficher la map

#css
    * padding : 10px 20p 15px   =   10 top  20 right  15 bottom  20 left

#Js
    * instruction > se termine par ;
    * concaténation > gérer les espaces dans les guillemets (dans la chaine de caractère)
    * d = 33 > on affecte 33 à d !ne veut pas dire d égale 33! => opérateur d'affectation
    si on veut dire d égale 33, on écrit d == 33 => opérateur d'opération
        * pour éviter tout problème : 33 == d  (d'abord la valeur et ensuite la variable -> bon à tous les coups !)
    * || > opérateur de logique ou > alt shift l
    * !Attention! Une condition est toujours entre parantèses > if ()
    si on a un opérateur entre 2 conditions, on englobe le tout dans des () > if ((a==b) || (b==d)) {}  ou alors if (a==b || b==d) {}
    * Opérateur ternaire vs if/else
                    if     then     sinon    ;
        a =        ()   ?   ()    :   () ;
    * pour aficher dans la console (de firebug par ex):
        * var a = 100;
          var b = 200;
    console.log("Alert,word");
    console.debug("Alert,word");
    console.info("Alert,word");
    console.warn("Alert,word");
    console.error("Alert,word");
    * nommage d'une fonction sous forme de verbe ex : function soitPoli
    * paramètres d'une fonction : ce qu'il y a dans les parantèses => function myFunction ()
        * si on définit 2 fonctions différentes, elles peuvent avoir les mêmes paramètres.

#PHP
    * la balise fermante ?> n'est pas obligatoire.
    * global : mot clé sur la portée des variables. => ne pas l'utiliser
    * variable dynamique : variable de variable > $$a
    * convention de nommage des constantes : en maj
    * 3 caté de type en php
        * scalaires : boolean - integer - float - string
        * composés : array - objet
        * spéciaux : ressource - null
    * var_dump($a) : fonction qui donne le type + valeur de la variable
    * gettype ($a) : fonction qui donne le type de la variable
    * 1ere ligne d'une fonction = la signature
    * une fonction = une seule fonctionnalité !
    * !warning! Ne pas oublier d'appeler la fonction après l'avoir déterminée

#Types
    * Nombres
    * String
        * "aaa" < "bbb" = true  différent de "aaa" < "Bbbbb" = false => la casse des lettres a un poid.
    * Array
        * On peut mettre tt type de contenu dans un meme tableau
    * Dates
        * var today = new Date();
        * var today = new Date(2000,0,1); => année, mois, jour
        * var today = new Date(2000,0,1,0,0,0); => année, mois, jour, heure, minute, seconde
        * !warning! Pas d'utilisation d'un retour d'un .setHours => different de .getHours (où on demande un retour)
        * timestamp = getTime => te renvoie la date/heure du moment précis

#Test unitaire
    * => s'assurer du fonctionnement du code et qu' il va durer dans le temps.




