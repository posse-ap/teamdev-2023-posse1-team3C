<?php
  include_once('../../../../dbconnect.php');
  $tag = $_POST['tag'];

  var_dump($tag);
  $string = 'where 1=1';
// where句の中身を作るための関数
  global $string;
  $tags = (array) $tag;
  foreach ($tags as $tag) {
    $string .= ' and '.'tag_id ='.$tag;
  }
  var_dump($string);

// where_string($yourarea, 'a.area');
// var_dump($string);

  $sql_companies = "SELECT c.id,c.company,c.URL,cd.photo,ra.people,ra.support,ra.achievement,ra.speed,ra.amount FROM `Companies` as c 
  LEFT OUTER JOIN CompaniesDetails as cd ON cd.detail_id = c.id
  LEFT OUTER JOIN CompaniesGraduatedLink as cgl ON cgl.company_id = c.id
  LEFT OUTER JOIN AreasCompaniesLink as acl ON acl.company_id = c.id
  LEFT OUTER JOIN Areas as a ON a.id = acl.area_id
  LEFT OUTER JOIN Graduated_years as gy ON gy.id = cgl.graduated_id
  LEFT OUTER JOIN CompaniesTagsLink as ctl ON ctl.company_id = c.id
  LEFT OUTER JOIN Tags as t ON gy.id = ctl.tag_id
  LEFT OUTER JOIN `Ratings` as ra ON ra.Rating_id = c.id ".$string.";";

  $stmt = $dbh->prepare($sql_companies);
  $stmt->execute();
  $companies = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $data = '';

foreach ($companies as $company){
  $company_id = $company['id'];
  include('clientlist-point2.php');
  $data .= '<div class="clientlist">
    <h3 class="clientlist-name">'. $company['company'] .'</h3>
    <div class="clientlist-contents">
    <div class="clientlist-main">
    <div class="list-img" style="background-image: url(../user/assets/img/heroes/'. $company["company"].' $company["photo"]);">
    </div>
    <div class="list-star">
      <table class="list-star-table">
        <tr>
          <th>求人数</th>
          <td class="list-star-value" value="'.$company['people'].'></td>
        </tr>
        <tr>
          <th>サポート力</th>
          <td class="list-star-value" value="'.$company['support'].'"></td>
        </tr>
        <tr>
          <th>内定獲得実績</th>
          <td class="list-star-value" value="'.$company['achievement'].'"> </td>
        </tr>
        <tr>
          <th>内定速度</th>
          <td class="list-star-value" value="'.$company['speed'].'"></td>
        </tr>
        <tr>
          <th>取り扱い業界</th>
          <td class="list-star-value" value="'.$company['amount'].'"></td>
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
          
      foreach ($points_data as $goodpoint){ 
        $data .=  '<li>'. $goodpoint['GoodPoint'] .'</li>';
        };
           
        $data.='</ul>
      </div>
      <div class="link-button">
        <!-- データベースのURLが正しくないから飛べないけど正しければ飛べるはず -->
        <a href="'. $company['URL'].'">
          <div class="button official-link">
            <p class="button-p">公式サイト</p>
            <i class="fa-solid fa-arrow-up-right-from-square button-i"></i>
          </div>
        </a>
        <!-- 詳細に飛ぶ -->
        <a href="clientDetails.php?id=<?= $company_id ?>">
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



?>
