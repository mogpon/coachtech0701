@extends("layouts.test")

@section('content')
<form action="/test" method="POST">
  @csrf
  <p>氏名</p>
  <p><input type="text" name="name"></p>
  <p>メールアドレス</p>
  <p><input type="text" name="mail"></p>
  <p><input type="submit" value="送信する"></p>
</form>
@endsection