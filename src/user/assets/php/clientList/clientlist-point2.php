<!-- 消さないで！！ -->
<?php
include_once('../../../../dbconnect.php');
$sql_points = $dbh->prepare("SELECT * FROM `GoodPoints` WHERE company_id = :company_id");
$sql_points->bindValue(':company_id', $company_id);
$sql_points->execute();
$points_data = $sql_points->fetchAll(PDO::FETCH_ASSOC);

?>