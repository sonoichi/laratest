@extends('layout')

@section('content')
<div class="container">
  <h2>安否確認リスト</h2>
  <p style="text-align:right;">責任者：{{ DB::table('worker_list')->select('manager', 'manager_tell')->get() }}</p>
  <hr>
  <table>
    <tr>
      <td>社員氏名</td>
      <td>連絡先</td>
      <td>住所</td>
      <td>メールアドレス</td>
      <td><a href="#">編集</a></td>
    </tr>

    <tr>
      <td>{{ DB::table('worker_list')->select('name')->get() }}</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </table>


</div>
@endsection