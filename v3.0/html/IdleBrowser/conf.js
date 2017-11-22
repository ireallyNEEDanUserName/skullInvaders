$(document).ready(function(){

	$('#barra').click(function(){
		clickBarraFunc(true);
		
		cor(this, 'black', 'green');
		
	})
	
	//OPCOES DA PAGINA MISSOES.HTML
	$('.opcoes').click(function(){
		var clicked = $(this).attr("value");
		
		console.log(clicked);
		
		if(clicked == "buy"){
			$(document.getElementById('sell')).hide();
			$(document.getElementById('buy')).show();
		}else if(clicked == "sell"){
			$(document.getElementById('buy')).hide();
			$(document.getElementById('sell')).show();
		}else{
			$('.minerio').hide();
			$('.comida').hide();
			
			//$('.habilidade').show();
			$("." + clicked).show();
		}
		
	})
	
	$('.item').click(function(){
		var clicked = $(this).attr("id");
		var texto = $(this).text();
		
		console.log(clicked, texto);
		
		try{
			start(clicked, texto);
		}catch(err){
			console.log("Erro na chamada do conf.js no click ('.item') " + err);
			if(texto.includes("Empregado")) informacoes(texto);
		}
		
	})

	//OPCOES DA PAGINA LOJA.HTML
	$('.btnMaisMenos').click(function(){
	
		var itens = {}; 
		itens = defItens(itens);
		
		var status = {};
		status = iniciar(status);

		var nome = $(this).attr("value");
		var x = $(this).attr("id");
		var tipo = $(this).attr("outro");
		var metodo = $(this).attr("tipo");
		var opcao = "";
		
		if(metodo == "compra") opcao = "buy";
		else if(metodo == "venda") opcao = "sell";
		
		var qtd = $("#" + nome + "Qtd" + opcao).text();
		var custo = $("#" + nome + "val" + opcao).text();

		if(x == "+" && ((status.inventario[maiuscula(nome)] > qtd && opcao == "sell") || opcao == "buy")){	
			document.getElementById(nome + "Qtd" + opcao).innerHTML = parseInt(qtd) + 1;
			document.getElementById(nome + "Val" + opcao).innerHTML = itens[tipo][nome][opcao] * (parseInt(qtd) + 1);
			
		}
		else if(x == "-" && parseInt(qtd) > 1){
			document.getElementById(nome + "Qtd" + opcao).innerHTML = parseInt(qtd) - 1;
			document.getElementById(nome + "Val" + opcao).innerHTML = itens[tipo][nome][opcao] * (parseInt(qtd) - 1);
		}

	})

	$('.compra').click(function(){

		var nome = $(this).attr("value");
		var valor = parseInt($("#" + nome + "Qtdbuy").text());	
		var tipo = $(this).attr("outro");

		//console.log(nome + " " + valor + " " + tipo);

		addInv(nome, valor, tipo);

	})
	
	$('.venda').click(function(){
		
		var nome = $(this).attr("value");
		var qtd = parseInt($("#" + nome + "Qtdsell").text());	
		var tipo = $(this).attr("outro");

		//console.log(nome + " " + valor + " " + tipo);
		
		venderInv(minuscula(nome), qtd, tipo);
		
	})
	
});



var cor = function(self, corPrincipal, corSecundaria){
	if (self.style.color == corPrincipal){
		$(self).css({
			'color' : corSecundaria,
		})
	}
	else{
		$(self).css({
			'color' : corPrincipal,
		})
	}
};
