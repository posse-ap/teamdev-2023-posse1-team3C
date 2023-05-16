<?php
include_once('../../../../dbconnect.php');
$tags = $_POST['tag'];
$tagArrays = array_filter(explode(',', $tags));
$placeholders = implode(',', array_fill(0, count($tagArrays), '?'));
// var_dump($tagArrays);
// var_dump($placeholders);
// タグを一度押して、また外した時のバグ修正
$error = "";
if($placeholders == "") {
  $placeholders = "1 = 1";
  $error = '<div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
  <span class="font-medium ml-4">タグを選択してください</span> タグを選択しないと検索できません。
</div>';
}

$sql_companies = "
SELECT c.id, c.company, c.service, c.URL, cd.photo, ra.people, ra.support, ra.achievement, ra.speed, ra.amount
FROM `Companies` as c
LEFT OUTER JOIN `CompaniesDetails` as cd ON cd.detail_id = c.id
LEFT OUTER JOIN `CompaniesTagsLink` as ctl ON ctl.company_id = c.id
LEFT OUTER JOIN `Ratings` as ra ON ra.rating_id = c.id
WHERE ctl.tag_id IN ($placeholders)
GROUP BY c.id
HAVING COUNT(DISTINCT ctl.tag_id) = " . count($tagArrays);

$stmt = $dbh->prepare($sql_companies);
$cnt = count($tagArrays);
$i=1;

foreach ($tagArrays as $key => $tagId) {
  $stmt->bindValue($i, $tagId, PDO::PARAM_INT);
  $i++;
}
// var_dump($sql_companies);
$stmt->execute();
$companies = $stmt->fetchAll(PDO::FETCH_ASSOC);



$data = '';
$i = 0;
print_r($error);
foreach ($companies as $company) {
  $company_id = $company['id'];
  include('clientlist-point2.php');
  $data .=
  '<div class="clientlist">
    <h3 class="clientlist-name">' . $company['company'] . '</h3>
    <div class="clientlist-contents">
    <div class="clientlist-main">
    <div class="list-img" style="background-image: url(../user/assets/img/heroes/' . $company["company"] . '/ ' . $company["photo"] . ');">
    </div>
    <div class="list-star">
      <table class="list-star-table">
        <tr>
          <th>求人数</th>
          <td class="list-star-value" value="' . $company['people'] . '"></td>
        </tr>
        <tr>
          <th>サポート力</th>
          <td class="list-star-value" value="' . $company['support'] . '"></td>
        </tr>
        <tr>
          <th>内定獲得実績</th>
          <td class="list-star-value" value="' . $company['achievement'] . '"> </td>
        </tr>
        <tr>
          <th>内定速度</th>
          <td class="list-star-value" value="' . $company['speed'] . '"></td>
        </tr>
        <tr>
          <th>取り扱い業界</th>
          <td class="list-star-value" value="' . $company['amount'] . '"></td>
        </tr>
      </table>
    </div>
    </div>
    <!-- 推しポイントのデータ取得 -->
    <div class="clientlist-sub">
      <div class="list-sub-point">
        <h4 class="list-sub-point-title">ポイント</h4>
        <ul>
          <!-- それぞれ個数が違うためforeachで出力 -->';
          $sql_points = $dbh->prepare("SELECT * FROM `GoodPoints` WHERE company_id = :company_id");
          $sql_points->bindValue(':company_id', $company_id);
          $sql_points->execute();
          $points_data = $sql_points->fetchAll(PDO::FETCH_ASSOC);

      foreach ($points_data as $point){
        $data .= '<li class="list-sub-point-item">' . $point['GoodPoint'] . '</li>';

      }

  $data .= '</ul>
      </div>
      <div class="link-button">
        <!-- データベースのURLが正しくないから飛べないけど正しければ飛べるはず -->
        <a href="' . $company['URL'] . '">
          <div class="button official-link">
            <p class="button-p">公式サイト</p>
            <i class="fa-solid fa-arrow-up-right-from-square button-i"></i>
          </div>
        </a>
        <!-- 詳細に飛ぶ -->
        <a href="clientDetails.php?id= '.$company["id"].'">
          <div class="button detail-page">
            <p class="button-p">詳細ページ</p>
            <i class="fa-solid fa-caret-right button-i"></i>
          </div>
        </a>
      </div>
    </div>
</div>
</div>';

}
echo $data;