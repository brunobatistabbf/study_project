<?php
$lista = [
    'nome' => 'Bruno The Boss',
    'idade' => 21,
    'atributos' => [
        'forca' => 100,
        'agilidade' => 80,
        'destreza' => 85
    ],
    'vida' => 1000,
    'mana' => 900
];

echo 'NOME: '.$lista['nome'].'<br/>';
echo 'FORÇA: '.$lista['atributos']['forca'].'<br/>';
echo 'VIDA: '.$lista['vida'];
?>