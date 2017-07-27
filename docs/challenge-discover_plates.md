## Challenge 1 : Discover Plates (et l'héritage)


## Objectifs
- Découvrez la librairie Plates, la librairie PHP qui permet de gérer les templates, au projet, et préparez le travail de dev de demain.


## Setup
Ce repo contient le code produit aujourd'hui en cours, **plus quelques améliorations**. Récupérez le, et suivez les instructions pour l'installer sur votre machine.

En l'état, vous devez pouvoir visiter les routes `/` et `/admin`, qui affichent chacune un message texte.

Pour préparer la journée de demain, vous pouvez aussi vous occuper de la base de données sur votre machine : si la BD correspondant au MCD conçue là https://trello.com/c/2LMURHvf/11-conception-bd n'existe pas encore, créez là (en suivant les bonnes pratiques ^^ ).

## Instructions
- installez Plates : http://platesphp.com/

- Visitez http://platesphp.com/simple-example/ et *observez*. Vous êtes autorisés à lire le reste de la doc aussi ^^ ...

- ...mais on va se baser sur le simple example pour commencer:

  - ouvrez le fichier `src/Framework/Controller.php` : ce fichier définit un controller "générique" dont héritent les autres controllers (observez aussi les fichiers `src/Controller/ShopController.php` et `AdminController`).
    **Les propriétés et le constructeur qui sont définis dans cette classe `Controller` sont, grâce à cet héritage, accessibles dans `ShopController` et `AdminController`; Vous pouvez donc utiliser un `$this->templates` par exemple, ou $`this->config`, dans les méthodes de vos controllers.**

  - Créez un dossier Templates, dans `src`, et créez y un template de page `home.php`. Vous pouvez créer le fichier  de layout dans le même dossier si vous le souhaitez, ou vous en passer pour commencer.

  - Créez l'instance du moteur de templates dans la propriété `$templates` de la classe `Controller` (le fichier `src/Framework/Controller.php`), dans le constructeur. (comme décrit dans la doc)

  - Dans `ShopController`, utilisez la méthode `render` de ce moteur de templates pour afficher le template que vous avez créé

- lisez la section sur l'insertion de templates : http://platesphp.com/templates/nesting/

- structurez votre template `home` grâce à cette fonction (vous pouvez regarder la liste des "morceaux" de templates que nous devons développer, dispo dans le Trello, si vous avez un trou)

- Suivez la même procédure pour ajouter le template de l'admin

- et ainsi de suite.


#### En savoir plus
- Si vous voulez en savoir plus sur l'héritage, vous pouvez parcourir https://github.com/O-clock-Cosmos/fiches-recap/blob/master/php/objet-avance.md
