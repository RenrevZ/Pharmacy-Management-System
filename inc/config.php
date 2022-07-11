<?php
     define('HOST','localhost');
     define('USERNAME','root');
     define('PASSWORD','');
     define('DB_NAME','pims');
     
     $dsn = 'mysql:host='.HOST.';dbname='.DB_NAME;
     $pdo = new PDO($dsn,USERNAME,PASSWORD);
     $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);