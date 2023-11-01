<!DOCTYPE>
<html>
<head>
    <link rel="stylesheet" href="css/wake_up_time.css">
    <link rel="stylesheet" href="css/bed_time.css">
    <link rel="stylesheet" href="css/nap.css">
    <link rel="stylesheet" href="css/mid_arousal.css">
    <link rel="stylesheet" href="css/early_morning_arousal.css">
    <script src="{{ asset('js/timer.js') }}"></script>
    <script src="{{ asset('js/bed_time.js') }}"></script>
</head>
<body>
    <form action="" method="post">
        <div class="wake_up_time">
            <label class="wake_up_time_label">
                <input type="text" placeholder="起床時間">
            </label>
        </div>

        <div class="bed_time">
            <label class="bed_time_label">
                <input type="text" placeholder="就寝時間">
            </label>
        </div>

        <div class="nap">
            <label class="nap_label">
                <input type="text" placeholder="昼寝時間">
            </label>
        </div>

        <div class="mid_arousal">
            <label class="mid_arousal_label">
                <input type="text" placeholder="中途覚醒時間">
            </label>
        </div>

        <div class="early_morning_arousal">
            <label class="early_morning_arousal_label">
                <input type="text" placeholder="早朝覚醒時間">
            </label>
        </div>
    </form>
</body>
</html>
