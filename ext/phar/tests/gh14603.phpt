--TEST--
Phar::webPhar GH-14603
--EXTENSIONS--
phar
--CREDITS--
Yuancheng Jiang
--FILE--
PK      ��eI���        a.phpnu W+A��        hioPK      ��eI�`��   �     .phar/stub.phpnu W+A��        <?php
function s($a)
{
    static $b = array("/hi" => false);
    if (isset($b[$a])) return $b[$a];
    return $a;
}
try { 
	Phar::webPhar("whatever", "index.php", null, array(), "s");
} catch (\PharException $e) {
	echo $e->getMessage() . PHP_EOL;
}
echo "DONE";
__HALT_COMPILER();?>
PK      ��eI���        a.jpgnu W+A��        hioPK      ��eIl�`        a.phpsnu W+A��        <?php function hio(){}PK       !��+�e        .phar/signature.binnu ��A                ndpv�i�Q9���Gk!2��PK        ��eI���                      a.phpnu W+A��        PK        ��eI�`��   �               8   .phar/stub.phpnu W+A��        PK        ��eI���                  t  a.jpgnu W+A��        PK        ��eIl�`                  �  a.phpsnu W+A��        PK         !��+�e                  �  .phar/signature.binnu ��A          PK      q  W    
--EXPECTF--
%sphar error: end of central directory not found in zip-based phar%s
DONE
