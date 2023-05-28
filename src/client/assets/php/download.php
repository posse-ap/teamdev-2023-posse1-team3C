<?php

include_once('../../../dbconnect.php');
$company_id = $_POST['company_id'];
$stmt = $dbh->prepare("SELECT stu.id ,name,stu.furigana,stu.sex,stu.university,stu.faculty,stu.department,stu.graduated_year,stu.prefecture,stu.phoneNumber,stu.email, stu.registered_at ,sta.status FROM `CompaniesStudentsLink` as link
join Students as stu on link.Student_id = stu.id 
join Statuses as sta on sta.id = link.status_id
where link.company_id = :id and NOT sta.status = '無効'");
$stmt->bindValue(':id', $company_id);
$stmt->execute();

// CSVファイルを生成するためのヘッダーを設定する
header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename="data.csv"');

// CSVファイルのヘッダー行を書き込む
$fp = fopen('php://output', 'w');
$ww = array('id','登録学生氏名', 'ふりがな', '性別','大学','学部','学科','卒業年度','都道府県','電話番号','メールアドレス','登録日','ステータス');
$row2 = array_map('convertToShiftJIS', $ww);
fputcsv($fp,$row2);

// クエリの結果を1行ずつCSVファイルに書き込む
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
  // 文字列をUTF-8からShift-JISに変換
  $row = array_map('convertToShiftJIS', $row);
  fputcsv($fp, $row);
}

// ファイルポインタを閉じる
fclose($fp);

// UTF-8からShift-JISに変換する関数
function convertToShiftJIS($str) {
  return mb_convert_encoding($str, 'Shift-JIS', 'UTF-8');
}
