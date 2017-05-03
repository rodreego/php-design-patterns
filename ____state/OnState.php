<?php

class OnState implements IState
{
  private $context;

  public function __construct(Context $contextNow)
  {
    $this->context = $contextNow;
  }
  public function turnLightOn()
  {
    echo 'Light is already on' . PHP_EOL;
  }
  public function turnLightOff()
  {
    echo 'Lights off!' . PHP_EOL;
    $this->context->setState($this->context->getOffState());
  }
}
