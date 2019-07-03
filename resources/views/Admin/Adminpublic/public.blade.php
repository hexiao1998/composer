<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield("title")</title>
	<style type="text/css">
		#header{
			width:100%;
			height:200px;
			background-color:red;
		}
		#footer{
			width:100%;
			height:200px;
			background-color:yellow;
		}
	</style>
</head>
<body>
	<div id="header">头部</div>
	@section("main")
	@show
	<div id="footer">尾部</div>
</body>
</html>
