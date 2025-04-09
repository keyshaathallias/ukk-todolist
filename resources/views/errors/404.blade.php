<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>404</title>
  @vite('resources/css/app.css')
</head>

<body class="flex items-center justify-center h-screen">
  <div class="flex flex-col items-center justify-center mx-auto font-sora w-fit">
    <h1 class="text-dark-green">You mustn’t be here!</h1>
    <img src="/images/404.svg" alt="404" class="w-[500px] my-6">
    <a href="/"
      class="flex items-center justify-center gap-2 px-4 py-1 mb-3 text-white rounded-full w-fit bg-green">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
        class="bi bi-arrow-left-short" viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5" />
      </svg>
      <p>Go Back</p>
    </a>
  </div>
</body>

</html>
