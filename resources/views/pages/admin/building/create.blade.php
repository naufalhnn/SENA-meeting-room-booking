<x-app-layout>
		<x-slot name="header">
				<h2 class="text-xl font-semibold leading-tight text-gray-800">
						{{ __('Add building') }}
				</h2>
		</x-slot>

		<div class="py-12">
				<div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
						<div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">
								<form action="{{ route('buildings.store') }}" method="post">
										@csrf
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="name">Building name</label>
												<input type="text" name="name" id="name" placeholder="Enter buiding name" class="my-1 rounded-md">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="address">Address</label>
												<input type="text" name="address" id="address" placeholder="Enter buiding address"
														class="my-1 rounded-md">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="city">City</label>
												<input type="text" name="city" id="city" placeholder="Enter city" class="my-1 rounded-md">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="provice">Provice</label>
												<input type="text" name="provice" id="provice" placeholder="Enter provice" class="my-1 rounded-md">
										</div>
										<div class="mx-auto my-3 flex w-11/12 flex-col">
												<label for="postal_code">Postal code</label>
												<input type="number" name="postal_code" id="postal_code" placeholder="Enter postal code"
														class="my-1 rounded-md">
										</div>
										<div class="mr-12 text-right">
												<button
														class="mr-auto rounded-md bg-primary px-4 py-2 text-white transition duration-300 hover:bg-blue-900">Save</button>
										</div>
								</form>
						</div>
				</div>
		</div>
</x-app-layout>