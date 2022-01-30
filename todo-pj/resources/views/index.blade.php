<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css" type="text/css" />
  <link rel="stylesheet" href="css/index.css" type="text/css" />
  <title>COACHTECH</title>
</head>
<body>
<div class="main">
  <h2>Todo List</h2>
  <form action="/todo/create" method="POST">
    @csrf
    <div class="f-create">
    <input type="text" name="create" size="40">
    <input type="submit" value="追加" name="create" class="c-btn">
    </div>
    <table>
      <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
      </tr>
      <tr>
      @foreach($items as $item)
      <td>{{$item->created_at}}</td>
      <td><input type="text" name="update_cnt" value="{{$item->content}}"></td>
      <td><input type="submit" name="update" value="更新" class="u-btn"></td>
      <td><input type="submit" name="delete" value="削除" class="d-btn"></td>
      @endforeach
      </tr>
</table>
</form>
</div>
</body>
</html>