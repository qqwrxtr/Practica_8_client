window.addEventListener('scroll', function(){
    const header = this.document.querySelector('header');
    header.classList.toggle("sticky", window.scrollY > 0);
});

function toggleMenu() {
    const menuToggle = document.querySelector('.menuToggle');
    const navigation = document.querySelector('.navigation');
    menuToggle.classList.toggle('active');
    navigation.classList.toggle('active');
}

var navigationLinks = document.querySelectorAll('.navigation a[href^="#"]');
navigationLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        var target = document.querySelector(this.getAttribute('href'));
        window.scrollTo({
            top: target.offsetTop,
            behavior: 'smooth'
        });
    });
});

var nameInput = document.querySelector('input[type="text"][placeholder="Nume"]');
var emailInput = document.querySelector('input[type="text"][placeholder="Email"]');
var messageInput = document.querySelector('textarea[placeholder="Mesajul dumneavoastră"]');
var submitButton = document.querySelector('input[type="submit"]');

if (localStorage.getItem('name')) {
  nameInput.value = localStorage.getItem('name');
}
if (localStorage.getItem('email')) {
  emailInput.value = localStorage.getItem('email');
}
if (localStorage.getItem('message')) {
  messageInput.value = localStorage.getItem('message');
}

submitButton.addEventListener('click', function(event) {
  event.preventDefault(); 

  localStorage.setItem('name', nameInput.value);
  localStorage.setItem('email', emailInput.value);
  localStorage.setItem('message', messageInput.value);

  alert('Datele au fost salvate cu succes!');

  nameInput.value = '';
  emailInput.value = '';
  messageInput.value = '';
});

  function adaugaInCos(numeProdus) {
    if (typeof(Storage) !== "undefined") {
      if (localStorage.getItem("cos")) {
        var produse = JSON.parse(localStorage.getItem("cos"));
        produse.push(numeProdus);
        localStorage.setItem("cos", JSON.stringify(produse));
      } else {
        var produse = [numeProdus];
        localStorage.setItem("cos", JSON.stringify(produse));
      }
     
      alert("Produsul a fost adăugat în coșul de cumpărături!");
    } else {
      alert("Ne pare rău, dar browserul dvs. nu suportă funcționalitatea Local Storage.");
    }
  }
  var imaginiProdus = document.querySelectorAll(".imgBx img");
  imaginiProdus.forEach(function(imagine) {
    imagine.addEventListener("click", function() {
      var numeProdus = this.parentElement.nextElementSibling.querySelector("h3").textContent;
      adaugaInCos(numeProdus);
    });
  });








