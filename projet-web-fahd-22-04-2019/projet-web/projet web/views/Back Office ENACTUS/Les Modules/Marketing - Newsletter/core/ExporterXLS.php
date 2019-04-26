<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'bweb';
$pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password);
$sql = "SELECT * FROM newsletter";
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
$fileName = 'db_export_'.'Newsletter_'.date('Y-m-d').'.csv';

header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="' . $fileName . '"');
$fp = fopen('php://output', 'w');
fputcsv($fp, $columnNames);
$nouvelleLigne=array("\n","\r\n","\r");
foreach ($rows as $row) {
    $row=str_replace($nouvelleLigne," ",$row);
    fputcsv($fp, $row);
}
fclose($fp);
?>