@php

 @endphp

@component("layout.app")
    @include("layout.partials._hero")
    @include("layout.partials._search")

    <div
        class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >
        @if(count($listings)!==0)
            @foreach($listings as $listing)
                <x-listing :listing="$listing"/>
            @endforeach
        @else
            No Listings Found
        @endunless

    </div>

@endcomponent
