@extends('layout.base')

@section('title', 'Settings | '.env('APP_NAME'))

@section('content')
    <div class="main-wrapper">
        {{-- Include navbar component --}}
        @include('components.navbar')
        {{-- Include second sidebar --}}
        @include('components.second-sidebar')
    </div>
@endsection
