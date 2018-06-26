<?php

require_once "bootstrap.php";

use Hello\SayHello;

//echo SayHello::world();

$Hello = new SayHello();

echo $Hello->world();