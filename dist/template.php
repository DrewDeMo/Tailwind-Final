<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drew Tailwind Test</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FontAwesome Icon Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="flex flex-wrap">
        <div class="w-full bg-white pl-0 lg:pl-64 min-h-screen">
            <div id="main-nav"
                 class="w-1/2 md:w-1/3 lg:w-64 fixed md:top-0 md:left-0 h-screen lg:block bg-white border-r z-30 hidden">
                <!-- Logo -->
                <div class="w-full h-20 flex px-4 items-center mb-8 justify-center">
                    <div class="rounded-full bg-gray-300 w-16 h-16 mt-6"></div>
                </div>

                <?php include 'sidebar.php'; ?>

            </div>

            <?php include 'navbar.php'; ?>

<!--Content Start-->



<!--Content Stop-->
        </div>
        
        
        
    </div>

    
</div>

</div>

<!--Script Start-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.js"></script>
<!--Script Stop-->

</body>


