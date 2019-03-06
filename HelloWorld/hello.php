<?php
/* I'm learning from https://phptherightway.com/#getting_started
 * */

if ($argc !== 2) {
    echo "Usage: php hello.php [name].\n";
    exit(1);
}
$name = $argv[1];
echo "Hello, $name\n";
