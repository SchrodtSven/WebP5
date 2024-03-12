<pre><?php
//die(getcwd());
require_once '../src/lib/WebP5/Autoload.php';

use SchrodtSven\WebP5\Autoload;

(new Autoload())->registerAutoloader();
use SchrodtSven\WebP5\Stor\Foo;
use SchrodtSven\WebP5\Type\ArrayClass;
$f = new Foo();
//echo getcwd();
//echo PHP_EOL;
var_dump((new ArrayClass([1,2,'Sven']))->join());