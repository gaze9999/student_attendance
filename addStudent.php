<?php
require_once('./db.inc.php');

$sql = "INSERT INTO `students` (`name`)
             VALUES (?) ";
$stmt = $pdo->prepare($sql);
$arrParam = [$_POST['name']];
$stmt->execute($arrParam);

if($stmt->rowCount() > 0) {
    $objResponse['success'] = true;
    $objResponse['code'] = 200;
    $objResponse['info'] = "成功加入";
    echo json_encode($objResponse, JSON_UNESCAPED_UNICODE);
    exit();
} else {
    $objResponse['success'] = false;
    $objResponse['code'] = 400;
    $objResponse['info'] = "失敗";
    echo json_encode($objResponse, JSON_UNESCAPED_UNICODE);
    exit();
}
?>
