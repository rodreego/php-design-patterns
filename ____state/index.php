<?php

function __autoload($className)
{
  include sprintf('%s.php', $className);
}

$worker = new Client();
