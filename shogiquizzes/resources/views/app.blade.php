<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Shogi Quizzes Application</title>
        <meta name="description" content="将棋AIの評価値に基づいて作成された次の一手問題集を提供するサイト">
        <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}">
        
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>

        <div id="app">
            <div id="nav">
              <router-link to="/">Home</router-link>
            </div>
            <router-view/>
            </div>
        </div>

    <script src="{{ mix('js/app.js') }}"></script> 
    </body>
</html>