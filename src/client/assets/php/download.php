<?php

include_once('../../../dbconnect.php');

$stmt = $dbh->prepare("SELECT * from Students as stu inner join Statuses as sta ON stu.id = sta.id where NOT sta.status = '無効'");
$stmt->execute();

// CSVファイルを生成するためのヘッダーを設定する
header('Content-Type: text/csv; charset=UTF-8');
header('Content-Disposition: attachment; filename="data.csv"');

// CSVファイルのヘッダー行を書き込む
$fp = fopen('php://output', 'w');
$ww = array('id','登録学生氏名', 'ふりがな', '性別','卒業年度','大学','学部','学科','都道府県','電話番号','メールアドレス','登録日','ステータス');
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

?>
