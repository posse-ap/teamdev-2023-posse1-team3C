<?php
include_once('../../../../dbconnect.php');
$tags = $_POST['tag'];
print_r($tags);

print_r('aaa----------
');
$tagArrays = array_filter(explode(',', $tags));
var_dump($tagArrays);

$str = '[' . implode(',', $tagArrays) . ']';
var_dump($str);

$placeholders = implode(',', array_fill(0, count($tagArrays), '?'));
var_dump($placeholders);
// 企業一覧に必要なデータをCompaniesTagsLinksから取得
$sql_companies =  "SELECT c.id, c.company, c.URL, MAX(cd.photo) as photo, ra.people, ra.support, ra.achievement, ra.speed, ra.amount, t.id as tag_id
FROM `CompaniesTagsLink` as ctl
LEFT OUTER JOIN CompaniesDetails as cd ON cd.detail_id = ctl.company_id
LEFT OUTER JOIN `Ratings` as ra ON ra.Rating_id = ctl.company_id
LEFT OUTER JOIN `Companies` as c ON ctl.company_id = c.id
LEFT OUTER JOIN `Tags` as t ON t.id = ctl.tag_id
WHERE ctl.tag_id IN ($placeholders)
GROUP BY c.id, c.company, c.URL, ra.people, ra.support, ra.achievement, ra.speed, ra.amount, t.id
HAVING COUNT(DISTINCT ctl.tag_id) = " . count($tagArrays);
var_dump($sql_companies);

$stmt = $dbh->prepare($sql_companies);
$stmt->execute($tagArrays);
$companies = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($companies);
// echo "</pre>";


// echo "<pre>";
// print_r($goodPoints);
// echo "</pre>";

// $goodPointsDetails = $companies[0]['GoodPointLink'];
// echo "<pre>";
// print_r($goodPointsDetails);
// echo "</pre>";
// $firstCompanyId = $companies[0]['id'];


// echo "<pre>";
// print_r($goodPointsDetails);
// echo "</pre>";

// $filterCompanies = array_filter($companies[1]["GoodPointLink"], function ($company) {
//   return $company["GoodPointLink"][3]['company_id'] === 1;
// });

// echo "<pre>";
// print_r($filterCompanies);
// echo "</pre>";
$data = '';
$i = 0;

foreach ($companies as $company) {

  var_dump($i);
  $company_id = $company['id'];
  include('clientlist-point2.php');
  $data .= '<div class="clientlist">
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
var_dump($i+1);

}
echo $data;
