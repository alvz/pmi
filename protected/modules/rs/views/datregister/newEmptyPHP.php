$('#datregister-grid table tbody tr').live('click',function() {
	$.fn.yiiGridView.update('dattindakan-grid', {
		type:'POST',
                url:'?Dattindakan[idreg]='+$(this).children(':nth-child(1)').text(),
	});
        return false;
});
jQuery('#datregister-grid a.update').live('click',function() {
	location.href='".$this->createUrl('/rs/datregister/update/id')."/'+$(this).children(':nth-child(1)').text();
	return false;
});