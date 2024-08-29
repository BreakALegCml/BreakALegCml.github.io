<?php
header("Content-Security-Policy: script-src 'none'");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	CSP enforced with header &lt;?php header(&quot;Content-Security-Policy: script-src &#39;none&#39;&quot;); ?&gt;
<script>alert('Javascript is executed.')</script>
</body>
</html>
