var isClickPending = false;

function toggleSidebarItem(element) {
    if (isClickPending) {
        return;
    }

    isClickPending = true;

    // Disable the element for a short delay
    element.disabled = true;

    var isDarkTheme = document.documentElement.getAttribute('data-bs-theme') === 'dark';

    const icon = element.querySelector('.sidebar-icon');
    icon.classList.toggle("active");

    if (isDarkTheme) {
        element.classList.toggle("active_dark");
    } else {
        element.classList.toggle("active");
    }

    // Check if the theme is dark with a slight delay to handle fast clicks
    setTimeout(function () {

        // Re-enable the element after the delay
        element.disabled = false;
        isClickPending = false;
    }, 300);
}

window.addEventListener("DOMContentLoaded", function () {
    var activeSidebarItem = document.querySelector(".sidebar-item.active");
    if (activeSidebarItem) {
        activeSidebarItem.scrollIntoView({ behavior: "smooth", block: "end" });
    }
});

document.querySelectorAll('.sidebar').forEach((element) => {

    document.addEventListener("DOMContentLoaded", () => {

        // Save the scroll position in localStorage when the user scrolls
        element.addEventListener("scroll", () => {
            localStorage.setItem("sidebarScrollPosition", element.scrollTop);
        });

        // Restore the scroll position from localStorage
        var scrollPosition = localStorage.getItem("sidebarScrollPosition");
        if (scrollPosition) {
            element.scrollTop = parseInt(scrollPosition);
        }
    });

});