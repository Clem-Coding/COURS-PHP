<!-- Dans le fichier `index.php` vous allez instancier deux instances de la classe `User`.

L'un avec l'id 1, le username `admin` et le password `admin`.
La seconde avec l'id 2, le username `user` et le password `user`.

Vous allez ensuite utiliser ces instances pour faire un echo de leur id, leur username et leur password à chacune. -->


<?php

require 'User.php';



$user1 = new User(1, "admin", "admin");
$user2 = new User(2, "user", "user");


echo "{$user1->getId()} {$user1->getUsername()} {$user1->getPassword()} <br>";
echo "{$user2->getId()} {$user2->getUsername()} {$user2->getPassword()}";
