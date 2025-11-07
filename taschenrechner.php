<?php

// My very basic UDF
function rechnen($zahl1, $zahl2, $operator) {
    if ($operator == "+") return $zahl1 + $zahl2;
    elseif ($operator == "-") return $zahl1 - $zahl2;
    elseif ($operator == "*") return $zahl1 * $zahl2;
    elseif ($operator == "/") return $zahl1 / $zahl2;
}

// Welcome message
print "Das ist ein einfacher Taschenrechner mit folgenden Funktionen: +, -, *, /\n";

// Big-loop
while (true) {

    // Defining variables
    $zahl1 = readline("Erste Zahl eingeben: ");
    $operator = readline("Operator eingeben (+, -, *, /): ");
    $zahl2 = readline("Zweite Zahl eingeben: ");

    // Checking if the variables are really numbers
    if (!is_numeric($zahl1) || !is_numeric($zahl2)) {       // I have used this Website for it: https://www.php.net/manual/de/function.is-numeric.php
        print "Error: Du darfst nur Zahlen eingeben\n\n";
        continue;
     } else {
      // Back to the start
    }
// Division by zero check
if ($operator == "/" && $number2 == 0) {
    print "Error: Division durch Null ist nicht erlaubt! ";
}
else {
}

    // Calculation
    $ergebnis = rechnen($zahl1, $zahl2, $operator);


    // Printing result
    print "Ergebnis: $ergebnis\n";

    // Saving the calculation in to dokumentation.txt
    file_put_contents("dokumentation.txt", "$zahl1 $operator $zahl2 = $ergebnis\n" . "\n", FILE_APPEND);

    // Loop
   $start = readline("Wollen Sie weitermachen? (j/n): ");
   if ($start == "n") {
    exit;
   } else {
    // If wrong, then a new calculation is gonna beginn
  }

    print "Neue Rechnung\n";
}
?>
