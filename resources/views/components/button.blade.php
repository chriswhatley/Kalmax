@props(['url' => '/', 'cta' =>'Find out more'])

<div class="inline-flex">
   <a href="{{ $url }}" {{ $attributes->merge(['class' => 'button']) }}>
   		<span>{{ $cta }}</span>
   		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
			<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
		</svg>
   </a>
</div>