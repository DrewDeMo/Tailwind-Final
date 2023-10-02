document.addEventListener("DOMContentLoaded", function () {
    const dropdownButtonOpen = document.getElementById("dropdownButtonOpen");
    const dropdownButtonClose = document.getElementById("dropdownButtonClose");
    const popoverContent = document.getElementById("popover-content");

    function togglePopover() {
        if (popoverContent.classList.contains("opacity-0")) {
            popoverContent.classList.remove("opacity-0", "invisible");
            popoverContent.classList.add("opacity-100");
        } else {
            popoverContent.classList.add("opacity-0");
            popoverContent.classList.remove("opacity-100");
            setTimeout(() => {
                if (popoverContent.classList.contains("opacity-0")) {
                    popoverContent.classList.add("invisible");
                }
            }, 300);  // corresponds to the transition duration
        }
    }

    dropdownButtonOpen.addEventListener("click", togglePopover);
    dropdownButtonClose.addEventListener("click", togglePopover);
});
