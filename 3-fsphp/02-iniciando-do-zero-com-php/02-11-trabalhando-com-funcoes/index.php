<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

require __DIR__."/functions.php";

var_dump(functionName("Pearl Jam", "AC/DC", "Alter Bridge"));
echo "<br />";
echo "<br />";

var_dump(functionName("Robson", "Kaue", "Gustavo"));
echo "<br />";
echo "<br />";

var_dump(optionArgs("Robson"));
echo "<br />";
var_dump(optionArgs("Robson", "Kaue"));
echo "<br />";
var_dump(optionArgs("Robson", "Kaue", "Gustavo"));
echo "<br />";

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

$weight = 79;
$height = 1.67;
echo calcImc();


/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

$pay = payTotal(200);
$pay = payTotal(300);
$pay = payTotal(800);

echo $pay;


/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Kaue", "Gustavo", "Gah", "João"));
