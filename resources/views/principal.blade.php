<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="dark:bg-gray-900">
    @include('partials.navbar')
    <h1 class="text-center text-slate-50 text-3xl mb-5">Lista de emplados</h1>
    @include('partials.tableMain')
</body>
</html>