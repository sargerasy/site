<?php
foreach ($_FILES as $fieldName => $file) {
	$name = iconv('utf-8', 'gbk', $file["name"]); ;//md5(microtime());
	move_uploaded_file($file['tmp_name'], "./" . $name);
	echo $file['name'] . ' uploaded!';
}

