<?php

/*
 * Licença MIT
 * Autor: Msc (c) Henrique Ferraz
 * Data: 19 de maio de 2017
 * henriqueferraz@ofnet.com.br
 */
if (isset($_POST['senha']) && !empty($_POST['senha'])) {
    $senha = $_POST['senha'];
    if ($_POST['senha'] === 'maria') {
        echo 'Login efetuado com sucesso!!!';
    } else {
        echo 'Atenção ! Senha incorreta, login não efetuado';
    }
} else {
    echo 'Atenção ! Senha incorreta, login não efetuado';
}