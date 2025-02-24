<?php
// Pass by value
function addFive($num) {
    $num += 5;
    return $num;
}

$originalValue = 10;
$newValue = addFive($originalValue);

echo "Original Value: $originalValue\n"; // Output: Original Value: 10
echo "New Value: $newValue\n";           // Output: New Value: 15

// Pass by reference
function addTen(&$num) {
    $num += 10;
}

$originalValue = 10;
addTen($originalValue);

echo "Original Value after pass by reference: $originalValue\n"; // Output: Original Value after pass by reference: 20
?>


