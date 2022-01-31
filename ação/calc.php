<?php
$req = filter_input (INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);
$resultado = 0.00;
/*Operações da calculadora comum*/
switch ($req) {
    case 1:
        /*Pegando o valor1 no campo formulário num1*/
        $v1 = filter_input (INPUT_POST, "txtValor1", FILTER_SANITIZE_STRING);
        /*Pegando o valor2 no campo formulário num2*/
        $v2 = filter_input (INPUT_POST, "txtValor2", FILTER_SANITIZE_STRING);
        /*Pegando o valor da opção no campo select opcao*/
        $op = filter_input (INPUT_POST, "opcao", FILTER_SANITIZE_STRING);

        switch ($op){
            case "Soma":
                settype($v1, "double");
                settype($v2, "double");
                $resultado2 = $v1 + $v2;
            break;
            case "Subtracao":
                settype($v1, "double");
                settype($v2, "double");
                $resultado2 = $v1 - $v2;
            break;
            case "Multiplicacao":
                settype($v1, "double");
                settype($v2, "double");
                $resultado2 = $v1 * $v2;
            break;
            case "Divisao":
                settype($v1, "double");
                settype($v2, "double");
                $resultado2 = $v1/$v2;
            break;
        }
        printf("%.2f", $resultado2);
    break;

    /*Operações do conversor*/
    case 2:
        /*Pegando o valor da opção no campo select opcao*/
        $op = filter_input (INPUT_POST, "opcao", FILTER_SANITIZE_STRING);
        /*Pegando o valor1 no campo formulário num1*/
        $v1 = filter_input (INPUT_POST, "txtValor1", FILTER_SANITIZE_STRING);

        /*Pegando o valor da opção no campo select opcao2*/
        $op2 = filter_input (INPUT_POST, "opcao2", FILTER_SANITIZE_STRING);

        /*Array para armazenar os valores de op e op2 e jogar no switch*/
        $opcoes = array($op, $op2);

        $resultadoconvert = " ";

        switch ($opcoes){
            /*Converter de Binaria para as outras bases*/
            case ($opcoes[0] == 'Binaria' && $opcoes[1] == 'Octal'):
                /*Converte de binário para Octal*/
                $resultadoconvert = base_convert($v1,2,8);
            break;
            case ($opcoes[0] == 'Binaria' && $opcoes[1] == 'Decimal'):
                $resultadoconvert = base_convert($v1,2,10);
            break;
            case ($opcoes[0] == 'Binaria' && $opcoes[1] == 'Hexadecimal'):
                $resultadoconvert = base_convert($v1,2,16);
            break;

            /*Converter de Octal para as outras bases*/
            case ($opcoes[0] == 'Octal' && $opcoes[1] == 'Binaria'):
                $resultadoconvert = base_convert($v1,8,2);
            break;
            case ($opcoes[0] == 'Octal' && $opcoes[1] == 'Decimal'):
                $resultadoconvert = base_convert($v1,8,10);
            break;
            case ($opcoes[0] == 'Octal' && $opcoes[1] == 'Hexadecimal'):
                $resultadoconvert = base_convert($v1,8,16);
            break;

            /*Converter de Decimal para as outras bases*/
            case ($opcoes[0] == 'Decimal' && $opcoes[1] == 'Binaria'):
                $resultadoconvert = base_convert($v1,10,2);
            break;
            case ($opcoes[0] == 'Decimal' && $opcoes[1] == 'Octal'):
                $resultadoconvert = base_convert($v1,10,8);
            break;
            case ($opcoes[0] == 'Decimal' && $opcoes[1] == 'Hexadecimal'):
                $resultadoconvert = base_convert($v1,10,16);
            break;

            /*Converter de Hexadecimal para as outras bases*/
            case ($opcoes[0] == 'Hexadecimal' && $opcoes[1] == 'Binaria'):
                $resultadoconvert = base_convert($v1,16,2);
            break;
            case ($opcoes[0] == 'Hexadecimal' && $opcoes[1] == 'Octal'):
                $resultadoconvert = base_convert($v1,16,8);
            break;
            case ($opcoes[0] == 'Hexadecimal' && $opcoes[1] == 'Decimal'):
                $resultadoconvert = base_convert($v1,16,10);
            break;
        }
        echo ($resultadoconvert);
    break;

    /*Operaões da calculadora juros simples*/
    case 3:
        /*Pegando a taxa no campo formulário taxa*/
        $v1 = filter_input (INPUT_POST, "txtTaxa", FILTER_SANITIZE_STRING);
        /*Pegando o tempo no campo formulário tempo*/
        $v2 = filter_input (INPUT_POST, "txtTempo", FILTER_SANITIZE_STRING);
        /*Pegando o capital no campo formulário capital*/
        $v3 = filter_input (INPUT_POST, "txtCapital", FILTER_SANITIZE_STRING);

        settype($v1, "double");
        settype($v2, "double");
        settype($v3, "double");

        $taxa = $v1/100;

        $juros = $v3*$taxa*$v2;
        $montante = $v3 + $juros;
        printf ("R$ %.2f, Montante: R$ %.2f", $juros, $montante);
    break;

    /*Operaões da calculadora juros compostos*/
    case 4:
       /*Pegando a taxa no campo formulário taxa*/
       $v1 = filter_input (INPUT_POST, "txtTaxa", FILTER_SANITIZE_STRING);
       /*Pegando o tempo no campo formulário tempo*/
       $v2 = filter_input (INPUT_POST, "txtTempo", FILTER_SANITIZE_STRING);
       /*Pegando o capital no campo formulário capital*/
       $v3 = filter_input (INPUT_POST, "txtCapital", FILTER_SANITIZE_STRING);

       settype($v1, "double");
       settype($v2, "double");
       settype($v3, "double");

       $taxa1 = $v1/100;

       $montante_composto = $v3*((1 + $taxa1)**$v2);
       $juros_composto = $montante_composto - $v3; 
       printf ("R$ %.2f, Montante: R$ %.2f", $juros_composto, $montante_composto);
    break;

    /*Operaões da calculadora juros price*/
    case 5:
       /*Pegando a taxa no campo formulário taxa*/
       $v1 = filter_input (INPUT_POST, "txtFinanciado", FILTER_SANITIZE_STRING);
       /*Pegando o tempo no campo formulário tempo*/
       $v2 = filter_input (INPUT_POST, "txtQuantprestacoes", FILTER_SANITIZE_STRING);
       /*Pegando o capital no campo formulário capital*/
       $v3 = filter_input (INPUT_POST, "txtValorprestacoes", FILTER_SANITIZE_STRING);

       settype($v1, "double");
       settype($v2, "double");
       settype($v3, "double");

       $juros_price = 0;
       $montante_price = 0;
       printf ("R$ %.2f, Montante: R$ %.2f", $juros_price, $montante_price);
    break;

    /*Operaões da calculadora diferença entre datas*/
    case 6:
        /*Pegando a taxa no campo formulário taxa*/
       $v1 = filter_input (INPUT_POST, "txtDatainicial", FILTER_SANITIZE_STRING);
       /*Pegando o tempo no campo formulário tempo*/
       $v2 = filter_input (INPUT_POST, "txtDatafinal", FILTER_SANITIZE_STRING);
       /*Pegando o capital no campo formulário capital*/
       $v3 = filter_input (INPUT_POST, "opcao_data", FILTER_SANITIZE_STRING);

       switch ($v3){
            case "Dias":
            break;
            case "Meses":
            break;
            case "Anos":
            break;
            case "Horas":
            break;
            case "Minutos":
            break;
            case "Segundos":
            break;
        }
    break;

    /*Operaões da calculadora dia da semana*/
    case 7:
        /*Pegando a taxa no campo formulário taxa*/
       $v1 = filter_input (INPUT_POST, "txtDatapesquisada", FILTER_SANITIZE_STRING);
    break;

    /*Operaões da calculadora imc*/
    case 8:
        /*Pegando o peso no campo formulário peso*/
        $peso = filter_input (INPUT_POST, "txtPeso", FILTER_SANITIZE_STRING);
        /*Pegando a altura no campo formulário altura*/
        $altura = filter_input (INPUT_POST, "txtAltura", FILTER_SANITIZE_STRING);
        
        /*Peso e altura vem como string então convertemos com settype() para double
        para poder fazer os calculos*/
        settype($peso, "double" );
        settype($altura, "double" );
        
        /*Verifica se altura é maior que zero, para não dá erro na divisão*/
        if ($altura > 0){
            $a = ($altura * $altura);
            $resultado = $peso / $a;
        }
        
        
        /*If para verificar se os valores que foram pegos se enquadra em alguma categoria do IMC
        if () {
        
        }
        else if () {
        
        }
        else if () {
        
        }
        else {
        
        }*/
        
        printf("%.2f", $resultado);
    break;
}

?>