@extends('layout.base')

@section('title', 'Settings | '.env('APP_NAME'))

@section('content')
<div class="main-wrapper">
    {{-- Include navbar component --}}
    @include('components.navbar')
    {{-- Include second sidebar --}}
    @include('components.second-sidebar')
    {{-- Include main content --}}
    <div class="page-wrapper">
        @if(request()->route()->getName()=='settings')
        @include('pages.settings.company')
        @elseif (request()->route()->getName()=='localization-settings.index')
        @include('pages.settings.localization')
        @elseif (request()->route()->getName()=='theme-settings.index')
        @include('pages.settings.theme')
        @elseif (request()->route()->getName()=='roles-permissions-settings.index')
        @include('pages.settings.roles-permissions')
        @elseif (request()->route()->getName()=='email-settings.index')
        @include('pages.settings.email')
        @elseif (request()->route()->getName()=='invoice-settings.index')
        @include('pages.settings.invoice')
        @elseif (request()->route()->getName()=='salary-settings.index')
        @include('pages.settings.salary')
        @elseif (request()->route()->getName()=='notifications-settings.index')
        @include('pages.settings.notifications')
        @elseif (request()->route()->getName()=='leave-type-settings.index')
        @include('pages.settings.leave-type')
        @elseif (request()->route()->getName()=='change-password-settings')
        @include('pages.settings.change-password')

        {{-- Leave Type (Create and Edit) --}}
        @elseif (request()->route()->getName()=='leave-type-settings.create')
        @include('pages.settings.forms-leave-type')
        @elseif (request()->route()->getName()=='leave-type-settings.edit')
        @include('pages.settings.forms-leave-type')
        @endif
    </div>

</div>
@endsection
