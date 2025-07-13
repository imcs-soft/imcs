document.addEventListener('DOMContentLoaded', () => {
    const reviews = document.querySelectorAll('#reviews .review');
    let idx = 0;
    setInterval(() => {
        reviews[idx].classList.remove('active');
        idx = (idx + 1) % reviews.length;
        reviews[idx].classList.add('active');
    }, 4000);
});
