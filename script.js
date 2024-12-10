// Плавные переходы между страницами
document.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', (e) => {
        e.preventDefault();
        const targetPage = link.getAttribute('href');
        document.body.style.opacity = '0';
        setTimeout(() => {
            window.location.href = targetPage;
        }, 500);
    });
});
