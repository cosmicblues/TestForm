# TestForm
Test technique

# installation 
- Lancer la commande "composer install" dans le dossier /TestForm/Testform via un terminal..
- Completer le dossier .env avec une base de donnee et vos informations de connexion.
- Completer aussi dans le .env vos information d'email, car c'est votre adresse qui va lancer le mail a celui qui est reference dans le formulaire. Connectez-vous à votre compte gmail, Mon compte > Connexion et sécurité > Connectez-vous à Google. 
Activer la vérification en deux étapes, puis générer une application de mot de passe. Vous pouvez utiliser ce mot de passe de l'application dans un fichier .env. 
- Lancer la commande "php artisan migrate".
- Puis "php artisan serve" afin de lancer votre localhost, cliquez sur le lien fourni dans le terminal.

# Apres inscription
Vous recevrez un mail contenant toutes les informations contenues dans les inputs du formulaire

