$(document).ready(function () {
    // Initialize the comment count
    let currentCount = $('#trackerComments > div').length;
    updateCommentCount(currentCount);

    $('.check-circle').on('click', function () {
        const entryID = $(this).data('entry');
        const entry = $('#' + entryID);
        const notification = $('[data-notify=' + entryID + ']');

        // Fade out and remove the entry
        entry.fadeOut(1000, function () {
            $(this).remove();
            currentCount--;

            // Fade out and remove the corresponding notification
            if (notification.length > 0) {
                notification.fadeOut(1000, function () {
                    $(this).remove();
                });
            }

            // Update the count explicitly
            updateCommentCount(currentCount);
        });
    });
});

function updateCommentCount(count) {
    $("#commentCount").text("(" + count + ")");
    if (count === 0) {
        $("#commentCount").hide();
    }
}
