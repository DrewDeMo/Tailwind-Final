<div class="flex flex-col mb-8 bg-slate-800 p-10">
    <?php include 'breadcrumbs.php'; ?>

    <!-- Logo, dropdown, and details -->
    <div class="flex items-center mb-8 mt-8">
        <!-- Added items-center here -->

        <!-- Logo and Dropdown -->
        <div class="flex flex-col items-center pr-20 my-20">
            <!-- Logo -->
            <img class="h-40 px-20 mb-4" src="img/logos/ww_white.svg" alt="Logo" />

            <!-- Dropdown -->
            <?php include 'client_dropdown.php'; ?>
        </div>

        <!-- Details -->
        <div>
            <h1 class="mb-4 text-6xl font-extrabold text-white">Altoona</h1>
            <div class="p-1 mb-2 text-sm font-medium rounded-full text-white border-2 border-white border-opacity-50">
                Full Service Customer
            </div>
            <div class="flex items-center mb-2 text-white">
                <i class="las la-map-marker-alt text-lg pr-2"></i>
                123 Fake Street, Altoona, PA 12345
            </div>
            <div class="flex items-center mb-2 text-white">
                <i class="las la-phone text-lg pr-2"></i>
                123-123-1234
            </div>
            <div class="p-1 mb-2 text-sm font-medium rounded-full text-white border-2 border-white border-opacity-50">
                Owners
            </div>
            <ul class="w-full justify-start flex flex-row text-white gap-4">
                <li>Client 1</li>
                <li>Client 2</li>
                <li>Client 3</li>
            </ul>
        </div>
    </div>
</div>
