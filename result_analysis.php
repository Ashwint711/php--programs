<?php
require_once 'PHPExcel/IOFactory.php';

$fileName = 'example.xlsx';
$objPHPExcel = PHPExcel_IOFactory::load($fileName);
$worksheet = $objPHPExcel->getActiveSheet();

foreach ($worksheet->getRowIterator() as $row) {
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);
    foreach ($cellIterator as $cell) {
        echo $cell->getValue() . "\n";
    }
}

?>
