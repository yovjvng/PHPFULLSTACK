<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home!!</h1>
    <br>
    <br>
    <br>
    <form action="/method" method="post">
        @csrf<!-- 공격을 대응하므로 꼭 사용해야 함  -->
        <button type="submit">POST</button>
    </form>
    <br>
    <form action="/method" method="post">
        @csrf<!-- 공격을 대응하므로 꼭 사용해야 함  -->
        @method('PUT')
        <button type="submit">PUT</button>
    </form>
    <br>
    <form action="/method" method="post">
        @csrf<!-- 공격을 대응하므로 꼭 사용해야 함  -->
        @method('DELETE')
        <button type="submit">DELETE</button>
    </form>
</body>
</html>