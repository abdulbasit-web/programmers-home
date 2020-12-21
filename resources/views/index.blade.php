@extends('layouts.app')

@section('title', 'Home')
@section('content')
  <div class="bg-white ">
    <div class="container mx-auto z-0 px-32 py-8">
      <div class="md:flex items-center">
        <div class="w-full md:w-1/2">
          <div class="max-w-lg">
            <h1 class="text-gray-800 text-2xl font-semibold uppercase md:text-3xl">Share any Programming knowledge That
              help others </h1>
            <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro beatae error
              laborum ab amet sunt recusandae? Reiciendis natus perspiciatis optio.</p>
            <a href="{{ route('posts.index') }}" class="mr-4">
              <button
                class="mt-4 px-3 py-2 bg-indigo-600 text-white text-sm uppercase font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">See
                Posts</button>

            </a>
            <a href="{{ route('posts.create') }}">
              <button
                class="mt-4 px-3 py-2 text-indigo-600 border border-indigo-600  text-sm uppercase font-medium rounded hover:bg-indigo-500 hover:text-white focus:outline-none focus:bg-indigo-500">Share
                a Post</button>

            </a>
          </div>
        </div>

        <div class="flex items-center justtify-end w-full mt-6 md:mt-0 md:w-1/2">
          <img class="max-w-2xl w-full h-full" src="img/svg/Responsive-bro.svg" alt="">
        </div>
      </div>
    </div>
  </div>

@endsection
