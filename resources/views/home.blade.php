
@extends('layouts.layoutMain')

@section('content')
<div class="home-wrapper grid grid-cols-1 md:grid-cols-3 justify-between">
    {{-- left sidebar --}}
    <div class="">

    </div>

    <div>
        <div class="flex flex-col gap-2">
            <textarea class="p-2 border-2 focus:border-gray-700 focus:outline-none" cols="50" rows="5" placeholder="type your thought..."></textarea>
            <input class="p-2 border-2 hover:border-gray-700" type="submit" value="POST">
        </div>
        <div>
        </div>
        <div></div>
    </div>

    {{-- left sidebar --}}
    <div>

    </div>
</div>
@endsection
