<?php get_header(); ?>

<div class="panel panel-default">
    
    <div class="panel-heading">
        
        <div class="panel-title">
            
            <h4>Clientes - Listagem </h4>

            
        </div>
        
    </div>
        
        <div class="panel-body">
            
            <table id="tabClientes" class="table table-hover display compact" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>E-MAIL</th>
                        <th>TELEFONE</th>
                    </tr>
                </thead>
                        
                <tbody>

		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'content', 'cliente' );

			endwhile;

		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
                    
                </tbody>
                        
            </table>
            
        </div>
    </div>
<?php get_footer(); ?>

