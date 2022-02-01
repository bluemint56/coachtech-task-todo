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
    <input type="text" name="content" size="40">
    <button type="submit" class="c-btn">追加</button>
    </div>
  </form>
    <table>
      <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
      </tr>
      @foreach($items as $item)
      <tr>
      <form action="/todo/update" method="POST" >
      @csrf
      <input type="hidden" name="id" value="{{$item->id}}">
      <td>{{$item->timestamp()}}</td>
      <td><input type="text"  value="{{$item->content}}" name="content"></td>
      <td><button type="submit" class="u-btn">更新</button></td>
      </form>
      <form action="/todo/delete" method="POST">
        @csrf
      <td><button type="submit" class="d-btn">削除</button></td>
      </form>
      </tr>
      @endforeach
</table>
</div>
</body>
</html>