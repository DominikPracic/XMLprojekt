<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $xml = simplexml_load_file('tablica.xml');


    $newG = $xml->addChild('G');
    $newG->addAttribute('id', count($xml->G) + 1);
    $newG->addChild('Godina', $_POST['godina']);
    $newG->addChild('Domaćin', $_POST['domacin']);
    $newG->addChild('Zlato', $_POST['zlato']);
    $newG->addChild('Srebro', $_POST['srebro']);
    $newG->addChild('Bronca', $_POST['bronca']);

    $xml->asXML('tablica.xml');

    header('Location: index.php');
    exit;
}
?>
