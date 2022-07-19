<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$arrProfile = [
    "name" => "Robson",
    "company" => "UpInside",
    "mail" => "curso@upinside.com.br"
];
$objProfile = (object)$arrProfile;
//var_dump($arrProfile, $objProfile);

echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

$ceo = $objProfile;
unset($ceo->company);
var_dump($ceo);
echo "<br /><br />";
$company = new StdClass();
$company->company = "UpInside";
$company->ceo = $ceo;
$company->manager = new StdClass();
$company->manager->name = "Kaue";
$company->manager->email = "curso@upinside.com.br";

var_dump($company);

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

$date = new DateTime();

var_dump([
    "class" => get_class($date),
]);

echo "<br />";

var_dump([
    "methods" => get_class_methods($date),
]);

echo "<br />";

var_dump([
    "vars" => get_object_vars($date),
]);

echo "<br />";

var_dump([
    "parent" => get_parent_class($date)
]);

echo "<br />";

var_dump([
    "subclass" => is_subclass_of($date, "DateTime")
]);
echo "<br />";
echo "<br />";

$exception = new PDOException();

var_dump([
    "class" => get_class($exception),
]);

echo "<br />";

var_dump([
    "methods" => get_class_methods($exception),
]);

echo "<br />";

var_dump([
    "vars" => get_object_vars($exception),
]);

echo "<br />";

var_dump([
    "parent" => get_parent_class($exception)
]);

echo "<br />";

var_dump([
    "subclass" => is_subclass_of($exception, "Exception")
]);