<div class="card" id="productListTable">
    <div class="card-body">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-12">
            <div class="xl:col-span-3">
                <div class="relative">
                    <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                </div>
            </div><!--end col-->
            <div class="xl:col-span-2">
                <div>
                    <input type="text" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 flatpickr-input" data-provider="flatpickr" data-date-format="d M, Y" data-range-date="true" readonly="readonly" placeholder="Select Date">
                </div>
            </div><!--end col-->
            <div class="lg:col-span-2 ltr:lg:text-right rtl:lg:text-left xl:col-span-2 xl:col-start-11">
                <a href="apps-ecommerce-product-create.html" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="plus" class="lucide lucide-plus inline-block size-4"><path d="M5 12h14"></path><path d="M12 5v14"></path></svg> <span class="align-middle">Add Product</span></a>
            </div>
        </div><!--end grid-->
    </div>
    <div class="!pt-1 card-body">
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap" id="productTable">
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
                <tbody class="list"><tr>
                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                            <a href="#!" class="transition-all duration-150 ease-linear product_code text-custom-500 hover:text-custom-600">#TAD-232100071</a>
                        </td>
                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 product_name">
                            <a href="apps-ecommerce-product-overview.html" class="flex items-center gap-2">
                                <img src="./assets/images/img-012.png" alt="Product images" class="h-6">
                                <h6 class="product_name">Smartest Printed T-shirt</h6>
                            </a>
                        </td>
                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 category">
                            <span class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Fashion</span>
                        </td>
                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 price">$79.99</td>
                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 stock">500</td>
                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 revenue">$24,365</td>
                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                            <span class="status px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">Scheduled</span>
                        </td>
                        <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 action">
                            <div class="relative dropdown">
                                <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="productAction1" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-horizontal" class="lucide lucide-more-horizontal size-3"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
                                <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="productAction1">
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-product-overview.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye inline-block size-3 ltr:mr-1 rtl:ml-1"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="align-middle">Overview</span></a>
                                    </li>
                                    <li>
                                        <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="apps-ecommerce-product-create.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit" class="lucide lucide-file-edit inline-block size-3 ltr:mr-1 rtl:ml-1"><path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path><polyline points="14 2 14 8 20 8"></polyline><path d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z"></path></svg> <span class="align-middle">Edit</span></a>
                                    </li>
                                    <li>
                                        <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 inline-block size-3 ltr:mr-1 rtl:ml-1"><path d="M3 6h18"></path><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path><line x1="10" x2="10" y1="11" y2="17"></line><line x1="14" x2="14" y1="11" y2="17"></line></svg> <span class="align-middle">Delete</span></a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr></tbody>
            </table>
            <div class="noresult" style="display: none">
                <div class="py-6 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="search" class="lucide lucide-search w-6 h-6 mx-auto mb-3 text-sky-500 fill-sky-100 dark:fill-sky-500/20"><circle cx="11" cy="11" r="8"></circle><path d="m21 21-4.3-4.3"></path></svg>
                    <h5 class="mt-2 mb-1">Sorry! No Result Found</h5>
                    <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 199+ product We did not find any product for you search.</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center gap-4 px-4 mt-4 md:flex-row" id="pagination-element">
            <div class="grow">
                <p class="text-slate-500 dark:text-zink-200">Showing <b class="showing">7</b> of <b class="total-records">11</b> Results</p>
            </div>
        
            <div class="col-sm-auto mt-sm-0">
                <div class="flex gap-2 pagination-wrap justify-content-center">
                    <a class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-500 dark:[&amp;.active]:text-custom-500 [&amp;.active]:bg-custom-50 dark:[&amp;.active]:bg-custom-500/10 [&amp;.active]:border-custom-50 dark:[&amp;.active]:border-custom-500/10 [&amp;.active]:hover:text-custom-700 dark:[&amp;.active]:hover:text-custom-700 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto page-item pagination-prev disabled" href="javascript:void(0)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-left" class="lucide lucide-chevron-left mr-1 size-4 rtl:rotate-180"><path d="m15 18-6-6 6-6"></path></svg> Prev
                    </a>
                    <ul class="flex flex-wrap items-center gap-2 pagination listjs-pagination"><li class="active"><a class="page" href="#" data-i="1" data-page="7">1</a></li><li><a class="page" href="#" data-i="2" data-page="7">2</a></li></ul>
                    <a class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&amp;.active]:text-custom-500 dark:[&amp;.active]:text-custom-500 [&amp;.active]:bg-custom-50 dark:[&amp;.active]:bg-custom-500/10 [&amp;.active]:border-custom-50 dark:[&amp;.active]:border-custom-500/10 [&amp;.active]:hover:text-custom-700 dark:[&amp;.active]:hover:text-custom-700 [&amp;.disabled]:text-slate-400 dark:[&amp;.disabled]:text-zink-300 [&amp;.disabled]:cursor-auto page-item pagination-next" href="javascript:void(0)">
                        Next <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-right" class="lucide lucide-chevron-right ml-1 size-4 rtl:rotate-180"><path d="m9 18 6-6-6-6"></path></svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>