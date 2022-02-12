<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('./css/app.css') }}" rel="stylesheet">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
    <div class="container mx-auto">
 
    <h1>blog</h1>

    <button class="bg-sky-600 hover:bg-sky-700 ...">
  Save changes
</button>

<div class="py-8 px-8 max-w-sm mx-auto bg-white rounded-xl shadow-lg space-y-2 sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-6">
  <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0" src="/img/erin-lindford.jpg" alt="Woman's Face">
  <div class="text-center space-y-2 sm:text-left">
    <div class="space-y-0.5">
      <p class="text-lg text-black font-semibold">
        Erin Lindford
      </p>
      <p class="text-slate-500 font-medium">
        Product Engineer
      </p>
    </div>
    <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Message</button>
  </div>
</div>

<div class="columns-2">
  <p>Well, let me tell you something, ...</p>
  <p class="break-after-column">Sure, go ahead, laugh...</p>
  <p>Maybe we can live without...</p>
  <p>Look. If you think this is...</p>
</div>

<div class="columns-2">
  When controlling the flow of text, using the CSS property
  <span class="inline">display: inline</span>
  will cause the text inside the element to wrap normally.

  While using the property <span class="inline-block">display: inline-block</span>
  will wrap the element to prevent the text inside from extending beyond its parent.

  Lastly, using the property <span class="block">display: block</span>
  will put the element on it's own line and fill its parent.
</div>

<div class="table w-full ...">
  <div class="table-header-group ...">
    <div class="table-row">
      <div class="table-cell text-left ...">Title</div>
      <div class="table-cell text-left ...">Artist</div>
      <div class="table-cell text-left ...">Year</div>
    </div>
  </div>
  <div class="table-row-group">
    <div class="table-row">
      <div class="table-cell ...">Chocolate Starfish And The Hot Dog Flavored Water</div>
      <div class="table-cell ...">Limp Bizkit</div>
      <div class="table-cell ...">2000</div>
    </div>
    <div class="table-row">
      <div class="table-cell ...">Significant Other</div>
      <div class="table-cell ...">Limp Bizkit</div>
      <div class="table-cell ...">1999</div>
    </div>
    <div class="table-row">
      <div class="table-cell ...">Three Dollar Bill, Y’all $</div>
      <div class="table-cell ...">Limp Bizkit</div>
      <div class="table-cell ...">1997</div>
    </div>
  </div>
</div>

 </div>

    </body>
</html>
