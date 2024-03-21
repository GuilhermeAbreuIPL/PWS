<?php
session_start(); // Inicia a sessão

// verifica se o utilizador está correto e devolve os valores (checkAuth)
function checkAuth($username, $password)
{
    // Compara os valores da sessão com os valores fornecidos
    if ($username == 'joana' && $password == 'joana123') {
        $_SESSION['username'] = $username;
        return true;
    } else {
        return false;
    }

}

// verifica se o utilizador está autenticado (isLoggedIn)
function isLoggedIn()
{
    // Verifica se o usuário está definido na sessão
    if (isset($_SESSION['username'])) {
        return true;
    } else {
        return false;
    }
}

// termina a sessão (logout)
function Loggout()
{
    session_destroy();
}

?>
