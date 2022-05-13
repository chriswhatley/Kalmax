@extends('layouts.master')

@section('main')

	<header class="hero">
		<!-- Overlay Background + Center Control -->
		<div class="h-screen bg-opacity-50 bg-black flex items-center justify-start text-white">
			<div class="container mx-auto px-4 md:px-6 lg:pl-10 uppercase">
				<h1 class="sm:mt-20 font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl title-accent">
					Investors In Property<br />
					Investors in People
           		</h1>
	            <div class="inline-flex">
		           <a href="" class="md:mt-8 lg:mt-10 flex items-center px-3 py-2 my-5 bg-sky-500 hover:bg-sky-700 text-sm md:text-base font-bold text-white uppercase rounded border-2 border-transparent shadow-md transition duration-500">
		           		<span>Find Out More</span>
		           		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
							<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
						</svg>
		           </a>
	            </div>
	       
	            <div class="flex sm:hidden lg:flex justify-center">
	                <a href="#sectors" class="absolute bottom-0 pb-6">
	                    <div class="mouse_scroll">
	                        <div class="mouse">
	                            <div class="wheel"></div>
	                        </div>
	                        <div>
	                            <span class="m_scroll_arrows one"></span>
	                            <span class="m_scroll_arrows two"></span>
	                            <span class="m_scroll_arrows three"></span>
	                        </div>
	                    </div>                                
	                </a>     
	            </div>

	            <div id="sectors"></div>

	        </div>
	    </div>
	</header>

	<section class="py-12 md:py-24 sectors">
		<div class="container mx-auto px-4 md:px-6 grid gap-8 sm:grid-cols-1 md:grid-cols-3 text-white">
            
            <a href="" class="block w-full h-full cursor-pointer sector">
                <div class="commercial">
                	<h2 class="font-extrabold text-2xl uppercase title-accent">Commercial <span class="block sm:inline-flex">Property</span></h2>
                </div>
            </a>

            <a href="" class="block w-full h-full cursor-pointer sector">
                <div class="residential">
                	<h2 class="font-extrabold text-2xl uppercase title-accent">Residential <span class="block sm:inline-flex">Property</span></h2>
                </div>
            </a>

            <a href="" class="block w-full h-full cursor-pointer sector">
                <div class="people">
                	<h2 class="font-extrabold text-2xl uppercase title-accent">Investors <span class="block sm:inline-flex">in People</span></h2>
                </div>
            </a>
        </div>	
	</section>

	<section class="intro bg-center bg-cover bg-no-repeat text-white">
		<div class="container mx-auto px-4 md:px-6 lg:px-10 py-12 md:py-24">
			<div class="w-full md:w-2/3">
				<h2 class="font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl title-accent uppercase">
					Identifying & securing sound investments since 1955.
           		</h2>
           		<div class="mt-6 md:mt-8 lg:mt-10">
           			<p class="text-base lg:text-xl">
           				Our strength is derived from our longevity. We are fortunate to have an incredibly experienced team and an exceptionally solid unencumbered asset base on which to build. Through a continual process of acquisition and improvement financed primarily out of cash-flow, we are producing a steady and controlled expansion of the company.
           			</p>
           		
	           		<div class="inline-flex">
			           <a href="" class="mt-6 md:mt-8 lg:mt-10 flex items-center px-3 py-2 my-5 bg-sky-500 hover:bg-sky-700 text-sm md:text-base font-bold text-white uppercase rounded border-2 border-transparent shadow-md transition duration-500">
			           		<span>Find Out More</span>
			           		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
								<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
							</svg>
			           </a>
		            </div>
		        </div>
			</div>
			
		</div>
	</section>

	<section class="py-12 md:py-24 sectors bg-slate-50">
		<div class="container mx-auto px-4 md:px-6 lg:px-10">
			<div>
				<h2 class="font-extrabold text-2xl uppercase title-accent">Our Partners</h2>
			</div>

			<div class="mt-6 grid gap-8 grid-cols-2 md:grid-cols-4">
				<div>
					<img src="{{ asset('images/partners/cadwell-developments.svg') }}" alt="Cadwell Developments">
				</div>
				<div>
					<img src="{{ asset('images/partners/noble-inns.svg') }}" alt="Noble Inns">
				</div>
				<div>
					<img src="{{ asset('images/partners/pi-property-insurance.svg') }}" alt="Pi Property Insurance">
				</div>
				<div>
					<img src="{{ asset('images/partners/rics.svg') }}" alt="RICS">
				</div>
			</div>
		</div>
	</section>

	<section class="py-12 md:py-24">
		<div class="container mx-auto px-4 md:px-6 lg:px-10 featured-project">
			<div class="grid gap-8 md:gap-16 sm:grid-cols-1 md:grid-cols-2 flex items-center">					
				<div class="h-48 md:h-80 lg:h-96 bg-cover bg-center bg-no-repeat rounded-lg featured-project-image">
					<span class="sr-only">Featured Project : Addison/Melville Road</span>
				</div>

				<div class="">
					<h2 class="font-extrabold text-2xl uppercase title-accent">Development : Addison/Melville Road</h2>

	           		<div class="mt-6 md:mt-8 lg:mt-10 text-base lg:text-lg">
	           			<p>Our application has been with Brighton & Hove Council for some time now and after a few changes, we feel our chances are good.</p>
	           			<p class="mt-4">Lewis Planning have been incredibly helpful through the planning process as have DLG Architects with all the last minute changes "suggested" by the Planning Department.</p>
	           		
		           		<div class="inline-flex">
				           <a href="" class="mt-6 md:mt-8 lg:mt-10 flex items-center px-3 py-2 my-5 bg-sky-500 hover:bg-sky-700 text-sm md:text-base font-bold text-white uppercase rounded border-2 border-transparent shadow-md transition duration-500">
				           		<span>Find Out More</span>
				           		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
									<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
								</svg>
				           </a>
			            </div>
			        </div>
				</div>
			</div>

		</div>
	</section>

	<section class="history bg-center bg-cover bg-no-repeat text-white">
		<div class="container mx-auto px-4 md:px-6 lg:px-10 py-12 md:py-24">
			<div class="w-full md:w-1/2">
				<h2 class="font-extrabold text-2xl sm:text-3xl md:text-4xl xl:text-5xl title-accent uppercase">
					Who We Are
           		</h2>
           		<div class="mt-6 md:mt-8 lg:mt-10 text-base lg:text-lg">
           			<p>Founded in 1955 by Victor “Jack” Richard and Douglas Gaten, Kalmax started it’s life as Richard & Gaten Ltd, owning garages and petrol stations in the South East of England.</p>
					<p class="mt-4">After only a few years, Jack bought Doug out, and continued to build the company from the ground up. When his two sons Karl and Max were born, he changed the name to Kalmax in the hope that one day, they would carry on the legacy.</p>
           		
	           		<div class="inline-flex">
			           <a href="" class="mt-6 md:mt-8 lg:mt-10 flex items-center px-3 py-2 my-5 bg-sky-500 hover:bg-sky-700 text-sm md:text-base font-bold text-white uppercase rounded border-2 border-transparent shadow-md transition duration-500">
			           		<span>Find Out More</span>
			           		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
								<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
							</svg>
			           </a>
		            </div>
		        </div>
			</div>
			
		</div>
	</section>

	<section class="pt-12 pb-10 md:py-24 md:pb-16 sectors">
		<div class="container mx-auto px-4 md:px-6">

			<h2 class="font-extrabold text-2xl uppercase title-accent">Company News</h2>

	        <div class="mt-6 grid gap-8 grid-cols-1 md:grid-cols-3 flex">

	        	<!-- Column contents -->
	        	<article class="news">
	        		<div class="news-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url({{ asset('images/news-people.jpg') }});"></div>
	        		<div class="flex-1 p-6 space-y-6">
	        			<header>
	                		<span class="font-base uppercase text-sky-500">People</span>
	                		<h3 class="mt-1 font-extrabold text-xl uppercase">This is a news title</h3>		
		                </header>									
	        			<p class="mt-6">This category is designed to recognise products or solutions that have been developed for either active or passive fire protection.</p>
	        		</div>

	        		<footer class="inline-flex p-6">
			            <a href="#" class="flex items-center px-3 py-2 my-5 bg-sky-500 hover:bg-sky-700 text-sm lg:text-base font-bold text-white uppercase rounded border-2 border-transparent transition duration-500">
			           		<span>Read More</span>
			           		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
								<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
							</svg>
			           </a>
                	</footer>
	        	</article>

	        	<!-- Column contents -->
	        	<article class="news">
	        		<div class="news-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url({{ asset('images/news-residential.jpg') }});"></div>
	        		<div class="flex-1 p-6 space-y-6">
	        			<header>
	                		<span class="font-base uppercase text-sky-500">Residential</span>
	                		<h3 class="mt-1 font-extrabold text-xl uppercase">This is another news title</h3>		
		                </header>									
	        			<p class="mt-6">This category is designed to recognise products or solutions that have been developed for either active or passive fire protection.</p>
	        		</div>

	        		<footer class="inline-flex p-6">
			            <a href="#" class="flex items-center px-3 py-2 my-5 bg-sky-500 hover:bg-sky-700 text-sm lg:text-base font-bold text-white uppercase rounded border-2 border-transparent transition duration-500">
			           		<span>Read More</span>
			           		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
								<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
							</svg>
			           </a>
                	</footer>
	        	</article>

	        	<!-- Column contents -->
	        	<article class="news">
	        		<div class="news-image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url({{ asset('images/news-commercial.jpg') }});"></div>
	        		<div class="flex-1 p-6 space-y-6">
	        			<header>
	                		<span class="font-base uppercase text-sky-500">Commercial</span>
	                		<h3 class="mt-1 font-extrabold text-xl uppercase">This is yet another news title</h3>		
		                </header>									
	        			<p class="mt-6">
	        				This category is designed to recognise products or solutions that have been developed for either active or passive fire protection. The installation of these products must have taken place since 1 January 2020 and the products must have been launched no earlier than 1 January 2020.
	        			</p>
	        		</div>

	        		<footer class="inline-flex p-6">
			            <a href="#" class="flex items-center px-3 py-2 my-5 bg-sky-500 hover:bg-sky-700 text-sm lg:text-base font-bold text-white uppercase rounded border-2 border-transparent transition duration-500">
			           		<span>Read More</span>
			           		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
								<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
							</svg>
			           </a>
                	</footer>
	        	</article>

		    </div>

		    <div class="mt-6 flex justify-center md:justify-end">
		    	<div class="w-64">
		    		<a href="#" class="flex items-center px-3 py-2 my-5 bg-sky-500 hover:bg-sky-700 text-sm lg:text-base font-bold text-white uppercase rounded border-2 border-transparent transition duration-500">
		           		<span>More Kalmax News</span>
		           		<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
							<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
						</svg>
		           </a>
		    	</div>
		    </div>

		</div>
	</section>

@endsection