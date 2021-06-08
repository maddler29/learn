<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>test</title>
</head>
<body>
    <h1>learn world</h1>

    @if ($n == 1)
    <!-- 条件式が成り立ったときの処理 -->
     <p>好き</p>
    @elseif ($n == 2)
    <p>どちらともいえない</p>
    @else
    <!-- 条件が成り立たなかったときの処理 -->
    <p>嫌い</p>
    @endif

    @for ($i = 1; $i <= 5 ; $i++)
        <p>{{ $i }} 番目</p>
    @endfor

    <!--　配列　-->
    <h2>{{ $msg[0] }}</h2>
    <h2>{{ $msg[1] }}</h2>
    <h2>{{ $msg[2] }}</h2>

    <!-- 連想配列　その1-->
    @foreach($array01 as $a)
        <p>{{ $a }}</p>
    @endforeach

    <!-- 連想配列　その1-2-->
    @foreach($array01 as $key => $a)
        <p>{{ $key }}</p>
        <p>{{ $a }}</p>
    @endforeach

    @foreach ( $array02 as $value )
        @if ( $value % 3 == 0 && $value % 5 == 0 )
            <p>fizzbuzz</p>
            @elseif ( $value % 5 == 0 )
                <p>buzz</p>
            @elseif ( $value % 3 == 0 )
                <p>fizz</p>
                @else
                    <p>{{$value}}</p>
        @endif
    @endforeach

</body>
</html>
