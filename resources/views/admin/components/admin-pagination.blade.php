<!-- resources/views/components/pagination.blade.php -->
@props(['currentPage', 'perPage', 'totalRecords'])

<div class="flex flex-col items-center gap-4 px-4 mt-4 md:flex-row" id="pagination-element">
    <div class="grow">
        <p class="text-slate-500 dark:text-zink-200">Showing <b class="showing">{{ $currentPage * $perPage - $perPage + 1 }}</b> to <b class="showing">{{ min($currentPage * $perPage, $totalRecords) }}</b> of <b class="total-records">{{ $totalRecords }}</b> Results</p>
    </div>
    <div class="col-sm-auto mt-sm-0">
        <div class="flex gap-2 pagination-wrap justify-content-center">
            <a href="#" class="pagination-prev" aria-label="Previous">
                Prev
            </a>

            <ul class="flex flex-wrap items-center gap-2 pagination listjs-pagination">
                @for ($i = 1; $i <= ceil($totalRecords / $perPage); $i++)
                    <li @if($i == $currentPage) class="bg-blue-400" @endif>
                        <a class="page" href="#" data-i="{{ $i }}" data-page="{{ $i }}">{{ $i }}</a>
                    </li>
                @endfor
            </ul>

            <a href="#" class="pagination-next" aria-label="Next">
                Next
               
            </a>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.page').forEach(function(element) {
        element.addEventListener('click', function(event) {
            event.preventDefault(); // Ngăn chặn hành động mặc định khi nhấp vào liên kết

            // Lấy giá trị của tham số 'page' từ thuộc tính data-page của thẻ a
            var page = this.dataset.page;

            // Tạo một mảng chứa các query parameters hiện tại từ URL
            var urlParams = new URLSearchParams(window.location.search);

            // Thêm hoặc cập nhật tham số 'page' trong mảng các query parameters
            urlParams.set('page', page);

            // Tạo URL mới với các query parameters đã được cập nhật
            var newUrl = window.location.pathname + '?' + urlParams.toString();

            // Chuyển hướng đến URL mới
            window.location.href = newUrl;
        });
    });
</script>
