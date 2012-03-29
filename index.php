<?php

if (isset($_POST['content'])) {

	$content = $_POST['content']; 	// not concerned about security - this is for local use
	$result = htmlentities($content, ENT_NOQUOTES, null, true);
	
	// run it again to convert the &s to &amp;s so the page doesn't re-encode html entities when displaying them
	$result = htmlentities($result, ENT_NOQUOTES, null, true);
	$result = str_replace('&amp;gt;', '>', $result);
	$result = str_replace('&amp;lt;', '<', $result);
	//$result = str_replace('’', '\'', $result);
	
} else {
	$content = '';
	$result='';
}

?>

<html>
	<head>
		<title>HTML Entities Converter</title>
	</head>

	<body>
		<form method="POST">
			<textarea name="content" style="width:100%; height:300px"><?= $content ?></textarea>
			<input type="submit" />
			<textarea name="result" style="width:100%; height:300px"><?= $result ?></textarea>
			<input type="button" value="Copy to clipboard" onclick="copyToClipboard('<?= $result ?>')" />
		</form>
		
		<pre><?= $result ?></pre>

		<script type="text/javascript">
			function copyToClipboard (text) {
				window.prompt ("Copy to clipboard: Ctrl+C, Enter", text);
			}
		</script>

	</body>
</html>