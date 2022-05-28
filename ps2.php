<?php

// Let's imagine your program is working inside ATM (cash machine), and it has access to endless amount
// of coins or banknotes.
// somehow user informs the program, how much money she wants to get out of machine.
// Your task is to develop the algorithm, which should calculate, how many banknotes or coins should be
// used to deliver required amount, minimizing the count of coins/banknotes

// use the next denomination values:
// coins: 0.01$, 0.05$, 0.10$, 0.25$, 0.50$
// banknotes: 1$, 2$, 5$, 10$, 25$, 50$, 100$

// example: user wants 230.57$
// program output:
// - 2 x 100$
// - 1 x 25$
// - 1 x 5$
// - 1 x 0.50$
// - 1 x 0.05$
// - 2 x 0.01$

// you should not code user input, it would be enough to have required value as constant.


$notes = [1,2,5,10,25,50,100];
$coins = [0.1,0.20,0.05, 0.25, 0.50];

$originalInput = $userInput = 233.33;
$wholPart = floor($userInput);      // 233
$fractionPart = round($userInput - $wholPart,2); // .33

rsort($notes);
rsort($coins);

$banknotes = [];
$coinsArr = [];


foreach ($notes as $note) {

	if ($note > $userInput) {
		continue;
	}

	$requiredNotes = intdiv($userInput, $note);

	$banknotes[$note] = $requiredNotes;

	$userInput = round(fmod($userInput, $note),2);
}

echo "<b>User Input $originalInput </b><br>";

	
echo "Required Notes<br>";

foreach ($banknotes as $note => $val) {
	echo   ' - '. $val . ' x ' . $note .'$<br>'; 
}

foreach ($coins as $coin) {

	if ($coin > $fractionPart) {
		continue;
	}

	try{

		$requiredNotes = floor((fdiv($fractionPart, $coin)));
		$fractionPart = fmod($fractionPart, $coin);
		echo   ' - '. $requiredNotes . ' x ' . $coin .'$<br>'; 

	}catch(DivisionByZeroError $e){
		echo   ' -  Error '. $fractionPart*100 . ' x  0.1 $<br>'; 
		die;
	}

}

echo   ' - '. round($fractionPart,2) *100 . ' x  0.1 $<br>'; 




