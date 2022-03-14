<?php


if (empty( $_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])){
    echo 'Accesso non riuscito, parametri mancanti';
    
} elseif (strlen( $_GET['name']) <= 3) {
    echo 'Accesso non riuscito, nome troppo breve';

} elseif (!is_numeric($_GET['age'])){
    echo 'Accesso non riuscito, age deve essere un numero';

} elseif (strpos($_GET['mail'], '@') === false || strpos($_GET['mail'], '.') === false){
    echo 'Accesso non riuscito, email non valida';

} else {
    echo 'Accesso riuscito';
}