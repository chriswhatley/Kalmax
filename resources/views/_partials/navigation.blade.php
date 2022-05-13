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