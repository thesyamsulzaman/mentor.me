@extends('layouts.app')
@include('components.admin_navbar')

@section('content')
<section class="bg-white shadow">
  <div class="container max-w-container mx-auto py-3 flex flex-col lg:flex-row">
    <div class="bg-gray-800 h-24 w-full lg:w-1/3"></div>
    <div class="bg-indigo-800 h-24 w-full lg:w-2/3"></div>
  </div>
</section>
@endsection
