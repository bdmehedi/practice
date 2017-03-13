<?php 

class Door {

	protected $lock;

	protected $isClosed;

	public function __construct($lock){

		$this->lock = $lock;
	}



	public function close($lock){

		if ($lock === true) {

			$this->lock->lock();
		}

		$this->isClosed = true;

		echo "Closed";
	}



	public function isClosed(){

		return $this->isClosed;
	}


	public function open(){

		if ($this->lock->isLocked()) {
			
			$this->lock->unLock();
		}

		$this->isClosed = false;

		echo "Opened.";
	}



}