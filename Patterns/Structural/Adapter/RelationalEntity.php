<?php
namespace Patterns\Structural\Adapter;

class RelationalEntity extends AbstractEntity implements RelationalInterface
{
	public function toRecord() 
	{
		return null;
	}
}
