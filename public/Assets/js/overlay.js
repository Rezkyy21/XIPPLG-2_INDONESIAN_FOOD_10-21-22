// Overlay functionality
const overlay = document.getElementById('overlay');
const overlayImage = document.getElementById('overlay-image');
const overlayDescription = document.getElementById('overlay-description');
const closeBtn = document.querySelector('.close-btn');

// Add click event to all images
document.querySelectorAll('.clickable-image').forEach(image => {
    image.addEventListener('click', () => {
        overlay.style.display = 'flex';
        overlayImage.src = image.src;
        overlayDescription.textContent = image.dataset.description || "No description available.";
    });
});

// Close overlay
closeBtn.addEventListener('click', () => {
    overlay.style.display = 'none';
});

// Close overlay when clicking outside
overlay.addEventListener('click', (event) => {
    if (event.target === overlay) {
        overlay.style.display = 'none';
    }
});
