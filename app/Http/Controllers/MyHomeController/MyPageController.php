<?php

namespace App\Http\Controllers\MyHomeController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MyPageController extends Controller
{
    public function mypage()
    {
        // ログインしているユーザー取得
        $user = Auth::user();
        return view('Home/home_scene', ['user' => $user]);
    }

    public function getEvent()
    {
        // ここはMySQLからデータを取得して日付・時間ごとに表示

        return[
            [
                'title' => '気分',
                'description' => '絶好調',
                'start' => '2023-10-26',
                'end' => '2023-10-26'
            ],[
                'title' => '入浴',
                'description' => '予定通り',
                'start' => '2023-10-26 18:00',
                'end' => '2023-10-26 19:00'
            ],[
                'title' => 'ゲーム',
                'description' => 'スパイダーマン2をプレイ',
                'start' => '2023-10-26 20:00',
                'end' => '2023-10-26 22:00'
            ]
        ];
    }
}
