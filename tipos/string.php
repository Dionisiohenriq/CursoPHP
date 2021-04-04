<div class="titulo">Tipo String</div>

<?php
echo 'Eu sou uma string';
echo '<br>';

// concatenação
echo "Nós também " . 'somos!';
echo '<br>', "Também aceito", " virgulas";

echo '<br>';    
echo "'Teste' " . '"Teste" ' . '\'Teste\'' . " \"Teste\" " . "\\"; 
echo '<br>';
print("<br> Também existe a função print!");

// algumas funções
echo '<br>' . strtoupper("Maximizado");
echo '<br>' . strtolower("MINIMIZADO");
echo '<br>' . ucfirst("somente a primeira letra maiúscula");
echo '<br>' . ucwords("todas as palavras com a primeira letra maiúscula");
echo '<br>' . strlen('Quantas letras?');
echo '<br>' . mb_strlen("Eu também", "utf8");
echo '<br>' . substr("Só uma parte mesmo", 7, 6);
echo '<br>' . str_replace(strtolower("Isso"), "aquilo", "Trocar isso isso");
