<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function index() {
        $n = 50;

        // 配列
        $msg = [
            'あああ', 'かかか', 'ららら'
        ];

        // 連想配列　その1
        $array01 = array(
            'apple' => 'red',
            'banana' => 'yellow',
            'orange' => 'orange'
        );

        // 配列、for,if

        $array02 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
                        11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
                        21, 22, 23, 24, 25, 26, 27, 28, 29, 30);

        return view('learn',
            compact('n', 'msg','array01','array02'));
    }

    public function learnforeach()
    {
        // TEST
        $box = [
            'リスト1' => 'りんご',
            'リスト2' => 'オレンジ',
            'リスト3' => 'いちご'
        ];

        foreach($box as $key => $value)
        {
            echo $key;
            echo $value;
            echo '買い物'. $key.'は、'. $value.'です。<br/>';
        }
    }
}
