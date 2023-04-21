<?php
// まだ掲載期間が終わってない企業を取得
$sql_companiesUnfinish = "
select id, Company, finished_at from Companies 
where finished_at >= now()
";
$companiesUnfinish = $dbh->query($sql_companiesUnfinish)->fetchAll(PDO::FETCH_ASSOC);

// 掲載期間が終わった企業を取得
$sql_companiesFinish = "
select id, Company, finished_at from Companies 
where finished_at < now()
";
$companiesFinish = $dbh->query($sql_companiesFinish)->fetchAll(PDO::FETCH_ASSOC);