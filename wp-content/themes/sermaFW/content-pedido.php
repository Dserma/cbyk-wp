
<tr>
    <td><?php the_ID(); ?></td>
<?php 

   $title = get_the_title();
   $cliente = get_field('cliente');
   foreach( $cliente as $c ): ?>
        <td>
            <?php echo get_the_title( $c->ID ); ?>
        </td>
    <?php endforeach; ?>

    <td>
        
        <a href="<?php echo $title?>" type="button" data-toggle="tooltip" data-placement="top" class="btn btn-primary btn-sm" title="Visualizar Pedido">
            
            <span class="glyphicon glyphicon-list-alt"></span>
            
        </a>
        
    </td>
</tr>




