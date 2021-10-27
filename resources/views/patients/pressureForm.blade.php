@extends('layouts.app')
@section('content')
<div>
    <x-navbar />
    <div class="mt-10 sm:mt-0 w-3/4 mx-auto px-4 border-2 flex border-gray-200 rounded-xl">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Patient Information</h3>
                    <p class="mt-1 text-sm text-gray-600">
                        Enter Patient Information
                    </p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="/postRecord" method="POST">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">

                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="fname" class="block text-sm font-medium text-gray-700">First
                                        name</label>
                                    <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="lname" class="block text-sm font-medium text-gray-700">Last
                                        name</label>
                                    <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="patient_id" class="block text-sm font-medium text-gray-700">
                                        Patient ID
                                    </label>
                                    <input type="text" name="patient_id" id="patient_id"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email
                                        address</label>
                                    <input type="text" name="email-address" id="email-address" autocomplete="email"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                                    <select id="country" name="country" autocomplete="country-name"
                                        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                </div>

                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                    <label for="pressure" class="block text-sm font-medium text-gray-700">
                                        Blood Pressure Reading
                                    </label>
                                    <input type="text" name="pressure" id="pressure"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <input type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            </input>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection