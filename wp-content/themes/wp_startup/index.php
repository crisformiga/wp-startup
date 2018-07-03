<?php get_header(); ?>
<div class="blog">
    <div class="wrap">
        <h1>CONTEUDO SITE</h1>
            <div class="caixa-post">
                    <div class="list-post ">
                        <img src="<?php bloginfo('template_directory');?>/assets/images/post3.jpg" alt="">
                        <!-- conteudo esquerda -->
                       <div class="content-post">
                            <h2>Conteudo primario</h2>
                            <p>Dawney Johnnson , fala sobre acidente que cuminou 71 mortes da chape,
                            ele falará na introduçao deste documentario da FOX EUA. E que ele não tem data ainda de lancamento
                            mas que ja ta muito aguardada.
                            </p>
                            <a href="#" class="custom-botao">Leia mais</a>
                        </div>
                        
                    </div>
                    <div class="list-post segundo-post">
                       <!-- conteudo direita -->
                       <div class="content-post">
                            <h2>Liberdade de criação</h2>
                            <p>Espaço para você está criando, desenvolvendo seus talentos junto a empresa,
                            que inspira você a se capacitar ainda mais . E empresa buscar utilizar o melhor do
                            parceiro em pró a sua organização.
                            </p>
                            <a href="#" class="custom-botao">Leia mais</a>
                        </div>
        <!-- Passa o camando da IMG para baixo pois ocorrera inverção de lado chamado SEGUNDO-POST -->
                         <img src="<?php bloginfo('template_directory');?>/assets/images/list3.jpg" alt="">
                    </div>
            </div>
            <!-- part do header-two-->
            <div class="box-two">
            <div class="header-two">
                 <h3><a href="<?php echo site_url();?>" title="<?php bloginfo('name');?>">CristianoWP</a> </h3> 
                 <h1><a href="<?php echo site_url();?>"title="<?php bloginfo('name');?>">eventos</a> </h1>
                 <div class="info-two">
                     <?php
                     $args = array('type_post'=>'page','pagename'=>'eventos');
                     $my_page = get_posts($args);
                     ?>
                 </div>
            </div>
            </div>    
    </div>
</div>


<?php get_footer();?>
<!-- Comando abaixo é para incluir um codigo/pagina na outra -->
<!--<?php include 'startup.php'; ?> -->