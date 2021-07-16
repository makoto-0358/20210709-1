<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>
<body>
  <p>{{$txt}}</p>
  @if(count($errors)>0)
  <p>入力に問題があります</p>
  @endif
  <form action="/hello" method="post">
    <table>
      @csrf
      @error('name')
      <tr>
        <th>ERROR</th>
        <td>
          {{$message}}
        </td>
      </tr>
      @enderror
      <tr>
        <th>name:</th>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      @error('email')
      <tr>
        <th>ERROR</th>
        <td>
          {{$message}}
        </td>
      </tr>
      @enderror
      <tr>
        <th>email:</th>
        <td>
          <input type="email" name="email">
        </td>
      </tr>
      @error('age')
      <tr>
        <th>ERROR</th>
        <td>
          {{$message}}
        </td>
      </tr>
      @enderror
      <tr>
        <th>age:</th>
        <td>
          <input type="text" name="age">
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
  </form>
</body>
</html>