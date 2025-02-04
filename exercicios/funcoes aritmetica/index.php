<?php 
    $r = abs(-2000);
    print("A resposta é $r <br>"); //Dá 2000 (sem o sinal negativo)

    //converte 254 da base decimal para a base octal
    $rbase = base_convert(254, 10, 8); 
    print("A resposta é $rbase <br>"); //Dá 376

    //converte 254 da base decimal para a base hexadecimal
    $rbase = base_convert(254, 10, 16); 
    print("A resposta é $rbase <br>"); //Dá fe

    //converte 254 da base decimal para binario
    $rbase = base_convert(254, 10, 2); 
    print("A resposta é $rbase <br>");  //Dá 11111110 
    
    $r = 5/2;
    print("A resposta é $r <br>");
    $r = 5%2;
    print("A resposta é $r <br>");
    $r = intdiv(5,2);
    print("A resposta é $r <br>");

    $r = min(5,2);
    print("A resposta é $r <br>"); //menor valor entre 5 e 2, da 2
    $r = max(5,2);
    print("A resposta é $r <br>"); //maior valor entre 5 e 2, da 5

    $r = pi();
    print("A resposta é $r <br>"); //valor de pi 
    $r = M_PI; //constante global para pi, ja vem declarado no php
    print("A resposta é $r <br>"); //valor de pi

    //potncia de 5 elevado a 2
    $r = pow(5,2); 
    print("A resposta é $r <br>");

    //sqrt() raiz quadrada
    $r = sqrt(25); 
    print("A resposta é $r <br>");
?>