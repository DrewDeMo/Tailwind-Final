<div class="flex flex-col mb-6 bg-slate-800 p-5 pb-6" style="background-image: 
        url('img/logos/gradient.svg'), 
        radial-gradient(circle, rgba(255,255,255,0.1), transparent), 
        linear-gradient(to bottom, bg-slate-800, bg-slate-800);
    background-repeat: no-repeat, repeat, repeat;
    background-position: center center, center center, center center;
    ">
    <?php include 'breadcrumbs.php'; ?>

    <!-- Logo, dropdown, and details -->
    <div class="flex items-center mb-4">
        <!-- Logo and Dropdown -->
        <div class="flex flex-col items-center pr-8 mb-12 my-4 w-1/2">
            <!-- Logo -->
            <img class="h-40 px-8 mb-1" src="img/logos/ww_white.svg" alt="Logo" />

            <!-- Dropdown -->
            <?php include 'client_dropdown.php'; ?>
        </div>

        <!-- Details -->
        <div class="w-1/2 border-l border-opacity-50 border-white pl-8">
            <h1 class="mb-2 text-6xl font-extrabold text-white">Altoona</h1>

            <div
                class="p-1 my-4 w-2/3 text-sm font-medium rounded-full text-slate-800 bg-white border border-white border-opacity-50 text-center">
                Full Service Customer
            </div>

            <div class="flex items-center my-4 text-white">
                <i class="las la-map-marker-alt text-lg pr-2"></i>
                123 Fake Street, Altoona, PA 12345
            </div>

            <div class="flex items-center my-4 text-white">
                <i class="las la-phone text-lg pr-2"></i>
                123-123-1234
            </div>

            <div
                class="p-1 my-4 w-2/3 text-sm font-medium rounded-full text-white border border-white border-opacity-50 text-center">
                Owners
            </div>

            <div class="w-2/3 pb-4">
                <ul class="flex justify-between text-white gap-4">
                    <li class="text-sm flex items-center"><i
                            class='las la-user-circle text-white text-lg mr-2'></i>Benjamin Hartley</li>
                    <li class="text-sm flex items-center"><i
                            class='las la-user-circle text-white text-lg mr-2'></i>Clara Jeffries</li>
                    <li class="text-sm flex items-center"><i
                            class='las la-user-circle text-white text-lg mr-2'></i>Thomas Whitfield</li>
                </ul>
            </div>
        </div>
    </div>
</div>