<?php
// $valid_password = "Amirhossein";
// $valid_phone = "914-811-8408";

$array = [
    ["Amirhossein" , "914-811-8408"],
    ["morteza" , "914-576-6734"],
    ["alireza" , "914-297-6487"],
    ["mohammad" , "914-878-4566"],
    ["erfan678" , "914-746-8768"],
    ["amirali67" , "914-765-6745"]
];
$phone = $_POST['phone'];
$password = $_POST['password'];
foreach ($array as list($a, $b)) {
    $valid_password = $a;
    $valid_phone = $b;
    if ($password === $valid_password && $phone === $valid_phone) {
        echo "welcome ";
        break;
    } 
    else {
        continue;
    }
}
if ($password !== $valid_password && $phone !== $valid_phone) {
    echo "invalid password or phone number";
}
?>