<?php
$dsn = 'mysql:dbname=TEAMDEV;host=db';
$user = 'root';
$password = 'root';
$dbh = new PDO($dsn, $user, $password);
// まだ掲載期間が終わってない企業を取得
$sql_companiesUnfinish = "
select id, Company, finished_at, started_at from Companies 
where finished_at >= now()
order by finished_at desc
";
$companiesUnfinish = $dbh->query($sql_companiesUnfinish)->fetchAll(PDO::FETCH_ASSOC);

// 掲載期間が終わった企業を取得
$sql_companiesFinish = "
select id, Company, finished_at, started_at from Companies 
where finished_at < now() or finished_at is null
order by finished_at desc
";
$companiesFinish = $dbh->query($sql_companiesFinish)->fetchAll(PDO::FETCH_ASSOC);



