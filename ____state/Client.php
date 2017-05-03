<?php

class Client
{
  private $context;

  public function __construct()
  {
    $this->context = new Context();

    $times = 100;

    for ($i = 0; $i <= $times; $i++)
    {
      // echo '<br />' . $i . '<br />';
      if($i % 2) {
        $this->context->turnOnLight();
      }
      $this->context->turnOffLight();
    }
  }
}
