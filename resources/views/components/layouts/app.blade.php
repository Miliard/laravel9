
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aprendiendo - {{ $title ?? '' }} </title>
    <meta name="description" content=" {{ $metaDescription ??  'Defaul meta descriptions' }}"/> 
</head>

<body>

<x-layouts.navigation/>
    {{ $slot }}


</body>

</html>