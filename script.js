document.addEventListener("DOMContentLoaded", function () {
    let ctaButtons = document.querySelectorAll(".cta");

    ctaButtons.forEach(button => {
        button.addEventListener("click", function () {
            alert("Redirecting to WhatsApp...");
        });
    });
});
