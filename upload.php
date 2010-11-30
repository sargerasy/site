<?php
foreach ($_FILES as $fieldName => $file) {
	$name = md5(microtime());
	move_uploaded_file($file['tmp_name'], "./" . $name . '.jpg');
	echo $fieldName . ' uploaded!';
}

