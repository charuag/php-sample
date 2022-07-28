<?php

namespace Code\Service;

use PHP_Timer;

class Hello {
  public static function hello() {
    $timer = new PHP_Timer();
    $timer->start();
    return "Hello World\n" . $timer->resourceUsage() . "\n";
  }
}
