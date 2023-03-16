<?php

require __DIR__ .'/../../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

if (isset($_FILES['excel']['tmp_name'])) {
    // Lê o arquivo Excel e carrega o conteúdo em uma planilha
    $inputFileName = $_FILES['excel']['tmp_name'];
    $spreadsheet = IOFactory::load($inputFileName);

    // Converte a planilha para CSV
    $writer = IOFactory::createWriter($spreadsheet, 'Csv');
    
    // Obter nome do arquivo sem extensão
    $originalName = pathinfo(basename($_FILES['excel']['name']), PATHINFO_FILENAME);

    $csvFileName = $originalName . '_' . time() . '.csv'; // adiciona o timestamp ao final do nome do arquivo
    $writer->save($csvFileName);

    // Remove a primeira linha do arquivo CSV
    $csvContent = file_get_contents($csvFileName);
    $csvLines = explode(PHP_EOL, $csvContent);
    unset($csvLines[0]);
    $csvContent = implode(PHP_EOL, $csvLines);
    file_put_contents($csvFileName, $csvContent);

    // Faz o download do arquivo CSV sem a primeira linha
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="' . basename($csvFileName) . '"');
    header('Content-Length: ' . filesize($csvFileName));
    readfile($csvFileName);

    // Remove o arquivo CSV
    unlink($csvFileName);

}
