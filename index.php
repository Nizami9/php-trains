<?php

declare(strict_types=1);

require_once "App/Account.php";

use App\Account;

$myAccount = new Account('john', 20);

$myAccount->deposit(20)->deposit(100);

var_dump($myAccount);
