@extends('layouts.master')

@section('main')

	<header class="{{ $sector }} bg-no-repeat bg-cover h-96">
		<!-- Overlay Background + Center Control -->
		<div class="h-full bg-opacity-50 bg-black flex items-center justify-start text-white">
			<div class="container mx-auto px-4 md:px-6 lg:pl-10 uppercase">
				<h1 class="sm:mt-20 font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl title-accent">
					{{ $sector ?? 'Sectors' }}
           		</h1>
	        </div>
	    </div>
	</header>

	<section class="py-12 md:py-24">
		This is the {{ $sector }} sector...
	</section>

@endsection