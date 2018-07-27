
$("li").click(function(event) {
	var dir="http://localhost/licoreria/app/html/vistas";
	event.preventDefault();
	
	if($(this).children().attr("href")!=='#sub-item-1'){
	 $("#case").empty();
	 $("#case").load(dir+"/productos.php");
	


	}
});

