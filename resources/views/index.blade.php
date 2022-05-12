<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="{{ asset('css/app.css') }}" rel="stylesheet">	
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
		<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	</head>
	<body class="font-sans text-slate-800">

		<nav class="fixed inset-x-0 top-0 z-10 text-white bg-[#00171f]">
			<div class="container mx-auto px-4 md:px-6 lg:pl-10">
				<div class="relative flex justify-between h-24">

					<div class="flex items-center">
						<div class="shrink-0 flex items-center">
							<a href="/">
								<img class="h-10 md:h-14 w-auto" src="{{ asset('images/layout/kalmax-logo.svg') }}" alt="Kalmax International">
							</a>
						</div>
					</div>

					<div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0" x-data="{ show: false }">
						<div class="hidden lg:flex sm:space-x-4 ">
							<a href="#" class="pt-2 text-gray-200 hover:text-sky-500 transition duration-300">
								<svg xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 22 22" fill="currentColor">
									<path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
								</svg>
							</a>
							<a href="#" class="text-gray-200 hover:text-sky-500 px-3 py-2 rounded-md text-sm font-semibold uppercase transition duration-300">Commercial</a>
							<a href="#" class="text-gray-200 hover:text-sky-500 px-3 py-2 rounded-md text-sm font-semibold uppercase transition duration-300">Residential</a>
							<a href="#" class="text-gray-200 hover:text-sky-500 px-3 py-2 rounded-md text-sm font-semibold uppercase transition duration-300">People</a>
							<a href="#" class="text-gray-200 hover:text-sky-500 px-3 py-2 rounded-md text-sm font-semibold uppercase transition duration-300">News</a>
							<a href="#" class="text-gray-200 hover:text-sky-500 px-3 py-2 rounded-md text-sm font-semibold uppercase transition duration-300">Tennants Area</a>
							<a href="#" class="bg-sky-500 text-white px-3 py-2 rounded-md text-sm font-medium upper uppercase" aria-current="page">Contact</a>
						</div>

						<div class="absolute inset-y-0 right-0 flex items-center lg:hidden">
							<!-- Mobile menu button-->
							 <button 
							 	type="button"
							 	class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 text-white bg-gray-700 focus:outline-none"
							 	@click="show = !show"
							 	@click.outside="show = false"
							 	:aria-expanded="show ? 'true' : 'false'"
							 	aria-controls="mobile-menu"
							 >
								<span class="sr-only">Open main menu</span>
								<div class="hamburger" :class="{ 'is-active': show }">
									<span class="line"></span>
									<span class="line"></span>
									<span class="line"></span>
								</div>

							</button>
						</div>

						<!-- Mobile menu, show/hide based on menu state. -->
						<div
							style="display: none"
							class="lg:hidden relative"
							x-show="show"
							:class="{ 'is-active': show }"
							x-transition:enter="transition ease-out duration-500"
					        x-transition:enter-start="opacity-0 scale-90"
					        x-transition:enter-end="opacity-100 scale-100"
					        x-transition:leave="transition ease-in duration-500"
					        x-transition:leave-start="opacity-100 scale-100"
					        x-transition:leave-end="opacity-0 scale-90"		
						>
							<div x-show="show" class="absolute top-6 -right-2 p-2 rounded-md bg-gray-700 focus:outline-none">
								<a href="#" class="bg-sky-500 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>
								<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
								<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
								<a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

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


		<footer class="pt-12 md:pt-24 bg-[#00171f]">
			<div class="container mx-auto px-4 md:px-6">
				<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-16 text-white">
					<div>
						<img class="h-10 md:h-14 w-auto" src="{{ asset('images/layout/kalmax-logo.svg') }}" alt="Kalmax International" />

						<div class="mt-8 w-full md:w-1/2 lg:w-full">
							<div class="flex items-center">
								<svg class="mr-3 w-4 h-4 text-sky-500" fill="currentColor" viewBox="0 0 20 20">                               
	                                <path d="M10 20a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-1-7.59V4h2v5.59l3.95 3.95-1.41 1.41L9 10.41z"></path>
	                            </svg>                        
	                            <div class="block uppercase text-lg font-semibold">Office Hours</div>	
							</div>
                            
                            <div class="mt-4 space-y-4">
                            	<p>Monday - Thursday: 09:00 - 17:00</p>
                            	<p>Friday: 09:00 - 16:30</p>
                            </div>

                            <div class="mt-10 w-40">
								<a href="" target="_blank" rel="noopener">
									<img src="{{ asset('images/layout/linkedin-logo.svg') }}" alt="LinkedIn">
								</a>
                            </div>
		                </div>
					</div>

					<div class="mt-8 sm:mt-0">
						<h2 class="font-extrabold text-2xl uppercase title-accent">Headquarters</h2>

						<div class="mt-8">
							<p>
								<span class="block uppercase text-lg font-semibold">Kalmax International</span>
								5 Richmond Place<br />
								Tunbridge Wells<br />
								Kent<br />
								TN2 5JZ<br />
								U.K.
							</p>

							<div class="flex items-center mt-6">
                                <svg class="mr-3 w-4 h-4 text-sky-500" fill="currentColor" viewBox="0 0 20 20">                               
                                    <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"></path>
                                </svg>                        
                                <a class="footer-link"> +44 (0)1892 516 842</a>
                            </div>                 

                            <div class="mt-2">
                                <div class="flex items-center">
                                    <svg class="mr-3 w-4 h-4 text-sky-500" fill="currentColor" viewBox="0 0 20 20">                               
                                        <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"></path>
                                    </svg> 
                                                            
                                    <a href="mailto:uk@kalmax.eu" class="hover:text-sky-500 transition duration-300">info@kalmax.eu</a>
                                </div>
                            </div>   
						</div>
					</div>					

					<div class="mt-8 sm:mt-0">
						<h2 class="font-extrabold text-2xl uppercase title-accent">European Locations</h2>

                       <div class="mt-8">
							<p>
								<span class="block uppercase text-lg font-semibold">Andorra</span>
								Solana de Pal A.2.2<br />
								C.General<br />
								Pal<br />
								La Massana<br />
								AD400
							</p>

							<div class="flex items-center mt-6">
                                <svg class="mr-3 w-4 h-4 text-sky-500" fill="currentColor" viewBox="0 0 20 20">                               
                                    <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"></path>
                                </svg>                        
                                <a class="footer-link"> +349 829 533</a>
                            </div>                 

                            <div class="mt-2">
                                <div class="flex items-center">
                                    <svg class="mr-3 w-4 h-4 text-sky-500" fill="currentColor" viewBox="0 0 20 20">                               
                                        <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"></path>
                                    </svg> 
                                                            
                                    <a href="mailto:uk@kalmax.eu" class="hover:text-sky-500 transition duration-300">andorra@kalmax.eu</a>
                                </div>
                            </div>   
						</div>

						<div class="mt-8">
							<p>
								<span class="block uppercase text-lg font-semibold">Spain</span>
								Los Robles, 3B<br />
								Carrer De La Xarxas<br />
								Pt Pollenca<br />
								Mallorca<br />
								07470
							</p>

							<div class="flex items-center mt-6">
                                <svg class="mr-3 w-4 h-4 text-sky-500" fill="currentColor" viewBox="0 0 20 20">                               
                                    <path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"></path>
                                </svg>                        
                                <a class="footer-link"> +34 676 800 249</a>
                            </div>                 

                            <div class="mt-2">
                                <div class="flex items-center">
                                    <svg class="mr-3 w-4 h-4 text-sky-500" fill="currentColor" viewBox="0 0 20 20">                               
                                        <path d="M18 2a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h16zm-4.37 9.1L20 16v-2l-5.12-3.9L20 6V4l-10 8L0 4v2l5.12 4.1L0 14v2l6.37-4.9L10 14l3.63-2.9z"></path>
                                    </svg> 
                                                            
                                    <a href="mailto:uk@kalmax.eu" class="hover:text-sky-500 transition duration-300">mallorca@kalmax.eu</a>
                                </div>
                            </div>   
						</div>


					</div>

					<div class="mt-8 sm:mt-0">
						<h2 class="font-extrabold text-2xl uppercase title-accent">Quick Links</h2>
					</div>

				</div>
			</div>

			<section class="mt-12 md:mt-24 py-6 bg-slate-800 text-white">
				<div class="container mx-auto px-4 md:px-6">
					<div class="flex justify-between text-base uppercase">
						<div>
							<p>Kalmax International Limited &copy; 2022 All Rights Reserved</p>
						</div>
						<div>
							<a href="" class="hover:text-sky-500 transition duration-300">Terms &amp; Conditions</a> <span class="inline-block px-2">|</span> <a href="" class="hover:text-sky-500 transition duration-300">Privacy Policy</a>
						</div>	
					</div>
				</div>
			</section>
		</footer>

	</body>
</html>