# cmrDbAdmin
> Bien commencer


* dans (wamp64)/www/
  * coller le dossier et le renommer : 'admin'.
  * crée un ficher index.php
    coller le code :
    `<?php header('location: ./admin/');?>`
  
* dans votre navigateur allez sur : 
  `http://localhost`


1. Cree la base de donnee 'cmr_code'

![image6](/img/6.PNG "image6") 
***
2. Cree la table 'code' avec les colonnes :
  >> * `id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,`
  >> * `name varchar(255) NOT NULL` 

![image7](/img/7.PNG "image7") 
***
3. lancer la Requete : 
`INSERT INTO code (name) VALUES('SELECT * FROM var'),('SELECT var FROM var WHERE var '),('SELECT var FROM var WHERE var LIKE var'),('SELECT var FROM var INNER JOIN var WHERE var '),('SELECT var FROM var LEFT JOIN var WHERE  var'),('SELECT var FROM var RIGHT JOIN var WHERE var '),('SELECT var FROM var INNER JOIN var ON  '),('SELECT var FROM var LEFT JOIN var ON  var'),('SELECT var FROM var RIGHT JOIN var ON var'),('INSERT INTO var (var) VALUES (var),(var),(var)'),('INSERT INTO var (var) SELECT var FROM var WHERE var AND var'),('UPDATE var SET var'),('UPDATE var SET var WHERE var=var'),('DELETE FROM var'),('DELETE FROM var  WHERE var'),('CREATE DATABASE var'),('DROP DATABASE var'),('CREATE TABLE var'),('DROP TABLE var'),('ALTER TABLE var'),('ALTER TABLE  var  TO  var '),('TRUNCATE TABLE var '),('CREATE TABLE var '),('DROP TABLE IF EXISTS var ');`

![image8](/img/8.PNG "image8") 
***










