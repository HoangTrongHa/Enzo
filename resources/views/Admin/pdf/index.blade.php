<!doctype html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<img class="pdf-img" src="{{asset("image/logo_header_2.png")}}"/>
<div class="header-pdf">
    <h1>日本社会主義共和国
    </h1>
    <h3>独立した幸福の自由
    </h3>
</div>
<div class="title">
    <span>
        請求書の転送
    </span>
</div>
<div>
    <table>
        <tr>
            <td>かんじ名</td>
            <td>{{$cus->tenchuhan}}</td>
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
    </table>
</div>

</body>
</html>
<style>
   .header-pdf{
       text-align: center;
   }
   .title{
       text-align: center;
   }
   .title span{
       color: #01897b;
       font-size: 100px;
   }

</style>
<script type="text/php">
    if (isset($pdf)) {
        $text = "{PAGE_NUM}/{PAGE_COUNT}ﾍﾟｰｼﾞ";
        $size = 10;
        $font = $fontMetrics->getFont("yumin");
        $x = $pdf->get_width() / 2;
        $y = $pdf->get_height() - 35;
        $pdf->page_text($x, $y, $text, $font, $size);
    }
</script>
