# site_web_dynamique-JS-PHP-Bootstrap (FR)
un site web dynamique de e-commerce, que j'ai crée en utilisant JavaScript, PHP et le framework CSS Bootstrap 4.

-sous Windows-
1. installer WAMP server (facultatif): https://www.wampserver.com/
2. lancer WAMP server.
3. placer le contenu de ce projet, dans un dossier vide que vous allez créer.
4. placer le contenu du dossier que vous avez créé, dans le dossier "www" de WAMP.
5. clique gauche sur l'icone de WAMP dans la barre des taches, ensuite cliquez sur "phpMyAdmin" pour le lancer.
6. entrer le nom d'utilisateur "root" et rien pour le mot de passe.
7. une fois dans "phpMyAdmin", importer le fichier de la BD "mon_site_web_dynamique.sql".

-sous Linux-
1. placer le contenu de ce projet, dans un dossier vide que vous allez créer.
2. installer Apache, mySQL et phpMyAdmin (facultatif):
http://doc.ubuntu-fr.org/apache2
http://doc.ubuntu-fr.org/mysql
http://doc.ubuntu-fr.org/phpmyadmin
4. placer le contenu du dossier que vous avez créé, sous le répertoire "/var/www/html/" (répertoire racine du serveur HTTP Apache).
5. lancer "phpMyAdmin" dans votre navigateur web et entrer vos identifiants MySQL (nom d'utilisateur et mot de passe).
dans mon cas c'est "root" pour le nom d'utilisateur et encore "root" pour le mot de passe.

7. une fois dans "phpMyAdmin", importer le fichier de la base de données "mon_site_web_dynamique.sql".
si vous decider de créer une nouvelle base de données, il faudra changer le nom de la base de données dans le fichier "database.php".    

8. s'enregistrer sur le site:
si vous avez des identifiants differents, il faudra allez dans le fichier "database.php" et effectuer quelques changements (USER, PASS):
define('HOST','localhost');
define('DB_NAME','mon_site_web_dynamique');   //mon_site_web_dynamique: nom de la base de données   
define('USER','root');  //root: votre nom d'utilisateur MySQL
define('PASS','root');  //root: votre mot de passe MySQL

have fun ;) en cas de soucis, n'hésitez pas à me posez vos questions dans l'onglet de discussions!

apercu 1:
![e_commerce_website-1](https://user-images.githubusercontent.com/72648203/108034118-55344a80-7035-11eb-8e79-1e9745bbcb2a.png)

apercu 2:
![e_commerce_website-2](https://user-images.githubusercontent.com/72648203/108034121-56fe0e00-7035-11eb-8747-6f215421f473.png)

apercu 3:
![e_commerce_website-3](https://user-images.githubusercontent.com/72648203/108034124-5796a480-7035-11eb-8314-2f55c9f13431.png)

apercu 4:
![e_commerce_website-4](https://user-images.githubusercontent.com/72648203/108034128-5796a480-7035-11eb-9864-63530f84ee78.png)

apercu 5:
![e_commerce_website-5](https://user-images.githubusercontent.com/72648203/108111815-86446780-7095-11eb-8d26-7b59d0c286b9.png)
