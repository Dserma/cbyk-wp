<?php get_header(); ?>

<div class="panel panel-default">
    
    <div class="panel-heading">
        
        <div class="panel-title">
            
            <h4>Produtos - Listagem </h4>

            
        </div>
        
    </div>
        
        <div class="panel-body">
            
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

		<?php if ( have_posts() ) : ?>

			<?php
			// Start the Loop.
			while ( have_posts() ) : the_post();

                            get_template_part( 'content', 'produto' );

			endwhile;

		else :
			get_template_part( 'content', 'none' );
		endif;
		?>

            </div>
        </div>
    </div>
<?php get_footer(); ?>
