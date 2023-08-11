var photos = [
  {
    src: "https://random.imagecdn.app/1320/349",
    alt: "Image 1"
  },
  {
    src: "https://random.imagecdn.app/1320/350",
    alt: "Image 2"
  },
  {
    src: "https://random.imagecdn.app/1320/351",
    alt: "Image 3"
  }
];

function displayPhotos() {
  var slider = document.getElementById("slider");

  // Loop through the photos array and create <img> elements for each photo
  for (var i = 0; i < photos.length; i++) {
    var img = document.createElement("img");
    img.src = photos[i].src;
    img.alt = photos[i].alt;
    img.className = "slide";
    img.style.display = "none"; // Hide all images initially
    slider.appendChild(img);
  }

  var currentPhotoIndex = 0;
  var images = slider.getElementsByTagName("img");
  images[currentPhotoIndex].style.display = "block"; // Display the first image initially

  // Function to switch to the next photo
  function nextPhoto() {
    images[currentPhotoIndex].style.display = "none";
    currentPhotoIndex = (currentPhotoIndex + 1) % images.length;
    images[currentPhotoIndex].style.display = "block";
  }

  // Set up an interval to switch photos every 3 seconds
  setInterval(nextPhoto, 3000);
}

// Call the function to start displaying the photos
displayPhotos();
