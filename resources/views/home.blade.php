@extends('layouts.app')

@section('content')
<div class="container flex flex-col md:flex-row mx-auto">
    <div class="md:w-1/2 md:mx-auto items-center mb-4">
        <div class="p-3 rounded-b">
            @if (session('status'))
                <div class="bg-green-lightest border border-green-light text-green-dark text-sm px-4 py-3 rounded mb-4">
                    {{ session('status') }}
                </div>
            @endif
        </div>

        <div class="rounded shadow-md mb-6">
            <div class="font-medium text-2xl text-center text-brand-darker bg-brand-lighter p-3 rounded-t">
                Which tweets are you looking for?
            </div>
            <div>
                <form method="get" action="/home" class="flex flex-row p-8 bg-white">
                    <input type="search" class="pl-2 h-8 w-full border-t border-b border-l rounded-l text-grey-darker outline-none focus:shadow-inner" type="search" name="keyword" placeholder="type keyword to search i.e. 'promise'" autofocus/>
                    <svg class="bg-white border-t border-b border-r rounded-r h-8 w-6 p-1 fill-current text-grey" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/>
                    </svg>
                    <button class="bg-brand hover:bg-brand-dark text-white font-bold py-2 px-4 ml-4 rounded">Search</button>
                </form>
            </div>
        </div>

        <div>
            @foreach($tweets as $tweet)
                <div class="bg-white mx-auto shadow-lg rounded-lg overflow-hidden my-2">
                    <div class="sm:flex sm:items-center px-6 py-4">
                        <img class="block h-16 sm:h-24 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="https://pbs.twimg.com/profile_images/527584017189982208/l3wwN-l-_400x400.jpeg" alt="">
                        <div class="text-center sm:text-left sm:flex-grow">
                            <div class="mb-4">
                                <p class="text-xl leading-tight">{{ $tweet['user']['name'] }}</p>
                                <p class="text-sm leading-tight text-grey-darker mt-2">{{ $tweet['text'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="md:w-2/4 md:mr-auto mt-6">
        <div class="rounded-md shadow-md">
            <div class="font-medium text-xl text-center text-brand-darker bg-brand-lighter p-3 rounded-t">
                Recent Activity
            </div>
            <div class="bg-grey-lightest p-8">
                <ul>
                    @foreach($activities as $activity)
                        <li class="text-sm my-4"><a class="text-brand no-underline" href="">{{ $activity->text . ' ' . $activity->created_at->diffForHumans() }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
