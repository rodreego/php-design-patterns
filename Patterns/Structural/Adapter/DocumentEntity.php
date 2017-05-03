<?php
namespace Patterns\Structural\Adapter;

use Patterns\Structural\Adapter\DocumentInterface;

class DocumentEntity extends AbstractEntity implements DocumentInterface
{
	public function toDocument() 
	{
		return ['zimbado' => 'zimbadinho d+'];
	}
}
