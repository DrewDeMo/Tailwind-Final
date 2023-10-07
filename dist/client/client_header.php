<style>
@keyframes glowing {
    0% {
        box-shadow: 0 0 3px #34D399, 0 0 5px #34D399;
    }

    50% {
        box-shadow: 0 0 6px #34D399, 0 0 8px #34D399;
    }

    100% {
        box-shadow: 0 0 3px #34D399, 0 0 5px #34D399;
    }
}

.glow-dot {
    animation: glowing 1.5s infinite alternate;
}
</style>

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
            <div class="flex flex-row gap-2">
                <?php include 'client_dropdown.php'; ?>
                <!--Search button-->
                <button
                    class="border border-gray-600 duration-500 text-white bg-gray-700 h-[38px] w-[38px] rounded-lg hover:bg-gray-600"><i
                        class="las la-search text-xl text-gray-300 p-2 "></i></button>
            </div>
        </div>

        <!-- Details -->
        <div class="w-1/2  border-opacity-50 border-white pl-8">
            <h1 class="mb-2 text-6xl font-extrabold text-white">Altoona</h1>

            <div
                class="flex items-center justify-center w-2/3 px-4 py-1 text-center bg-gray-700 border border-gray-500 border-opacity-50 rounded-lg text-sm font-medium text-white">
                <div class="mr-2 bg-green-500 w-2 h-2 rounded-full glow-dot"></div>
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