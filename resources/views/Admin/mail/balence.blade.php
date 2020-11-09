<!DOCTYPE html>
<html>
<head>
    <title>kanji_name</title>
</head>
<body>

<h1>Dear {{$cus->kanji_name}}</h1>
<table>
    <tr>
        <td>かんじ名</td>
        <td>{{$cus->kanji_name}}</td>
    </tr>
    <tr>
        <td>電子メールアドレス</td>
        <td>{{$cus->email}}</td>

    </tr>
    <tr>
        <td>借りたい金額</td>
        <td>{{$cus->loancus}}</td>

    </tr>
    <tr>
        <td>実際の量</td>
        <td>{{$cus->maxtotal}}</td>

    </tr>
    <tr>
        <td>もらった分量
        </td>
        <td>{{$cus->receive}}</td>

    </tr>
    <tr>
        <td>お金を払わなければならない

        </td>
        <td>{{$cus->loancustomer}}</td>

    </tr>
    <tr>
        <td>バランスをとる

        </td>
        @php
            $balence =( $cus->loanrefund) - ($cus->loancustomer);
        @endphp
        <td>{{$balence}}</td>

    </tr>
</table>
</body>
</html>
<style>

</style>
