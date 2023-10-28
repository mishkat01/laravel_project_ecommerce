function showDeleteConfirmation(url) {
    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect to the specified URL after confirmation
            window.location.href = url;
        }
    });
}

// Attach click event to the button
$(document).on("click", "#deleteButton", function (e) {
    e.preventDefault();
    // Pass the delete URL to the function
    showDeleteConfirmation($(this).attr("href"));
});
