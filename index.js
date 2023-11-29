let container1Text = document.getElementById('container1-text');
let container1mage = document.getElementById('container1-image');
const myCarousel = document.getElementById('myCarousel')

  myCarousel.addEventListener('slide.bs.carousel', event => {
    interval: 2000;
  });

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    container1Text.style.left = value * -0.8 + "px";
    container1mage.style.right = value * -0.8 + "px";
    container1mage.style.bottom = value * -.8 + "px";
});


const cards = document.querySelectorAll('.dine-in, .deliver, .pick-up');


function handleIntersection(entries, observer) {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.style.transform = 'translateX(0)';
                entry.target.style.opacity = '1';
            }, index * 300);
        } else {
            entry.target.style.transform = 'translateX(-70%)';
            entry.target.style.opacity = '0';
        }
    });
}

const observer = new IntersectionObserver(handleIntersection, {
    root: null,
    rootMargin: '0px',
    threshold: 0.2,
});

cards.forEach(card => {
    observer.observe(card);
});