@extends("Customer.Components.layout")
@section("content")
  <div class="container">
      <form action="{{route("postRegister")}}" method="POST">
          @csrf
          <div class="container">

          </div>
      </form>
  </div>
@endsection

