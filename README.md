## teamdev-2023-posse1-team3C

## docker のインストール
[macにdockerをインストール](https://matsuand.github.io/docs.docker.jp.onthefly/desktop/mac/install/)

上の記事を参考にdockerをインストール

## 環境構築事前準備

1. .envファイルを作成
- .env.exampleの内容をコピーして貼り付ける
- ファイルは.env.exampleと同じ階層

![参考画像](./img/Screen%20Shot%202023-04-18%20at%209.54.28.png)
## tailwind環境構築

1. 以下のコマンドをターミナルで打つ
```
docker compose build 
docker compose up -d 
```

2. 以下のコマンドをターミナルで打つ
```
docker compose exec php bash 
```

3. root...とこに入るので、そこで以下のコマンドを打って、node,npm がインストールされてることを確認する

```
node -v 
npm -v
```

ここでエラーがでないで、それぞれ以下のコマンドが出たら成功

```
v18.16.0
9.5.1
```

4. 以下のコマンドを打つ
```
npm install -D tailwindcss
```

5. 以下のコマンドを打つ
```
npx tailwindcss init
```

6. tailwind.config.jsが自動で作られるので、その中の内容をを以下のものに書き換える
```
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {},
  },
  plugins: [],
}
```

7. srcフォルダにinput.cssを作成し、以下を貼り付ける
```
@tailwind base;

@tailwind components;

@tailwind utilities;
```

8. 最後にこのコマンドをターミナルに貼り付ける
```
npx tailwindcss -i ./input.css -o ./dist/output.css --watch
```

```
Ok to proceed? (y) y
```
がもしでたら、yをしてEnter


9. tailwindを使う際には...
```
  <link rel="stylesheet" href="./dist/output.css">
```
これをhead部分に書く


## 作業開始時

1. 以下のコマンドを下のターミナルで打つ
```
docker compose up -d 
```

2. 上のdockerのアイコンをクリック、dashbordを押して開く

3. 以下のような状態になってることを確認

![dockerdesktop](./img/Screen%20Shot%202023-04-18%20at%209.42.20.png)

- このようにrunning(5/5)になってればok

4. 以下のコマンドを下のターミナルで打つ
```
docker compose exec php bash 
```

5. tailwindを使うために以下のコマンドを打つ。
```
npx tailwindcss -i ./input.css -o ./dist/output.css --watch
```
![tailwind実行](./img/Screen%20Shot%202023-04-18%20at%209.52.31.png)

以下のようになってればok

## 作業終了時
1. 以下のコマンドをターミナルで打つ。
```
docker compose down
```

