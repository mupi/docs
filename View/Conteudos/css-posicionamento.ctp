<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Posicionando elementos com CSS",
    "url" => "css-posicionamento",
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
        <div class="step-pane in" id="position">
			<h3>Posicionando</h3>
			<p>
				Depois de entender como funciona o 
				<?php 
				echo $this->Html->link('modelo de caixa', array(
					'controller' => 'conteudos', 
					'action' => 'modelo-de-caixa'
					)); 
					?>

					e como alterar suas propriedades, vamos aprender uma das
					partes mais importantes para montar um layout:
					o <strong>posicionamento</strong> dos elementos. 
				</p>
				<div class="row-fluid">
					<div class="span6">
						<p>A página de exemplo ao lado é de uma ONG de gatinhos.</p>
						<p>
							Já sabemos como colocar cada elemento na página. No entanto,
							só com HTML e as propriedades CSS que aprendemos até aqui,
							todo esse conteúdo vai ficar numa sequência vertical, ou seja,
							um embaixo do outro, pois esse é o fluxo normal dos
							elementos. Então, como colocaremos os links para as redes
							sociais e os links úteis do lado direito do site
							considerando que o mockup ao lado foi designado por um
							cliente? E o slogan, como o posicionaremos ao lado do
							logo? 
						</p>
						<p>Vamos ver isso agora!</p>
					</div>
					<div class="span4 offset1">
						<?php echo $this->Html->image('html_mockup_v2.jpg', array(
							'alt' => 'Mock-up do site pedido pelo cliente'
							, 'title' => 'Mock-up do site pedido pelo cliente'
							, 'class' => 'img-polaroid'
							)); ?>
						</div>
					</div>

					<h4>"Flutuando" elementos</h4>
					<p>
						Uma das formas para posicionar os elementos é através da propriedade
						CSS chamada <code>float</code>. Essa propriedade pode receber um dos
						seguintes valores: <code>left</code>, <code>right</code>
						ou <code>none</code>, sendo que <code>left</code> flutua o elemento
						para a esquerda, <code>right</code> para direita e <code>none</code> o
						mantém sem flutuação. O valor <code>none</code> é o padrão.
					</p>
					<p>
						<span class="label label-warning">Importante</span> Para ter total
						controle sobre os elementos, ao usar <code>float</code> é sempre
						bom definir a <code>width</code> (largura) dos elementos.
					</p>
					<p>
						Ao definir o <code>float</code> de um elemento, os elementos que
						estão depois dele (pensando no  arquivo HTML) são "puxados" para a
						mesma linha em que termina este elemento. Para fazer com que eles
						voltem ao fluxo normal, utilizamos a propriedade <code>clear</code>
						com o valor <code>both</code> no primeiro elemento que você deseja
						que volte à posição normal. Isso significa que o elemento
						com <code>clear</code> vai manter sua posição e não vai seguir o
						elemento que foi flutuado. Veja no exemplo abaixo como seria o
						layout do desenho acima. Preste atenção no <code>clear</code> da
						tag <code>footer</code>!
					</p>
					<p>
						<span class="label label-info">Fica a dica!</span> você pode brincar
						com o código abaixo clicando em "Edit on Codepen",
						<a href="#codePenModal" role="button"  data-toggle="modal">
							veja aqui uma demonstração.
						</a>
					</p>

					<pre class="codepen"
					data-height="360" data-type="result"
					data-href="qLJxs" data-user="anarute" data-safe="true">
					<code></code><a href="http://codepen.io/anarute/pen/qLJxs">
					Check out this Pen!</a></pre>
					<script async src="http://codepen.io/assets/embed/ei.js"></script>

					<h4>Posicionando elementos</h4>
					<p>
						Uma outra forma de posicionar os elementos na tela é utilizando a
						propriedade <code>position</code>. Através dela, podemos dar
						exatamente a posição dos elementos a partir de outros elementos ou
						da própria tela, através de medidas.
					</p>
					<p>
						Os valores possíveis para <code>position</code> são: <code>static</code>, 
						<code>relative</code>, <code>absolute</code>, <code>fixed</code> e 
						<code>inherit</code> (herdado do elemento pai). Veja a seguir um
						pouco sobre cada um desses valores. 
					</p>
					<ol>
						<li>Static: é o valor padrão. O elemento se posiciona no fluxo
							normal do site.  
							<div class="row-fluid">
								<div class="span7 offset2">
									<pre class="prettyprint linenums">
										section {
										position: static;
									}</pre>
								</div>
							</div>
						</li>
						<li>Relative: o elemento é posicionado relativamente em relação ao
							fluxo normal. Utilizamos as
							propriedades <code>top</code>, <code>left</code>, <code>bottom</code>
							e <code>right</code> para deslocá-lo, sendo que cada propriedade
							dessas é referente à distância de cada <strong>lado</strong> do
							elemento em relação aos outros elementos que estão no fluxo.
							<div class="row-fluid">
								<div class="span7 offset2">
									<pre class="prettyprint linenums">
										section {
										position: relative;
										top: 10px; /* este elemento será deslocado 10 pixels para baixo */
										left: 200px; /* e 200 pixels entre a lateral esquerda e os outros
										elementos */
									}</pre>
								</div>
							</div>
						</li>
						<li>Absolute: o elemento assume um posicionamento absoluto em relação à 
							<a href="#" 
							class="glossario pop" data-placement="top"
							data-original-title="Como assim?"
							data-content="Por exemplo, se uma div que está dentro de uma
							section estiver com absolute, ela vai ser
							deslocada em relação à section apenas se esta estiver com
							algum posicionamento diferente de
							static."> <strong>posição</strong> do 
							primeiro elemento que o contém</a>. Elementos com posição
							absoluta são tirados do fluxo normal, ou seja, o seu
							deslocamento não afeta o posicionamento dos elementos
							próximos. Se nenhum elemento que o contenha tiver
							posicionado, ele se posiciona em relação à tela. 
							<div class="row-fluid">
								<div class="span7 offset2">
									<pre class="prettyprint linenums">
										section {
										position: absolute;
										right: 10px; /* este elemento será deslocado 10 pixels para
										esquerda, partindo do lado direito do elemento que o contém */
									}</pre>
								</div>
							</div>
						</li>
						<li>Fixed: o elemento assume a tela como referência para o seu
							posicionamento e mantém-se fixo mesmo que o usuário mova a barra
							de rolagem. Veja, por exemplo, como está a barra superior deste
							curso, com as abas da aula: ela não se mexe mesmo rolando a
							página.
							<div class="row-fluid">
								<div class="span7 offset2">
									<pre class="prettyprint linenums">
										section {
										position: fixed;
										top: 0; /*o elemento fica fixo no topo do navegador, mesmo que o
										usuário role a página */
									}</pre>
								</div>
							</div>
						</li>
					</ol>
					<p>
						<span class="label label-info">Fica a dica!</span> Você pode usar
						o mesmo exemplo sobre float que está acima para modificar o CSS e
						entender como as divs se posicionam. Para isso, basta clicar em
						"Edit on Codepen".
					</p>
				</div>
			</div>
		</div>

		<style>
		div#codePenModal {
			min-width: 800px;
			margin-left: -400px;
		}
		#codePenModal .modal-body {
			min-height: 455px;
		}
		</style>

		<div id="codePenModal" class="modal hide fade"  tabindex="-1" 
		aria-labelledby="CodePen" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"
			aria-hidden="true">×</button>
			<h3 id="myModalLabel">Sobre o CodePen</h3>
		</div>
		<div class="modal-body">
			<iframe id="video-codepen" width="504" height="378" 
			src="//www.youtube.com/embed/clZBhb3yXvs" 
			frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="modal-footer">
			<a href="#" data-dismiss="modal" class="btn">Fechar</a>
		</div>
	</div>
