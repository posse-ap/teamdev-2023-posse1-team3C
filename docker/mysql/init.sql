
DROP DATABASE IF EXISTS TEAMDEV;

CREATE DATABASE TEAMDEV;

USE TEAMDEV;

DROP TABLE IF EXISTS AdminUsers;
CREATE TABLE AdminUsers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255),
  password VARCHAR(255)
) CHARSET=utf8;
insert into AdminUsers (email, password) 
values ("admin@example.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW");

DROP TABLE IF EXISTS ClientUsers;
CREATE TABLE ClientUsers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_id INT,
  email VARCHAR(255),
  password VARCHAR(255),
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT "発行日時",
  updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT "更新日時"
) CHARSET=utf8;
insert into ClientUsers (company_id, email, password) values (1, "client@example.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW");

DROP TABLE IF EXISTS Companies;
CREATE TABLE Companies (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company VARCHAR(255) COMMENT "企業名",
  service VARCHAR(255) COMMENT "サービス名",
  URL VARCHAR(255) COMMENT "サービスのURL",
  email VARCHAR(255) COMMENT "メールアドレス",
  postcode VARCHAR(255) COMMENT "郵便番号",
  address VARCHAR(255) COMMENT "住所",
  phoneNumber VARCHAR(255) COMMENT "電話番号",
  contactType VARCHAR(255) COMMENT "学生接触形態",
  Date VARCHAR(255) COMMENT "対応可能日時",
  started_at DATETIME COMMENT "開始日",
  finished_at DATETIME COMMENT "終了日",
  registered_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT "登録日",
  online VARCHAR(255) COMMENT "オンライン対応可"
) CHARSET=utf8;

insert into Companies (company, service, URL, email, postcode, address, phoneNumber, contactType, Date, started_at, finished_at, online) values 
("Test", "Testservice", "keio.jp", "client@example.com", "108-8345", "東京都港区三田２丁目１５−４５", "03-5427-1517", "オンライン", "平日 9-18時 土9-15時 日定休", "2023-05-01", "2023-06-30", "終日対応可"), 
("Test2", "Testservice", "keio.jp", "li12569@keio.jp", "108-8345", "東京都港区三田２丁目１５−４５", "03-5427-1517", "オンライン", "平日 9-18時 土9-15時 日定休", "2023-05-01", "2023-06-30", "終日対応可"),
("BTBK", "TOAサービス", "https://www.btbk.com", "info@btbk.com", "102-0076", "東京都千代田区五番町12-7　ドミール五番町　102", "02-3398-62917", "対面・オンライン", "年中無休", "2023/04/01", "2023-06-30", "終日対応可"), 
("SSS", "SSSService", "https://www.sss-service.jp", "sss@sssservice.jp", "011-333-9444", "北海道札幌市中央区3条西4-1-1　日本生命札幌ビル　5階", "011-333-9444", "オンライン", "平日土祝　9:00-19:30", "2023/02/01", "2023-03-30", "終日対応可");


DROP TABLE IF EXISTS CompaniesDetails;
CREATE TABLE CompaniesDetails (
  detail_id INT AUTO_INCREMENT PRIMARY KEY,
  photo VARCHAR(255) COMMENT "掲載写真",
  achievement VARCHAR(255) COMMENT "内定獲得実績",
  people VARCHAR(255) COMMENT "求人数",
  scale VARCHAR(255) COMMENT "対応企業の規模",
  search VARCHAR(255) COMMENT "業界研究",
  ES VARCHAR(255) COMMENT "ES添削",
  practice VARCHAR(255) COMMENT "面接練習",
  seminar VARCHAR(255) COMMENT "セミナー、説明会",
  community VARCHAR(255) COMMENT "就活コミュニティー",
  type VARCHAR(255) COMMENT "総合型/特化型",
  specialChoose VARCHAR(255) COMMENT "特別選考",
  supportType VARCHAR(255) COMMENT "サポート形態",
  Date VARCHAR(255) COMMENT "対応可能日時",
  formType VARCHAR(255) COMMENT "問い合わせ形態",
  description VARCHAR(5000) COMMENT "詳細説明",
  FOREIGN KEY (detail_id) REFERENCES Companies(id)
) CHARSET=utf8;

