<!-- Real simple scrollbar stylesheet for the comments section -->
<link rel="stylesheet" href="css/scrollbar.css">

<div class="flex flex-row gap-4 w-full pr-8 mb-8">
    <div class="basis-1/6  border border-gray-300 rounded-lg p-4 min-h-[300px] bg-slate-800">
        <!-- Total Time at the top -->
        <div class="mb-1">
            <div class="font-medium text-slate-200">Total Time</div>
        </div>

        <div class="text-4xl pr-2 text-slate-100 text-opacity-90 font-extrabold">September</div>

        <!-- Time values with margin at the bottom -->
        <div class="flex flex-col justify-end items-end h-full pb-16 pr-2">
            <span class="text-6xl font-semibold text-slate-100">90h</span>
            <span class="text-4xl font-medium text-slate-100 text-opacity-75">30m</span>
            <span class="text-2xl font-normal text-slate-100 text-opacity-50">3s</span>
        </div>
    </div>


    <?php include 'widgets/tracker_comments.php'; ?>



    <div class="bg-slate-800 basis-1/6  rounded-lg p-4 h-full">
        <div class="flex flex-col align-middle justify-center h-full gap-10">
            <button data-modal-target="authentication-modal2" data-modal-toggle="authentication-modal2" type="button"
                class="text-slate-800 bg-slate-100 hover:bg-slate-300 focus:outline-none focus:ring-4 focus:ring-slate-100 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2"><span
                    class="font-bold">+</span> Add
                Project</button>
            <button type="button"
                class="text-slate-100 hover:text-slate-800 border border-slate-200 hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-slate-100 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Multiple</button>
            <button type="button"
                class="text-slate-100 hover:text-slate-800 border border-slate-200 hover:bg-slate-200 focus:ring-4 focus:outline-none focus:ring-slate-100 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Retrieve</button>
        </div>
    </div>
</div>
</div>


<div class="flex justify-between items-center w-full  pr-20 px-10 mb-2">
    <div class="text-gray-700 font-bold text-lg">
        Today
    </div>
    <div class="text-gray-400 flex items-center font-medium">
        <svg class="fill-gray-500 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" height="1em"
            viewBox="0 0 448 512">
            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path
                d="M176 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h16V98.4C92.3 113.8 16 200 16 304c0 114.9 93.1 208 208 208s208-93.1 208-208c0-41.8-12.3-80.7-33.5-113.2l24.1-24.1c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L355.7 143c-28.1-23-62.2-38.8-99.7-44.6V64h16c17.7 0 32-14.3 32-32s-14.3-32-32-32H224 176z" />
        </svg>
        6h&nbsp;5min
    </div>
</div>


