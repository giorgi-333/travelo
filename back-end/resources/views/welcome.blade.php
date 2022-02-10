<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travelo</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="home">
    @foreach ($er as $item)
        <h1>
            {{ $item->id }} - {{ $item->text }}
        </h1>
    @endforeach
</div>
</body>
</html>

<script>
    let text = "new"
</script>

