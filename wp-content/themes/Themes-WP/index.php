<?php get_header(); ?>

<body id="grad">
  

      <div class"container-fluid">
        <div class="row" >
            <div class="col-md-6  id="caixaTexto"> 
                <h1 id="texto">Colhendo problemas, plantando soluções</h1>
                 <button type="button" class="btn btn-primary" id="botaoSaiba">Saiba mais</button>

                <div id="texto2">
                     <h4 id="textoInformativo">
                      De onde ele vem?
                      Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico.
                     </h4>
                </div>
            </div>


            <div class="col-md-6" id="caixaImg"> 
            <img id="imgGlobo" src="<?php bloginfo('template_url');?>/img/img1.png">
            </div>

  
        </div>  <!-- Fim row -->
      </div>
  <!-- Fim Container -->

  <<?php get_template_part('includes/about', 'principal'); ?>



</body>



<?php get_footer(); ?>