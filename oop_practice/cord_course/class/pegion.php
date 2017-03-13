<?php 

class pegion extends birds{

	public function layEggs($layEggs){

		$this->layEggs = $layEggs;

		echo "<br> {$this->layEggs}";
	}
}