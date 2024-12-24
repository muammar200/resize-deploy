<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Orders</title>
		<link rel="stylesheet" href="../styles/output.css" />
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
		<link rel="shortcut icon" href="../assets/inr.ico" type="image/x-icon" />
	</head>
	<body>
		<main class="flex">
			<aside class="py-6 w-[240px] bg-white h-screen fixed">
				<div class="flex flex-col items-center justify-between w-full h-full">
					<div class="w-full text-center">
						<p class="text-lg font-extrabold">
							<span class="text-primary">Meow</span>Cafe
						</p>
						<section class="flex flex-col mt-8">
							<div class="relative px-6">
								<a
									href="./dashboard"
									class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white"
								>
									<div
										class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block"
									></div>
									<i class="mr-4 text-lg ri-dashboard-line"></i>
									<span class="font-semibold">Dashboard</span>
								</a>
							</div>
							<div class="relative px-6">
								<a
									href="./products"
									class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white"
								>
									<div
										class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block"
									></div>
									<i class="mr-4 text-lg ri-microsoft-line"></i>
									<span class="font-semibold">Products</span>
								</a>
							</div>
						</section>
						<div class="h-[1px] bg-[#E0E0E0] w-full my-4"></div>
						<section>
							<div class="w-full px-4 mb-4">
								<span
									class="px-4 uppercase text-[#202224] font-bold text-sm w-full flex"
									>Pages</span
								>
							</div>
							<div class="relative px-6">
								<a
									href="./orders"
									class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white"
									data-page="active"
								>
									<div
										class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block"
									></div>
									<i class="mr-4 text-lg ri-clipboard-line"></i>
									<span class="font-semibold">Orders</span>
								</a>
							</div>
						</section>
					</div>
					<div class="w-full px-6">
						<button class="flex items-center w-full p-3 rounded-md">
							<i class="mr-4 text-lg ri-logout-circle-line"></i>
							<span class="font-semibold">Logout</span>
						</button>
					</div>
				</div>
			</aside>
			<div class="ml-[240px] flex w-full relative">
				<nav
					class="h-[70px] flex py-4 px-7 justify-between items-center flex-grow fixed bg-white left-[240px] right-0"
				>
					<input
						type="text"
						name=""
						id=""
						placeholder="Search"
						class="h-full px-4 py-2 border w-96 bg-backgroundPrimary rounded-3xl border-borderPrimary"
					/>
					<div class="flex items-center h-full gap-5">
						<div
							class="object-center h-full overflow-hidden rounded-full aspect-square"
						>
							<img
								src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj5r7mceg1cqsh7ZBtZYXjQUwXxjqTXV4qjHWC5Xf3_g&s"
								alt=""
								class="w-full"
							/>
						</div>
						<div>
							<p class="font-bold text-[#404040]">Imank</p>
							<p class="text-sm font-semibold text-[#565656]">Turu</p>
						</div>
					</div>
				</nav>
				<main class="p-7 bg-backgroundPrimary min-h-screen w-full mt-[70px]">
					<p class="text-3xl font-bold">Orders</p>
					<div class="bg-white border mt-7 border-borderPrimary rounded-xl">
						<table class="w-full">
							<thead class="text-left">
								<tr class="border-b border-borderPrimary">
									<th class="py-4 pl-8">ID</th>
									<th class="">Name</th>
									<th class="">Product</th>
									<th class="">Category</th>
									<th class="">Price</th>
									<th class="">Status</th>
									<th class="">Action</th>
								</tr>
							</thead>
							<tbody class="table-row-group font-semibold">
								<tr class="border-b border-b-borborder-borderPrimary">
									<td class="py-6 pl-8">00001</td>
									<td>Christine Brooks</td>
									<td>Fried Rice</td>
									<td>Food</td>
									<td>Rp25.000</td>
									<td>
										<div
											class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
											data-status="complete"
										>
											Completed
										</div>
									</td>
									<td class="h-full">
										<div
											class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
										>
											<button class="px-4 py-2 text-black">
												<i class="ri-check-line"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr class="border-b border-b-borborder-borderPrimary">
									<td class="py-6 pl-8">00001</td>
									<td>Christine Brooks</td>
									<td>Fried Rice</td>
									<td>Food</td>
									<td>Rp25.000</td>
									<td>
										<div
											class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
											data-status="processing"
										>
											Processing
										</div>
									</td>
									<td class="h-full">
										<div
											class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
										>
											<button class="px-4 py-2 text-black">
												<i class="ri-check-line"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr class="border-b border-b-borborder-borderPrimary">
									<td class="py-6 pl-8">00001</td>
									<td>Christine Brooks</td>
									<td>Fried Rice</td>
									<td>Food</td>
									<td>Rp25.000</td>
									<td>
										<div
											class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
											data-status="complete"
										>
											Completed
										</div>
									</td>
									<td class="h-full">
										<div
											class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
										>
											<button class="px-4 py-2 text-black">
												<i class="ri-check-line"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr class="border-b border-b-borborder-borderPrimary">
									<td class="py-6 pl-8">00001</td>
									<td>Christine Brooks</td>
									<td>Fried Rice</td>
									<td>Food</td>
									<td>Rp25.000</td>
									<td>
										<div
											class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
											data-status="processing"
										>
											Processing
										</div>
									</td>
									<td class="h-full">
										<div
											class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
										>
											<button class="px-4 py-2 text-black">
												<i class="ri-check-line"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr class="border-b border-b-borborder-borderPrimary">
									<td class="py-6 pl-8">00001</td>
									<td>Christine Brooks</td>
									<td>Fried Rice</td>
									<td>Food</td>
									<td>Rp25.000</td>
									<td>
										<div
											class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
											data-status="complete"
										>
											Completed
										</div>
									</td>
									<td class="h-full">
										<div
											class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
										>
											<button class="px-4 py-2 text-black">
												<i class="ri-check-line"></i>
											</button>
										</div>
									</td>
								</tr>
								<tr class="border-b border-b-borborder-borderPrimary">
									<td class="py-6 pl-8">00001</td>
									<td>Christine Brooks</td>
									<td>Fried Rice</td>
									<td>Food</td>
									<td>Rp25.000</td>
									<td>
										<div
											class="data-complete:bg-success/20 rounded data-complete:text-success px-4 py-[4px] inline-block data-processing:bg-purple/20 data-processing:text-purple"
											data-status="processing"
										>
											Processing
										</div>
									</td>
									<td class="h-full">
										<div
											class="inline-flex rounded-lg bg-[#FAFBFD] border border-borderPrimary"
										>
											<button class="px-4 py-2 text-black">
												<i class="ri-check-line"></i>
											</button>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</main>
			</div>
		</main>
	</body>
</html>