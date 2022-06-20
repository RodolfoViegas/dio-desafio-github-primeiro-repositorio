<html>
	<head>
		<title>Meu segundo site em PHP!</title>
		
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		
		<style type="text/css">
			.linha{
				font-weight: bold;
				color: green;
				padding-left: 10px;
				line-height: 50px;
			}
		</style>
		
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>jQuery UI Accordion - Default functionality</title>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
		<link rel="stylesheet" href="/resources/demos/style.css">
		<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
		<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
		<script>
	  $( function() {
		$( "#accordion" ).accordion();
	  } );
	  </script>
	</head>
	
	
	<body>
		<?php
			for($i = 0; $i < 10; $i++){
				print("<span class=\"linha\">Linha número " . $i . "<span><br />");
			}
		
		?>
		
		
		
		
<div id="accordion">
  <h3>Acordeão 1</h3>
  <div>
    <p>
	Primeira parte de teste aprendizado do Accordion
    </p>
  </div>
  <h3>Acordeão 2</h3>
  <div>
    <p>
    Um estrutura bonita para <i>site</i> que funciona bem para menus.
    </p>
  </div>
  <h3>Acordeão 3</h3>
  <div>
    <p>
    Não há muito o que escrever, deu copiar e colar no site do JQuery para ver no que daria. As mudanças são simples,
	mais para entender a este objeto. (A lista anteriord o site era sem ordem, mudei-a para ordenada "ol".)
    </p>
    <ol>
      <li>Objeto 1</li>
      <li>Objeto 2</li>
      <li>Objeto 3</li>
    </ol>
  </div>
  <h3>Acordeão 4</h3>
  <div>
    <p>
    O costume de usar textos latinos é interessante. O próximo permanecerá.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
    </p>
  </div>
</div>
	</body>
	
	<script type="text/javascript">
    $(document).ready(function(){
        alert("Woohoo!");
    });
    </script>
<html>