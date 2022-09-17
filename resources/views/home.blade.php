@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">bienvenue</h1>
    </div>
<hr>
    @forelse($classe->users as user)
    <div>{{ $user->content}} | cree le {{ $user->created_at->format('d/m/y')}}</div>

    @empty 
    <span> aucun user dans cette classe </span>
    @endforelse
    <hr>
    @forelse( $classe->users as $user)

    <span> {{$user->name}}</span>
    @empty

    <span> aucun eleve pour cette classe </span>
    @endforelse

    
@endsection
