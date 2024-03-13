@props(['products'])
<!-- resources/views/components/product-table.blade.php -->
<table class="w-full whitespace-nowrap" id="productTable">
    <!-- Table headers -->
    <thead class="ltr:text-left rtl:text-right bg-slate-100 dark:bg-zink-600">
        <tr>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort product_code" data-sort="product_code">Product Code</th>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort product_name" data-sort="product_name">Product Name</th>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort category" data-sort="category">Category</th>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort price" data-sort="price">Price</th>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort stock" data-sort="stock">Stock</th>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort revenue" data-sort="revenue">Revenue</th>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 sort status" data-sort="status">Status</th>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 action">Actions</th>
        </tr>
    </thead>
    <!-- Table body -->
    <tbody class="list">
        <!-- Table rows -->
        <tr>
            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                <a href="#!" class="transition-all duration-150 ease-linear product_code text-custom-500 hover:text-custom-600">{{ $product['code'] }}</a>
            </td>
            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 product_name">
                <a href="apps-ecommerce-product-overview.html" class="flex items-center gap-2">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="h-6">
                    <h6 class="product_name">{{ $product['name'] }}</h6>
                </a>
            </td>
            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 category">
                <span class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">{{ $product['category'] }}</span>
            </td>
            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 price">{{ $product['price'] }}</td>
            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 stock">{{ $product['stock'] }}</td>
            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 revenue">{{ $product['revenue'] }}</td>
            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                <span class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{ $product['status'] }}</span>
            </td>
            <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 action">
                <div class="relative dropdown">
                    <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="productAction1" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-horizontal" class="lucide lucide-more-horizontal size-3"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></
                        </svg>
                    </button>
                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="productAction1">
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-product-overview.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye inline-block size-3 ltr:mr-1 rtl:ml-1">
                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <span class="align-middle">Overview</span>
                            </a>
                        </li>
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-product-create.html">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit" class="lucide lucide-file-edit inline-block size-3 ltr:mr-1 rtl:ml-1">
                                    <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <path d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z"></path>
                                </svg>
                                <span class="align-middle">Edit</span>
                            </a>
                        </li>
                        <li>
                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 inline-block size-3 ltr:mr-1 rtl:ml-1">
                                    <path d="M3 6h18"></path>
                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                    <line x1="10" x2="10" y1="11" y2="17"></line>
                                    <line x1="14" x2="14" y1="11" y2="17"></line>
                                </svg>
                                <span class="align-middle">Delete</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
    </tbody>
</table>
