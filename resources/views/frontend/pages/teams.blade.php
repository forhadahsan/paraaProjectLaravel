@extends('frontend.layout')

@section('content')
<header class="section-gap text-center">
    <h1 class="heading">Team</h1>
</header>

<section class="grid gap-14 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 pb-20">
    @foreach($teams as $team)
    <div>
        <img class="w-full h-[304px] bg-center object-cover" src="{{$team->image ? url('storage/uploads/teams/'.$team->image) : asset('frontend/assets/teams/team-parson-1.png')}}"
            alt="card image" srcset="">
        <div>
            <h3 class="py-6 text-center text-[20px] font-semibold">{{ $team->name }}</h3>
            <p class="text-center text-[14px] leading-6 text-primary-300">{{ $team->designation }}
        </div>
    </div>
    @endforeach

   

</section>

@endsection