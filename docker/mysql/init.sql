
DROP DATABASE IF EXISTS TEAMDEV;

CREATE DATABASE TEAMDEV;

USE TEAMDEV;

DROP TABLE IF EXISTS AdminUsers;
CREATE TABLE AdminUsers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255),
  password VARCHAR(255)
) CHARSET=utf8;

-- passwordは全部root
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

-- passwordは全部root
insert into ClientUsers (company_id, email, password) values 
(1, "careerticket@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(2, "shinsotsu@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(3, "irodas@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(4, "doda@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(5, "rikunabi@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(6, "jobstring@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(7, "neo@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(8, "digupcareer@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(9, "syn@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(10, "careecen@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(11, "typeshukatsu@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(12, "careerpark@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(13, "twing@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW"),
(14, "goodfind@gmail.com", "$2y$10$Tb9eEbx3.T8Wthv3hRSKV.RilWOLgKI1NAeYQjy3DJLbpOh5nmBKW");
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
("レバレジーズ", "キャリアチケット", "https://careerticket.jp/", "careerticket@gmail.com", "150-0002", "東京都渋谷区渋谷３丁目６−３ 363清水ビル 4F", "0120-962-647", "対面・オンライン", "平日・土10:00-20:00", "2023-04-01", "2023-06-30", "対応可"), 
("マイナビ新卒紹介", "マイナビ新卒紹介", "https://shinsotsu.mynavi-agent.jp/", "shinsotsu@gmail.com", "151-0051", "東京都新宿区新宿４丁目１−６ JR新宿ミライナタワー 26階", "03-6628-5012", "対面", "平日9:15-17-45", "2023-04-01", "2023-06-30", "対応可"),
("irodas", "irodas", "https://irodas.com/", "irodas@gmail.com", "531-0072", "大阪府大阪市北区豊崎３丁目９−７ いずみビル 7階", "06-6136-5608", "対面・オンライン", "平日9:00-18:00", "2023-04-01", "2023-09-30", "対応可"), 
("パーソルキャリア", "doda新卒エージェント", "https://doda-student.jp/", "doda@gmail.com", "100-0005", "東京都千代田区丸の内２丁目４", "03-6213-9000", "対面・オンライン", "平日9:00-18:00", "2023-02-01", "2023-03-30", "対応可"),
("リクナビ", "リクナビ就職エージェント", "http://job.rikunabi.com/agent/", "rikunabi@gmail.com", "100-6640", "東京都千代田区丸の内1-9-2 グラントウキョウサウスタワー", "0120-951-231", "対面", "平日9:00-18:00", "2023-02-01", "2023-07-30", "対応可"),
("HRクラウド", "JobSpring", "https://jobspring.jp/", "jobstring@gmail.com", "101-0051", "東京都千代田区神田神保町２丁目５−３ 北沢ビル 8階A", "03-6261-5989", "対面・オンライン", "平日9:00-18:00", "2022-12-01", "2023-07-30", "対応可"),
("ネオキャリア", "就職エージェントneo", "https://www.s-agent.jp/", "neo@gmail.com", "160-0023", "東京都新宿区西新宿１丁目２２−２ 新宿サンエービル 2F", "03-5908-8058", "対面", "平日9:30-18:30", "2022-12-01", "2023-07-30", "対応可"),
("NaS", "DIG UP CAREER", "https://digupcareer10.studio.site/", "digupcareer@gmail.com", "150-0011", "東京都渋谷区東３丁目１４−１５", "080-4618-2189", "対面・オンライン", "平日9:30-18:30", "2022-12-01", "2023-07-30", "対応可"),
("イングリウッド", "シンアド就活", "https://syn-ad.com/2024/", "syn@gmail.com", "150-0043", "東京都渋谷区道玄坂1-21-1 渋谷ソラスタ 13F", "03-6277-5117", "対面・オンライン", "平日9:30-18:30", "2022-12-01", "2023-07-30", "対応可"),
("シンクエージェント", "キャリセン就活エージェント", "https://careecen-shukatsu-agent.com/", "careecen@gmail.com", "107-0052", "東京都港区赤坂4-8-14 赤坂坂東ビルディング5階", "03-5413-4975", "対面・オンライン", "平日9:30-18:30", "2022-12-01", "2023-04-30", "対応可");
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
  1, "test", "総合商社", "内定率80%超え、最短2週間", "170社以上", "ベンチャー企業", "あり", "あり", "あり", "あり", "総合型", "あり", "オンラインのみ", "平日 9:00〜18:00", "本登録の前に対面でお話しすることができます。", "業界No.1の求人数！"
),(
  4, "IMG_6480.jpg", "最短1週間で内定、DeNAやオプト、セブンイレブン", "5,000社", "大手企業、中小企業", "あり", "あり", "あり", "あり", "あり", "総合型", "あり", "本登録の前にオンラインでお話しすることができます。", "平日9:00-18:00", "本登録の前に対面でお話しすることができます。", "オンラインで全国どこからでも応募可"
),(
  3, "IMG_6761.JPG", "年間13,000名を１５００社以上サービス９５％満足度", "210000", "ベンチャー企業", "なし", "あり", "あり", "あり", "あり", "総合型", "なし", "本登録の前にオンラインでお話しすることができます。", "平日9:00-18:00", "本登録の前に対面でお話しすることができます。", "業界No.1の求人数！"
), (
  2, "IMG_6761.JPG", "最短2週間での内定獲得が目指せます。 面接トレーニングによる内定率86％、入社後の定着率92％", "年間15万名以上の学生が登録し、7,300名以上", "大手企業、中小企業", "あり", "あり", "あり", "あり", "なし", "総合型", "あり", "本登録の前に対面でお話しすることができます。", "平日9:15-17:45", "本登録の前に対面でお話しすることができます。", "オンラインで全国どこからでも応募可 "
), (
  5, "IMG_6761.JPG", "累計３０００００社以上", "年間15万名以上の学生が登録し、7,300名以上", "大手企業、中小企業", "なし", "あり", "あり", "あり", "なし", "総合型", "なし", "本登録の前に対面でお話しすることができます。", "平日9:00-18:00", "本登録の前に対面でお話しすることができます。", "オンラインで全国どこからでも応募可 "
), (
  6, "IMG_6761.JPG", "3年以内の離職率は、0.1%と驚き最短2週間の", "年間15万名以上の学生が登録し、7,300名以上", "ベンチャー企業", "あり", "あり", "あり", "あり", "あり", "総合型", "なし", "本登録の前に対面でお話しすることができます。", "平日9:00-18:00", "本登録の前に対面でお話しすることができます。", "オンラインで全国どこからでも応募可"
), (
  7, "IMG_6761.JPG", "2010〜2020年の1年間で4万件以上の求人", "年間15万名以上の学生が登録し、7,300名以上", "大手企業、中小企業", "なし", "なし", "なし", "なし", "なし", "総合型", "なし", "本登録の前に対面でお話しすることができます。", "平日9:00-18:00", "本登録の前に対面でお話しすることができます。", "オンラインで全国どこからでも応募可"
), (
  8, "IMG_6761.JPG", "2010〜2020年の1年間で4万件以上の求人", "年間15万名以上の学生が登録し、7,300名以上", "ベンチャー企業", "あり", "なし", "なし", "なし", "なし", "総合型", "なし", "本登録の前に対面でお話しすることができます。", "平日9:00-18:00", "本登録の前に対面でお話しすることができます。", "オンラインで全国どこからでも応募可"
), (
  9, "IMG_6761.JPG", "2010〜2020年の1年間で4万件以上の求人", "年間15万名以上の学生が登録し、7,300名以上", "ベンチャー企業", "あり", "なし", "なし", "なし", "なし", "総合型", "あり", "本登録の前に対面でお話しすることができます。", "平日9:00-18:00", "本登録の前に対面でお話しすることができます。", "オンラインで全国どこからでも応募可"
), (
  10, "IMG_6761.JPG", "2010〜2020年の1年間で4万件以上の求人", "10,000以上", "ベンチャー企業", "あり", "なし", "なし", "なし", "なし", "総合型", "あり", "本登録の前に対面でお話しすることができます。", "平日9:30-18:30", "本登録の前に対面でお話しすることができます。", "オンラインで全国どこからでも応募可"
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
(1, "幅広い業界の求人を取り扱っています！"),
(1, "経験豊富なキャリアアドバイザーがサポートします！"),
(1, "就職に関するトレンド情報を提供しています！"),
(2, "大手優良企業との強いパートナーシップがあります！"),
(2, "希望条件に合った求人を迅速にご紹介します！"),
(2, "面接対策や履歴書作成などのサポートを行います！"),
(3, "豊富な求人数であなたの希望にマッチする企業を見つけます！"),
(3, "専門分野の求人情報に特化しています！"),
(3, "面接対策やキャリアカウンセリングを行います！"),
(4, "オンライン応募により、全国どこからでも就職活動が可能です！"),
(4, "希望条件に合わせて求人を絞り込むことができます！"),
(4, "経験豊富なキャリアアドバイザーがサポートします！"),
(5, "幅広い業界のトップ企業との強いコネクションがあります！"),
(5, "個別のキャリアプランニングを行い、最適な求人をご紹介します！"),
(5, "業界の最新動向や企業研究の情報を提供します！"),
(6, "新しいビジネス領域に特化した求人を取り扱っています！"),
(6, "成長著しい企業の求人情報を提供します！"),
(6, "起業家精神を持つ人材のためのサポートを行います！"),
(7, "上場企業との就職斡旋実績があります！"),
(7, "キャリアアップのための研修やセミナーを提供します！"),
(7, "経験豊富なキャリアアドバイザーがサポートします！"),
(8, "働き方に合わせた柔軟な就職支援を行います！"),
(8, "キャリアカウンセリングやスキルアップの支援を行います！"),
(8, "多数の求人情報を取り扱っており、あなたの希望に合った選択肢を提供します！"),
(9, "経験豊富なキャリアアドバイザーがサポートします！"),
(9, "多数の求人情報を取り扱っており、あなたの希望に合った選択肢を提供します！"),
(9, "専門的なキャリアアドバイスを提供します！"),
(10, "スタートアップ企業の成長に貢献できる求人情報を提供します！"),
(10, "多数の求人情報を取り扱っており、あなたの希望に合った選択肢を提供します！"),
(10, "起業家精神を持つ方にピッタリの支援を行います！");

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

insert into AreasCompaniesLink (company_id, area_id) values (1,2),(1, 3), (1, 7), (1, 5),(2, 1), (2, 8),(3, 3), (3, 6), (3, 2),(4, 4), (4, 7), (4, 2),(5, 2), (5, 6),(6, 5), (6, 1),(7, 6), (7, 4), (7, 3),(8, 8), (8, 5), (8, 1),(9, 3), (9, 7), (9, 2),(10, 4), (10, 6);

DROP TABLE IF EXISTS CompaniesGraduatedLink;

CREATE TABLE CompaniesGraduatedLink (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_id INT,
  graduated_id INT,
  FOREIGN KEY (graduated_id) REFERENCES Graduated_years(id)
) CHARSET=utf8;

insert into CompaniesGraduatedLink (company_id, graduated_id) values (1,1), (1,2),(2, 2),(2, 3),(3, 1),(3, 2),(3, 3),(4, 1),(4, 3),(5, 1),(5, 2),(5, 3),(6, 1),(6, 2),(7, 1),(7, 2),(7, 3),(8, 2),(8, 3),(9, 1),(9, 3),(10, 1),(10, 2),(10, 3);
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

insert into Stories (company_id, time, title, university, name, story, photo) values (1, "約２ヶ月", "最短合格！", "慶応大学", "岩城和輝", "地元の企業で内定をもらっていたけど、関東で働きたいという思いが強くなり、就活を続行。一方で内定をもらう友人も増えはじめ、焦りが生まれた際に、キャリアスタートへ相談し、親身に話を聞いてもらえて、もう一度就活に取り組む自信を持つことができたので、本当に良かったです。以前から人と関わることが得意だったので、その長所を生かして、株式会社ヒトノエの営業職にエントリーしたところ、社員の皆さんの人柄に惹かれ、入社を決意しました", "story_01.png"),
(1, "約１ヶ月半", "自己成長できる環境", "早稲田大学", "佐藤美奈子", "学生時代から技術に興味を持ち、IT企業での就職を希望していました。キャリアスタートで出会ったアドバイザーの方から、株式会社テクノベースのエンジニア職に興味を持ち、エントリーしました。選考では専門知識やプログラミングスキルを問われましたが、アドバイザーの方々から継続的なサポートを受けながら頑張りました。結果として内定をいただき、自分の技術力をさらに高めていける環境で働けることに期待しています。", "story_02.png"),
(1, "約３ヶ月", "やりたいことに挑戦", "東京大学", "鈴木太郎", "大学での研究活動やインターンシップを通じて、自分がビジネス領域で活躍したいという思いが強くなりました。キャリアスタートのアドバイザーの方から、株式会社ビジネスパートナーのマネジメント職に興味を持ち、応募しました。選考では経営理念やリーダーシップについての質問がありましたが、自分の考えや経験を通じて説明しました。その結果、内定を頂き、やりたいことに挑戦できる環境に入ることができました。ビジネスパートナーのチームメンバーと一緒に成長し、企業の発展に貢献したいと思います。", "story_03.png"),
(2, "約２ヶ月", "挑戦と成長の場", "一橋大学", "田中太郎", "大学生活を通じて自己成長に努めてきました。就職活動では自分が本当にやりたいことを見つけるために悩みましたが、キャリアスタートのサポートを受けて自分の適性や志向性を見つけることができました。株式会社キャリアブリッジの新卒採用に応募し、選考では自己PRやビジョンについてアピールしました。内定を頂き、挑戦と成長の場となる会社で自分の能力を発揮したいと思っています。", "story_04.png"),
(2, "約３ヶ月", "多様なキャリアパス", "東京工業大学", "山田花子", "エンジニアとしてのキャリアを築きたいと考え、キャリアスタートのアドバイザーに相談しました。株式会社テクノロジーソリューションズのエンジニア職に応募し、選考では技術的な質問や実務経験についての話をしました。結果として内定をいただき、自分の成長につながる多様なキャリアパスを持つ会社で活躍したいと思っています。", "story_05.png"),
(2, "約４ヶ月", "グローバルな環境で活躍", "早稲田大学", "佐々木夏美", "国際的な経験を活かして、グローバルな環境で働きたいと考え、キャリアスタートのサポートを受けました。株式会社グローバルインターナショナルのマーケティング職に興味を持ち、応募しました。選考では国際的なビジネスに関する質問やコミュニケーションスキルについて話しました。内定をいただき、多様な国籍や文化を持つチームで活躍することができることを楽しみにしています。", "story_06.png"),
(3, "約３ヶ月", "挑戦と創造の場", "一橋大学", "佐々木健太", "自分が創造的な仕事に携わりたいという思いから、キャリアスタートのアドバイザーに相談しました。株式会社クリエイティブラボのクリエイティブディレクター職に応募し、選考では自分のアイデアやプロジェクトについて熱心に話しました。内定をいただき、クリエイティブな環境で自己表現を追求しながら成長していきたいと思っています。", "story_07.png"),
(3, "約４ヶ月", "未来を創るテクノロジー", "東京工業大学", "高橋雅人", "テクノロジーの力で社会に貢献したいという思いから、キャリアスタートのサポートを受けました。株式会社テクノビジョンの研究開発職に応募し、選考では自分の専門知識や研究経験について詳しく話しました。内定を頂き、未来を創るテクノロジーに携わることができる喜びと責任を感じています。", "story_08.png"),
(3, "約５ヶ月", "社会課題に挑む", "早稲田大学", "中村麻美", "社会課題に対して解決策を提供する仕事に興味を持ち、キャリアスタートのアドバイザーに相談しました。株式会社ソーシャルソリューションズのコンサルタント職に応募し、選考では社会問題への関心や解決力について話しました。内定をいただき、自分の能力を活かして社会に貢献できる仕事に取り組むことができることに喜びを感じています。", "story_09.png"),;

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

insert into Tags (id,tag) values ("25卒"), ("26卒"), ("27卒"), ("オンラインのみ"), ("対面のみ"), ("両方可"), ("IT"), ("北海道"), ("東北"), ("関東"), ("中部"), ("近畿"), ("中国"), ("四国"), ("九州"), ("総合型"), ("営業"), ("事務/アシスタント"), ("企画/マーケティング"), ("販売/サービス"), ("IT/通信系エンジニア"), ("建築/土木系エンジニア"), ("モノづくり系エンジニア"), ("素材/化学/食品系エンジニア"), ("医療系専門職"), ("金融系専門職"), ("コンサルタント/不動産専門"), ("クリエイティブ"), ("就活コミュニティあり"), ("業界研究あり"), ("インターンシップ紹介あり"), ("説明会あり"), ("面接練習あり"), ("ES添削あり"), ("文系"), ("理系"), ("ベンチャー"), ("大手"), ("土日祝日"), ("平日18時まで対応可"), ("平日21時対応可");

DROP TABLE IF EXISTS CompaniesTagsLink;
CREATE TABLE CompaniesTagsLink (
  id INT AUTO_INCREMENT PRIMARY KEY,
  company_id INT,
  tag_id INT,
  FOREIGN KEY (company_id) REFERENCES Companies(id),
  FOREIGN KEY (tag_id) REFERENCES Tags(id)
) CHARSET=utf8;

insert into CompaniesTagsLink (company_id, tag_id) values (1,1), (1,2), (1,3), (1,4), (1,5), (1,6), (1,7),  (2,3), (2,4), (2,5), (2,6), (2,7), (3,1), (3,2), (3,3), (3,4), (3,5), (3,6), (4,3), (4,4), (4,5), (4,6), (4,8), (4,7), (4,9), (4,10), (2,11), (2,12), (3,13), (3,14), (3,15), (3,16), (3,17), (2,18), (3,19), (3,20), (4,21), (4,22), (3,23), (2,24), (1,23), (1,26), (1,27);

