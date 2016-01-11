<?php

namespace IPBundle\Model;

class Mask extends Adress
{
	/**
	 * Initialisator
	 * @param string $mask 
	 */
	public function initString($mask) {

		$this->setBytes($mask);
	}
}