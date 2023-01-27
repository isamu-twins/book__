<!DOCTYPE html>
<html lang="ja">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=RocknRoll+One&family=Stick&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            width: 700px;
            margin-right: 0;
            margin-left: auto;
            background-image: url(/photo/titlepicture.png);
        }
    </style>
</head>

<body class="bodyfonts">
    <h1 class="titlefonts">お前は{{Session::get('emp_name')}}だな！</h1>
    <br>
    <h3 class="headfonts">下から選ぶんだ</h3>
    <ul>
        <li><a href="/in/insert">書籍登録したいのか？</a></li>
        <li><a href="/db/listView">一覧表示・検索だと！？</a></li>
        <li><a href="/update/bookUpdate">書籍の更新・削除か...</a></li>
    </ul>
    <a href="/logout">ログアウト</a>
</body>

</html><!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=RocknRoll+One&family=Stick&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            width: 700px;
            margin-right: 0;
            margin-left: auto;
            background-image: url(/photo/titlepicture.png);
        }
    </style>
</head>

<body class="bodyfonts">
    <h1 class="titlefonts">お前は{{Session::get('emp_name')}}だな！</h1>
    <br>
    <h3 class="headfonts">下から選ぶんだ</h3>
    <ul>
        <li><a href="/in/insert">書籍登録したいのか？</a></li>
        <li><a href="/db/listView">一覧表示・検索だと！？</a></li>
        <li><a href="/update/bookUpdate">書籍の更新・削除か...</a></li>
    </ul>
    <a href="/logout">ログアウト</a>
</body>

</html>