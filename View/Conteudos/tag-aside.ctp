<?php 
echo $this->element(
  'breadcrumb-content', 
  array("curso" => "Web Design com HTML e CSS",
    "aula"  => "Aside",
    "url"   => "tag-aside"
    )); 
    ?> 

    <?php 
    $this->Html->script("bootstro.js", array("inline" => false));
    $this->Html->script("exercise-inspector.js", array("inline" => false));
    $this->Html->script("html-lesson.js", array("inline" => false));
    $this->Html->css("html-lesson.css", null, array("inline" => false));
    $this->Html->css("exercise-inspector.css", null, array("inline" => false));
    $this->Html->css("bootstro.css", null, array("inline" => false));
    ?>

    <div class="container unique-content">
      <!-- Steps content -->
      <div class="step-content">
        <div class="step-pane in" id="aside">
         <h3>Aside </h3>
         <p>
          O elemento <code>aside</code> vem da própria palavra inglesa aside, 
          que traduzida fica "ao lado". Suas tags 
          <code>&lt;aside&gt; &lt;/aside&gt;</code> são utilizadas para representar 
          conteúdos que tangenciem o conteúdo principal do web site. Isso não 
          significa que este elemento será <strong>necessariamente</strong> o 
          responsável por barras laterais, mas sim somente quando o conteúdo 
          destas barras se encaixarem à sua semântica. Mais uma vez reforçamos que 
          estas tags têm valor semântico no código e não estão relacionadas com layout.
        </p>
        <p>
          Para entender melhor, pense por exemplo em um box usado para propagandas 
          no meio de textos de jornais ou revistas. Ele, de maneira geral, relaciona-se 
          com o conteúdo principal que o envolve. O conteúdo deste box é o que englobaremos 
          pelo <code>aside</code>.
        </p>
        <p>
          Outros exemplos de uso por essas tags em web sites são para exibição de parcerias e comentários a respeito de determinado conteúdo.
        </p>

        <p>
          Veja um exemplo de uso a seguir:
        </p>

        <div class="two-columns-example row-fluid">
          <header>
            <h1>Caipora</h1>
          </header>
          <section>
            <ul>
              <li>Gato 1</li>
              <li>Gato 2</li>
            </ul>
          </section>
          <section>
            <p>Espaço para tabela;</p>
          </section>
          <!-- Aside para barra lateral com informações adicionais -->
          <aside>
            <h1>Dicas</h1>
            <p>Seguem sugestões de páginas com dicas de cuidados aos felinos:</p>
            <p>
              <a href="http://www.whiskas.com.br/filhotes/cuidados-e-higiene">
                Filhotes - Cuidados e higiene 
              </a>
            </p>
            <p>
              <a href="http://www.pea.org.br/cuidados/gatos.htm">
                Projeto Esperança Animal
              </a>
            </p>
          </aside>
          <footer>
            <h1> Contatos </h1>
            <p>Telefone</p>
            <p>Email</p>
          </footer>
        </div>
      </div>
    </div>
  </div>
      