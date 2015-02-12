<html>
<head>
<title>WP-Game</title>
</head>
<body>
<script type="text/javascript">
function calcHeight()
{
	//find the height of the internal page
	var the_height = document.getElementById('the_iframe').contentWindow.document.body.scrollHeight;
	//change the height of the iframe
	document.getElementById('the_iframe').height=the_height;
}
</script>
<?php
$param = $_SERVER['REQUEST_URI'];
$param = str_replace( '/wp-game/?g=', '', $param );
$param = urldecode( $param );
?>
<iframe width="100%" src="<?php echo $param; ?>" scrolling="no" id="the_iframe" onLoad="calcHeight();" height="768px" frameborder="0" ></iframe>
<?php wp_footer(); ?>
</body>
</html>