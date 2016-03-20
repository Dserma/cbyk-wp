<?php get_header(); ?>
<script>
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true,
	   active: false
    });
  });
  </script>
<div class="wrapper banner-interna">
<div class="content">

</div>
</div>


<div class="wrapper nt-interna">
<div class="content">

<h2>Novo Testamento Comentado</h2>
<hr/>


<div class="listagem-nt">
<?php $cat = get_query_var('cat'); 
 ?>
<?php  $loop = new WP_Query( array( 'post_type' => 'nt-comentado', 'category__in'=> $cat, 'posts_per_page'=>'500', 'orderby'=>'title', 'order' => 'ASC') );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>

<div class="bloco-nt">
 <img src="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' ); echo $image[0];  ?>" alt="<?php the_title(); ?>" width="340"/>   
 <h4><?php the_title() ?></h4>
   <?php the_excerpt(); ?>
   
   <div class="cap-ver-link">
   
   Capitulo <?php the_field('capitulo') ?> &nbsp;&nbsp;&nbsp; Versículo <?php the_field('versiculo') ?>
   <br />
   <a href="<?php the_permalink() ?>">VER MAIS</a>
   </div>
   
   
</div>

   <?php   endwhile; ?>
</div>



<div class="menu-categ">
<h4>CATEGORIAS</h4>
<div  id="accordion">
<?php $args1=array('exclude'=> '1','hide_empty'=> 0, 'child_of'=> 0,'parent'=> '0','orderby'=>'ID','order'=> 'ASC');
$categories1 = get_categories( $args1 );
$contador = 0;
foreach ( $categories1 as $category1 ) {

	echo '<h3>&bull;&nbsp;' . $category1->name . '</h3>';	
	
	
$args2=array('exclude'=> '1','hide_empty'=> 0, 'child_of'=>$category1->cat_ID, 'parent'=>$category1->cat_ID,'orderby'=>'ID','order'=> 'ASC');
$categories2 = get_categories( $args2 );

	if(!$categories2){
	 echo '<div>&nbsp;</div>';		
     }else{
		 	foreach ( $categories2 as $category2 ) {
		echo '<div><a href="'.esc_url( home_url( '/' ) ).'categoria/'.$category2->slug.'"  id="firstLink"  class="link'.$category2->term_id.' link-categorias">' . $category2->name . '</a></div>';	

		 }

	 }

}

 ?>  
 </div>
 
</div>




</div>
</div>

	
<?php get_footer(); ?>