insert into CompaniesDetails (
  detail_id, photo, achievement, people, scale,search, ES, practice, seminar, community, type, specialChoose, supportType, Date, formtype, description
) values (
  1, "test", "総合商社", "約1000社", "ベンチャー多め", "就職活動を本格的に始める前に、アドバイザー相談を行うことができます", "あり", "あり", "あり", "なし", "特化型", "あり", "オンラインのみ", "平日 9-18時 土9-15時 日定休", "本登録の前に対面でお話しすることができます。", "てすと"
),(
  4, "IMG_6480.jpg", "建設、教育など多数", "38000", "中小企業多め", "なし", "あり", "あり", "なし", "あり", "総合型", "あり", "本登録の前にオンラインでお話しすることができます。", "平日土祝　9:00-19:30", "本登録の前に対面でお話しすることができます。", "オンラインで全国どこからでも応募可"
),(
  3, "IMG_6761.JPG", "総合商社、外資など多数", "210000", "中小から大企業まで", "あり", "あり", "あり", "あり", "なし", "総合型", "あり", "本登録の前にオンラインでお話しすることができます。", "平日土祝 9:00-19:30", "本登録の前に対面でお話しすることができます。", "業界No.1の求人数！"
);

DROP TABLE IF EXISTS GoodPoints;
CREATE TABLE GoodPoints (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_id INT,
  GoodPoint VARCHAR(255) COMMENT "推しポイント",
  FOREIGN KEY (company_id) REFERENCES Companies(id)
) CHARSET=utf8;

insert into GoodPoints (
  company_id, GoodPoint
) values 
(1, "豊富な求人数"),
(1, "土曜対応！"),
(2, "大企業多数"),
(2, "土日祝対応！"),
(3, "業界No.1の求人数！"),
(3, "土日祝対応！"),
(4, "オンラインで全国どこからでも応募可"),
(4, "土日祝対応！");

DROP TABLE IF EXISTS Areas;
CREATE TABLE Areas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  area VARCHAR(255) COMMENT "対応エリア"
); 

insert into Areas (area) values ("北海道"), ("東北"), ("関東"), ("中部"), ("近畿"), ("中国"), ("四国"), ("九州");

DROP TABLE IF EXISTS Graduated_years;

CREATE TABLE Graduated_years (
  id INT AUTO_INCREMENT PRIMARY KEY,
  Graduated_year VARCHAR(255) COMMENT "卒業年度"
);

insert into Graduated_years (Graduated_year) values ("24卒"), ("25卒"), ("26卒"), ("27卒");

DROP TABLE IF EXISTS AreasCompaniesLink;

CREATE TABLE AreasCompaniesLink (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_id INT,
  area_id INT COMMENT "対応エリアのid",
  FOREIGN KEY (area_id) REFERENCES Areas(id)
) CHARSET=utf8;

insert into AreasCompaniesLink (company_id, area_id) values (1,2), (1,3);

DROP TABLE IF EXISTS CompaniesGraduatedLink;

CREATE TABLE CompaniesGraduatedLink (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_id INT,
  graduated_id INT,
  FOREIGN KEY (graduated_id) REFERENCES Graduated_years(id)
) CHARSET=utf8;

insert into CompaniesGraduatedLink (company_id, graduated_id) values (1,1), (1,2);
DROP TABLE IF EXISTS Stories;

CREATE TABLE Stories (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_id INT,
  time VARCHAR(255) COMMENT "かかった時間",
  title VARCHAR(255) COMMENT "見出し",
  university VARCHAR(255) COMMENT "大学名",
  name VARCHAR(255) COMMENT "名前",
  story VARCHAR(255) COMMENT "ストーリー内容",
  photo VARCHAR(255) COMMENT "掲載写真",
  FOREIGN KEY (company_id) REFERENCES Companies(id)
) CHARSET=utf8;

insert into Stories (company_id, time, title, university, name, story, photo) values (1, "約２ヶ月", "最短合格！", "慶応大学", "岩城和輝", "test", "test");

DROP TABLE IF EXISTS Ratings;
CREATE TABLE Ratings (
  rating_id INT AUTO_INCREMENT PRIMARY KEY,
  people INT,
  support INT,
  achievement INT,
  speed INT,
  amount INT
);

insert into Ratings (people,support, achievement, speed, amount) values (3, 4, 2, 4, 5), (4,3,4,5,2), (5,4,3,4,3), (3,4,4,5,4);

DROP TABLE IF EXISTS Students;

CREATE TABLE Students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) COMMENT "名前",
  furigana VARCHAR(255) COMMENT "ふりがな",
  sex VARCHAR(255) COMMENT "性別",
  graduated_year VARCHAR(255) COMMENT "卒業年度",
  university VARCHAR(255) COMMENT "出身大学",
  faculty VARCHAR(255) COMMENT "学部",
  department VARCHAR(255) COMMENT "学科",
  prefecture VARCHAR(255) COMMENT "都道府県",
  phoneNumber VARCHAR(255) COMMENT "電話番号",
  email VARCHAR(255) COMMENT "メールアドレス",
  registered_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT "登録日"
) CHARSET=utf8;

