<div class="flex flex-row justify-between w-full gap-4 mt-4">
    <!--Owners box left-->
    <?php include 'client/client_owners.php'; ?>
    <!--Owners box right-->
    <?php include 'client/client_countymap.php'; ?>
</div>

<!--Second row - 3 cards-->

<!--Card 1-->
<div class="flex flex-row justify-between w-full gap-4 mt-4">
    <div class="basis-1/3 border rounded-lg border-gray-200 bg-white w-full p-4">
        <h2 class="text-lg font-medium">Landing Pages</h2>

        <div class="flex flex-row gap-2 mt-4 mb-1.5">
            <span
                class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded flex items-center justify-center">PPC</span>
            <p>Branded</p>
        </div>

        <div class="flex flex-row gap-2 mt-4 mb-1.5">
            <span
                class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded flex items-center justify-center">PPC</span>
            <p>Non-Branded</p>
        </div>

        <div class="flex flex-row gap-2 mt-4 mb-1.5">
            <span
                class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded flex items-center justify-center">PPC</span>
            <p>Competitor Branded</p>
        </div>

        <div class="flex flex-row gap-2 mt-4 mb-1.5">
            <div
                class="bg-blue-100 text-blue-600 p-1 px-2.5 rounded-lg font-medium w-fit text-xs flex items-center justify-center">
                FB</div>
            <p>Windows</p>
        </div>

        <div class="flex flex-row gap-2 mt-4 mb-1.5">
            <div
                class="bg-blue-100 text-blue-600 p-1 px-2.5 rounded-lg font-medium w-fit text-xs flex items-center justify-center">
                FB</div>
            <p>Siding & Doors</p>
        </div>

    </div>

    <!--Card 2-->
    <div class="basis-1/3 border rounded-lg border-gray-200 bg-white w-full p-4">
        <h2 class="text-lg font-medium">External Pages</h2>
        <div class="flex align-middle mt-4">
            <a href="https://windowworldofaltoona.com" class="flex items-center">
                <!-- Added flex and items-center to align SVG icon and text side by side -->
                <div class="bg-green-100 p-2 rounded-lg w-12 h-12 flex items-center justify-center mr-4">
                    <!-- Added margin-right (mr-4) for spacing between SVG and text -->
                    <img class="h-12" src="img/icons/green_leaf_d.svg" />
                </div>
                <p class="ml-2 font-medium">Organic Website</p>
            </a>
        </div>

        <div class="flex align-middle mt-4">
            <a href="https://windowworldofaltoona.com" class="flex items-center">
                <!-- Added flex and items-center to align SVG icon and text side by side -->
                <div class="bg-gray-200 p-2 rounded-lg w-12 h-12 flex items-center justify-center mr-4">
                    <!-- Added margin-right (mr-4) for spacing between SVG and text -->
                    <img class="h-12" src="img/logos/Google_G.svg" />
                </div>
                <p class="ml-2 font-medium">Google Business Page</p>
            </a>
        </div>

        <div class="flex align-middle mt-4">
            <a href="#" class="flex items-center">
                <!-- Added flex and items-center to align SVG icon and text side by side -->
                <div class="bg-blue-300 p-2 rounded-lg w-12 h-12 flex items-center justify-center mr-4">
                    <!-- Added margin-right (mr-4) for spacing between SVG and text -->
                    <img class="h-12 mt-[2px]" src="img/logos/social_facebook.svg" />
                </div>
                <p class="ml-2 font-medium">Facebook Business Page</p>
            </a>
        </div>
    </div>

    <!--Card 3 GIS Map-->
    <div class="max-w-md mx-auto bg-white rounded-xl border border-gray-200 rounded-lg overflow-hidden md:max-w-2xl">
        <div class="relative">
            <!-- ArcGIS Embed without controls and search -->
            <iframe class="w-full h-60"
                src="https://t-c-l.maps.arcgis.com/apps/Embed/index.html?webmap=2a26bdfe99604d58acb85d6c98d3fb58&extent=-80.2175,39.6273,-76.1608,41.3546&zoom=false&previewImage=false&scale=true&search=false&searchextent=true&disable_scroll=false&theme=light"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="p-4">
            <div class="tracking-wide text-lg font-medium">Store Location</div>
            <p class="mt-2 text-gray-500">
                <i class="las la-map-marker-alt"></i>
                1000 Plank Road, Duncansville, PA 16635
            </p>
            <div class="tracking-wide text-lg font-medium mt-4 mb-1">Counties Served</div>
            <div class="bg-gray-50 justify-between text-gray-500 text-sm p-1.5 border border-gray-100 rounded-lg">
                <ul class="flex justify-between gap-2 pr-8 p-2 font-medium">
                    <li>Bedford^</li>
                    <li>Blair</li>
                    <li>Cambria</li>
                    <li>Centre</li>
                    <li>Clearfield^</li>
                    <li>Huntingdon</li>
                </ul>
            </div>
        </div>
    </div>
</div>
