<?php 

namespace IPBundle\Model;

class RoutingTable {

	/**
	 * Array containing the lines of the routing table
	 * @var Array
	 */
	private $lines;


	public function __construct() {

		$lines = array();
	}

	public function getLines() {

		return $this->lines;
	}

	/**
	 * Add a specifed line to the routing table
	 * @param RoutingTableLine $routingTableLine 
	 * @return  RoutingTable
	 */
	public function addLine($routingTableLine) {

		$this->lines = $routingTableLine;

		return $this;
	}

	/**
	 * Remove the last line of the routing table
	 * @return RoutingTable 
	 */
	public function removeLastLine() {

		$this->lines[$this->lines->count()-1] = null;

		return $this;
	}

	/**
	 * Compare two routing tables
	 * @param  RoutingTable  $routingTable 
	 * @return boolean               
	 */
	public function isSame($routingTable) {

		$bool = true;

		if($this->lines->count() == $routingTable->getLines()->count()) {
			
			for($i=0;$this->lines->count() && $bool!=false;$i++) {

				$bool = $bool && $this->lines[$i]->getIp()->isSame($routingTable->getLines()[$i]->getIp())
							  && $this->lines[$i]->getGateway()->isSame($routingTable->getLines()[$i]->getGateway())
							  && $this->lines[$i]->getMask()->isSame($routingTable->getLines()[$i]->getMask())
							  && (strcmp($this->lines[$i]->getFlag(),$routingTable->getLines()[$i]->getFlag())) == 0
							  && (strcmp($this->lines[$i]->getInterface(),$routingTable->getLines()[$i]->getInterface())) == 0;

			}

			return true;
		}

		return false;

	}
}