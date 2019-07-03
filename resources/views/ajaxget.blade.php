<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajax get请求方式 </title>
	<script type="" src="/static/jquery-1.8.3.min.js"></script>
</head>
<body>
	<button>获取Ajax响应数据</button>
</body>
<script>
	//alert($);
	$("button").click(function(){
		$.get("/doajaxget",{},function(data){
			alert(data);
		});
	});
</script>
</html>