insert into Students (
  name, furigana, sex, graduated_year, university, faculty, department, prefecture, phoneNumber, email, registered_at
) values ("岩城和輝", "いわぎかずき", "男", "26卒", "慶應", "経済", "経済", "東京都", "000-0009-000", "kazuki@gmail.com", "2023/04/03 2:33:33"),
("辻健世","つじけんせい","男","26卒","早稲田","商学","商学","商学","090-3242-5464","kensei0514@icloud.com","2023/02/02 1:39:44"),
("上野侑紗","うえのありさ","女","25卒","東京","理科三類","","東京","090-5521-0993","arisaueno@gmail.com","2022/11/28 3:43:11"),
("井上学","いのうえがく","男","24卒","西南学院","神学","神学","福岡","090-3424-0011","gakkun@icloud.com","2023/01/19 12:30:04"),
("森はるか","もりはるか","女","25卒","大妻女子","家政","ライフデザイン","東京","090-4248-4821","moriharumaru@icloud.com","2023/02/03 9:43:00"),
("塚越雄真","つかこしゆうま","男","25卒","富山","経済","経済","富山","090-2211-0909","tsukakyun@gmail.com","2022/08/30 14:43:09"),
("野呂美智子","のろみちこ","女","25卒","北星学園","社会福祉学","社会福祉学","北海道","090-1313-9482","micchi@icloud.com","2022/12/02 3:49:44"),
("塚越雄真","つかこしゆうま","男","25卒","富山","経済","経済","富山","090-2211-0909","tsukakyun@gmail.com","2022/08/30 14:43:09");
DROP TABLE IF EXISTS Statuses;
CREATE TABLE Statuses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  status VARCHAR(255) COMMENT "学生ステータス"
) CHARSET=utf8;

insert into Statuses (status) VALUES ("請求予定"), ("請求済み"), ("無効");

DROP TABLE IF EXISTS CompaniesStudentsLink;
CREATE TABLE CompaniesStudentsLink (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_id INT,
  student_id INT,
  status_id INT,
  FOREIGN KEY (company_id) REFERENCES Companies(id),
  FOREIGN KEY (student_id) REFERENCES Students(id),
  FOREIGN KEY (status_id) REFERENCES Statuses(id)
) CHARSET=utf8;

insert into CompaniesStudentsLink (company_id, student_id, status_id) values (1,1,2), (1,3,1),(1,4,1),(2,2,1),(3,1,1),(3,2,1),(3,3,3),(3,4,1),(4,1,1);

DROP TABLE IF EXISTS Invalids;
CREATE TABLE Invalids (
  id INT AUTO_INCREMENT PRIMARY KEY,
  link_id INT COMMENT "中間テーブルid",
  reason VARCHAR(255) COMMENT "無効理由",
  reasonDetail VARCHAR(255) COMMENT "無効詳細理由",
  FOREIGN KEY (link_id) REFERENCES CompaniesStudentsLink(id)
) CHARSET=utf8;

insert into Invalids (
  link_id, reason
) values (
  1, "名前がふざけてる"
);

DROP TABLE IF EXISTS Tags;
CREATE TABLE Tags (
  id INT AUTO_INCREMENT PRIMARY KEY,
  tag VARCHAR(255) COMMENT "タグ名"
) CHARSET=utf8;

insert into Tags (tag) values ("25卒"), ("26卒"), ("27卒"), ("オンラインのみ"), ("対面のみ"), ("両方可"), ("IT"), ("北海道"), ("東北"), ("関東"), ("中部"), ("近畿"), ("中国"), ("四国"), ("九州"), ("総合型"), ("営業"), ("事務/アシスタント"), ("企画/マーケティング"), ("販売/サービス"), ("IT/通信系エンジニア"), ("建築/土木系エンジニア"), ("モノづくり系エンジニア"), ("素材/化学/食品系エンジニア"), ("医療系専門職"), ("金融系専門職"), ("コンサルタント/不動産専門"), ("クリエイティブ"), ("就活コミュニティあり"), ("業界研究あり"), ("インターンシップ紹介あり"), ("説明会あり"), ("面接練習あり"), ("ES添削あり"), ("文系"), ("理系"), ("ベンチャー"), ("大手"), ("土日祝日"), ("平日18時まで対応可"), ("平日21時対応可");

DROP TABLE IF EXISTS CompaniesTagsLink;
CREATE TABLE CompaniesTagsLink (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_id INT,
  tag_id INT,
  FOREIGN KEY (company_id) REFERENCES Companies(id),
  FOREIGN KEY (tag_id) REFERENCES Tags(id)
) CHARSET=utf8;

insert into CompaniesTagsLink (company_id, tag_id) values (1,1), (1,2), (1,3), (1,4), (1,5), (1,6), (1,7), (2,1), (2,2), (2,3), (2,4), (2,5), (2,6), (2,7), (3,1), (3,2), (3,3), (3,4), (3,5), (3,6), (3,7), (4,1), (4,2), (4,3), (4,4), (4,5), (4,6), (4,7);

