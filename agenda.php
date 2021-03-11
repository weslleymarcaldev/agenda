<?php 

    require("src/contato.php");
    require("src/nome.php");
    require("src/email.php");
    require("src/tel.php");

    $contato = new Contato
    (
        new Nome('weslley'), 
        new Tel('99999999'), 
        new Email('wesl@gmail.com')
    );

    var_dump($contato);
    echo $contato->recuperaNomeTitular().PHP_EOL;
    echo $contato->recuperaEmailTitular().PHP_EOL;
    echo $contato->recuperaTelTitular().PHP_EOL;
