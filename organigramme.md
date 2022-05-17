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
 Validation des asserts sur nos entités (constraints sur le doc de Symfony)
 
### TODO aujourd'hui
 On va vouloir relier une commission ( une category) à un utilisateur On veut que l'utilisateur puisse gérer ses documents(articles)et qu'il puisse les partages etc.
 => Mise en place de la relation entité User et Category =>ok
 => Modif des fixtures=> Ok
 => Afficher uniquement les commmissions (categories) liées à l'utilsateur
 => Lier uniquements les commissions (category) à l'utilisateur




Mise en place du bouton de connexion et d'inscription sur la nav bar
Mise en place d'un racourcis suivant la commission de l'utilisateur
Mise en place des routes interdite  si admin ou pas

### TODO 2nd time
Mise en page avec le logo
1# mise en page des checkbox pour les commissions
Mise en place de l'interface du compte utilisateur, l'utilisateur pourras uniquement afficher les commisions dont il fait parti
Mise en place de Vitch pour ajouter des documents et des images
Misen place de tests unitaire
Mise en place du formulaire de contact
Mise en ligne du site

# Mise en place du Harcher de mot de passe -> Ok


