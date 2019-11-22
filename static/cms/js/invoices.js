function edit_invoices(invoice_id){    
     var url = 'dashboard/facturas/load/'+invoice_id;
     location.href = site+url;   
}
function cancel_invoices(){
	var url= 'dashboard/facturas';
	location.href = site+url;
}