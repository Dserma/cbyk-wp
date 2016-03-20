$(document).ready(function() {
    
    if( $('#accordion').length ){
        
        $('#navProdutos').addClass('active');
        
        $('.collProd').on('show.bs.collapse', function () {
        
         $(this).prev().find(".collProdHead").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
        
        });

        $('.collProd').on('hide.bs.collapse', function () {

             $(this).prev().find(".collProdHead").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");

        });
    
    }
    
    if( $('#tabPedidos').length ){
        
        $('#navPedidos').addClass('active');
        
        $('#tabPedidos').DataTable({
                "scrollY"           : "300px",
                "scrollX"           : false,
                "scrollCollapse"    : false,
                "paging"            : false,
                "processing"        : true
            });
        
    }
    
    if( $('#tabClientes').length ){
        
        $('#navClientes').addClass('active');
        
        $('#tabClientes').DataTable({
                "scrollY"           : "300px",
                "scrollX"           : false,
                "scrollCollapse"    : false,
                "paging"            : false,
                "processing"        : true
            });
        
    }
    
    $('[data-toggle="tooltip"]').tooltip({container: 'body'});
    
});