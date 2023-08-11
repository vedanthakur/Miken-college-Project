const galleryImages = document.querySelectorAll(".gallery img");
const modal = document.querySelector(".modal");
const modalImg = document.getElementById("modal-img");

galleryImages.forEach(img => {
    img.addEventListener("click", function () {
        const imagePath = this.getAttribute("src");
        modalImg.src = imagePath;
        modal.style.display = "block";
    });
});

modal.addEventListener("click", function () {
    modal.style.display = "none";
});