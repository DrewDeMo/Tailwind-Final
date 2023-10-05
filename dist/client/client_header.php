<div class="flex flex-col mb-5 bg-slate-800 p-5">
    <?php include 'breadcrumbs.php'; ?>

    <!-- Logo, dropdown, and details -->
    <div class="flex items-center mb-3 mt-3">
        <!-- Logo and Dropdown -->
        <div class="flex flex-col items-center pr-8 my-8 w-1/2">
            <!-- Logo -->
            <img class="h-40 px-8 mb-1" src="img/logos/ww_white.svg" alt="Logo" />

            <!-- Dropdown -->
            <?php include 'client_dropdown.php'; ?>
        </div>

        <!-- Details -->
        <div class="w-1/2">
            <h1 class="mb-2 text-6xl font-extrabold text-white">Altoona</h1>

            <div
                class="p-1 mb-1 w-2/3 text-sm font-medium rounded-full text-slate-800 bg-white border border-white border-opacity-50 text-center">
                Full Service Customer
            </div>

            <div class="flex items-center mb-1 text-white">
                <i class="las la-map-marker-alt text-lg pr-2"></i>
                123 Fake Street, Altoona, PA 12345
            </div>

            <div class="flex items-center mb-1 text-white">
                <i class="las la-phone text-lg pr-2"></i>
                123-123-1234
            </div>

            <div
                class="p-1 mb-1 w-2/3 text-sm font-medium rounded-full text-white border border-white border-opacity-50 text-center">
                Owners
            </div>

            <div class="w-2/3">
                <ul class="flex justify-between text-white gap-4">
                    <li><i class='bx bxs-user-circle text-white text-lg mr-2'></i>Client 1</li>
                    <li><i class='bx bxs-user-circle text-white text-lg mr-2'></i>Client 2</li>
                    <li><i class='bx bxs-user-circle text-white text-lg mr-2'></i>Client 3</li>
                </ul>
            </div>
        </div>
    </div>
</div>