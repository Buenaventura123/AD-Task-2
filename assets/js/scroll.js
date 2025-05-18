function scrollLeft(id) {
    const el = document.getElementById(id);
    if (el) el.scrollBy({ left: -500, behavior: 'smooth' });
}

function scrollRight(id) {
    const el = document.getElementById(id);
    if (el) el.scrollBy({ left: 500, behavior: 'smooth' });
}

// Enable mouse drag to scroll
function enableDragScroll(containerId) {
    const slider = document.getElementById(containerId);
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2; // scroll speed
        slider.scrollLeft = scrollLeft - walk;
    });
}

window.onload = function () {
    enableDragScroll('movieScroll');
    enableDragScroll('recommendedScroll');
    enableDragScroll('artistScroll');
};
