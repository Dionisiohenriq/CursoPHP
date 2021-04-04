<desafio class="titulo">Desafio String</desafio>

<?php

// !AbcaBcabc
// Avaliando os métodos da documentação string,
// qual o método que a posição do texto 'abc'
// na string '!AbcaBcabc' retorne 1?
echo '<br> <br>';
$count = substr_count('!AbcaBcabc', 'abc'); 
echo ($count);