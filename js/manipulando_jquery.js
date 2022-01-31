$(document).ready(function() {

    
    /*Código para comunicar o html das calculadoras ao PHP*/
    /*Para calculadora comum*/
    $("#btnCalcular").click(function() {
        var obj = {
            txtValor1 : $("#txtValor1").val(),
            txtValor2 : $("#txtValor2").val(),
            opcao : $("#opcao").val()
        };
        
        console.log(obj);

        $.ajax({
            url: "ação/calc.php?req=1",
            type: "POST",
            dataType: "TEXT",
            data: obj,
            beforeSend: function () {
            },
            success: function (data) {
                $("#spResultado").html(data);
			}
    
        });
    });


    /*Código para comunicar o html das calculadoras ao PHP*/
    /*Para Conversor*/
    $("#btnCalcular2").click(function() {
        var obj2 = {
            opcao : $("#opcao").val(),
            txtValor1 : $("#txtValor1").val(),
            opcao2 : $("#opcao2").val()
        };
        
        console.log(obj2);

        $.ajax({
            url: "ação/calc.php?req=2",
            type: "POST",
            dataType: "TEXT",
            data: obj2,
            beforeSend: function () {
            },
            success: function (data) {
                $("#spResultado2").html(data);
			}
    
        });
    });


     /*Código para comunicar o html das calculadoras ao PHP*/
    /*Para calculadora juros simples*/
    $("#btnCalcular3").click(function() {
        var obj3 = {
            txtTaxa : $("#txtTaxa").val(),
            txtTempo : $("#txtTempo").val(),
            txtCapital : $("#txtCapital").val()
        };
        
        console.log(obj3);

        $.ajax({
            url: "ação/calc.php?req=3",
            type: "POST",
            dataType: "TEXT",
            data: obj3,
            beforeSend: function () {
            },
            success: function (data) {
                $("#spResultado3").html(data);
			}
    
        });
    });


     /*Código para comunicar o html das calculadoras ao PHP*/
    /*Para calculadora juros compostos*/
    $("#btnCalcular4").click(function() {
        var obj4 = {
            txtTaxa : $("#txtTaxa").val(),
            txtTempo : $("#txtTempo").val(),
            txtCapital : $("#txtCapital").val()
        };
        
        console.log(obj4);

        $.ajax({
            url: "ação/calc.php?req=4",
            type: "POST",
            dataType: "TEXT",
            data: obj4,
            beforeSend: function () {
            },
            success: function (data) {
                $("#spResultado4").html(data);
			}
    
        });
    });


    /*Código para comunicar o html das calculadoras ao PHP*/
    /*Para calculadora juros PRICE*/
    $("#btnCalcular5").click(function() {
        var obj5 = {
            txtFinanciado : $("#txtFinanciado").val(),
            txtQuantprestacoes : $("#txtQuantprestacoes").val(),
            txtValorprestacoes : $("#txtValorprestacoes").val()
        };
        
        console.log(obj5);

        $.ajax({
            url: "ação/calc.php?req=5",
            type: "POST",
            dataType: "TEXT",
            data: obj5,
            beforeSend: function () {
            },
            success: function (data) {
                $("#spResultado5").html(data);
			}
    
        });
    });


     /*Código para comunicar o html das calculadoras ao PHP*/
    /*Para calculadora diferença entre datas*/
    $("#btnCalcular6").click(function() {
        var obj6 = {
            txtDatainicial : $("#txtDatainicial").val(),
            txtDatafinal : $("#txtDatafinal").val(),
            opcao_data : $("#opcao_data").val()
        };
        
        console.log(obj6);

        $.ajax({
            url: "ação/calc.php?req=6",
            type: "POST",
            dataType: "TEXT",
            data: obj6,
            beforeSend: function () {
            },
            success: function (data) {
                $("#spResultado6").html(data);
			}
    
        });
    });


     /*Código para comunicar o html das calculadoras ao PHP*/
    /*Para calculadora dia da semana*/
    $("#btnCalcular7").click(function() {
        var obj7 = {
            txtDatapesquisada : $("#txtDatapesquisada").val()
        };
        
        console.log(obj7);

        $.ajax({
            url: "ação/calc.php?req=7",
            type: "POST",
            dataType: "TEXT",
            data: obj7,
            beforeSend: function () {
            },
            success: function (data) {
                $("#spResultado7").html(data);
			}
    
        });
    });



    /*Código para comunicar o html das calculadoras ao PHP*/
    /*Para calculadora IMC*/
    $("#btnCalcular8").click(function() {
        var obj8 = {
            txtPeso : $("#txtPeso").val(),
            txtAltura : $("#txtAltura").val()
        };

        console.log(obj8);

        $.ajax({
            url: "ação/calc.php?req=8",
            type: "POST",
            dataType: "TEXT",
            data: obj8,
            beforeSend: function () {
            },
            success: function (data) {
                $("#spResultado8").html(data);
			}
    
        });

    });



    
    /*Ao digitar o nome da calculadora certa e clicar enter (13) irá entrar em um desses if e será levado para a página da calculadora*/
    jQuery("#txtPesquisar").keypress(function(event){
        var clicado = (event.keyCode ? event.keyCode : event.which);
        var conteudo = $("#txtPesquisar").val();

        /*Se for digitado calculadora comum e clicado enter entra nesse if*/
        if (conteudo == "calculadora comum" && clicado == '13') {
            $(location).attr("href", "calculadora_comum.html");
        }

        /*Se for digitado conversor e clicado enter entra nesse else if*/
        else if (conteudo =="conversor" && clicado == '13') {
            $(location).attr("href", "calculadora_conversor.html");
        }

        /*Se for digitado calculadora imc e clicado enter entra nesse else if*/
        else if (conteudo =="calculadora imc" && clicado == '13') {
            $(location).attr("href", "calculadora_imc.html");
        }
    });
    


    /*Isso para os cards da página Calculadora e Conversor ao clicar no card calculadora comum irá ser levado para a página calculadora comum*/
    $("#card-calc-comum").click(function() {
        $(location).attr("href", "calculadora_comum.html");
    });


    $("#card-conver-comum").click(function() {
        $(location).attr("href", "calculadora_conversor.html");
    });


    /*Isso para os cards da página Calculadora financeira ao clicar no card Juros simples mensal irá ser levado para a página calculadora Juros simples*/
    $("#card-calc-juros-simples").click(function() {
        $(location).attr("href", "calculadora_juros_simples.html");
    });


      /*Isso para os cards da página Calculadora financeira ao clicar no card Juros compostos mensal irá ser levado para a página calculadora Juros compostos*/
      $("#card-calc-juros-compostos").click(function() {
        $(location).attr("href", "calculadora_juros_compostos.html");
    });


     /*Isso para os cards da página Calculadora financeira ao clicar no card Juros price irá ser levado para a página calculadora Juros price*/
     $("#card-calc-juros-price").click(function() {
        $(location).attr("href", "calculadora_juros_efetivos_price.html");
    });


     /*Isso para os cards da página Calculadora datas ao clicar no card Diferença entre datas irá ser levado para a página calculadora Diferença entre datas*/
     $("#card-calc-Diferença-Datas").click(function() {
        $(location).attr("href", "calculadora_diferenca_datas.html");
    });


     /*Isso para os cards da página Calculadora datas ao clicar no card Dia da semana irá ser levado para a página calculadora Dia da semana*/
     $("#card-conver-Dia-Semana").click(function() {
        $(location).attr("href", "calculadora_dia_da_semana.html");
    });




    /*Isso para os cards da página Saúde ao clicar no card calculadora imc irá ser levado para a página calculadora imc*/
    $("#card-calc-imc").click(function() {
        $(location).attr("href", "calculadora_imc.html");
    });
});
