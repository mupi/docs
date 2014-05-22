<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Estrutura de diretórios",
    "url" => "estrutura-diretorios",
  )); 
?>  

<?php 
  $this->Html->script("bootstro.js", array("inline" => false));
  $this->Html->script("exercise-inspector.js", array("inline" => false));
  $this->Html->script("html-lesson.js", array("inline" => false));
  $this->Html->css("html-lesson.css", null, array("inline" => false));
  $this->Html->css("estruturando-lesson.css", null, array("inline" => false));
  $this->Html->css("exercise-inspector.css", null, array("inline" => false));
  $this->Html->css("bootstro.css", null, array("inline" => false));
?>

<div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="estrutura-dir">
			<h3>Estrutura de diretórios</h3>
			<p>
				Para criar um site simples, é preciso criar uma estrutura
				local para que você consiga trabalhar. Essa estrutura nada
				mais é que um diretório, ou pasta, contendo arquivos e
				subdiretórios. Como exemplo, vamos utilizar a organização do
				projeto de uma ONG chamada "Caipora":
			</p>
			<p>
				"No site do Caipora, deve haver uma lista dos animais que
				estão para adoção. Nesta lista, haverá uma foto de cada animal
				e algumas informações sobre ele, como nome, idade e
				peso. É preciso que seja deixado um espaço para uma tabela na qual será indicada a
				quantidade de alimentação relacionada às informações dadas
				sobre os animais. Além disso, haverá uma seção de dicas de
				cuidados com estes animais, com sugestões de links e uma área
				de artigos para leitura".
			</p>
			<p>
				Para estruturar o projeto, temos os seguintes passos:
			</p>
			<ul>
				<li>
					Primeiramente, criamos uma pasta, ou diretório, que conterá todos os 
					arquivos do projeto. 
					Neste caso, vamos nomeá-la "caipora" e a sugestão é que este nome seja
					sempre uma referência fácil para encontrar o projeto.
				</li>
				<li>
					Dentro da raiz desse diretório, criamos um arquivo chamado 
					"index.html" que será a página inicial do nosso site (sugerimos que a criação
					desse arquivo seja feita no editor, para garantir a extensão <code>.html</code>). Os outros 
					arquivos cuja extensão for <code>.html</code> também serão colocados 
					preferencialmente na raiz
					da pasta. Sugerimos que o arquivo da página inicial do seu projeto
					sempre seja nomeado como <strong>index.html</strong> pois é uma
					nomenclatura comum entre os desenvolvedores.
				</li>
				<li>
					Os subdiretórios serão nomeados de "img", "css" e "js", ou seja, 
					dentro do primeiro teremos todas as imagens 
					do seu web site, do segundo, os arquivos de extensão <code>.css</code>
					e, do terceiro, os de extensão <code>.js</code>.
				</li>
				<li>
					Separamos os artigos num diretório específico, chamado
					"artigos" para garantir organização.
				</li>
			</ul>
			<p>
				Veja como fica em uma estrutura de diretório:
			</p>
			<div class="row-fluid">
				<div class="span6 offset3">
					<ul class="folder-tree">
						<li class="root">
							caipora
							<ul>
								<li class="root">
									css
									<ul>
										<li>estilo.css</li>
									</ul>
								</li>
								<li class="root">
									img
									<ul>
										<li>logo-cabecalho.png</li>
										<li>otto.png</li>
										<li>geni.jpg</li>
									</ul>
								</li>
								<li class="root">
									js
									<ul>
										<li>main.js</li>
									</ul>
								</li>
								<li class="root">
									artigos
									<ul>
										<li>como-alimentar-seu-gato.html</li>
										<li>como-dar-banho.html</li>
										<li>viajar-com-seu-animal.html</li>
									</ul>
								</li>
								<li>index.html</li>
								<li>lista-animais.html</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<p>
				<span class="label label-info">Fica a dica!</span>
				<span class="label label-warning">Importante</span> Para nomear pastas e
				arquivos não utilize acentos ou caracteres específicos da língua
				portuguesa, como "ç", e use hífens no lugar de espaços como em <strong>
				lista-animais.html</strong>.
			</p>
			
			<h5>
				Mas como relacionaremos estes arquivos para termos um web site?
			</h5>
			<p>
				Simples, através de indicações no código em elementos
				específicos! Por exemplo, os
				elementos <code>a</code>, <code>img</code>, <code>link</code>
				e <code>script</code> têm atributos nos quais indicamos
				arquivos externos: as
				tags <code>&lt;img&gt;</code>, <code>&lt;link&gt;</code>
				e <code>&lt;script&gt;</code> usam o atributo <code>src</code>
				para indicar o arquivo que estão utilizando, como
				em <code>&lt;img src="img/geni.jpg" alt=""&gt;</code>. A
				tag <code>&lt;a&gt;</code> usa o atributo <code>href</code>
				indicando o caminho para a página que será aberta ao clicar no
				mesmo, da seguinte maneira <code>&lt;a
				href="lista-animais.html" target="_blank"&gt;Animais para
				adoção&lt;/a&gt;</code>. 
			</p>
			
			<p>
				Você viu que não é somente o arquivo que é indicado, mas sim o arquivo e o 
				caminho de onde ele está. Assim, introduziremos agora os conceitos de caminho 
				absoluto e caminho relativo	que são as duas formas de representar indicações para 
				arquivos externos a serem relacionados através dos atributos <code>href</code>
				e <code>src</code> de cada uma das tags. 
			</p>
			
			<p>
				<span class="label label-inverse">Caminho relativo</span> 
				Um caminho relativo é uma indicação de onde se encontra o arquivo
				necessário, considerando o lugar do próprio arquivo que o
				indica, no mesmo servidor. Por exemplo, o link
			</p>
			<pre class="prettyprint linenums">
				&lt;a href="artigos/como-dar-banho.html" target="_blank"&gt;
				Como dar banho no seu animal
				&lt;/a&gt; </pre> 
				<p>
					dentro da página <strong>index.html</strong> diz ao navegador que ele
					vai encontrar essa página dentro do diretório <strong>artigos</strong>,
					enquanto o link
				</p>
				<pre class="prettyprint linenums">
					&lt;a href="viajar-com-seu-animal.html" target="_blank"&gt;
					Dicas de viagem com seu animal
					&lt;/a&gt;</pre> 
					<p>
						dentro da página <strong>como-dar-banho.html</strong>, refere-se a uma
						página no mesmo diretório que ela. Veja que em ambos os links, as
						referências são pra um mesmo servidor.
						<span class="label label-info">Fica a dica!</span> Perceba que
						na estrutura de diretórios proposta acima, esse ultimo link
						não funcionaria.
					</p>
					
					<p class="alert alert-info">
						O caminho relativo indica em que diretório (<strong>relativo</strong> ao
						arquivo atual) deste site foi colocado o recurso desejado! 
					</p>
					
					<p> 
						<span class="label label-inverse">Caminho absoluto</span>
						Este outro tipo de caminho faz referência a um arquivo através
						de seu endereço web. Ele é utilizado, por exemplo, quando
						queremos referenciar um recurso que está em um outro servidor
						e assim utilizamos URLs. 
	<!--
	<a href="#" class="glossario pop" data-placement="right"
	   data-original-title="Endereço de uma página"
	   data-content='Como vimos em <a href="internet#step4" 
					  target="_blank">Protocolos
	   FTP e HTTP e jargões da internet</a>.'>
	</a>. -->
	Por exemplo, se formos criar um link para a Wikipedia, teremos
	a seguinte sintaxe <code>&lt;a
	href=&quot;http://pt.wikipedia.org/&quot;
	target=&quot;_blank&quot;&gt;Wikipedia&lt;/a&gt;</code> 
</p> 
</div>
</div>
</div>
