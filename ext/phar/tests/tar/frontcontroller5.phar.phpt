--TEST--
Phar front controller index.php relocate tar-based
--SKIPIF--
<?php if (!extension_loaded("phar")) die("skip"); ?>
--ENV--
SCRIPT_NAME=/frontcontroller5.phar.php/
REQUEST_URI=/frontcontroller5.phar.php/
--FILE_EXTERNAL--
frontcontroller.phar.tar
--EXPECTHEADERS--
Status: 301 Moved Permanently
Location: /frontcontroller5.phar.php/index.php
--EXPECT--
