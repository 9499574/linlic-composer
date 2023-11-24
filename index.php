<?php
require "vendor/autoload.php";
use  linlic\jsonRpc\TestService;
$Test = new TestService();
echo $Test->add(2,2);