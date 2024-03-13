@props(['id'])

<div class="relative dropdown">
    <button class="flex items-center justify-center size-[30px] dropdown-toggle{{$id}} p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"  data-bs-toggle="dropdown">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="more-horizontal" class="lucide lucide-more-horizontal size-3"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle>
        </svg>
    </button>
    <ul class="fixed z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] max-w-[20rem] dark:bg-zink-600 dropdown-menu" >
        <li>
            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye inline-block size-3 ltr:mr-1 rtl:ml-1">
                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <span class="align-middle">View</span>
            </a>
        </li>
        <li>
            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit-2" class="lucide lucide-edit-2 inline-block size-3 ltr:mr-1 rtl:ml-1">
                    <path d="M16 3L21 8 8 21 3 21 3 16ZM17 5L19 7 8 18 6 18Z"></path>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy tất cả các dropdown-toggle
        const dropdownToggles = document.querySelectorAll(".dropdown-toggle{{$id}}");

        // Lặp qua từng dropdown-toggle và thêm sự kiện click
        dropdownToggles.forEach(function(toggle) {
            // Khởi tạo một biến flag để theo dõi trạng thái mở/đóng của dropdown
            let isDropdownOpen = false;

            toggle.addEventListener("click", function(event) {
                // Ngăn chặn sự kiện click lan rộng để không đóng dropdown-menu ngay lập tức
                event.stopPropagation();

                // Tìm dropdown-menu kế tiếp của toggle
                const dropdownMenu = toggle.nextElementSibling;

                // Kiểm tra trạng thái hiển thị của dropdown-menu
                const isOpen = dropdownMenu.classList.contains("hidden");

                // Đóng tất cả các dropdown-menu khác trước khi mở dropdown hiện tại
                closeAllDropdownMenus();

                // Nếu dropdown-menu đang ẩn, thì mở nó; nếu không, thì đóng nó
                if (isOpen) {
                    dropdownMenu.classList.remove("hidden");
                    // Cập nhật trạng thái của dropdown
                    isDropdownOpen = true;
                } else {
                    dropdownMenu.classList.add("hidden");
                    // Cập nhật trạng thái của dropdown
                    isDropdownOpen = false;
                }
            });

            // Thêm sự kiện click vào document để đóng dropdown-menu khi click ra ngoài
            document.addEventListener("click", function(event) {
                // Đóng dropdown-menu nếu click ra ngoài dropdown và dropdown đang mở
                if (!event.target.matches(".dropdown-toggle{{$id}}, .dropdown-menu{{$id}}") && isDropdownOpen) {
                    const dropdownMenu = toggle.nextElementSibling;
                    dropdownMenu.classList.add("hidden");
                    // Cập nhật trạng thái của dropdown
                    isDropdownOpen = false;
                }
            });
        });

        // Hàm để đóng tất cả các dropdown-menu
        function closeAllDropdownMenus() {
            const allDropdownMenus = document.querySelectorAll(".dropdown-menu");
            allDropdownMenus.forEach(function(menu) {
                menu.classList.add("hidden");
            });
        }
    });
</script>



