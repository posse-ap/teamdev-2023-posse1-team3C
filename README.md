## teamdev-2023-posse1-team3C

## docker のインストール
[macにdockerをインストール](https://matsuand.github.io/docs.docker.jp.onthefly/desktop/mac/install/)

上の記事を参考にdockerをインストール
## tailwind環境構築

1. 以下のコマンドをターミナルで打つ
```
docker compose build 
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

6. tailwind.config.jsというファイルを以下のものに書き換える
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
このコマンドは毎回作業開始時に
```
docker compose exec php bash 
```
と一緒に打つ。

9. tailwindを使う際には...
```
  <link rel="stylesheet" href="./dist/output.css">
```
これをhead部分に書く
