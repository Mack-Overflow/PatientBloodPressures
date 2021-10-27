@extends('layouts.app')
@section('content')
<x-navbar />
<div class="flex flex-col w-4/5 mx-auto my-3">
    <div class="grid grid-cols-1">
        <a class="flex mx-auto my-auto p-2 border-2 rounded-lg border-green-500 float-right text-green-500 hover:bg-green-500 hover:text-white"
            href={{ route('patients.export') }}> Export Patients as
            CSV</a>
        <a class="flex mx-auto my-auto p-2 border-2 rounded-lg border-green-500 float-right text-green-500 hover:bg-green-500 hover:text-white"
            href={{ route('patients.create') }}> Export Patients as
            CSV</a>
        <div class="">
            <livewire:patient-table searchable="name, id" />
        </div>
    </div>
</div>
@endsection