@extends("Customer.layout.app")
@section("content")
    <section id="banner-register">
        <div class="title-register">
            <span>申し込み</span>
        </div>
    </section>
    <div class="container">
     <div class="history-customer">
         <p> < ローン履歴 ></p>
         <div class="content-history">
            @foreach($his as $items)
                <div class="margin-history">
                 <h2 id="date-time">{{$items->payment_term}}</h2>
                 <table>
                     <tr>
                         <th>ローン登録金額</th>
                         <th>控除</th>
                         <th>受け取る</th>
                         <th>状態</th>
                     </tr>
                     <tr>
                         <td>{{$items->maxtotal}}</td>
                         <td>{{$items->Deducted}}</td>
                         <td>{{$items->receive}}</td>
                         @if($items->status == 1)
                             <td>未払い</td>
                         @else($items->status == 2)
                             <td>有料</td>
                         @endif
                     </tr>
                 </table>
         </div>
             @endforeach
         </div>
         <button  onclick="window.location.href='{{route("home")}}'">
             <span>
                 戻って
             </span>
         </button>
     </div>
    </div>
@endsection
