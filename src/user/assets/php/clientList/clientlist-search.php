<?php
include_once('../../../../dbconnect.php');
$tags = $_POST['tag'];
print_r($tags);


$tagArrays = array_filter(explode(',', $tags));
print_r($tagArrays);
$string = 'where 1=1';
global $string;
$flag = true;
foreach ($tagArrays as $key => $value) {
  if ($flag) {
    $string .= ' and ' . 'tag_id =' . $value;
    $flag = false;
  }
  $string .= ' or ' . 'tag_id =' . $value;
}
var_dump($string);


// 企業一覧に必要なデータをCompaniesTagsLinksから取得
$sql_companies = "SELECT c.id, c.company, c.URL, cd.photo, ra.people,ra.support,ra.achievement,ra.speed,ra.amount ,t.id as tag_id FROM `CompaniesTagsLink` as ctl left outer JOIN CompaniesDetails as cd ON cd.detail_id = ctl.company_id  LEFT OUTER JOIN `Ratings` as ra ON ra.Rating_id = ctl.company_id LEFT OUTER JOIN  `Companies` as c ON ctl.company_id = c.id LEFT OUTER JOIN `Tags` as t ON t.id = ctl.tag_id $string GROUP BY c.id
  HAVING COUNT(*) >= " . count($tagArrays) . "";
$stmt = $dbh->prepare($sql_companies);
$stmt->execute();
$companies = $stmt->fetchALl(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($companies);
// echo "</pre>";

// 推しポイントを取得
$sql_goodPoints = "SELECT * from `GoodPoints`";
$stmt = $dbh->prepare($sql_goodPoints);
$stmt->execute();
$goodPoints = $stmt->fetchAll(PDO::FETCH_ASSOC);
// 推しポイントを企業ごとに分ける
foreach ($goodPoints as $key => $goodPoint) {
  $index = array_search($goodPoint["company_id"], array_column($companies, 'id'));
  print_r($index);
  $companies[$index]["GoodPointLink"][] = $goodPoint;
}
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


foreach ($companies as $company) {
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
  for ($i = 0; $i < count($company["GoodPointLink"]); $i++) {
    $data .= '<li class="list-sub-point-item">' . $company["GoodPointLink"][$i]["GoodPoint"] . '</li>';
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
