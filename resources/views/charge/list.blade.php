@extends('layout')

@section('content')
<div class="container">
  <h2>安否確認リスト</h2>
  <p style="text-align:right;">責任者：{{ $worker_list }}</p>
  <hr>
  <?php echo $worker_list ?>
  <table>
    <tr>
      <td>社員氏名</td>
      <td>連絡先</td>
      <td>住所</td>
      <td>メールアドレス</td>
      <td><a href="{{ action('LoginController@edit') }}">編集</a></td>
    </tr>


    <tr>
      <td></td>
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