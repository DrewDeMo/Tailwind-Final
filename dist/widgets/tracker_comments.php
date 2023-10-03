<div class="basis-2/3 shadow border border-gray-300 rounded-lg p-4 flex flex-col">
    <!-- Title -->
    <h1 class="text-2xl font-bold mb-4">Latest Comments&nbsp;<span id="commentCount"
            class="text-slate-300 font-medium ml-1">(3)</span></h1>


    <!-- Action Log -->
    <div id="trackerComments" class="space-y-4 flex-grow overflow-y-auto h-[220px]">
        <!-- Single Entry (Odd) -->
        <div id="entry1" class="flex items-center bg-white hover:bg-gray-100 p-4 rounded-lg hover:shadow-sm">
            <!-- User Image -->
            <div class="w-16 h-16 flex-shrink-0">
                <img src="img/team/employee_1.webp" alt="Employee Image"
                    class="w-full h-full object-cover rounded-full">
            </div>
            <!-- Name and Description -->
            <div class="ml-4">
                <div class="flex items-center">
                    <p class="text-lg font-semibold">Ella Thompson</p>
                    <!-- Alert Circle -->
                    <span
                        class="ml-1 bg-red-200 font-medium text-red-500 rounded-full w-5 h-5 text-center text-xs leading-5">3</span>
                </div>
                <p class="text-sm text-gray-400 font-light">Change media type to "Website"</p>
            </div>
            <!-- Date Tag -->
            <div class="ml-auto flex items-center">
                <span class="text-sm bg-blue-100 text-blue-500 px-3 py-1 font-light rounded-full">10/22</span>
                <!-- New Circle -->
                <div class="check-circle ml-4 w-6 h-6 border border-gray-400 rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-300"
                    data-entry="entry1">
                    <div class="checkmark hidden text-gray-500">
                        ✓
                    </div>
                </div>
            </div>
        </div>
        <!-- Single Entry (Even) -->
        <div id="entry2" class="flex items-center bg-gray-50 hover:bg-gray-100 p-4 rounded-lg hover:shadow-sm">
            <!-- User Image -->
            <div class="w-16 h-16 flex-shrink-0">
                <img src="img/team/employee_2.webp" alt="Employee Image"
                    class="w-full h-full object-cover rounded-full">
            </div>
            <!-- Name and Description -->
            <div class="ml-4">
                <div class="flex items-center">
                    <p class="text-lg font-semibold">Jake Williams</p>
                    <!-- Alert Circle -->
                    <span
                        class="ml-1 bg-red-200 font-medium text-red-500 rounded-full w-5 h-5 text-center text-xs leading-5">2</span>
                </div>
                <p class="text-sm text-gray-400 font-light">Change month to "January"</p>
            </div>
            <!-- Date Tag -->
            <div class="ml-auto flex items-center">
                <span class="text-sm bg-blue-100 text-blue-500 px-3 py-1 font-light rounded-full">10/18</span>
                <!-- New Circle -->
                <div class=" check-circle ml-4 w-6 h-6 border border-gray-400 rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-300"
                    data-entry="entry2">
                    <div class="checkmark hidden text-gray-500">
                        ✓
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Entry -->
        <div id="entry3" class="flex items-center bg-white hover:bg-gray-100 p-4 rounded-lg hover:shadow-sm">
            <!-- User Image -->
            <div class="w-16 h-16 flex-shrink-0">
                <img src="img/team/employee_1.webp" alt="Employee Image"
                    class="w-full h-full object-cover rounded-full">
            </div>
            <!-- Name and Description -->
            <div class="ml-4">
                <div class="flex items-center">
                    <p class="text-lg font-semibold">Ella Thompson</p>
                    <!-- Alert Circle -->
                    <span
                        class="ml-1 bg-yellow-100 font-medium text-yellow-600 rounded-full w-5 h-5 text-center text-xs leading-5">1</span>
                </div>
                <p class="text-sm text-gray-400 font-light">Is this the correct description?</p>
            </div>
            <!-- Date Tag -->
            <div class="ml-auto flex items-center">
                <span class="text-sm bg-blue-100 text-blue-500 px-3 py-1 font-light rounded-full">10/08</span>
                <!-- New Circle -->
                <div class="check-circle ml-4 w-6 h-6 border border-gray-400 rounded-full flex items-center justify-center cursor-pointer hover:bg-gray-300"
                    data-entry="entry3">
                    <div class="checkmark hidden">
                        ✓
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- View All Button -->
    <div class="mt-4 flex justify-end">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2">
            <div class="flex">
                View More
            </div>
        </button>
    </div>
</div>
