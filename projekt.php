<?php

// My very basic UDF
function rechnen($zahl1, $zahl2, $operator) {
    if ($operator == "+") {
        return $zahl1 + $zahl2;
    } elseif ($operator == "-") {
        return $zahl1 - $zahl2;
    } elseif ($operator == "*") {
        return $zahl1 * $zahl2;
    } elseif ($operator == "/") {
            return $zahl1 / $zahl2;
}
}

// Getting Data
print "Das ist ein einfacher Taschenrechner mit folgenden Funktionen: +, -, *, /
";

$zahl1 = readline("Erste Zahl eingeben:");

$operator = readline("Operator eingeben (+, -, *, /): ");

$zahl2 = readline("Zweite Zahl eingeben:");

// Only 1 loop
for ($i = 0; $i < 1; $i++) {
    $ergebnis = rechnen($zahl1, $zahl2, $operator); // Defining a new variable, so its easier later to print.
}

// Print Result
if (is_numeric($zahl1) && is_numeric($zahl2)) { // Checking if both inputs are numbers and not strings or something else
    print "Ergebnis: $ergebnis
    ";                                  // because of the apperance i added a line break
} else {
    print "Error: Du darfst nur Zahlen eingeben
    ";                                  // because of the apperance i added a line break
}

file_put_contents("dokumentation.txt", "$zahl1, $operator, $zahl2 = $ergebnis"); // for documentation

?>
