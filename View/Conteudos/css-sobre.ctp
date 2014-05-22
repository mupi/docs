<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Sobre o CSS",
    "url" => "css-sobre",
  )); 
?> 
<?php 
  $this->Html->script("bootstro.js", array("inline" => false));
  $this->Html->script("exercise-inspector.js", array("inline" => false));
  $this->Html->script("html-lesson.js", array("inline" => false));
  $this->Html->script("css-lesson.js", array("inline" => false));
  $this->Html->css("css-lesson.css", null, array("inline" => false));
  $this->Html->css("exercise-inspector.css", null, array("inline" => false));
  $this->Html->css("bootstro.css", null, array("inline" => false));
?>

<div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="css-definicao">
      <h3>O que é CSS?</h3>
      <p>
        O CSS é a linguagem que controla a aparência e o estilo da página. 
        Mas bem, o que isso quer exatamente dizer? Vamos começar a
        entender pelo exemplo a seguir: 
      </p>
      <div 
      class="two-columns-example row-fluid" 
      data-code-title="Compare o código abaixo com seu modo de exibição
      ao lado. Tente entender o que está acontecendo." 
      data-render-title="">
      <style type="text/css">
      /* Estilo para a section sobre o maquinário */
      .texto-maquinario{
        background: #d8d3a2;
        border: 1px dotted #87804c;
        padding: 10px;
        font-size: 15px;
        color: #444;
        border-radius: 4px;
      }
      .texto-maquinario h3{ 
        font-variant: small-caps;
        font-size: 18px;
      }
      /* Links dentro do texto sobre o maquinário */
      .texto-maquinario a{
        color: #910716;
      }
      /* Estilo ao passar o mouse no link*/
      .texto-maquinario a:hover{
        text-decoration: line-through;
        color: black;
      }
      </style>
      <section class="texto-maquinario">
        <h3>Texto com as definições visuais definidas pelo(a) desenvolvedor(a)</h3>
        <p>
          O <strong>Maquinário</strong> é
          um <a href="http://maquinariolab.blogspot.com.br/"
          target="_blank">laboratório de animação da UFPE</a> com projetos como
          Animando Histórias e Cordéis Animados. 
        </p>
        <p>
          Um de seus últimos sucessos
          foi <a href="http://www.youtube.com/watch?v=PXa3eYOh96I" target="_blank">O
          Canganceiro</a>, uma animação baseada em literatura de cordel que narra a
          história de Lampião, misturando realidade e lenda. 
        </p>
      </section>
      <section>
        <h3>Texto com as definições visuais básicas do navegador</h3>
        <p>
          O <strong>Maquinário</strong> é
          um <a href="http://maquinariolab.blogspot.com.br/"
          target="_blank">laboratório de animação da UFPE</a> com projetos como
          Animando Histórias e Cordéis Animados. 
        </p>
        <p>
          Um de seus últimos sucessos foi 
          <a href="http://www.youtube.com/watch?v=PXa3eYOh96I" target="_blank">O
            Canganceiro</a>, uma animação baseada em literatura de cordel que narra a
            história de Lampião, misturando realidade e lenda. 
          </p>
        </section>
      </div>
      <p> 
        Tudo que está dentro da tag <code>style</code> é CSS! Em poucas
        palavras, temos que <span class="label label-inverse">CSS</span>, sigla
        para Cascading Style Sheets ou em português Folhas de Estilo em
        Cascata, é a linguagem utilizada para definir o estilo visual da
        página.
      </p>
      <p>
        Os arquivos CSS são arquivos de texto, produzidos em editores de código
        fonte (não como o Microsoft Word), cuja 
        <a href="#" class="glossario pop" data-placement="top"
        data-original-title="Extensão"
        data-content='O nome dos arquivos é composto por duas partes: uma é
        o seu nome propriamente dito e a outra é sua extensão, indicando de
        qual tipo ele é. Ela possui geralmente 3 ou 4 caracteres precedidos
        por um ponto e é colocada ao final do nome do arquivo. Acesse
        o 
        <a href="http://pt.wikipedia.org/wiki/Extens%C3%A3o_de_nome_de_ficheiro"
        target="_blank">verbete</a> sobre isso da Wikipedia para visualizar
        alguns exemplos.'>  extensão </a> é <code>.css</code>. 
      </p>
      <p>
        É o que define cores, posicionamento dos elementos, tipografia e tudo o
        que está relacionado à aparência. HTML e CSS são
        linguagens <strong>independentes</strong>, lembrando que HTML é
        utilizada para a criação e organização do conteúdo.  
      </p>
      <p>
        Com o exemplo acima, podemos perceber que praticamente todo o conteúdo
        de uma página HTML pode ser modificado visualmente através do CSS. 
      </p>
      <p>
        <span class="label label-warning">Importante</span> Ao exibir qualquer
        página HTML, o <strong>próprio navegador define</strong> algumas
        propriedades básicas. Acima, por exemplo, note que o
        elemento <code>h3</code> do texto, devido às definições básicas do
        navegador, ficou com a fonte bem maior, quando comparamos ao resto do
        conteúdo, e em negrito. Essas mudanças já são CSS, mesmo que você
        (desenvolvedor(a)) não tenha definido nada! 
      </p>
      <h3>E o CSS3?</h3>
      <p>O <span class="label label-inverse">CSS3</span> é a mais nova versão
        do CSS, que estava na versão 2.1. Ele trouxe mudanças significativas em
        relação ao controle do layout e do visual da página. Antes, já era
        possível definir muitos detalhes visuais, porém, em alguns casos, imagens
        e manipulação em javascript ainda eram necessárias para implementar
        layouts.</p>
        <p>Agora, existem novas formas de selecionar elementos! É possível,
          apenas com CSS, fazer degradê, bordas arredondadas, manipulação de
          opacidade, sombras em texto e elementos, rotação de elementos, controle
          de perspectiva, animação, entre outras possibilidades. O trabalho do Web
          Designer foi consideravelmente facilitado com relação à criação de sites
          mais ricos e bem acabados visualmente.</p>
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
