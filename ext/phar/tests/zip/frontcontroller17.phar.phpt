--TEST--
Phar front controller mime type unknown zip-based
--INI--
phar.require_hash=0
--EXTENSIONS--
phar
zlib
--ENV--
SCRIPT_NAME=/frontcontroller17.phar.php
REQUEST_URI=/frontcontroller17.phar.php/fronk.gronk
PATH_INFO=/fronk.gronk
--FILE_EXTERNAL--
files/frontcontroller8.phar.zip
--EXPECTHEADERS--
Content-type: application/octet-stream
Content-length: 4
--EXPECT--
hio3
