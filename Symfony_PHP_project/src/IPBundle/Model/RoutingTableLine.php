<?php 

namespace IPBundle\Model;

class RoutingTableLine {

	/**
	 * @var IPAdress
	 */
	private $ip;

	/**
	 * @var IPAdress
	 */
	private $gateway; 

	/**
	 * @var Mask
	 */
	private $mask;

	/**
	 * @var string
	 */
	private $flag;

	/**
	 * @var string
	 */
	private $interface;

	/**
	 * Constructor
	 * @param IPAdress $ip        
	 * @param IPAdress $gateway   
	 * @param Mask $mask      
	 * @param string $flag      
	 * @param string $interface 
	 */
	public function init($ip,$gateway,$mask,$flag,$interface) {

		$this->ip = $ip;
		$this->gateway = $gateway; 
		$this->mask = $mask;
		$this->flag = $flag;
		$this->interface = $interface;

	}

	/**
	 * Set the Ip
	 * @param IPAdress $ip 
	 * @return RoutingTable
	 */
	public function setIp($ip) {
		$this->ip = $ip;

		return $this;
	}

	/**
	 * Set the gateway
	 * @param IPAdress $gateway
	 * @return RoutingTable
	 */
	public function setGateway($gateway) {
		$this->gateway = $gateway;

		return $this;
	}

	/**
	 * Set the mask
	 * @param Mask $mask
	 * @return RoutingTable
	 */
	public function setMask($mask) {
		$this->mask = $mask;

		return $this;
	}

	/**
	 * Set the flag
	 * @param string $flag
	 * @return RoutingTable
	 */
	public function setFlag($flag) {
		$this->flag = $flag;

		return $this;
	}

	/**
	 * Set the interface
	 * @param string $înterface
	 * @return RoutingTable
	 */
	public function setInterface($interface) {
		$this->interface = $interface;

		return $this;
	}

	/**
	 * Get the Ip
	 * @return IPAdress 
	 */
	public function getIp() {

		return $this->ip;
	}

	/**
	 * Get the gateway
	 * @return IPAdress 
	 */
	public function getGateway() {

		return $this->gateway;
	}

	/**
	 * Get the mask
	 * @return Mask 
	 */
	public function getMask() {

		return $this->mask;
	}

	/**
	 * Get the flag
	 * @return string
	 */
	public function getFlag() {

		return $this->flag;
	}

	/**
	 * Get the interface
	 * @return string
	 */
	public function getInterface() {

		return $this->interface;
	}

}