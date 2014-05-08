</div>
<div id="footer">
	<h1 align="center"></h1>
</div>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="style/foundation5/js/foundation.min.js"></script>
<script type="text/javascript" src="js/colorbox-master/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/jquery.validate-1.9.0.min.js"></script>
<script>
	//使用 Foundation
	$(document).foundation();
	//使用 jQuery
	$( document ).ready(function() {
	//点击执行这个方法 实现弹窗动能
		$("#loginLink").click(function(){
			$.colorbox({href:"login.php"});
		});
		
		//退出，销毁SESSION
		$("#logoutLink").click(function(){
			$.post( "logout.php", function(data){
				window.location.reload();//页面跳转
			});
		});
	});
</script>
</body>
</html>