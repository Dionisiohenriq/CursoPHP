<div class="titulo">Operadores Relacioanis</div>

<?php

var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(4 < 23);
var_dump(1 <= 7);
var_dump(1 != 1);
var_dump(1 <> 1);

var_dump(111 == '111');
var_dump(111 === '111');
var_dump(111 != '111');
var_dump(111 !== '111');

echo "<p>Relacionais no IF/ELSE</p><hr>";
$idade = 15;

if($idade < 18){
    echo "Menor de idade<br>";
}else if($idade <= 65){
    echo "Adulto<br>";
}else{
    echo "Terceira idade<br>";
}
