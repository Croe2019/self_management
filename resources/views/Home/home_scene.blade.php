<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="css/calendar.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <script src="{{ asset('js/calendar.js') }}"></script>

</head>
<body>
    <div id='calendar'></div>
    <div class="openbtn"><span></span><span></span><span></span></div>
    <nav id="g-nav">
        <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
            <ul>
                <li><a href="{{ route('create_form') }}">睡眠時間</a></li>
                <li><a href="#">天気と気分</a></li>
                <li><a href="#">服薬</a></li>
                <li><a href="#">日常生活</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
