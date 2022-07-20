<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.08 - Gestão de diretórios");

/*
 * [ verificar, criar e abrir ] file_exists | is_dir | mkdir  | scandir
 */
fullStackPHPClassSession("verificar, criar e abrir", __LINE__);

$folder = __DIR__ . "/uploads";

if(!file_exists($folder) || !is_dir($folder)){
    mkdir($folder, 0755);
} else {
    var_dump(scandir($folder));
}


/*
 * [ copiar e renomear ] copy | rename
 */
fullStackPHPClassSession("copiar e renomear", __LINE__);

$folder2 = __DIR__ . "/tmp";

if(!file_exists($folder2) || !is_dir($folder2)) {
    mkdir($folder2, 0755);
} else {
    var_dump(scandir($folder2));
}
echo "<br/><br/>";
$file = __DIR__ . "/file.txt";
var_dump(pathinfo($file));
echo "<br/><br/>";
var_dump(scandir($folder));
echo "<br/><br/>";
var_dump(scandir(__DIR__));
echo "<br/><br/>";
if(!file_exists($file) || !is_file($file)) {
    fopen($file, "w");
} else {
    //var_dump(filemtime($file). "<br/>". filemtime(__DIR__ . "/uploads/file.txt"));

    //copy($file, $folder. "/". basename($file));
    //rename(__DIR__."/uploads/file.txt", __DIR__."/uploads/".time() . "." . pathinfo($file)["extension"]);
    rename($file, __DIR__ . "/uploads/".time() . "." . pathinfo($file)["extension"]);
}

/*
 * [ remover e deletar ] unlink | rmdir
 */
fullStackPHPClassSession("remover e deletar", __LINE__);

//rmdir(__DIR__."/remove");
if(file_exists(__DIR__ . "/remove/") || is_dir(__DIR__ . "/remove/")) {
    $dirRemove = __DIR__ . "/remove";
    $dirFiles = array_diff(scandir($dirRemove), ['.', '..']);
    $dirCount = count($dirFiles);
    var_dump($dirFiles);
    echo "<br/><br/>";
    var_dump($dirCount);

    if ($dirCount >= 1) {
        echo "<h2>Clear...</h2>";
        foreach (scandir($dirRemove) as $fileItem) {
            $fileItem = __DIR__ . "/remove/{$fileItem}";
            if (file_exists($fileItem) && is_file($fileItem)) {
                unlink($fileItem);
            }
        }
    } else {
        if (!file_exists(__DIR__ . "/remove/") || !is_dir(__DIR__ . "/remove/")) {
            echo "<span class='tag'>Diretório não existe!</span>";
        } else {
            rmdir($dirRemove);
        }
    }
}else {
    echo "<span class='tag'>Diretório não existe!</span>";
}