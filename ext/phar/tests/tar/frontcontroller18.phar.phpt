--TEST--
Phar front controller $_SERVER munging failure tar-based
--SKIPIF--
<?php if (!extension_loaded("phar")) die("skip"); ?>
--ENV--
SCRIPT_NAME=/frontcontroller18.phar.php/fronk.gronk
REQUEST_URI=/frontcontroller18.phar.php/fronk.gronk
--FILE_EXTERNAL--
frontcontroller9.phar.tar
--EXPECTF--
Fatal error: Uncaught exception 'UnexpectedValueException' with message 'No values passed to Phar::mungServer(), expecting an array of any of these strings: PHP_SELF, REQUEST_URI, SCRIPT_FILENAME, SCRIPT_NAME' in %sfrontcontroller18.phar.php/.phar/stub.php:2
Stack trace:
#0 %sfrontcontroller18.phar.php/.phar/stub.php(2): Phar::mungServer(Array)
#1 {main}
  thrown in %sfrontcontroller18.phar.php/.phar/stub.php on line 2
