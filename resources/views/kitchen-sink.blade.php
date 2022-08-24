@extends('layouts.master')

@section('main')

	<x-sidekick 
		title="Kalmax Style Guide" 
		intro="Development sandbox for styles and UI components" 
		image="sidekick"
		extra-classes="pt-20"
		extra-classes="h-[30rem]"
	/>
	

	<section class="py-12 md:py-24 sectors">
		
		<div class="container mx-auto px-6 md:px-10">
			<h2 class="sm:mt-20 font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl uppercase title-accent">Colour Pallette</h2>
			
			<div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8">
				<div class="w-full h-20 md:h-30 md:p-6 flex items-center justify-center rounded-lg text-xl uppercase text-center text-white bg-[#0ea5e9]">
					<div>
						Primary
						<span class="block w-full text-base md:text-lg">#0ea5e9</span>
					</div>
				</div>

				<div class="w-full h-20 md:h-30 md:p-6 flex items-center justify-center rounded-lg text-xl uppercase text-center bg-[#f7fafc]">
					<div>
						Light-Tint
						<span class="block w-full ttext-base md:text-lg">#f7fafc</span>
					</div>
				</div>

				<div class="w-full h-20 md:h-30 md:p-6 flex items-center justify-center rounded-lg text-xl uppercase text-center text-white bg-[#475668]">
					<div>
						Mid-Tint
						<span class="block w-full text-base md:text-lg">#475668</span>
					</div>	
				</div>

				<div class="w-full h-20 md:h-30 md:p-6 flex items-center justify-center rounded-lg text-xl uppercase text-center text-white bg-[#00161f]">
					<div>
						Dark-Tint
						<span class="block w-full text-base md:text-lg">#00161f</span>
					</div>
				</div>	
			</div>
					
		

			<h2 class="mt-12 sm:mt-20 font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl uppercase title-accent">Titles (with title-accent applied)</h2>

			<h1 class="sm:mt-20 font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl uppercase title-accent">This is an H1 heading</h1>
			<h2 class="sm:mt-20 font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl uppercase title-accent">This is an H2 heading</h2>
			<h3 class="sm:mt-20 font-extrabold text-2xl uppercase title-accent">This is an H3 heading</h3>
			<h4 class="sm:mt-20 font-extrabold text-xl uppercase title-accent">This is an H4 heading</h4>
			<h5 class="sm:mt-20 font-extrabold text-lg uppercase title-accent">This is an H5 heading</h5>
			<h6 class="sm:mt-20 font-extrabold text-base uppercase title-accent">This is an H6 heading</h6 >

			<x-button url="/yet-to-be-decided" cta="This is a CTA button" class="mt-6 md:mt-8 lg:mt-10" />

			<div>
				<h3 class="sm:mt-20 font-extrabold text-2xl uppercase title-accent">This is body text</h3>
				<p class="mt-4 text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque, quisquam? At qui, odit, modi consequuntur porro nihil in, saepe amet repudiandae veritatis temporibus earum illo perferendis nemo architecto laborum quis.</p>
				<p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, perferendis, voluptates. Mollitia, harum minus maiores, maxime, cumque illo, veritatis nam repellendus ea asperiores voluptatibus iste quaerat praesentium blanditiis aspernatur recusandae!</p>
			</div>	

			<h3 class="mt-12 sm:mt-20 font-extrabold text-2xl uppercase title-accent">Features</h3>

			<div class="mt-20 featured-project">
				<div class="grid gap-8 md:gap-16 sm:grid-cols-1 md:grid-cols-2 flex items-center">					
					<div class="">
						<h2 class="font-extrabold text-2xl uppercase title-accent">Image Right</h2>

		           		<div class="mt-6 md:mt-8 lg:mt-10 text-base lg:text-lg">
		           			<p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Expedita, necessitatibus cupiditate aperiam soluta nesciunt eligendi eos velit ratione perferendis atque exercitationem cumque doloribus enim pariatur autem itaque illum ab earum.</p>
		           			<p class="mt-4">Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Suscipit harum nisi aspernatur quos excepturi consectetur earum tempore, in reprehenderit? Optio, saepe sequi aperiam ut officia officiis, cum vel tempore est?</p>

				            <x-button cta="Find Out More" class="mt-6 md:mt-8 lg:mt-10"   />
				        </div>
					</div>

					<div class="h-48 md:h-80 lg:h-96 bg-cover bg-center bg-no-repeat rounded-lg featured-project-image">
						<span class="sr-only">Featured Project : Addison/Melville Road</span>
					</div>
				</div>
			</div>

			<div class="mt-20 featured-project">
				<div class="grid gap-8 md:gap-16 sm:grid-cols-1 md:grid-cols-2 flex items-center">					
					<div class="h-48 md:h-80 lg:h-96 bg-cover bg-center bg-no-repeat rounded-lg featured-project-image">
						<span class="sr-only">Featured Project : Addison/Melville Road</span>
					</div>

					<div class="">
						<h2 class="font-extrabold text-2xl uppercase title-accent">Image Left</h2>

		           		<div class="mt-6 md:mt-8 lg:mt-10 text-base lg:text-lg">
		           			<p>Lorem, ipsum dolor sit amet, consectetur adipisicing elit. Expedita, necessitatibus cupiditate aperiam soluta nesciunt eligendi eos velit ratione perferendis atque exercitationem cumque doloribus enim pariatur autem itaque illum ab earum.</p>
		           		
				            <x-button cta="Find Out More" class="mt-6 md:mt-8 lg:mt-10"   />
				        </div>
					</div>
				</div>
			</div>

			<h3 class="mt-12 sm:mt-20 font-extrabold text-2xl uppercase title-accent">'Cards'</h3>						

			<div class="mt-6 grid gap-8 sm:grid-cols-1 md:grid-cols-3 text-white">
            
	            <a href="/sector/commercial" class="sector commercial">
	                <div>
	                	<h2 class="font-extrabold text-2xl uppercase title-accent">Commercial <span class="block sm:inline-flex">Property</span></h2>
	                </div>
	            </a>

	            <a href="/sector/residential" class="sector residential">
	                <div>
	                	<h2 class="font-extrabold text-2xl uppercase title-accent">Residential <span class="block sm:inline-flex">Property</span></h2>
	                </div>
	            </a>

	            <a href="/sector/people" class="sector people">
	                <div>
	                	<h2 class="font-extrabold text-2xl uppercase title-accent">Investors <span class="block sm:inline-flex">in People</span></h2>
	                </div>
	            </a>

	        </div>


			<h3 class="mt-12 sm:mt-20 font-extrabold text-2xl uppercase title-accent">'Article Cards'</h3>
			
			<div class="mt-6 grid gap-8 grid-cols-1 md:grid-cols-3 flex">

	        	<!-- Column contents -->
	        	<article class="news">
	        		<div class="news-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url({{ asset('images/news-people.jpg') }});"></div>
	        		<div class="flex-1 p-6 space-y-6">
	        			<header>
	                		<span class="text-sm uppercase text-sky-500">Meta title</span>
	                		<h3 class="mt-1 font-extrabold text-xl uppercase">This is the title</h3>		
		                </header>									
	        			<p class="mt-6">This is the card teaser/intro/description text</p>
	        		</div>

	        		<footer class="inline-flex p-6">
			        	<x-button cta="Find Out More"  />
                	</footer>
	        	</article>

	        	<!-- Column contents -->
	        	<article class="news">
	        		<div class="news-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url({{ asset('images/news-residential.jpg') }});"></div>
	        		<div class="flex-1 p-6 space-y-6">
	        			<header>
	                		<span class="text-sm uppercase text-sky-500">Meta title</span>
	                		<h3 class="mt-1 font-extrabold text-xl uppercase">This is the title</h3>		
		                </header>									
	        			<p class="mt-6">This is the card teaser/intro/description text</p>
	        		</div>

	        		<footer class="inline-flex p-6">
			            <x-button cta="Read More"  />
                	</footer>
	        	</article>

	        	<!-- Column contents -->
	        	<article class="news">
	        		<div class="news-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url({{ asset('images/news-commercial.jpg') }});"></div>
	        		<div class="flex-1 p-6 space-y-6">
	        			<header>
	                		<span class="text-sm uppercase text-sky-500">Meta title</span>
	                		<h3 class="mt-1 font-extrabold text-xl uppercase">This is the title</h3>		
		                </header>									
	        			<p class="mt-6">This is the card teaser/intro/description text</p>
	        		</div>

	        		<footer class="inline-flex p-6">
			        	<x-button cta="Some other CTA"  />
                	</footer>
	        	</article>

		    </div>

		    <h3 class="mt-12 sm:mt-20 font-extrabold text-2xl uppercase title-accent">Forms</h3>
			<div class="my-12 max-w-md">
				<div class="grid grid-cols-1 gap-6">
					<label class="block">
						<span class="text-gray-700">Title</span>
						<select class="
						block
						w-full
						mt-1
						rounded-md
						border-gray-300
						shadow-sm
						focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
						">
							<option value="Please Select">Please Select...</option>
							<option>Mr</option>
							<option>Mrs</option>
							<option>Ms</option>
							<option>Miss</option>
							<option>Other</option>
						</select>
					</label>
					<label class="block">
						<span class="text-gray-700">First name</span>
						<input type="text" class="
						mt-1
						block
						w-full
						rounded-md
						border-gray-300
						shadow-sm
						focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
						" placeholder="">
					</label>
					<label class="block">
						<span class="text-gray-700">Last name</span>
						<input type="text" class="
						mt-1
						block
						w-full
						rounded-md
						border-gray-300
						shadow-sm
						focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
						" placeholder="">
					</label>
					<label class="block">
						<span class="text-gray-700">Email address</span>
						<input type="email" class="
						mt-1
						block
						w-full
						rounded-md
						border-gray-300
						shadow-sm
						focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
						" placeholder="john@example.com">
					</label>
					<label class="block">
						<span class="text-gray-700">When is your event?</span>
						<input type="date" class="
						mt-1
						block
						w-full
						rounded-md
						border-gray-300
						shadow-sm
						focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
						">
					</label>
					<label class="block">
						<span class="text-gray-700">What type of event is it?</span>
						<select class="
						block
						w-full
						mt-1
						rounded-md
						border-gray-300
						shadow-sm
						focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
						">
							<option>Corporate event</option>
							<option>Wedding</option>
							<option>Birthday</option>
							<option>Other</option>
						</select>
					</label>
					<label class="block">
						<span class="text-gray-700">Additional details</span>
						<textarea class="
						mt-1
						block
						w-full
						rounded-md
						border-gray-300
						shadow-sm
						focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50
						" rows="3"></textarea>
					</label>
					<div class="block">
						<div class="mt-2">
							<div>
								<label class="inline-flex items-center">
									<input type="checkbox" class="
									rounded
									border-gray-300
									text-indigo-600
									shadow-sm
									focus:border-indigo-300
									focus:ring
									focus:ring-offset-0
									focus:ring-indigo-200
									focus:ring-opacity-50
									" checked="">
									<span class="ml-2">Email me news and special offers</span>
								</label>
							</div>
						</div>
					</div>
					  <div>
					  	<button type="submit" class="group relative w-full flex justify-center px-3 py-2 my-5 border border-transparent text-sm md:text-base font-bold text-white uppercase rounded-md bg-sky-500 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500 transition duration-500">
					  		<span class="absolute left-0 inset-y-0 flex items-center pl-3">
					  			<svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true">
					  				<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
					  			</svg>
					  		</span>
					  		Send
					  	</button>
					  </div>
					</div>
				</div>
			</div>


		</div>
	
	</section>

	<x-sidekick 
		title="Sidekick block" 
		intro="This block is also part of the guide - referred to as a 'Sidekick', think of it as a little brother to a 'Hero' block as used on the homepage, rendered via a customisable component." 
		{{-- image="parliament" --}}
		cta="Custom CTA in here!"
		url="/yet-to-be-decided"  
	/>

@endsection