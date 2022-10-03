<?php

// se voce destruir a sessão, ele redireciona automaticamente para o login
// é o correto usar sessão em vez de cookie para ter mais segurança

function sair()
{
    // setcookie('email', $value['email'], time() - (60 * 60 * 24), '/');
    session_destroy();
}

sair();
