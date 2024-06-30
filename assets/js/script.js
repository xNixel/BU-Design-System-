function scrollToSection(sectionId, offset) {
  const section = document.getElementById(sectionId);
  if (section) {
    const yOffset = offset; // Offset in pixels from the top
    const y = section.getBoundingClientRect().top + window.pageYOffset + yOffset;

    // Check if the clicked element is part of the sidebar
    if (!section.closest(".sidebar")) {
      window.scrollTo({ top: y, behavior: "smooth" });

      // Remove 'active' class from all sections
      const sections = document.querySelectorAll("section");
      sections.forEach((sec) => {
        sec.classList.remove("active");
      });

      // Add 'active' class to the clicked section
      section.classList.add("active");
    }
  }
}

var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Add event listener to anchor links with href attribute within .overview-item
// document.querySelectorAll('a[href^="#"]').forEach((anchor) => {

//   anchor.addEventListener("click", function (e) {
//     e.preventDefault();
//     const sectionId = this.getAttribute("href").substring(1);
//     scrollToSection(sectionId);
//   });
// });

document.querySelectorAll('.overview-head').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const sectionId = this.getAttribute("href").substring(1);
    scrollToSection(sectionId, -100);
  });
});

document.querySelectorAll('.overview-item').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();
    const sectionId = this.getAttribute("href").substring(1);
    scrollToSection(sectionId, -100);
  });
});



const overviewHeads = document.querySelectorAll(".overview-head");
const overviewItems = document.querySelectorAll(".overview-item");

function setActiveLink() {
  const scrollPosition = window.scrollY;

  overviewItems.forEach((item) => {
    const sectionId = item.getAttribute("href").substring(1);
    const section = document.getElementById(sectionId);
    const sectionTop = section.offsetTop - 150;
    const sectionHeight = section.offsetHeight;

    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });

  overviewHeads.forEach((head) => {
    const sectionId = head.getAttribute("href").substring(1);
    const section = document.getElementById(sectionId);
    const sectionTop = section.offsetTop - 150;
    const sectionHeight = section.offsetHeight;

    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
      const activeItem = document.querySelector(".overview-item.active");
      if (activeItem) {
        head.classList.add("active2");
      } else {
        head.classList.add("active");
      }
    } else {
      head.classList.remove("active");
      head.classList.remove("active2");
    }
  });
}

// Add event listener to scroll
window.addEventListener("scroll", setActiveLink);
