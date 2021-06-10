<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LectureController extends Controller
{
    public function lecture1()
    {
        /**
         * 最初は「Laravelの勉強」をしているわけではなく、「PHPの勉強をしているので、
         * bladeに渡さずに、ここだけで「処理のみ」書いても大丈夫です。
         * すでに、bladeを利用した内容を書けていますし、次回からLaravelの勉強に入りますね。
         */
        // FizzBuzz問題
        $startNum = 1;
        $endNum = 100;
        for ($i = $startNum; $i <= $endNum; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                echo 'fizzbuzz';
            } else if ($i % 3 === 0) {
                echo 'fizz';
            } else if ($i % 5 === 0) {
                echo 'buzz';
            } else {
                echo $i;
            }
            echo '<br>';
        }
        // Laravelとしてblade等を表示しないため、「今回に限り」強制停止。
        exit;
    }
}
