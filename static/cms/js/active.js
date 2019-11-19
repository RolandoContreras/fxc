function active_financiada(invoice_id,customer_id,kit_id){
    bootbox.dialog("Confirma que desea activar como financiada?", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-success",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/activaciones/active_financy",
               dataType: "json",
               data: {invoice_id : invoice_id,
                      customer_id : customer_id,
                      kit_id : kit_id},
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}
function active(customer_id,point,parents_id){
    bootbox.dialog("Confirma que desea activar la cuenta?", [        
        { "label" : "Cancelar"},
        {
            "label" : "Confirmar",
            "class" : "btn-success",
            "callback": function() {
           $.ajax({
               type: "post",
               url: site+"dashboard/activaciones/active",
               dataType: "json",
               data: {customer_id : customer_id,
                      point:point,
                      parents_id : parents_id
                      },
               success:function(data){                             
               location.reload();
               }         
           });
           }
        }
    ]);
}