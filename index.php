<?php

if (isset($_POST['content'])) {

	$content = $_POST['content'];
	$result = htmlentities($content, ENT_NOQUOTES, null, true);
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
<textarea name="result" style="width:100%; height:300px"><?= $result ?></textarea>
<input type="submit" />
</form>
<pre><?= $result ?></pre>

<script type="text/javascript">
function copyToClipboard (text) {
  window.prompt ("Copy to clipboard: Ctrl+C, Enter", text);
}


//copyToClipboard('<?= $result ?>');

</script>

</body>
</html>