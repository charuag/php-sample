<?php

declare(strict_types=1);

namespace Code\Test;

// Autoload files using Composer autoload
require_once __DIR__ . '/../vendor/autoload.php';

use Code\Service\Hello;

$sample = new Hello();

echo $sample::hello();
