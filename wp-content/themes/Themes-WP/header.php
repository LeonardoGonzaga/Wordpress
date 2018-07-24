
<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="<?php bloginfo('admin_email'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  
  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
</head>


<header>

 <nav class="navbar navbar-expand-lg navbar-dark nav justify-content-center">
  <a class="navbar-brand" href="<?php bloginfo('home'); ?> ">
   <img id="imgLogo" src="<?php bloginfo('template_url');?>/img/logo.png" width="80" height="50" class="d-inline-block align-top" alt="">
 </a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>


<div class="collapse navbar-collapse" id="navbarText">
  <ul class="navbar-nav mr-auto">
    <!--Deixa a criação de paginas mais dinmanicas-->
      <?php 
        wp_list_pages([
            'post_type' => 'page',
            'title_li' => '',
            'sort_column' => 'post_date',
            'sort_order' => 'ASC'
        ])

       ?>
  </ul>
</div>
</nav>
</header>