<div class="flex items-stretch w-full space-x-4 ml-8 pr-16">
    <div class="relative flex-grow border border-gray-300 rounded-lg">
        <div class="overflow-x-auto rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs uppercase">
                    <tr class="bg-gray-800 text-white">
                        <th scope="col" class="px-6 py-3">Client</th>
                        <th scope="col" class="px-6 py-3">Media</th>
                        <th scope="col" class="px-6 py-3">Type</th>
                        <th scope="col" class="px-6 py-3">Project</th>
                        <th scope="col" class="px-6 py-3">Description</th>
                        <th scope="col" class="px-6 py-3">Media Size</th>
                        <th scope="col" class="px-6 py-3">Start Month</th>
                        <th scope="col" class="px-6 py-3 w-1/4">Hours</th>
                        <th scope="col" class="px-6 py-3 w-1/16 text-center">Actions</th>
                        <!-- Centered text for "Actions" -->
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">

                            TCL
                            Marketing
                        </th>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center h-full">
                                <span class="flex-shrink-0">Video</span>
                                <div class="relative group hover:opacity-100 opacity-75 cursor-pointer">
                                    <div data-tooltip-target="tooltip-red"
                                        class="ml-2 h-[25px] w-[25px] bg-red-200 rounded-full flex items-center justify-center flex-shrink-0"
                                        data-notify="entry1">
                                        <span class="font-medium text-red-500">3</span>
                                    </div>
                                    <div id="tooltip-red" role="tooltip"
                                        class="text-center w-64 absolute z-10 invisible px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 group-hover:opacity-100 group-hover:visible">
                                        Change media type to "Website"
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>

                            </div>
                        </td>

                        <td class="px-6 py-4 bg-gray-50">Commercial</td>
                        <td class="px-6 py-4">Project X</td>
                        <td class="px-6 py-4 bg-gray-50">
                            <div class="flex items-center h-full">
                                <span class="flex-shrink-0">Short ad</span>
                                <div class="relative group hover:opacity-100 opacity-75 cursor-pointer">
                                    <div data-tooltip-target="tooltip-yellow"
                                        class="ml-2 h-[25px] w-[25px] bg-yellow-100 rounded-full flex items-center justify-center flex-shrink-0"
                                        data-notify="entry3">
                                        <span class="font-medium text-yellow-600">1</span>
                                    </div>
                                    <div id="tooltip-yellow" role="tooltip"
                                        class="text-center w-64 absolute z-10 invisible px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 group-hover:opacity-100 group-hover:visible">
                                        Is this the correct description?
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>


                            </div>
                        </td>

                        <td class="px-6 py-4">1080p</td>
                        <td class="px-6 py-4 bg-gray-50">January</td>
                        <td class="px-6 py-auto relative">
                            <div
                                class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-6 text-xs flex rounded bg-teal-200 w-11/12 ">
                                <div style="width: 60%;"
                                    class="p-2 shadow-none flex flex-col text-left whitespace-nowrap rounded font-bold text-white justify-center bg-teal-500 progress-bar">
                                    54
                                </div>
                            </div>
                        </td>

                        <td class="py-4 mt-1 flex space-x-4 justify-center flex-row gap-4">
                            <!-- Centered buttons under "Actions" -->
                            <div class="text-center flex align-center justify-center gap-4">
                                <!-- Edit Icon -->
                                <button data-modal-target="authentication-modal"
                                    data-modal-toggle="authentication-modal" class="focus:outline-none">
                                    <svg class="fill-gray-400 hover:fill-gray-800 duration-300"
                                        xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0-32-14.3-32-32s-14.3-32-32-32H96z" />
                                    </svg>
                                </button>
                                <!-- Delete Icon -->
                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    class="focus:outline-none">
                                    <svg class="fill-gray-400 hover:fill-gray-800 duration-300"
                                        xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                        <!--Edit Popup-->
                        <?php include 'widgets/tracker_edit.php'; ?>
                        <!--Delete Popup-->
                        <?php include 'widgets/tracker_delete.php'; ?>
                        <!--Add Popup-->
                        <?php include 'widgets/tracker_add.php'; ?>
                    </tr>
                    <!-- Dummy Option 1 -->
                    <tr>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">ABC
                            Company</th>
                        <td class="px-6 py-4">Social Media</td>
                        <td class="px-6 py-4 bg-gray-50">Promotion</td>
                        <td class="px-6 py-4">Project Y</td>
                        <td class="px-6 py-4 bg-gray-50">Social media marketing campaign</td>
                        <td class="px-6 py-4">720p</td>
                        <td class="px-6 py-4 bg-gray-50">February</td>
                        <td class="px-6 py-auto relative">
                            <div
                                class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-6 text-xs flex rounded bg-teal-200 w-11/12">
                                <div style="width: 30%;"
                                    class="p-2 shadow-none flex flex-col text-left whitespace-nowrap rounded font-bold text-white justify-center bg-teal-500">
                                    27
                                </div>
                            </div>
                        </td>
                        <td class="py-4 mt-1 flex space-x-4 justify-center flex-row gap-4">
                            <!-- Centered buttons under "Actions" -->
                            <div class="text-center flex align-center justify-center gap-4">
                                <!-- Edit Icon -->
                                <button data-modal-target="authentication-modal"
                                    data-modal-toggle="authentication-modal" class="focus:outline-none">
                                    <svg class="fill-gray-400 hover:fill-gray-800 duration-300"
                                        xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0-32-14.3-32-32s-14.3-32-32-32H96z" />
                                    </svg>
                                </button>
                                <!-- Delete Icon -->
                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                                    class="focus:outline-none">
                                    <svg class="fill-gray-400 hover:fill-gray-800 duration-300"
                                        xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                        <path
                                            d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- Dummy Option 2 -->
                    <tr>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">XYZ
                            Agency</th>
                        <td class="px-6 py-4">Print</td>
                        <td class="px-6 py-4 bg-gray-50">Brochure</td>
                        <td class="px-6 py-4">Project Z</td>
                        <td class="px-6 py-4 bg-gray-50">Design and print brochures</td>
                        <td class="px-6 py-4">A4</td>
                        <td class="px-6 py-4 bg-gray-50">
                            <div class="flex items-center h-full">
                                <span>March</span>
                                <div class="relative group hover:opacity-100 opacity-75 cursor-pointer">
                                    <div data-tooltip-target="tooltip-red2"
                                        class="ml-2 h-[25px] w-[25px] bg-red-200 rounded-full flex items-center justify-center flex-shrink-0"
                                        data-notify="entry2">
                                        <span class="font-medium text-red-500">2</span>
                                    </div>
                                    <div id="tooltip-red2" role="tooltip"
                                        class="text-center w-64 absolute z-10 invisible px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 group-hover:opacity-100 group-hover:visible">
                                        Change month to "January"
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                                </div>

                            </div>
                        </td>
        </div>
        <td class="px-6 py-auto relative">
            <div
                class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-6 text-xs flex rounded bg-teal-200 w-11/12">
                <div style="width: 10%;"
                    class="p-2 shadow-none flex flex-col text-left whitespace-nowrap rounded font-bold text-white justify-center bg-teal-500">
                    9
                </div>
            </div>
        </td>
        <td class="py-4 mt-1 flex space-x-4 justify-center flex-row gap-4">
            <!-- Centered buttons under "Actions" -->
            <div class="text-center flex align-center justify-center gap-4">
                <!-- Edit Icon -->
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="focus:outline-none">
                    <svg class="fill-gray-400 hover:fill-gray-800 duration-300" xmlns="http://www.w3.org/2000/svg"
                        height="1em" viewBox="0 0 512 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0-32-14.3-32-32s-14.3-32-32-32H96z" />
                    </svg>
                </button>
                <!-- Delete Icon -->
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="focus:outline-none">
                    <svg class="fill-gray-400 hover:fill-gray-800 duration-300" xmlns="http://www.w3.org/2000/svg"
                        height="1em" viewBox="0 0 448 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                    </svg>
                </button>
            </div>
        </td>
        </tr>
        <!-- Dummy Option 3 -->
        <tr>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50">LMN
                Corporation</th>
            <td class="px-6 py-4">Web</td>
            <td class="px-6 py-4 bg-gray-50">Website Redesign</td>
            <td class="px-6 py-4">Project W</td>
            <td class="px-6 py-4 bg-gray-50">Redesign company website</td>
            <td class="px-6 py-4">Responsive</td>
            <td class="px-6 py-4 bg-gray-50">April</td>
            <td class="px-6 py-auto relative">
                <div
                    class=" absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 h-6 text-xs flex rounded bg-teal-200 w-11/12">
                    <div style="width: 10%;"
                        class="p-2 shadow-none flex flex-col text-left whitespace-nowrap rounded font-bold text-white justify-center bg-teal-500">
                        9
                    </div>
                </div>
            </td>
            <td class="py-4 mt-1 flex space-x-4 justify-center flex-row gap-4">
                <!-- Centered buttons under "Actions" -->
                <div class="text-center flex align-center justify-center gap-4">
                    <!-- Edit Icon -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="focus:outline-none">
                        <svg class="fill-gray-400 hover:fill-gray-800 duration-300" xmlns="http://www.w3.org/2000/svg"
                            height="1em" viewBox="0 0 512 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0-32-14.3-32-32s-14.3-32-32-32H96z" />
                        </svg>
                    </button>
                    <!-- Delete Icon -->
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="focus:outline-none">
                        <svg class="fill-gray-400 hover:fill-gray-800 duration-300" xmlns="http://www.w3.org/2000/svg"
                            height="1em" viewBox="0 0 448 512">
                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <path
                                d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                        </svg>
                    </button>
                </div>
            </td>
        </tr>
        </tbody>
        </table>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--Custom Script for controlling notifications, and closing comments-->
<script src="js/tracker_notice.js"></script>
</script>
