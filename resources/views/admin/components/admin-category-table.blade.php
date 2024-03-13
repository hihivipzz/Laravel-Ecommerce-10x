@props(['categories'])
<!-- resources/views/components/category-table.blade.php -->
<table class="w-full whitespace-nowrap" id="categoryTable">
    <!-- Table headers -->
    <thead class="ltr:text-left rtl:text-right bg-slate-100 dark:bg-zink-600">
        <tr>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Category Id</th>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Category Name</th>
            <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Actions</th>
        </tr>
    </thead>
    <!-- Table body -->
    <tbody class="list">
        <!-- Table rows -->
        @if ($categories->isEmpty())
            <tr>
                <td colspan="3" class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">No categories found.</td>
            </tr>
        @else
            @foreach ($categories as $category)
                <tr>
                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $category['id'] }}</td>
                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">{{ $category['name'] }}</td>
                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 action">
                        <x-admin::admin-table-action :id="$category['id']" />
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>