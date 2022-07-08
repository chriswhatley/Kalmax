@extends('layouts.master')

@section('main')

	{{-- Refactor this header block into a component that can accept some variables... --}}
	<header class="sidekick">
		<div class="h-full bg-opacity-50 bg-black flex items-center justify-start text-white">
			<div class="container mx-auto">
				<div class="md:w-2/3 lg:w-3/5 xl:w-1/2 mt-24 sm:mt-4 px-6 md:pl-10">
					<h1 class="sm:mt-20 font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl uppercase title-accent">About Us</h1>
	           		<div class="mt-6">
	           			<p>Founded in 1955 by Victor "Jack" Richard and Douglas Gaten, Kalmax started it's life as Richard & Gaten Ltd. owning garages and petrol stations in the South East of England.</p>
		           	</div>	
				</div>
	        </div>
	    </div>
	</header>

	<section class="py-12 md:py-24 sectors">
		<div class="container mx-auto px-6 md:px-10">
			This is the about us bit ...
		</div>
	</section>

@endsection