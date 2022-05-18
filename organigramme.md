###### Mise en place des entités 
Création de nos entités
ok
###### mise en place du CRUD  après avoir creer nos controller
Category-> nouveau, edit et delete OK
Article->nouveau ,edit, delete  OK

###### mise en place du bundle paginator
###### mise en place du Easy Admin

###### mise en place des fixtures mise en place du bundle:
composer require --dev orm-fixture

###### mise en place des fixtures de Faker PHP pour generer des fausses données
1# composer require fakerphp/faker  --dev

php bin/console doctrine:fixtures:load

##### mise en place du formulaire d'inscription et de connexion

#### Mise en place des contraintes
 Validation des asserts sur nos entités (constraints sur le doc de Symfony) => ok fait
 
### Mise en place des commissions (category ) uniquement liée à l'utilisateur
 On va vouloir relier une commission ( une category) à un utilisateur On veut que l'utilisateur puisse gérer ses documents(articles)et qu'il puisse les partages etc.
 => Mise en place de la relation entité User et Category =>ok
 => Modif des fixtures=> Ok
 => Afficher uniquement les commmissions (categories) liées à l'utilsateur=>ok
 => Lier uniquements les commissions (category) à l'utilisateur=>ok

### Dans ma nav barr
Si l'utilisateur est connecté il représenteras app.user si est deconnecté il représenteras null =>ok fait
Mise en place du bouton de connexion et d'inscription sur la nav bar => ok

#### Acessibilités des pages
 Annotations @IsGranted qui va ns permettre de resteindre par role 
 et annotation @Security qui va etre flexible qui vas me permettre de passer des expressions avec de la logique en utilisant certaine variable (Token ou Role)

## Accueil
    - tt le monde
## Connexion
  - utililisateurs annonymes
  ## Inscription
  - uniquement admin
##### CATEGORY
  ## Ajouter une categorie (commission)
    - Uniquement les admins
    -interdit aux utilisateus anonymes

  ## Edit une categorie (commission)
    - Uniquement les admin
    -interdit aux utilisateus anonymes

  ## Delete une categorie (commission)
     - Uniquement les admin
    -interdit aux utilisateus anonymes


##### Article (document)
## Ajouter
uniquement les utilisateur connecte
-interdit aux utilisateus anonymes
 ## Edit 
 uniquement les utilisateur connecte
-interdit aux utilisateus anonymes
uniquement l'utilsateur responsable de sa commission

## Partager des documents sur la page d'accueil
## Partager un article
=>MODIF des fixtures et de l'entité => OK
=> Création de le vue (templatte)=> OK
=> Gestion de l'accés a la vue (page) suivant son état =>OK
=> Création de la vue des articles de la communiqués => OK
=> 4 derniers articles partagés vissible sur la page d'accueil => OK le 18/05/2022


## EN COURS
On va mettre en place  la notation des documents mis en public et les utilisateurs connectés pourront noter l'article de la commission
-les utilisateur pourront voter de 1 à 5 sur un article adopté est visible par les membres de commisions
- Mise en place d'une fction pour calculer la moyenne de la note.
- Une commission ne pourra pas noter ou voter son projet
- Un utilisateur ne pourra pas voter 2 fois le projet déposé=> OK fait le 18/05/2022
- modif des fixture = OK fait le 18/05/2022
-modif du shéma de la bdd = OK fait le 18/05/2022

### TODO
Verifier l'edition sur le profil utilisatyeur y'a un bug avec le hashage 
Mise en place d'un racourcis suivant la commission de l'utilisateur
Mise en place des routes interdite  si admin ou pas pour le moment j'ai fai en sorte que tt les utilsateur connecte peuvent y acceder
Mise en place d'un bouton pour les admins

### TODO 2nd time
Mise en page avec le logo
1# mise en page des checkbox pour les commissions
Mise en place de l'interface du compte utilisateur, l'utilisateur pourras uniquement afficher les commisions dont il fait parti
Mise en place de Vitch pour ajouter des documents et des images
Misen place de tests unitaire
Mise en place du formulaire de contact
Mise en place d'une partie en Allemand si souhaité
Mise en ligne du site

# Mise en place du Harcher de mot de passe -> Ok

