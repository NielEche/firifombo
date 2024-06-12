<div class="gallery">
        <img src="https://images.pexels.com/photos/60163/pexels-photo-60163.jpeg" alt="">
        <img src="https://images.pexels.com/photos/159613/ghettoblaster-radio-recorder-boombox-old-school-159613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        <img src="https://images.pexels.com/photos/1002669/pexels-photo-1002669.jpeg" alt="">
        <img src="https://images.pexels.com/photos/7810405/pexels-photo-7810405.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        <img src="https://images.pexels.com/photos/5699509/pexels-photo-5699509.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        <img src="https://images.pexels.com/photos/7162533/pexels-photo-7162533.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        <img src="https://images.pexels.com/photos/3808904/pexels-photo-3808904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        <img src="https://images.pexels.com/photos/3944091/pexels-photo-3944091.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        <img src="https://images.pexels.com/photos/821738/pexels-photo-821738.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        <img src="https://images.pexels.com/photos/60163/pexels-photo-60163.jpeg" alt="">
        <img src="https://images.pexels.com/photos/159613/ghettoblaster-radio-recorder-boombox-old-school-159613.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
        <img src="https://images.pexels.com/photos/1002669/pexels-photo-1002669.jpeg" alt="">
    </div>


<div id="imageModal" class="modal">
    <span class="close-button" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
</div>


    <style>


.gallery{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1vh;
    margin-inline: auto;
    max-width: 40rem;
    padding: 2vh;
}

 .gallery > img{
    width: 100%;
    aspect-ratio: 1 / 1;
    object-fit: cover;
    transition: all 0.3s ease;
}

.gallery:has(img:hover) img:not(:hover) {
    scale: 0.8;
    opacity: 0.5;
    filter: grayscale(70%);
}

.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 50px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    text-align: center;
}

.modal-content {
    max-width: 80%;
    max-height: 80%;
    margin: 0 auto;
    display: block;
}

.close-button {
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 30px;
    cursor: pointer;
    color: #fff;
}

/* Style for the gallery images */
.gallery img {
    cursor: pointer;
}

    </style>



<script>
 // Get references to the gallery, modal, and modal image
const gallery = document.querySelector('.gallery');
const modal = document.getElementById('imageModal');
const modalImage = document.getElementById('modalImage');

// Open the modal when an image is clicked
gallery.addEventListener('click', (e) => {
    if (e.target.tagName === 'IMG') {
        modalImage.src = e.target.src;
        modal.style.display = 'block';
    }
});

// Close the modal
function closeModal() {
    modal.style.display = 'none';
}

// Close the modal when clicking outside the image
modal.addEventListener('click', (e) => {
    if (e.target === modal) {
        closeModal();
    }
});

// Allow navigation between images using arrow keys
document.addEventListener('keydown', (e) => {
    if (modal.style.display === 'block') {
        const imageList = Array.from(gallery.querySelectorAll('img'));
        const currentIndex = imageList.findIndex((img) => img.src === modalImage.src);

        if (e.key === 'ArrowLeft' && currentIndex > 0) {
            modalImage.src = imageList[currentIndex - 1].src;
        } else if (e.key === 'ArrowRight' && currentIndex < imageList.length - 1) {
            modalImage.src = imageList[currentIndex + 1].src;
        }
    }
});

</script>


