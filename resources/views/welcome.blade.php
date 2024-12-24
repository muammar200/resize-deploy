<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>MeowCafe</title>
		<link rel="stylesheet" href="{{ asset('styles/output.css') }}" />
		<link
			href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
			rel="stylesheet"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
			rel="stylesheet"
		/>
	</head>
	<body>
		<main
			class="py-[75px] px-[70px] bg-backgroundPrimary min-h-screen flex gap-16"
		>
			<div>
				<p class="text-3xl font-bold">
					<span class="text-primary">Meow</span>Cafe
				</p>
				<aside class="min-h-full p-6 mt-6 bg-white w-72 rounded-xl">
					<p class="font-bold">Category</p>
					<div class="flex flex-col mt-4 gap-y-1">
						<button
							class="flex justify-between px-4 py-3 font-bold rounded bg-primary/20 text-primary"
						>
							<div>
								<i class="mr-3 ri-restaurant-line"></i>
								<span>Food</span>
							</div>
							<span class="text-primary/80">{{ $total_food }}</span>
						</button>
						<button
							class="flex justify-between px-4 py-3 font-semibold rounded text-textPrimary"
						>
							<div>
								<i class="mr-3 ri-goblet-line"></i>
								<span>Drink</span>
							</div>
							<span class="text-textPrimary/60">{{ $total_drink }}</span>
						</button>
					</div>
				</aside>
			</div>
			<main class="w-full">
				<p class="text-3xl font-bold">Menu</p>
				<section class="grid grid-cols-3 gap-6 mt-6">
					
					@foreach ( $foods as $food )
					<div class="overflow-hidden bg-white rounded-xl">
						<div
							class="max-h-[300px] overflow-hidden object-cover object-center"
						>
							<img
								src="{{ asset('images/' . $food->image) }}"
								alt=""
								class="w-full h-full"
							/>
						</div>
						<div class="p-5">
							<p class="font-bold">{{ $food->name }}</p>
							<p class="font-bold text-[14px] text-primary"> Rp{{ number_format($food->price, 0, ',', '.') }}</p>
							<button
								class="py-2 px-9 mt-3 bg-[#E2EAF8] rounded-xl font-bold text-bold"
							>
								Pesan
							</button>
						</div>
					</div>
					@endforeach
					

				</section>
			</main>
		</main>
	</body>
</html>