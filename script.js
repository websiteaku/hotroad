// Toggle class active (yang mau nya ada jadi gak ada begitu pun sebaliknya) //
const navbarNav = document.querySelector 
('.navbar-nav');
// Ketika humburger menu di klik //
document.querySelector('#hamburger-menu').onclick = () => {
    navbarNav.classList.toggle('active');
};

// Klik di luar mana saja untuk menghilangkan nav atau slide bar //
const hamburger = document.querySelector('#hamburger-menu');

  document.getElementById('menu-toggle').addEventListener('click', function(e) {
    e.preventDefault(); // cegah scroll ke atas
    document.getElementById('nav-menu').classList.toggle('active');

});