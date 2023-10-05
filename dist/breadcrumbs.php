<div class="w-full py-6 px-4">
    <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <?php
            $url = $_SERVER['REQUEST_URI'];
            $url = ltrim($url, '/');
            $crumbs = explode('/', $url);
            $cumulativePath = "";

            $fontWeights = ['font-bold', 'font-semibold', 'font-medium', 'font-normal']; // Corresponding to font weights from heavy to light

            for ($i = 0; $i < count($crumbs); $i++) {
                $cleanedCrumb = preg_replace('/\\.[^.\\s]{3,4}$/', '', $crumbs[$i]); // Remove extensions
                $cumulativePath .= $cleanedCrumb . '/';

                $fontWeight = ($i < count($fontWeights)) ? $fontWeights[$i] : end($fontWeights);

                // Adjusting font color based on position in the breadcrumb
                if ($i === count($crumbs) - 1) {
                    $fontColor = 'text-gray-500'; // Current page
                } elseif ($i === 0) {
                    $fontColor = 'text-gray-700'; // First page
                } else {
                    $fontColor = 'text-gray-600'; // Middle pages
                }

                echo '<li class="inline-flex items-center">';

                if ($i > 0) {
                    echo '<svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>';
                }

                if ($i === 0) {
                    echo '<a href="' . $cumulativePath . '" class="inline-flex items-center text-sm ' . $fontWeight . ' ' . $fontColor . ' hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>';
                    echo 'Home</a>';
                } elseif ($i === count($crumbs) - 1) {
                    echo '<span class="ml-1 text-sm ' . $fontWeight . ' ' . $fontColor . ' md:ml-2 dark:text-gray-400">' . ucfirst($cleanedCrumb) . '</span>';
                } else {
                    echo '<a href="' . $cumulativePath . '" class="ml-1 text-sm ' . $fontWeight . ' ' . $fontColor . ' hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">' . ucfirst($cleanedCrumb) . '</a>';
                }

                echo '</li>';
            }
            ?>
        </ol>
    </nav>
</div>
