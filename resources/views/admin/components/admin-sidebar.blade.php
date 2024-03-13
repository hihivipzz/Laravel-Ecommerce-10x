<!-- resources/views/components/sidebar.blade.php -->

@props(['sidebarItems'])

<aside class="bg-white text-gray-800 w-64 space-y-6 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
    <!-- Sidebar content -->
    <div class="p-4">
        <!-- Your sidebar content goes here -->
        <h2 class="text-lg font-semibold">Sidebar Title</h2>
        <ul class="mt-2 space-y-2">
            @foreach ($sidebarItems as $item)
                <li>
                    <a href="/admin/{{ $item['url'] }}" class="block px-4 py-2 rounded hover:bg-gray-200">{{ $item['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</aside>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy đường dẫn URL hiện tại
        var currentUrl = window.location.pathname;
        
        // Lặp qua từng sidebarItem và kiểm tra URL
        var sidebarItems = document.querySelectorAll('aside a');
        sidebarItems.forEach(function(item) {
            var itemUrl = item.getAttribute('href');

            var firstPartItemUrl = itemUrl.split('/')[2];

            var firstPartCurrentUrl = currentUrl.split('/')[2];

            if (firstPartItemUrl === firstPartCurrentUrl) {
                item.classList.add('bg-gray-200');
            }
        });
    });
</script>

