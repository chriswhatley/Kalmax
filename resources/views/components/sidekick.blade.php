@props([
	'image' => 'parliament', // class reference for the background-image
	'title' =>'Our Areas of Expertise',
	'intro' => '',
	'cta' => 'Find out more',
	'url' => '',
	'extraClasses' => '',
	'contentWidth' => '',	
])

<section {{ $attributes->merge(['class' => 'flex items-center bg-cover bg-center bg-no-repeat bg-fixed text-white '.$extraClasses.' '.$image]) }}>

	<div class="container mx-auto flex px-4 md:px-6 lg:px-10 py-12 md:py-24">
		<div class="{{ $contentWidth }}">
			<h2 class="font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl title-accent uppercase">{{ $title }}</h2>

			@if(strlen('intro') > 0)
	    		<div class="mt-6 md:mt-8 lg:mt-10 text-base lg:text-xl">
	    			{!! $intro !!}				
		        </div>
	        @endif

	        @if(strlen($url) > 0)
	        	<x-button url="{{ $url }}" cta="{{ $cta }}" class="mt-6 md:mt-8 lg:mt-10" />
	        @endif 	
		</div>
	</div>
</section>