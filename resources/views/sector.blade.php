@extends('layouts.master')

@section('main')

	<x-sidekick 
		image="{{ $sector->image ?? 'parliament'}}" 
		extraClasses="h-[30rem] bg-bottom"
	/>

	<section class="py-12 md:py-24 sectors" id="sectors">
		
	    	<div class="container mx-auto px-4 md:px-8">

	    		@empty($sector)
	    			<h2 class="font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl uppercase title-accent">What we do</h2> 

				  	<div class="mt-6 text-lg lg:text-xl">
			    		<p>To find out more about what we do and how Kalmax might be able to offer a partnership, please click on one of the sectors below.</p>
			    	</div>

					
					<div class="mt-8 grid gap-8 sm:grid-cols-1 md:grid-cols-3 text-white">
			            
			            <a href="/sectors/commercial" class="sector commercial">
			                <div>
			                	<h2 class="font-extrabold text-2xl uppercase title-accent">Commercial <span class="block sm:inline-flex">Property</span></h2>
			                </div>
			            </a>

			            <a href="/sectors/residential" class="sector residential">
			                <div>
			                	<h2 class="font-extrabold text-2xl uppercase title-accent">Residential <span class="block sm:inline-flex">Property</span></h2>
			                </div>
			            </a>

			            <a href="/sectors/people" class="sector people">
			                <div>
			                	<h2 class="font-extrabold text-2xl uppercase title-accent">Investors <span class="block sm:inline-flex">in People</span></h2>
			                </div>
			            </a>

			        </div>	
			
		        @endempty

		        @isset($sector)
					<h2 class="font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl uppercase title-accent">{{ $sector->title }}</h2> 

				   <div class="mt-6 md:mt-8">
			   			{{ $sector->description }}
				   </div>
				@endisset 

	        </div>	
		

		
			
	</section>

@endsection