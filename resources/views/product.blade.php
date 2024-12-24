<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products</title>
    <meta name="description" content="Products of MeowCafe" />
    <link rel="stylesheet" href="../styles/output.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
        rel="stylesheet" />
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
                            <a href="./dashboard"
                                class="flex items-center w-full p-3 rounded-md group data-active:bg-primary data-active:text-white">
                                <div
                                    class="absolute top-0 left-0 hidden w-1 h-full bg-primary rounded-e-lg group-data-active:block">
                                </div>
                                <i class="mr-4 text-lg ri-dashboard-line"></i>
                                <span class="font-semibold">Dashboard</span>
                            </a>
                        </div>
                        <div class="relative px-6">
                            <a href="./products"
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
                        <div class="w-full px-4 mb-4">
                            <span class="px-4 uppercase text-[#202224] font-bold text-sm w-full flex">Pages</span>
                        </div>
                        <div class="relative px-6">
                            <a href="./orders"
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
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRj5r7mceg1cqsh7ZBtZYXjQUwXxjqTXV4qjHWC5Xf3_g&s"
                            alt="" class="w-full" />
                    </div>
                    <div>
                        <p class="font-bold text-[#404040]">Imank</p>
                        <p class="text-sm font-semibold text-[#565656]">إيمان</p>
                    </div>
                </div>
            </nav>
            <main class="p-7 bg-backgroundPrimary w-full min-h-screen mt-[70px]">
                <div class="flex items-center justify-between">
                    <p class="text-3xl font-bold">Products</p>
                    <a href="/addproduct"
                        class="inline-flex justify-center h-full py-3 text-base font-bold text-white rounded-md bg-primary w-36">
                        <p class="-mb-[2px]">Add</p>
                    </a>
                </div>
                <div class="bg-white border mt-7 border-borderPrimary rounded-xl">
                    <table class="w-full table-fixed">
                        <thead class="text-left">
                            <tr class="border-b border-borderPrimary">
                                <th class="w-2/12 py-4 text-center">Image</th>
                                <th class="w-3/12">Product Name</th>
                                <th class="w-3/12">Category</th>
                                <th class="w-3/12">Price</th>
                                <th class="w-3/12">Stock</th>
                                <th class="w-2/12">Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-row-group font-semibold">
                            @foreach ($products as $tes)
                                <tr class="border-b border-borderPrimary">
                                    <td class="flex justify-center py-6">
                                        <div class="overflow-hidden w-14 rounded-xl">
                                            <img src="{{ asset('storage/images/products/' . $tes->image) }}"
                                                alt="" />
                                        </div>
                                    </td>
                                    <td>{{ $tes->name }}</td>
                                    <td>{{ $tes->category->name }}</td>
                                    <td>{{ $tes->price }}</td>
                                    <td>{{ $tes->stock }}</td>
                                    <td class="h-full">
                                        <div
                                            class="inline-flex rounded-lg font-normal bg-[#FAFBFD] border border-borderPrimary">
                                            <a href="{{ '/products/'. $tes->id . '/edit' }}" class="px-4 py-2 text-black" aria-label="edit">
                                                <i class="ri-edit-box-line"></i>
                                            </a>
                                            <div class="w-[1px] border-borderPrimary h-10"></div>
                                            <form action="{{ '/products/' . $tes->id }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="px-4 py-2 text-error">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="mt-7">
                    {{ $products->links() }}
                </div>
            </main>
        </div>
    </main>
</body>

</html>
