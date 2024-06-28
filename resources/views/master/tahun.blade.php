@extends('template.app')

@section('title')
    Tahun
@endsection



{{-- @push('script')
    @livewireScript
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script> 
    <x-livewire-alert::flash />   
@endpush --}}


@section('isi')
            <livewire:master.tahun-tabel />


@endsection