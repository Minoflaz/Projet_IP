<?php 

namespace IPBundle\Model;

class RoutingTable {

	/**
	 * Array containing the lines of the routing table
	 * @var Array
	 */
	private $lines;


	public function __construct() {

		$lines = [];
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

		$this->lines[] = $routingTableLine;

		return $this;
	}

	/**
	 * Remove the last line of the routing table
	 * @return RoutingTable 
	 */
	public function removeLastLine() {

		$this->lines[count($this->lines)-1] = null;

		return $this;
	}

	/**
	 * Compare two routing tables
	 * @param  RoutingTable  $routingTable 
	 * @return boolean               
	 */
	public function isSame($routingTable) {

		$bool = true;

		if(count($this->lines)>0) {
			
			if(count($this->lines) == count($routingTable->getLines())) {
				
				for($i=0;$i < count($this->lines) && $bool!=false;$i++) {

					$bool = $bool && $this->lines[$i]->getIp()->isSame($routingTable->getLines()[$i]->getIp())
								  && $this->lines[$i]->getGateway()->isSame($routingTable->getLines()[$i]->getGateway())
								  && $this->lines[$i]->getMask()->isSame($routingTable->getLines()[$i]->getMask())
								  && strcmp($this->lines[$i]->getFlag(),$routingTable->getLines()[$i]->getFlag()) == 0
								  && strcmp($this->lines[$i]->getInterface(),$routingTable->getLines()[$i]->getInterface()) == 0;

				}

				return $bool;
			}
		}	

		return false;

	}

	/**
	 * ToString function returning a representation of the routing table
	 * @return string
	 */
	public function toString() {

		$str = "Routing Table : <br />".
						"IP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| "."Gateway&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| "."Mask&nbsp;| "."Flag | "."Interface<br />";

		if(count($this->lines)>0) {

			for($i=0;$i < count($this->lines) ;$i++) {

				$str = $str.
						$this->lines[$i]->getIp()->getBytes()." | ".
						$this->lines[$i]->getGateway()->getBytes()." | ".
						$this->lines[$i]->getMask()->getBytes()." | ".
						$this->lines[$i]->getFlag()." | ".
						$this->lines[$i]->getInterface()."<br />";
			}	
		}

		return $str;
	}	
}