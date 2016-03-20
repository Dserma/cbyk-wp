<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <form role="form" class="form-horizontal">
    
    <div class="form-group">
        
        <div class="col-md-6">
            
        <?php  $cliente = get_field('cliente'); 
         foreach( $cliente as $c ):    
        ?>
            
            <label for="cliente">Cliente:</label>
            <input type="text" readonly class="form-control" id="cliente" value ="<?php echo get_the_title( $c->ID ); ?>">
            
        </div>
        
        
        
        
    </div>
    
    
        <div class="form-group">

            <div class="col-md-6">

                <label for="email">E-mail:</label>
                <input type="email" class="form-control" readonly id="email" value ="<?php echo get_field('email', $c->ID ); ?>" placeholder="example@server.com">

            </div>

        </div>

        <div class="form-group">

            <div class="col-md-3">

                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" readonly value="<?php echo get_field('telefone', $c->ID ); ?>" class="form-control" />
            </div>

        </div>
        
        <?php endforeach; ?>
        <div class="panel panel-default">
            
            <div class="panel-title text-center bg-success">
                
                <b>Produto</b>
            
            </div>
        </div>
        
        <div class="form-group">
            
        <?php  $produto = get_field('produto'); 
         foreach( $produto as $p ):    
        ?>
            <div class="col-md-6">

                <label for="produto">Produto:</label>
                <input type="text" readonly class="form-control" id="produto" value ="<?php echo get_the_title( $p->ID ); ?>">

            </div>
            
        
        </div>
        
        
            <div class="form-group">

                <div class="col-md-3">

                    <label for="preco">Preço:</label>
                    <input type="text" class="form-control" readonly id="preco" value ="<?php echo get_field('preco', $p->ID ); ?>">

                </div>
                
                <div class="col-md-3">

                    <label for="quantidade">Quantidade:</label>
                    <input type="number" id="quantidade" readonly value="1" class="form-control" />
                </div>
                
            </div>
        <?php endforeach; ?>
        <hr>
        
        <a role="button" href ="<?php echo esc_url( get_home_url() ); ?>/pedido" class="btn btn-default">
            
            <span class="glyphicon glyphicon-arrow-left"></span>
            &nbsp;Voltar
            
        </a>

</form> 
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
