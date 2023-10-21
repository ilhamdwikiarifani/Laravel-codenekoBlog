// In The Top
window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;

    var element = document.getElementById("InTop");

    if (scroll >= 50) {
        element.classList.remove("d-none");
        element.classList.add("d-flex");
    } else {
        element.classList.remove("d-flex");
        element.classList.add("d-none");
    }
});

// Navbar

window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;

    var element = document.getElementById("style-navbar");
    var start = document.getElementById("started");

    if (scroll >= 40) {
        element.classList.remove("bg-white");
        element.classList.add("bg-glass");
        start.classList.remove("bg-dark");
        start.classList.add("bg-blue");
    } else {
        element.classList.remove("bg-glass");
        element.classList.add("bg-white");
        start.classList.remove("bg-blue");
        start.classList.add("bg-dark");
    }
});

// Load
$(document).ready(function () {
    $(".latestpost-content").slice(0, 1).show();

    $("#loadMore").on("click", function (e) {
        e.preventDefault();
        $(".latestpost-content:hidden").slice(0, 1).slideDown();
        if ($(".latestpost-content:hidden").length == 0) {
            $("#loadMore").text("No Content").addClass("noContent");
        }
    });
});
