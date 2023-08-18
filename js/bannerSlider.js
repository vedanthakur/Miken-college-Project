var photos = [
  {
    // <img src="one.jpg" alt="photo of mine">
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
    var img = document.createElement("img"); // <img>
    img.src = photos[i].src; // <img src="https://random.imagecdn.app/1320/349">
    img.alt = photos[i].alt; // <img src="https://random.imagecdn.app/1320/349" alt="Image 1">
    img.className = "slide"; // <img src="https://random.imagecdn.app/1320/349" alt="Image 1" class="slide">
    img.style.display = "none"; // Hide all images initially
    slider.appendChild(img); // adds <img> element inside <div id="slide">
    // <div id="slide"> <img ...> </div>
  }

  var currentPhotoIndex = 0;
  var images = slider.getElementsByTagName("img"); 
  // <img src=".." alt="Image 1"> <img src="..." alt="Image 2"> <img src="..." alt="Image 3">
  images[currentPhotoIndex].style.display = "block"; // Display the first image initially

  // Function to switch to the next photo
  function nextPhoto() {
    images[currentPhotoIndex].style.display = "none"; // hide the currently showing image
    currentPhotoIndex = (currentPhotoIndex + 1) % images.length; // 2+1 % 3 = 0
    images[currentPhotoIndex].style.display = "block"; // display the next image
  }

  // Set up an interval to switch photos every 3 seconds
  setInterval(nextPhoto, 3000); // calls nextPhoto() function in every 3 seconds
  // currentPhotoIndex=2
}

// Call the function to start displaying the photos
displayPhotos();
