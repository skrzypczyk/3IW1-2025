<?php
/*
 *
 * TP : Routing
 *
 * Faire en sorte que toutes les requêtes HTTP pointent sur le fichier index.php se trouvant dans public
 * Se baser ensuite sur le fichier routes.yml pour appeler la bonne classe dans le dossier controller et
 * la bonne methode (ce que l'on appel une action dans un controller)
 *
 * Exemple :
 * http://localhost:8080/contact
 * Doit créer une instance de Base et appeler la méthode (action) : contact
 * $controller = new Base();
 * $controller->contact();
 *
 * Pensez à effectuer tous les nettoyages et toutes les vérifications pour
 * afficher des erreurs (des simples die suffiront dans un premier temps)
 *
 * Rendu : Mail y.skrzypczyk@gmail.com
 * Objet du mail : 3IW1 - TP routing - Nom Prénom
 * Contenu du mail : fichier index.php et les autres fichiers créés s'il y en a
 *
 * Bon courage
 */