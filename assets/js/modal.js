document.addEventListener("keydown", function (event) {
  // Check if Ctrl + K is pressed
  if (event.ctrlKey && event.key === "k") {
    // Trigger the search modal
    $("#searchModal").modal("show");
    // Prevent the default browser behavior for Ctrl + K
    event.preventDefault();
  }
});
