// Select important elements
const header = document.querySelector('.main-header');
const fullScreenMenu = document.getElementById('fullScreenMenu');
const hamburgerMenu = document.querySelector('.hamburger-menu');

const horizontalTabs = document.querySelector('.horizontal-tabs');
const tabs = document.querySelectorAll('.horizontal-tabs .tab');
const sections = document.querySelectorAll('.category__container__section section');


// Function to toggle the 'scrolled' class on header
function toggleHeaderScroll() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    header.classList.toggle('scrolled', scrollTop > 50);
}

// Function to toggle the full-screen menu
function toggleMenu() {
    fullScreenMenu.classList.toggle('active');
    hamburgerMenu.classList.toggle('open');
}

// Function to highlight active tab based on scroll position
function highlightActiveTab() {
    let currentSectionId = '';
    const headerOffset = header.offsetHeight + horizontalTabs.offsetHeight;

    sections.forEach(section => {
        const sectionTop = (section.offsetTop - headerOffset) - 15;
        const sectionBottom = sectionTop + section.offsetHeight;
        if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionBottom) {
            currentSectionId = section.id;
        }
    });

    tabs.forEach(tab => {
        const href = tab.getAttribute('href').substring(1);
        tab.classList.toggle('active', href === currentSectionId);
    });
}

// Function to smooth scroll to section when clicking on a tab
function scrollToSection(e) {
    e.preventDefault();
    const targetId = this.getAttribute('href');
    const targetSection = document.querySelector(targetId);

    // حساب موضع القسم والانتقال العمودي
    const headerOffset = (header.offsetHeight + horizontalTabs.offsetHeight)+15;
    const targetPosition = targetSection.offsetTop - headerOffset;


    window.scrollTo({
        top: targetPosition,
        behavior: 'smooth'
    });

    // تحريك التبويب إلى المنتصف أفقيًا
    const tabWidth = this.offsetWidth;
    const tabOffset = this.offsetLeft;
    const containerWidth = horizontalTabs.clientWidth;

    // ضبط التمرير لجعل التبويب في المنتصف
    horizontalTabs.scrollTo({
        left: tabOffset - (containerWidth / 2) + (tabWidth / 2),
        behavior: 'smooth'
    });
}


// Function to handle tab scrolling
function handleTabScroll() {
    const maxScroll = horizontalTabs.scrollWidth - horizontalTabs.clientWidth;
}

// Event Listeners
window.addEventListener('scroll', () => {
    toggleHeaderScroll();
    highlightActiveTab();
});

tabs.forEach(tab => tab.addEventListener('click', scrollToSection));
horizontalTabs.addEventListener('scroll', handleTabScroll);

// Initial calls
toggleHeaderScroll();
highlightActiveTab();

tabs.forEach(tab => tab.addEventListener('click', scrollToSection));
