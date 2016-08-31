<?php
$r = $_GET['r'];
$params = $_GET['params'];
if( isset($params) && isset($r) ) {
	$mesartc = 'https://apprtc.appspot.com/r/'.$r.'?'.$params;
}
if( isset($r) && !isset($params) ) {
	$mesartc = 'https://apprtc.appspot.com/r/'.$r;
}
if( !isset($r) ) {
	echo 'MesaRTC.json: MesaRTC usage: https://url/mesartc/?r=RoomName , and with parameters: https://url/mesartc/?r=RoomName&amp;params=MY_PARAMETERS';
	echo '<br />To learn more about the MesaRTC parameters, please <a href="params.php">click here.</a>';
	die();
}
?>
<html>
<head>
		<title>MesaRTC</title>
        <style type="text/css">
            body, html
            {
                margin: 0; padding: 0; height: 100%; overflow: hidden;
            }

            #content
            {
                position:absolute; left: 0; right: 0; bottom: 0; top: 0px; 
            }
        </style>
</head>
<body>
        <div id="content">
            <iframe id="mesartc" width="100%" height="100%" frameborder="0" src="<?php echo $mesartc; ?>"></iframe>
        </div>
</body>
</html>