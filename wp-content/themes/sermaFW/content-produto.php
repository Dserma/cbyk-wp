    <div class="panel panel-primary">
        <div class="panel-heading">
            <div class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#produto_<?php the_ID(); ?>" aria-expanded="false" aria-controls="produto_<?php the_ID(); ?>">
                    <span class="glyphicon glyphicon-chevron-right collProdHead"> </span>
                   &nbsp;<?php the_title(); ?>
                </a>
            </div>
        </div>

        <div id="produto_<?php the_ID(); ?>" class="panel-collapse collapse collProd" role="tabpanel" aria-labelledby="">
            <div class="panel-body">
                <form role="form" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-md-2">
                            <label for="preco">Preço (R$):</label>
                            <input type="text" class="form-control" readonly id="" value ="<?php echo get_field("preco"); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="descricao">Descrição:</label>
                            <textarea cols="40" class="form-control" readonly rows="5" id=""><?php echo get_field("descricao"); ?></textarea>
                        </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
