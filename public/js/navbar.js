document.addEventListener("DOMContentLoaded", function () {
    const container = document.querySelector('.container');
    const navbarOpen = document.querySelector('.navbar-open');
    const topbarTitle = document.querySelector('.topbar-title');
    const navbarClose = document.querySelector('.navbar-close');
    const navbar = document.querySelector('.navbar');
    const navbarSeparator = document.querySelector('.navbar-separator');
    const navbarItems = document.querySelectorAll('.navbar-item');


    const openNav = () => {
        navbarOpen.style.display = 'none';
        navbarSeparator.style.display = 'block';
        topbarTitle.style.margin = '0px 0px';
        navbar.classList.toggle('open');
        navbar.classList.toggle('close');
    }
    const closeNav = () => {
        navbarOpen.style.display = 'block';
        navbarSeparator.style.display = 'none';
        topbarTitle.style.margin = '0px 30px';
        navbar.classList.toggle('open');
        navbar.classList.toggle('close');
    }

    navbarOpen.addEventListener('click', openNav);
    navbarClose.addEventListener('click', closeNav);

    document.querySelector('.logout-button').onclick= () => {document.forms.logout.submit();};

});


