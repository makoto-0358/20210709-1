<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>
<body>
  @if($room = " ")
    建物です
  @else
    部屋番号は."$room".です。
  @endif
</body>
</html>