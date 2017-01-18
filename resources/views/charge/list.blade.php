@extends('layout')

@section('content')
<div class="container">
  <h2>安否確認リスト</h2>
  <p style="text-align:right;">ようこそ。責任者：(())さん</p></br>
  <a href="{{ action('LoginController@charge') }}"><p style="text-align:right;">戻る</p></a>
  <hr>

  <table class="table" style="margin:0 12px;">
    <tr>
      <td>社員氏名</td>
      <td>連絡先</td>
      <td>住所</td>
      <td>メールアドレス</td>
      <td>所属部署</td>
      <td>責任者名</td>
      <td>責任者連絡先</td>
    </tr>


@foreach($worker_lists as $worker_list)
<tr>
      <td>{{$worker_list->name}}</td>
      <td>{{$worker_list->tell}}</td>
      <td>{{$worker_list->email}}</td>
      <td>{{$worker_list->zip}}</td>
      <td>{{$worker_list->department}}</td>
      <td>{{$worker_list->manager}}</td>
      <td>{{$worker_list->manager_tell}}</td>
      <td><a href="{{ action('LoginController@edit') }}">編集</a></td>
</tr>
@endforeach

  </table>


</div>
@endsection