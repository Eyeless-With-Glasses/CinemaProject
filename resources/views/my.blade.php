<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Bubok Cinema</title>
</head>
<body class="bg-neutral-950">
@extends('layouts.header')
@section('content')
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mb-12">
        <article>
            <h2 class="text-2xl font-extrabold text-white">Films</h2>
            <section class="mt-6 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-x-4 gap-y-8">
                @foreach($films as $item)
                    <article
                        class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                        style="background-image: url({{$item->image}});">
                    </article>

                @endforeach
            </section>
        </article>
    </section>
@endsection


</body>
</html>
