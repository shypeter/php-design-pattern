<?php
interface UsbMouse{
	public function usb_click();
	public function usb_move();
	public function usb_connect();
}
class SimpleUsbMouse implements UsbMouse{
	public function usb_click(){
		echo "USB click\n";
	}
	public function usb_move(){
		echo "USB move\n";
	}
	public function usb_connect(){
		echo "USB connect\n";
	}
}

interface Ps2Mouse{
	public function ps2_click();
	public function ps2_move();
	public function ps2_connect();
}
class SimplePs2Mouse implements Ps2Mouse{
	public function ps2_click(){
		echo "PS/2 click\n";
	}
	public function ps2_move(){
		echo "PS/2 move\n";
	}
	public function ps2_connect(){
		echo "PS/2 connect\n";
	}
}

class Ps2UsbAdapter implements UsbMouse{
	private $ps2Mouse;

	public function __construct(Ps2Mouse $ps2Mouse){
		$this->ps2Mouse = $ps2Mouse;
	}
	public function usb_click(){
		$this->ps2Mouse->ps2_click();
	}
	public function usb_move(){
		$this->ps2Mouse->ps2_move();
	}
	public function usb_connect(){
		$this->ps2Mouse->ps2_connect();
	}
}

$ps2Mouse = new SimplePs2Mouse();
$ps2Adapter = new Ps2UsbAdapter($ps2Mouse);
$ps2Adapter->usb_click();
$ps2Adapter->usb_move();
$ps2Adapter->usb_connect();
