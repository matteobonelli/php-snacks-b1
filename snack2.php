<?php
$nome = $_GET['nome'];
$email = $_GET['email'];
$age = $_GET['age'];

if (strlen($nome) > 3 && str_contains($email, '@') && str_contains($email, '.') && is_numeric($age)) {
    echo 'Accesso riuscito!';
} else {
    echo 'Accesso negato!';
}
?>