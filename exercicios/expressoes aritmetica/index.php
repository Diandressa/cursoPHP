<?php 
    // 5 + 2 / 2 = 6
    $res = 5 + 2 / 2;
    echo "O resultado é $res<br>";

    //ordem de precedencia (execução) dos operadores (definido pela matematica)
    /*

        ** -> primeiro
        *, /, % -> segundo, se usado mais de um o primeiro é o mais da esquerda
        +, - -> terceiro, se usado mais de um o primeiro é o mais da esquerda

    */
    
    echo 50 / 2 + 3 ** 2 . "<br>"; // da 34

    //mudamos a ordem de precedencia com o uso de parenteses
    $res = 50 / (2 + 3) ** 2; // da 2
    echo $res;
?>
