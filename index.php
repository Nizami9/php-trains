<?php

declare(strict_types=1);

require_once "Account.php";

$myAccount = new Account('john', 20);

$myAccount->deposit(20)->deposit(100);

var_dump($myAccount);
