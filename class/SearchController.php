<?php
header('Content-Type: application/json');
include_once 'SearchModel.php';
$searchModel = new SearchModel();

$grade = $_POST['grade'];
$matter = $_POST['matter'];
$keyword = $_POST['keyword'];
$level = $_POST['level'];

$arrayObject = $searchModel->findLerningObject($grade,$matter,$keyword,$level);

$arrayData = array();
$i = 0;

while ($rw = mysqli_fetch_array($arrayObject)) {
    $arrayData[$i]['code_lo'] = trim($rw['code_lo']);
    $arrayData[$i]['name_lo'] = utf8_encode(trim($rw['name_lo']));
    $arrayData[$i]['grade'] = utf8_encode(trim($rw['grade']));
    $arrayData[$i]['matter'] = utf8_encode(trim($rw['matter']));
    $i++;
}

echo json_encode($arrayData);



