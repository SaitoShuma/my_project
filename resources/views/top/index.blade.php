<!doctype html> {{----}}
{{--ページの言語設定。現在の言語を取得する記述--}}
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    {{--IE互換設定、モバイルでも適切に表示する設定、トークン埋め込み--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
</head>

<body>
</body>

</html>