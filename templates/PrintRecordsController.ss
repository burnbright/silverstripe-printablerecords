<% require themedCSS(print) %>
<html>
	<head>
		$MetaTags
	</head>
	<body>
		<div class="nav">
			<p>Click headings to sort.<br/>Hold <strong>[shift]</strong> to sort multiple columns.</p>
			<p><button onclick="javascript:window.print();">print</button></p>
		</div>
		<div class="page">
			<% include PrintRecordsTable %>
		</div>
	</body>
</html>