<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Product</title>
    <link rel="stylesheet" href="../styles/output.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet" />
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
                            <a href="./dashboard.html"
                                class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white">
                                <div
                                    class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block">
                                </div>
                                <i class="mr-4 text-lg ri-dashboard-line"></i>
                                <span class="font-semibold">Dashboard</span>
                            </a>
                        </div>
                        <div class="relative px-6">
                            <a href="./products.html"
                                class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white"
                                data-page="active">
                                <div
                                    class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block">
                                </div>
                                <i class="mr-4 text-lg ri-microsoft-line"></i>
                                <span class="font-semibold">Products</span>
                            </a>
                        </div>
                    </section>
                    <div class="h-[1px] bg-[#E0E0E0] w-full my-4"></div>
                    <section>
                        <div class="w-full px-4">
                            <span class="px-4 uppercase text-[#202224] font-bold text-sm w-full flex">Pages</span>
                        </div>
                        <div class="relative px-6">
                            <a href="./orders.html"
                                class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white">
                                <div
                                    class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block">
                                </div>
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
                class="h-[70px] flex py-4 px-7 justify-between items-center flex-grow fixed bg-white left-[240px] right-0">
                <input type="text" name="" id="" placeholder="Search"
                    class="h-full px-4 py-2 border w-96 bg-backgroundPrimary rounded-3xl border-borderPrimary" />
                <div class="flex items-center h-full gap-5">
                    <div class="object-center h-full overflow-hidden rounded-full aspect-square">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc-FErDnFfCZknlWHh1bsg7hcuuAkmi_vmptg9wrrZoA&s"
                            alt="" class="w-full" />
                    </div>
                    <div>
                        <p class="font-bold text-[#404040]">Imank</p>
                        <p class="text-sm font-semibold text-[#565656]">Admin</p>
                    </div>
                </div>
            </nav>
            <main class="p-7 bg-backgroundPrimary min-h-screen w-full mt-[70px]">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        {{-- <a href="{{ route('products.index' class="px-4 text-[30px]">←</a> --}}
                        <p class="text-3xl font-bold">Add Products</p>
                    </div>
                    <div class="flex gap-2">
                        <button type="submit" form="form"
                            class="inline-flex justify-center h-full py-3 text-base font-bold text-white rounded-md bg-primary w-36">
                            <p class="-mb-[2px]">Add</p>
                        </button>
                        <a href=""
                            class="inline-flex justify-center h-full py-3 text-base font-bold text-white bg-red-500 rounded-md w-36">
                            <p class="-mb-[2px]">Delete</p>
                        </a>
                    </div>
                </div>

                <form id="form" method="post" action="/products"
                    class="grid grid-cols-5 font-semibold mt-7 gap-x-8 text-md" enctype="multipart/form-data">
                    @csrf
                    <div
                        class="flex flex-col col-span-3 gap-6 px-8 py-6 bg-white border rounded-lg border-borderPrimary">
                        <div class="flex flex-col gap-3">
                            <label for="product_name">Product Name</label>
                            <input type="text" id="product_name" name="name" placeholder="Input product name"
                                class="px-5 py-2 border rounded-md border-borderPrimary bg-backgroundPrimary" />
                        </div>
                        <div>
                            <fieldset class="flex flex-col gap-3">
                                <p>Category</p>
                                <div class="flex gap-1">

                                    @foreach ($categories as $item)
                                        <div>
                                            <input type="radio" name="category_id" id="{{ $item->name }}"
                                                class="hidden peer" value="{{ $item->id }}" />
                                            <label role="button" for="{{ $item->name }}" tabindex="0"
                                                class="peer-checked:text-white bg-[#D9D9D9] peer-checked:bg-primary px-6 py-2 text-base rounded-md">
                                                {{ ucwords($item->name) }}
                                            </label>
                                        </div>
                                    @endforeach

                                </div>
                            </fieldset>
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="price">Price</label>
                            <input type="text" id="price" name="price" placeholder="Input price"
                                class="px-5 py-2 border rounded-md border-borderPrimary bg-backgroundPrimary" />
                        </div>
                        <div class="flex flex-col gap-3">
                            <label for="stock">Stock</label>
                            <input type="text" id="stock" name="stock" placeholder="Input stock"
                                class="px-5 py-2 border rounded-md border-borderPrimary bg-backgroundPrimary" />
                        </div>
                    </div>
                    <section class="col-span-2 py-6 bg-white border rounded-lg h-fit border-borderPrimary">
                        <p class="px-8 text-lg font-bold">Product Image</p>
                        <div class="h-[1px] border-b border-b-borderPrimary w-full my-4"></div>
                        <div class="px-4">
                            <label for="image-upload" id="drag-area"
                                class="w-full h-[280px] bg-backgroundPrimary border-2 border-[#D9D9D9] border-dashed rounded-lg overflow-hidden cursor-pointer flex justify-center items-center">
                                <input id="image-upload" name="image" type="file" hidden accept="image/*" />
                                <div id="image-viewer"
                                    class="flex flex-col items-center justify-center w-full h-full bg-center bg-no-repeat bg-cover">
                                    <img src="../assets/imagePlaceholder.png" alt="" />
                                    <p class="text-[18px]">
                                        Tarik dan lepas atau
                                        <span class="text-primary">pilih gambar</span>
                                    </p>
                                    <p class="text-base text-black/25">
                                        Mendukung JPG, JPEG, dan PNG
                                    </p>
                                </div>
                            </label>
                        </div>
                    </section>
                </form>
            </main>
        </div>
    </main>
    {{-- <script>
			const form = document.getElementById("form");

			form.addEventListener("submit", (event) => {
				event.preventDefault(); // Prevent the form from submitting

				const formData = new FormData(form);
				console.log(formData);
				// Log form values using console.log()
				for (const [key, value] of formData.entries()) {
					if (value instanceof File) {
						console.log(
							`${key}: File { name: ${value.name}, size: ${value.size} bytes }`
						);
					} else if (value instanceof FileList) {
						console.log(`${key}:`);
						for (const file of value) {
							console.log(
								`  File { name: ${file.name}, size: ${file.size} bytes }`
							);
						}
					} else {
						console.log(`${key}: ${value}`);
					}
				}
			});
		</script> --}}
    <script src="{{ asset('js/imageUploader.js') }}"></script>
</body>

</html>
