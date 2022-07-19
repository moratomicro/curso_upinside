<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

var_dump([
    date_default_timezone_get()
]);
echo "<br>";
var_dump([
    date(DATE_W3C),
]);
echo "<br>";
var_dump([
    date("d/m/Y H:i:s"),
]);
echo "<br>";

define("DATE_BR", "d/m/Y H:i:s");
//define("DATE_TIMEZONE", "Pacific/Apia");
define("DATE_TIMEZONE", "America/Sao_Paulo");

date_default_timezone_set(DATE_TIMEZONE);

var_dump([
    date_default_timezone_get()
]);
echo "<br>";

var_dump([
    date(DATE_BR)
]);
echo "<br>";echo "<br>";

var_dump(getdate());

echo "<p>Hoje é dia ", getdate()["mday"], "!</p>";


/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

var_dump([
    "strtotime NOW" => strtotime("now")
]);
echo "<br>";

var_dump([
    "time" => time()
]);
echo "<br>";

var_dump([
    "strtotime +10d" => strtotime("+10days")
]);
echo "<br>";

var_dump([
    "date DATE_BR" => date(DATE_BR)
]);
echo "<br>";

var_dump([
    "date +10days" => date(DATE_BR, strtotime("+10days"))
]);
echo "<br>";

var_dump([
    "date -10days" => date(DATE_BR, strtotime("-10days"))
]);
echo "<br>";

var_dump([
    "date +1years" => date(DATE_BR, strtotime("+1years"))
]);
echo "<br>";
echo "<br>";

$format = "%d/%m/%Y %Hh%M minutos";
echo "<p>A data de hoje é ", strftime($format),"</p>"; // função strftime está obsoleta, usar a função date() no lugar.
echo strftime("<p>Hoje é dia %d do %m de %Y às %H horas e %M minutos.</p>"); // função strftime está obsoleta, usar a função date() no lugar.
