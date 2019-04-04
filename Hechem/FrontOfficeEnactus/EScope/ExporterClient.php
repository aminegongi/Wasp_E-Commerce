<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'gestionprofil';
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
$sql = "SELECT * FROM gestionprofil";
$statement = $pdo->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
$columnNames = array();
if(!empty($rows)){
    $firstRow = $rows[0];
    foreach($firstRow as $colName => $val){
        $columnNames[] = $colName;
    }
}
$fileName = 'db_export_'.'gestionprofil_'.date('Y-m-d').'.xls';

header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="' . $fileName . '"');
$fp = fopen('php://output', 'w');
fputcsv($fp, $columnNames);
foreach ($rows as $row) {
    fputcsv($fp, $row);
}
fclose($fp);
?>