<?php
// 企業詳細情報をクエリーパラメーターのidを使って取得
$company_id = $_GET['id'];
$sql_details = "SELECT * FROM CompaniesDetails join Companies on CompaniesDetails.detail_id = Companies.id WHERE detail_id = :company_id";
$stmt = $dbh->prepare($sql_details);
$stmt->execute([
  ':company_id' => $company_id
]);
$company_details = $stmt->fetch(PDO::FETCH_ASSOC);



