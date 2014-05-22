<?php 
  echo $this->element('breadcrumb-content', array(
    "curso" => "Web Design com HTML e CSS",
    "aula" => "Propriedade CSS font",
    "url" => "css-font",
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
    <!-- Isso é um exemplo -->
    <div class="tab-pane in" id="font">
      <h3>Propriedades de fonte</h3>
      <p>
        Uma das principais formas de modificar o visual de uma página é
        realizar alterações em como o texto é exibido para o usuário. Para
        isso, temos <code>font-*</code> que representa um conjunto de
        propriedades que modificam a fonte tipográfica dos textos exibidos em
        uma página HTML. Vejamos a seguir algumas delas: 
      </p>
      
      <h5>Família de fonte: <code>font-family</code></h5>       
          <p>
            Esta propriedade indica qual será a fonte do texto e quais serão
            as fontes de reserva caso a desejada 
            <a href="#" class="glossario pop" data-placement="top"
               data-original-title="Fontes e navegadores" 
               data-content='Video de como funciona a renderização de fontes
               e como usar uma fonte externa com o google webfonts.'>não seja
              carregada pelo navegador</a>. Para definir as fontes, ou
            melhor, 
            para <a href="#" class="glossario pop" data-placement="right" 
                    data-content='Termo mais comum no linguajar técnico.'>
              declarar</a> as fontes, definimos o elemento HTML em que ela será
            utilizada e inserimos em ordem de preferência as famílias
            separadas por vírgula. A sintaxe utilizada para este caso deve
            ser conforme o exemplo a seguir, que declara fontes para o
            elemento <code>p</code>: 
          </p>
     
          <p>
            <code>p {font-family: 'Georgia', 'Courier New', serif;}</code>
          </p>
          <p>
            A declaração acima significa que todo elemento <code>p</code>,
            ou seja, todos os parágrafos da página serão exibidos com a fonte
            de nome <strong>Georgia</strong>. Caso o navegador não encontre
            esta fonte ou tenha problemas para exibi-la, ele utilizará a
            fonte de nome Courier New para a exibição dos parágrafos. E, por
            fim, caso esta também não funcione, ele utilizará qualquer fonte
            com <a href="#" class="glossario pop" 
                   data-placement="top"
                   data-original-title="Serifa" 
                   data-content='explicação fonte com serifa e sem
                   serifa'>serifa</a>, do inglês <strong>serif</strong>.
          </p>
     
      <h5>Tamanho da fonte: <code>font-size</code></h5>
          <p>
            Com esta propriedade, conseguimos modificar o tamanho do texto
            numa página. Existem vários tipos de 
            <a href="#" class="glossario pop" data-placement="top"
               data-original-title="Unidades de medida" data-content='Em CSS,
               utilizamos um sistema um pouco diferente de unidades de medida
               para as propriedades. Para saber mais sobre isso, sugerimos a
               tabela de conversão disponível na
               página <a href="http://reeddesign.co.uk/test/points-pixels.html"
                         target="_blank">ReedDesign</a>.'>unidade de medida</a>
               para se declarar o tamanho da fonte, como pixels, porcentagem e
               pontos. Em nossos exemplos, utilizaremos <code>px</code> que é a
               unidade de medida em pixels.  
          </p>
          <p>
            No exemplo abaixo, declaramos que todo parágrafo (ou seja, texto
            contido dentre as tags <code>&lt;p&gt;&lt;/p&gt;</code>) da
            página HTML terá seu texto exibido com tamanho de 14 pixels:</p> 
          <p>
            <code>p {font-size: 14px;}</code>
          </p>
     
      <h5>Estilo de fonte: <code>font-style</code></h5>
      
          <p>
            A propriedade <code>font-style</code> tem três possibilidades de
            valor a ser atribuído: normal, italic (traduzindo, itálico) e
            oblique (traduzindo, oblíquo). 
          </p>
          <p>
            Tipograficamente falando, <code>italic</code> é uma variante da
            fonte criada pelo designer tipográfico com o intuito de criar uma
            versão caligráfica e inclinada do texto. Já o
            valor <code>oblique</code> é uma forma simplificada na qual a fonte
            é inclinada em apenas alguns graus. 
          </p>
      
          <p>
            O exemplo abaixo mostra como declarar esta propriedade a um
            elemento HTML, no caso <code>p</code>:
          </p>
          <p>
            <code>p {font-style: italic;}</code>
          </p>
          <p>
            <span class="label label-warning">Importante</span> O valor
            itálico é o mais utilizado, apesar de nem todas as fontes
            possuírem uma versão em itálico. 
          </p>
 
      <h5>Peso da fonte:  <code>font-weight</code></h5>
      
          <p>
            Para dar destaque a algum conteúdo, é comum deixarmos o texto em
            negrito. Para este caso, podemos dizer que aumentamos o "peso" da
            fonte. É desse contexto que vem o nome da propriedade, em que a
            palavra inglesa weight, quando traduzida para o protuguês,
            significa peso. Para ela, podemos atribuir cinco
            valores: <code>normal</code>, <code>bold</code>
            (negrito), <code>bolder</code> (um valor mais pesado que o
            negrito), <code>lighter</code> (que traduzido temos "mais leve",
            ou seja, que deixa a fonte mais "fina") e <code>inherit</code>
            (que traduzido temos "herdado", ou seja, ele recebe o valor que
            foi atribuído a elementos que o contém). 
          </p>
      
          <p>
            Também é possível utilizar como valor a escala de números de 100,
            200, 300, 400, 500, 600, 700, 800 e 900, sendo que 100 é o mais
            leve/fino e 900 o mais pesado/grosso. Entretanto, para usar esses
            valores é preciso verificar antes se a fonte escolhida possui
            essas variações, senão, não irá funcionar. 
          </p>
          <p>Observe o exemplo abaixo:</p>
          <p>
            <code>p {font-weight: bold;}</code>
          </p>
    
      <h5>Altura da linha: <code>line-height</code></h5>
      
          <p>
            A propriedade <code>line-height</code> refere-se à distância
            entre duas linhas de um texto, ou seja, controla
            o <strong>espaçamento</strong> das linhas. Os valores que podem
            ser atribuídos são similares aos possíveis
            no <code>font-size</code> e as medidas mais utilizadas são pixel,
            porcentagem ou valores numéricos.  
          </p>
          <p> 
            <span class="label label-warning">Importante</span> Ao utilizar a
            medida em pixel, você está atribuindo um
            valor <strong>estático/absoluto</strong> à linha, que independe
            de outras propriedades. Isso quer dizer que se, por exemplo, for
              atribuído 30px à altura da linha, ela terá sempre o espaçamento
            de 30px. 
          </p>
 
          <p> 
            Porcentagem e numeral são valores <strong>dinâmicos</strong> que
            se baseiam no tamanho da fonte do texto. Por exemplo, se o texto
            tem o <code>font-size</code> de 14px, ao atribuir
            um <code>line-height</code> de 100%, a linha terá a altura de
            14px. Mas, mantendo a <code>font-size</code> de 14px e atribuindo
            o valor 2 para a <code>line-height</code>, o espaçamento terá a
            altura de 28px, sendo 14px multiplicado por 2.
          </p> 
          <p>
            <code>p {line-height: 2;}</code>
          </p>
      
      <h5>A propriedade <code>font</code></h5>
      <p>
        Diferentemente da propriedade <code>color</code> que recebe apenas um
        valor, a propriedade <code>font</code> é uma forma resumida de
        aplicar todas as propriedades acima de uma só vez. Para isso, deve-se
        escrever os valores desejados na seguinte
        ordem: <code>font-style</code>, <code>
          <a href="#" class="glossario pop" 
             data-placement="top" 
             data-original-title="font-variant"
             data-content='Exibe o texto em pequena caixa alta (versalete) ou
             normal. Os valores aceitos são small-caps, para pequena
             caixa-alta, e
             normal.'>font-variant</a></code>, <code>font-weight</code>, 
        <code>font-size</code>, <code>line-height</code>
        e <code>font-family</code>, conforme o exemplo a seguir:  
      </p>
      <p>
        <code>p {font: italic, normal, bold, 14px, 100%, Georgia;}</code>
      </p>
      <p>
        <span class="label label-warning">Importante</span>
        Exceto <code>font-size</code> e <code>font-family</code>, as outras
        propriedades são opcionais. 
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
