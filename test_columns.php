#!/usr/bin/env php
<?php

require 'vendor/autoload.php';
$app = require 'bootstrap/app.php';
$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$columns = \Illuminate\Support\Facades\DB::select('SHOW COLUMNS FROM processos');
foreach($columns as $col) {
    echo $col->Field . "\n";
}
