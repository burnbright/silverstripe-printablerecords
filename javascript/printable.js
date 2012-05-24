(function($) {
	if($("table.sortme")){
		$("table.sortme").tablesorter();
		$("table.sortme").bind("sortEnd",function(){
			$(this).find('tr').removeClass("even").removeClass("odd");
			$(this).find(':odd').addClass("odd");
			$(this).find('tr:even').addClass("even");
		});
	}
})(jQuery);