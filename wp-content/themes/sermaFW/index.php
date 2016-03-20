<?php get_header(); ?>


<div class="wrapper banner">
<div class="content">
<?php echo slider_pro(1); ?>
</div>
</div>
	
    

<div class="wrapper videos-home">
<div class="content">

<h2>Vídeos</h2>
<hr/>
<div class="listagem-frames">
  <?php  $loop = new WP_Query( array( 'post_type' => 'videos', 'posts_per_page'=>'3', 'order' => 'DESC') ); ?>
    <?php  while ( $loop->have_posts() ) : $loop->the_post(); $data = get_the_date() ?>
    
    <div class="iframe">
     <a href="<?php the_permalink(); ?>" class="link-iframe" ></a>  
   <!-- <a href="#light<?php the_ID(); ?>" class="link-iframe" name="modal"></a>  -->  
    <?php the_field('iframe') ?>
    <?php the_content(); ?>        
    </div>
    
    <?php   endwhile; ?>
    </div> 
    
<br class="clear"/>
<a href="<?php the_permalink(9) ?>">Ver Todos</a>
</div>
</div>


<div id="boxes">
<?php  $loop = new WP_Query( array( 'post_type' => 'videos','posts_per_page'=>'3',  'order' => 'DESC') ); ?>
    <?php  while ( $loop->have_posts() ) : $loop->the_post(); $data = get_the_date() ?>

<div class="window" id="light<?php the_ID(); ?>">
<div class="light-close">x</div>
 <?php the_field('iframe'); ?>

</div>

	  <?php   endwhile; ?>
</div>      

<script>
$(function(){
	
	$('.bloco-estudo').on({
    mouseenter: function(){    
	  $(this).find(".info-estudo").animate({height: "276px"}, 500, function() {  });
    },
    mouseleave: function(){
       $(this).find(".info-estudo").animate({height: "0"}, 500, function() {  });
    }
});
	
});	
	
</script>

<div class="wrapper estudos">
<div class="content">

<h2>Estudos</h2>

<hr/>
    <?php  $loop = new WP_Query( array( 'post_type' => 'estudos', 'posts_per_page'=>'6', 'order' => 'ASC') ); ?>
    <?php  while ( $loop->have_posts() ) : $loop->the_post(); global $post; ?>
    
    <div class="bloco-estudo">
    <div class="info-estudo">
    <h3><?php the_title(); ?></h3>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink() ?>">Ler Mais</a>
    </div><!-- info-estudo-->       
    <img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); echo $image[0];  ?>" alt="<?php the_title(); ?>" width="338" height="276"/>
    </div>   <!-- bloco-estudo-->        
    <?php   endwhile; ?>

</div>
</div>

<div class="wrapper resumos">
<div class="content">

<div class="resumos-home">
<h2>Sobre Nós</h2>
<hr/>
<p><?php the_field('resumo',5) ?></p>
<a href="<?php the_permalink(5) ?>">Saiba Mais</a>
</div><!--resumos-home-->

<div class="resumos-home">
<h2>Bíblia Falada</h2>
<hr/>
<p>
<img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( 9 ), 'full' ); echo $image[0];  ?>" alt="<?php the_title(); ?>" width="141" height="116"/>
<?php the_field('resumo',9) ?>
</p>
<a href="<?php the_permalink(9) ?>">Saiba Mais</a>
</div><!--resumos-home-->

<div class="resumos-home">
<h2>Novo Testamento Comentado</h2>
<hr/>
<p>
<img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( 7 ), 'full' ); echo $image[0];  ?>" alt="<?php the_title(); ?>" width="141" height="116"/>
<?php the_field('resumo',7) ?>
</p>
<a href="<?php the_permalink(7) ?>">Saiba Mais</a>
</div><!--resumos-home-->

</div>
</div>


    
<?php get_footer(); ?>
