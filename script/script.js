var images = document.querySelectorAll('.column img');
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("img01");
var imageCounter = document.getElementById("imageCounter");  // Kétszer deklarálva volt, most csak egyszer van
var currentIndex = 0;


document.querySelectorAll('.question-wrapper').forEach((wrapper) => {
  wrapper.addEventListener('click', () => {
    const parent = wrapper.closest('.gyik-item');
    const answer = parent.querySelector('.answer');
    const toggleBtn = wrapper.querySelector('.toggle-btn');

    // Ellenőrizzük az állapotot
    const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';

    // Nyitás/zárás állapot frissítése
    toggleBtn.setAttribute('aria-expanded', !isExpanded);

    if (!isExpanded) {
      answer.style.maxHeight = answer.scrollHeight + 'px';
    } else {
      answer.style.maxHeight = null;
    }
  });
});


images.forEach(function(image, index) {
  image.addEventListener('click', function() {
    modal.style.display = "block";
    modalImg.src = this.src;
    currentIndex = index;
    updateImageCounter();
  });
});

var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function changeImage(direction) {
  currentIndex += direction;
  if (currentIndex >= images.length) {
    currentIndex = 0;
  } else if (currentIndex < 0) {
    currentIndex = images.length - 1;
  }
  modalImg.src = images[currentIndex].src;
  updateImageCounter();
}

function updateImageCounter() {
  imageCounter.innerHTML = (currentIndex + 1) + ' / ' + images.length;
}





// email
function resetForm() {
  document.getElementById('contact-form').reset();
}

function sendMail() {
  var params = {
      name: document.getElementById("name").value,
      email: document.getElementById("email").value,
      subject: document.getElementById("subject").value,
      message: document.getElementById("message").value,   
  };

  var loadingElement = document.getElementById("loading");
  loadingElement.style.display = "inline-block";

  emailjs.send('service_a8eh5vy', 'template_lnj8uzo', params)
    .then((response) => {
        loadingElement.style.display = "none";
        Swal.fire({
          title: 'Sikeres küldés!',
          text: 'Az üzenetet sikeresen elküldtük.',
          icon: 'success',
          confirmButtonText: 'Rendben'
        });
        resetForm();
    })
    .catch((error) => {
        loadingElement.style.display = "none";
        console.log('FAILED...', error);
    });
}



// Hamburgermenü eseménykezelő hozzárendelése
document.getElementById("menu-btn").addEventListener("click", function() {
  var x = document.getElementById("myTopnav");
  if (x.className === "my_navbar") {
    x.className += " responsive";
  } else {
    x.className = "my_navbar";
  }
});

