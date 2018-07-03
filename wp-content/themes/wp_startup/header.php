<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- Para pagina ser dinamica do WP, coloca comando PHP abaixo -->
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"> <!-- Este comando vai na raiz e ve
    se tem um arquivo do CSS, automaticamente-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Acima esta uma font da api do google, copiado no proprio site.-->
    <?php wp_head();?> <!-- no template HEADER + FOOTER, com este comando podemos da chamada ao Wordpress
    dos conetudos ate de atahos do WP como (cursos WP + Personalizar + Novo-->
</head>
<body>
    
    <div class="header">
         <div class="wrap">
             <h3><a href="<?php echo site_url();?>" title="<?php bloginfo('name');?>">CristianoWP</a> </h3>
              <h1><a href="<?php echo site_url();?>" title="<?php bloginfo('name');?>">EXPERIMENTI </a> </h1>
            <div class="info">
               
               <?php 
               $args = array('post_type' => 'page','pagename'=> 'sobre');
               $my_page = get_posts($args);
               ?>
             <?php if($my_page): foreach($my_page as $post): setup_postdata($post);?>

             <h2><?php the_title();?> </h2>
                <?php the_excerpt();?>

                <a href="<?php the_permalink();?>" class="custom-botao">Leia mais</a>
               <?php endforeach; ?>
                <?php else:?>
                <p>Nenhum conteudo foi encontrado sobre esta pagina.</p>
             <?php endif;?> 
             
            </div>
         </div>
    </div>