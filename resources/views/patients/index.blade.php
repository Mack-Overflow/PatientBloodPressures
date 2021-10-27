@extends('layouts.app')
@section('content')
<div class="flex flex-col w-3/4 mx-auto">
    <div class="grid grid-cols-12">
        <div class="col-span-10">
            <livewire:patient-table searchable="name, id" />
        </div>
        <a class="flex mx-auto my-auto px-auto col-span-2 border-2 border-green-400" href={{ route('patients.export')
            }}> Export as
            CSV</a>
    </div>
</div>
@endsection