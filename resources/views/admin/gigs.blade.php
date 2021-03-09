@extends('layouts.app')
@include('components.admin_navbar')

@section('content')
<section class="bg-white shadow">
  <div class="container max-w-container mx-auto py-3 flex flex-col lg:flex-row">
    <div class="h-auto w-full lg:w-1/3 px-2">
    	<form method="POST" action="gigs">
    		@csrf

    		<div class="form-group">
    			<label>Title</label>
    			<input 
                  type="text" 
                  name="title" 
                  class="form-control @error('title') border-2 border-red-600 @enderror" 
                />

                @error('title')
                   <p class="text-red-500 text-xs mt-1">
                    {{ $message }}
                   </p>
                @enderror
    		</div>

    		<div class="form-group">
    			<label>Body</label>
    			<textarea 
                  name="body" 
                  class="form-control @error('body') border-2 border-red-600 @enderror">
    			</textarea>

                @error('body')
                   <p class="text-red-500 text-xs mt-1">
                    {{ $message }}
                   </p>
                @enderror
    		</div>

    		<div class="form-group">
    			<input type="submit" value="Save" name="" class="btn btn-black btn-block">
    		</div>
    	</form>
    	
    </div>
    <div class="bg-indigo-800 h-24 w-full lg:w-2/3"></div>
  </div>
</section>
@endsection

