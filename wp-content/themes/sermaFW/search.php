<?php get_header(); ?>


<div class="wrapper banner-interna">
<div class="content">

</div>
</div>



<div class="wrapper busca">
<div class="content">

<h2>Resultado da busca</h2>
<hr/>
<br/><br/><br/>



<?php $cont1= 0; $cont2 = 0; $cont3 = 0;
$postnames = array();
$postids = array();
if ( have_posts() ) : while ( have_posts() ) : the_post(); global $post; $name =  $post->post_type; ?>

<?php if($name == 'estudos'){?>

<?php if($cont1 == 0){echo '<h3 style="border-top:none;padding-top:0;">'.$post->post_type.'</h3>'; $cont1++;}  ?></h3>
<br class="clear" />

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); if($image){  ?>
<a href="<?php the_permalink(); ?>"><img src="<?php  echo $image[0];  ?>" alt="<?php the_title(); ?>" width="106" class="image-search"/></a>
<?php } ?>

<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>

<!--<a href="<?php the_permalink(); ?>" class="ver-mais-busca">Ver mais</a>-->
<br/><br/><br/>

<?php } ?>




<?php if($name == 'nt-comentado'){?>

<?php if($cont2 == 0){echo '<h3>'.$post->post_type.'</h3>'; $cont2++;}  ?></h3>
<br class="clear" />

<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); if($image){  ?>
<a href="<?php the_permalink(); ?>"><img src="<?php  echo $image[0];  ?>" alt="<?php the_title(); ?>" width="106" class="image-search"/></a>
<?php } ?>

<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
<!--
<a href="<?php the_permalink(); ?>" class="ver-mais-busca">Ver mais</a>-->
<br/><br/><br/>

<?php } ?>



<?php if($name == 'videos'){?>
<?php if($cont3 == 0){echo '<h3>Bíblia Falada</h3>'; $cont3++;}  ?></h3>
<br class="clear" />

<div class="iframe-search">
<a href="<?php the_permalink(); ?>" class="link-iframe" ></a> 
<!--<a href="#light<?php the_ID(); ?>" class="link-iframe" name="modal"></a>   --> 
<?php the_field('iframe') ?>
</div><!--iframe-search-->

<p><a href="#light<?php the_ID(); ?>" name="modal"><?php the_title(); ?></a></p>


<!--<a href="#light<?php the_ID(); ?>" name="modal" class="ver-mais-busca">Ver mais</a>-->


<div id="boxes">

<div class="window" id="light<?php the_ID(); ?>">
<div class="light-close">x</div>

 <?php the_field('iframe'); ?>

</div>


</div>    
<br/><br/><br/>
<?php } ?>


<br class="clear" />
<?php endwhile; endif;?>
<h3>&nbsp;</h3>




</div>
</div>







	
<?php get_footer(); ?>
