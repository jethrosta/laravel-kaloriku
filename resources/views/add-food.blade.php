@extends('layouts.app')
@section('style-css')
    @livewireStyles
@endsection
@section('content')
    <livewire:addfood-component />
@endsection
@endsection

@section('scripts')
    @livewireScripts
    <script>
        console.log('here')
    </script>
@endsection
