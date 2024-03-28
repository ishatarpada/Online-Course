// explore section
const exploreSections = document.querySelectorAll(".explore-section");

// Add click event listener to each explore section
exploreSections.forEach(function (exploreSection) {
    exploreSection.addEventListener("click", function () {
        // Get check icon and border
        const checkIcon = this.querySelector(".check-icon");
        const border = this.style.border;

        // Toggle check icon visibility
        if (checkIcon.style.display === "none" || border === "none") {
            checkIcon.style.display = "block";
            this.style.border = "3px solid #3DCBB1";
        } else {
            checkIcon.style.display = "none";
            this.style.border = "none";
        }
    });
});
