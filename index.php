<?php
class Player
{
	public $name;
	public function __construct($name)
	{
		$this->name = $name;
	}

	class Hand 
	{
		public $card_one;
		public $card_two;
	}

	public $name;
	public $hand;
	public function __construct($name)
	{
		$this->name = $name;
		echo $name . "<br>";
	}

	public function draw()
	{
		$card1 = rand(1,11);
		$card2 = rand(1,11);
		$sum = $card1 + $card2;
		echo "This is card 1 " . $card1 ."<br>";
		echo "This is card 2 " . $card2 . "<br>";
		echo "This is sum " . $sum ."<br>";

 	}

	public function hit()
	{
		$card3 = rand(1,11);
		echo $card3 . "<br>";
	}

	public function talk($name)
	{
		echo $name . "<br>";
	}

}

$Deck = new Deck(52);
$Deck->displayInfo();

$James = new Player("James");
$Dealer = new Player("Dealer");

$James->draw();
$Dealer->draw();


?>