<div class="titulo">If else</div>

<?php
if(true){
    echo "Serei impresso?";
}

if(false){
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
}else{
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if(true){
    if(true){
        if(false){

        }
    }
}else{
    if(false){

    }else{
        echo "Aqui<br>";
    }
}


if(false){
    echo "Passo A<br>";
}else if(true){
    echo "Passo B<br>";
}else if(true){
    echo "Passo C<br>";
}else if(true){
    echo "Passo D<br>";
}else if(true){
        echo "Passo E<br>";
}else{
    echo "Último passo<br>";
}

echo "Fim<br>";