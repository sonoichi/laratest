@extends('layout')

@section('content')
<div class="container">
  <h2>安否確認：入力フォーム</h2>
    <form class="form-horizontal" role="form" method="POST" action="getConfirm">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('safety') ? ' has-error' : '' }}">
            <div class="col-md-6">
                <input id="good" type="radio" name="safety" value="問題ない">もんだいなし　　　
                <input id="bad" type="radio" name="safety" value="問題あり">もんだいあり
            </div>
        </div>

        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
            <label for="comment" class="col-md-4 control-label">コメント</label>

            <div class="col-md-6">
                <input id="comment" type="comment" class="form-control" name="comment">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-8 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    送信
                </button>
            </div>
        </div>
    </form>


</div>
@endsection