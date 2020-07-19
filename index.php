<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

$nome = 'Everton';
$idade = 18;

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <=12)
{
    for($i = 0; $i < sizeof($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')
            echo "O nadador ".$nome. " tem ".$idade." anos e compete na categoria ".$categorias[$i];
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i < sizeof($categorias); $i++)
    {
        if($categorias[$i] == 'adolescente')
            echo "O nadador ".$nome. " tem ".$idade." anos e compete na categoria ".$categorias[$i];
    }
}
else
{
    echo "O nadador ".$nome. " tem ".$idade." anos e compete na categoria adulto";
}


