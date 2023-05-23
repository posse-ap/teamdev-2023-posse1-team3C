<?php
if (isset($_POST["submitButton"])) {
  include("../dbconnect.php");
  // 企業IDの配列を取得
  $company_ids = $_POST['company_id'];
  // Companiesテーブルから企業情報を取得
  $sql_get_companies = "SELECT id, service FROM Companies WHERE id = :company_id";
  $get_companies = $dbh->prepare($sql_get_companies);
  $get_companies_all = [];
  foreach ($company_ids as $company_id) {
    $get_companies->execute([
      ":company_id" => $company_id
    ]);
    $result = $get_companies->fetch(PDO::FETCH_ASSOC);
    $get_companies_all[] = $result;
  };

  $data = '';
  foreach ($get_companies_all as $get_companies) {
    $data .= '
    <div class="block p-2 mb-1 text-sm text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400" role="alert"><input type="hidden" value=' . $get_companies["id"] . ' name="company_id[]"> ' . $get_companies["service"] . '
  </div>
  ';
  }
  echo $data;
}
