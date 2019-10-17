const img =  document.querySelectorAll('img');

img.forEach(element => {
    const openImg = document.querySelector('.openImg');
    element.addEventListener('click', () => {
        console.log(element);
        openImg.innerHTML = element.outerHTML;
        openImg.style.display = 'grid';
    });
    openImg.addEventListener('click', () => {
        openImg.style.display = 'none';
    });
});
