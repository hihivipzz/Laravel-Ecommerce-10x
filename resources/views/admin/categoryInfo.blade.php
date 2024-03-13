<!-- resources/views/dashboard.blade.php -->
@extends('admin.layouts.admin-page')

@section('content')
    <!-- Main content area -->
    <div class="bg-white p-6 rounded shadow flex">
        <!-- Main content -->
        <div>
            <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>
            <div class="card" id="productListTable">
                <div class="card-body">
                    <div class="grid grid-cols-1 gap-4 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-3">
                            <x-admin::admin-search-input :search='$search'/>
                        </div><!--end col-->
                        
                        <div class="lg:col-span-2 ltr:lg:text-right rtl:lg:text-left xl:col-span-2 xl:col-start-11">
                            <x-admin::admin-button url='' name='Add Category'/>
                        </div>
                        
                    </div><!--end grid-->
                </div>
                <div class="!pt-1 card-body mt-4">
                    <div class="overflow-x-auto">
                        <x-admin::admin-category-table :categories='$categories' />
                    </div>
            
                   <x-admin::admin-pagination :currentPage=$page :perPage=$perPage :totalRecords=$total/>
            
                </div>
            </div>
            
        </div>
    </div>

@endsection