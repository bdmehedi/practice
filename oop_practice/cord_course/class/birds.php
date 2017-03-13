<?php

class birds{
	
	public $canFly;
	
	public $legCount;

	public $layEggs;
	
	public function __construct($canFly, $legCount){
		
		$this->canFly = $canFly;
		$this->legCount = $legCount;	
	}
	
	
	public function canFly() {
		
		return $this->canFly;	
	}
	
	public function legCount() {
		
		return $this->legCount;	
	}
}