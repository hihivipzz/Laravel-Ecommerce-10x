<div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
    <div class="xl:col-span-9">
        <div class="card">
            <div class="card-body">
                <form action="#!">
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12 border border-gray-300 dark:border-zink-500 rounded-md p-5">
                        <div class="xl:col-span-6">
                            <label for="productNameInput" class="block mb-2 text-base font-medium">Product Title</label>
                            <input type="text" id="productNameInput" class="form-input border border-gray-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 bg-white dark:bg-zink-700 disabled:bg-gray-100 dark:disabled:bg-zink-600 disabled:border-gray-300 dark:disabled:border-zink-500 disabled:text-gray-500 dark:disabled:text-zink-200 placeholder-gray-400 dark:placeholder-zink-200 rounded-md px-4 py-2 text-base" placeholder="Product title" required>
                            <p class="mt-1 text-sm text-gray-400 dark:text-zink-200">Do not exceed 20 characters when entering the product name.</p>
                        </div><!--end col-->
                        <div class="xl:col-span-6">
                            <label for="productCodeInput" class="block mb-2 text-base font-medium">Product Code</label>
                            <input type="text" id="productCodeInput" class="form-input border border-gray-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-gray-100 dark:disabled:bg-zink-600 disabled:border-gray-300 dark:disabled:border-zink-500 disabled:text-gray-500 dark:disabled:text-zink-200 placeholder-gray-400 dark:placeholder-zink-200 rounded-md px-4 py-2 text-base" placeholder="Product Code" value="TWT145015" disabled required>
                            <p class="mt-1 text-sm text-gray-400 dark:text-zink-200">Code will be generated automatically</p>

                        </div><!--end col-->
                        <div class="xl:col-span-4">
                            <label for="qualityInput" class="block mb-2 text-base font-medium">Quantity</label>
                            <input type="number" id="qualityInput" class="form-input border border-gray-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-gray-100 dark:disabled:bg-zink-600 disabled:border-gray-300 dark:disabled:border-zink-500 disabled:text-gray-500 dark:disabled:text-zink-200 placeholder-gray-400 dark:placeholder-zink-200 rounded-md px-4 py-2 text-base" placeholder="Quantity" required>

                        </div><!--end col-->
                        
                        <div class="xl:col-span-4">
                            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">Category</label>
                            <div class="relative">
                                <select class="form-select border border-gray-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-gray-100 dark:disabled:bg-zink-600 disabled:border-gray-300 dark:disabled:border-zink-500 disabled:text-gray-500 dark:disabled:text-zink-200 placeholder-gray-400 dark:placeholder-zink-200 block w-full py-2 pl-3 pr-10 text-base border-gray-300 dark:border-zink-500 rounded-md bg-white dark:bg-zink-700 dark:focus:border-custom-800" id="categorySelect" name="categorySelect" aria-describedby="categorySelectHelp" required>
                                    <option value="">Select Category</option>
                                    <option value="Beauty, Health, Grocery">Beauty, Health, Grocery</option>
                                    <option value="Books">Books</option>
                                    <option value="Home, Kitchen, Pets">Home, Kitchen, Pets</option>
                                    <option value="Men's Fashion">Men's Fashion</option>
                                    <option value="Mobiles, Computers">Mobiles, Computers</option>
                                    <option value="TV, Appliances, Electronics">TV, Appliances, Electronics</option>
                                    <option value="Women's Fashion">Women's Fashion</option>
                                </select>
                               
                            </div>
                        </div>
                        
                        <div class="xl:col-span-4">
                            <label for="productPrice" class="block mb-2 text-base font-medium">Price</label>
                            <input type="number" id="productPrice" class="form-input border border-gray-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-gray-100 dark:disabled:bg-zink-600 disabled:border-gray-300 dark:disabled:border-zink-500 disabled:text-gray-500 dark:disabled:text-zink-200 placeholder-gray-400 dark:placeholder-zink-200 rounded-md px-4 py-2 text-base" placeholder="$0.00" required>

                        </div><!--end col-->
                        <div class="lg:col-span-2 xl:col-span-12">
                            <label for="productImagesInput" class="block mb-2 text-base font-medium">Product Images</label>
                            <div class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-blue-500 dark:border-zink-500 dropzone2 dz-clickable">
                                <input type="file" id="productImagesInput" class="hidden" accept="image/*">
                                <label for="productImagesInput" class="w-full py-5 text-lg text-center dz-message needsclick">
                                    <div class="mb-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="upload-cloud" class="lucide lucide-upload-cloud block mx-auto w-12 h-12 text-blue-500 fill-blue-200 dark:text-zink-200 dark:fill-zink-500"><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"></path><path d="M12 12v9"></path><path d="m16 16-4-4-4 4"></path></svg>
                                    </div>
                                    <h5 class="mb-0 font-normal text-blue-500 dark:text-zink-200 text-base">Drag and drop your product images or <span class="text-blue-500 hover:underline">browse</span> your product images</h5>
                                </label>
                            </div>
                            <ul class="flex flex-wrap mb-0 gap-x-5" id="dropzone-preview2"></ul>
                        </div>
                        
                        <div class="flex flex-col lg:col-span-2 xl:col-span-12">
                            <label for="productDescription" class="inline-block mb-2 text-base font-medium">Description</label>
                            <textarea class="form-input border border-gray-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-gray-100 dark:disabled:bg-zink-600 disabled:border-gray-300 dark:disabled:border-zink-500 disabled:text-gray-500 dark:disabled:text-zink-200 placeholder-gray-400 dark:placeholder-zink-200 px-4 py-2" id="productDescription" placeholder="Enter Description" rows="5"></textarea>
                        </div>                        
                        
                    </div><!--end grid-->
                    <div class="flex justify-end gap-2 m-4">
                        <button type="reset" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Reset</button>
                        <button type="submit" class="text-white bg-blue-500 border border-blue-500 hover:bg-blue-600 hover:border-blue-600 focus:bg-blue-600 focus:border-blue-600 focus:ring focus:ring-blue-100 active:bg-blue-600 active:border-blue-600 active:ring active:ring-blue-100 dark:bg-opacity-20 px-2 py-1 rounded-md ">Create Product</button>
                    </div>
                </form>
            </div>
        </div><!--end card-->
    </div><!--end col-->
    <div class="xl:col-span-3">
        <div class="card sticky top-[calc(theme('spacing.header')_*_1.3)]">
            <div class="card-body border border-gray-300 dark:border-zink-500 rounded-md p-5">
                <h6 class="mb-4 text-15">Product Card Preview</h6>

                <div class="px-5 py-8 rounded-md bg-sky-50 dark:bg-zink-600">
                    <img src="./assets/images/img-03.png" alt="" class="block mx-auto h-44">
                </div>

                <div class="mt-3">
                    <h5 class="mb-2">$145.99 <small class="font-normal line-through">299.99</small></h5>
                    <h6 class="mb-1 text-15">Fastcolors Typography Men</h6>
                    <p class="text-slate-500 dark:text-zink-200">Men's Fashion</p>
                    <p class="text-slate-500 dark:text-zink-200">Men's Fashion</p>
                </div>
                
            </div>
        </div><!--end card-->
    </div><!--end col-->
</div>