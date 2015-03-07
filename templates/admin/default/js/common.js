$(function() {
	$('div.panel-body').addClass('table-responsive');

	//confirm 
	$('a.a-delete').on('click',function(){
		if(confirm("Are You Sure want to Continue"))
		{

		}
		else{

			return false;
		}
	});

	//clear form inputs 
	$('span.btn-clear').on('click',function(){
		$('input:text').val('');
		$('input:checkbox').attr('checked',false);
		//console.log("in reset");
	});

});
