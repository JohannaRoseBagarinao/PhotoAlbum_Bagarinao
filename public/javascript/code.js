document.addEventListener("DOMContentLoaded", () => {

    function createMiniGallery(images) {
        images.forEach((img, index) => {
            img.style.cursor = 'pointer';
            img.addEventListener('click', () => {
                let currentIndex = index;

                const overlay = document.createElement('div');
                Object.assign(overlay.style, {
                    position: 'fixed',
                    top: 0,
                    left: 0,
                    width: '100vw',
                    height: '100vh',
                    background: 'rgba(0,0,0,0.85)',
                    display: 'flex',
                    flexDirection: 'column',
                    alignItems: 'center',
                    justifyContent: 'center',
                    zIndex: 9999
                });

                const bigImg = document.createElement('img');
                Object.assign(bigImg.style, {
                    maxWidth: '90%',
                    maxHeight: '80%',
                    borderRadius: '10px',
                    boxShadow: '0 0 15px rgba(0,0,0,0.5)'
                });

                const caption = document.createElement('p');
                Object.assign(caption.style, {
                    color: 'white',
                    marginTop: '15px',
                    fontSize: '18px',
                    fontFamily: 'Valeria, serif',
                    fontStyle: 'italic',
                    textAlign: 'center'
                });

                const btnPrev = document.createElement('button');
                const btnNext = document.createElement('button');
                [btnPrev, btnNext].forEach(btn => {
                    Object.assign(btn.style, {
                        position: 'absolute',
                        top: '50%',
                        transform: 'translateY(-50%)',
                        fontSize: '40px',
                        background: 'transparent',
                        color: 'white',
                        border: 'none',
                        cursor: 'pointer'
                    });
                });
                btnPrev.textContent = '❮';
                btnPrev.style.left = '20px';
                btnNext.textContent = '❯';
                btnNext.style.right = '20px';

                function updateImage(newIndex) {
                    currentIndex = (newIndex + images.length) % images.length;
                    const newImg = images[currentIndex];
                    bigImg.src = newImg.src;
                    caption.textContent = newImg.nextElementSibling?.textContent || '';
                }

                btnPrev.addEventListener('click', e => { e.stopPropagation(); updateImage(currentIndex - 1); });
                btnNext.addEventListener('click', e => { e.stopPropagation(); updateImage(currentIndex + 1); });

                overlay.addEventListener('click', e => { if (e.target === overlay) overlay.remove(); });

                document.addEventListener('keydown', function onKey(e) {
                    if (e.key === 'ArrowRight') updateImage(currentIndex + 1);
                    else if (e.key === 'ArrowLeft') updateImage(currentIndex - 1);
                    else if (e.key === 'Escape') {
                        overlay.remove();
                        document.removeEventListener('keydown', onKey);
                    }
                });

                updateImage(currentIndex);
                overlay.append(bigImg, caption, btnPrev, btnNext);
                document.body.appendChild(overlay);
            });
        });
    }

    // Apply to all galleries using ONLY .images
    const galleries = document.querySelectorAll('.images');
    galleries.forEach(container => {
        const images = Array.from(container.querySelectorAll('img'));
        if (images.length) createMiniGallery(images);
    });

});
