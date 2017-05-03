<?php
namespace Patterns\Structural\Adapter;

class DocumentManager
{
	public function persist(array $document) 
	{
		print_r($document);
	}
}
