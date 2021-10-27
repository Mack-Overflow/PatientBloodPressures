@extends('layouts.app')
@section('content')
<x-navbar />
<div class="flex flex-col w-4/5 mx-auto my-3">
    <div class="grid grid-cols-1">
        <div class="">
            <livewire:patient-table searchable="name, id" />
            <a class="flex mx-auto my-auto p-2 border-2 rounded-lg border-green-500 float-right text-green-500 hover:bg-green-500 hover:text-white"
                href={{ route('patients.export') }}>
                <x-spreadsheeticon /> Export Patients as
                CSV
            </a>
        </div>
    </div>
</div>
@endsection