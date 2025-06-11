@extends('layouts.app')
@section('style-css')
    @livewireStyles
@endsection
@section('content')


    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <livewire:addfood-component />
                </div>
            </div>
        </div>
    </div>@endsection

@section('scripts')
    @livewireScripts
    <script>
        console.log('here')
    </script>
@endsection
