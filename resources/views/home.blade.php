
@extends('layouts.layoutMain')

{{-- assigned as page content --}}
@section('content')
<div class="home-wrapper grid grid-cols-1 md:grid-cols-3 justify-between">
    {{-- left sidebar --}}
    <div>

    </div>

    {{-- middle content start --}}
    <div class="space-y-7">
        <div class="flex flex-col gap-2">
            <textarea class="p-2 border-2 focus:border-gray-700 focus:outline-none" cols="50" rows="5" placeholder="type your thought..."></textarea>
            <input class="p-2 border-2 hover:border-gray-700 cursor-pointer" type="submit" value="POST">
        </div>

        {{-- post cards --}}
        <div>
            {{-- post card (looped) start --}}
            <div class="space-y-2">
                {{-- post area --}}
                <div class="p-2 space-y-2 bg-gradient-to-b from-gray-700/5 to-transparent">
                    <div><h3 class="font-bold">Name</h3></div>
                    <div><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur similique repudiandae eaque tempora ratione. Repellendus eligendi quaerat magni quos distinctio?</p></div>
                    <div class="flex justify-between items-center">
                        {{-- post state --}}
                        <div>100 loved this</div>
                        {{-- post date --}}
                        <div>Posted 2 days ago</div>
                    </div>
                </div>

                <hr>

                {{-- comment area --}}
                <div class="space-y-2">
                    {{-- comment field --}}
                    <div>
                        <textarea class="border-[1px] focus:border-gray-700 outline-none px-2" name="comment" id="" cols="50" rows="3" placeholder="Comment..."></textarea>
                        <input class="border-[1px] hover:border-gray-700 outline-none px-2 cursor-pointer" type="submit" value="Post">
                    </div>

                    <hr>
                    
                    {{-- comments --}}
                    <div>
                        {{-- comment card (looped) --}}
                        <div>
                            <div><h4 class="font-semibold">Name</h4></div>
                            <div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, quibusdam.</p></div>
                            <div><span>Just Now</span></div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- post card (looped) end --}}

        </div>
    </div>
    {{-- middle content end --}}

    {{-- left sidebar start --}}
    <div>

    </div>
    {{-- left sidebar end --}}

</div>
@endsection
