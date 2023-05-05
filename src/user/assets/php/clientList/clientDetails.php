<?php
// 企業詳細情報をクエリーパラメーターのidを使って取得
$company_id = $_GET['id'];
$sql_details = "SELECT * FROM CompaniesDetails join Companies on CompaniesDetails.detail_id = Companies.id WHERE detail_id = :company_id";
$stmt = $dbh->prepare($sql_details);
$stmt->execute([
  ':company_id' => $company_id
]);
$company_details = $stmt->fetch(PDO::FETCH_ASSOC);

// 対応エリアをAreasCompaniesLinkテーブルから取得
$sql_areas = "SELECT company_id, area FROM AreasCompaniesLink join Areas on area_id = Areas.id WHERE company_id = :company_id";
$stmt = $dbh->prepare($sql_areas);
$stmt->execute([
  ':company_id' => $company_id
]);
$areas = $stmt->fetchAll(PDO::FETCH_ASSOC);

// サクセスストーリーをStoriesテーブルから取得
$sql_stories = "SELECT * FROM Stories WHERE company_id = :company_id";
$stmt = $dbh->prepare($sql_stories);
$stmt->execute([
  ':company_id' => $company_id
]);
$stories = $stmt->fetch(PDO::FETCH_ASSOC);

// 星評価をRatingsテーブルから取得
$sql_ratings = "SELECT * FROM Ratings WHERE rating_id = :company_id";
$stmt = $dbh->prepare($sql_ratings);
$stmt->execute([
  ':company_id' => $company_id
]);
$ratings = $stmt->fetch(PDO::FETCH_ASSOC);

