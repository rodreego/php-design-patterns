<?php

class OffState implements IState
{
  private $context;

  public function __construct(Context $contextNow)
  {
    $this->context = $contextNow;
  }
  public function turnLightOff()
  {
    echo 'Light is already off <br />';
  }
  public function turnLightOn()
  {
    echo "Lights on! <br />";
    $this->context->setState($this->context->getOnState());
  }
}
