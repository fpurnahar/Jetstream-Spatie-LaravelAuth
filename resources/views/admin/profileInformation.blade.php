@extends('admin.layouts.main')
@sectionMissing('navigation')
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        @include('admin.layouts.menuSuperAdmin')
    </aside>
@endif

@section('directed', 'profile.show')
    
@section('title', 'Profile')

@section('content')


     
@endsection