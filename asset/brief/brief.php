<?php
// BRIEF EXAM BCI1A - HTML - CSS - PHP - SQL - n°1
// Vous avez 5h pour réaliser ce qui suit. 9h à 14h.
//
// Important :
// Votre examen devra m’être envoyé zippé par mail ou we-transfert dans un dossier nommé avec votre «nom-prenom».
// Mon mail : quidelantoine@gmail.com
// Les examens reçus après 14h ne seront pas corrigés, ainsi que les dossiers sans votre nom-prenom.
//
// Etape numéro 1 (12 points)
//
// 	-> Réalisation d’une intégration responsive de la page contact. (Compartimentez votre code html dans des fichiers index.php, header.php et footer.php)
// 	-> Les images et les fonts nécessaires à la réalisation du site sont fourni.
// 	-> La largeur max du site est de 1600px ( comme la grande image fournie), le contenu est cadré dans un wrap de 1140px max, le formulaire est dans un wrap de 520px max.
// 	-> Les éléments du menu du header et du footer se trouvent dans des liens qui changent d’état au survol (:hover).
// 	-> L’input de type submit «envoyer» doit aussi changer d’état au survol, soyez créatif.
//
// Etape numéro 2 (8 points)
//
// 	-> Le formulaire doit être traité et sécurisé par PHP.
// 	-> Vous devez vérifier et faire afficher les erreurs si elles existent en dessous de chaque champ correspondants en rouge:
// 		-> Mail renseigné et valide
// 		-> Message renseigné, min 5 caractères et max 2000 caractères.
// 	-> Si aucune erreur, vous devez insérer dans une table contact les données reçues et ne plus faire afficher le formulaire mais un message de succès en vert.
// 			-> id (INT auto-increment Primary Key)
// 			-> email (VARCHAR 150)
// 			-> message(TEXT)
// 			-> created_at (DATETIME)
// 	-> Vous devez exporter votre table (.sql) et la joindre à votre examen pour correction.
