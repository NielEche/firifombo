<div class="gallery2">
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


<div id="imageModal2" class="modal2">
    <span class="close-button2" onclick="closeModal2()">&times;</span>
    <img class="modal-content2" id="modalImage2">
</div>


    <style>


.gallery2{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1vh;
    margin-inline: auto;
    max-width: 40rem;
    padding: 2vh;
}

 .gallery2 > img{
    width: 100%;
    aspect-ratio: 1 / 1;
    object-fit: cover;
    transition: all 0.3s ease;
}

.gallery2:has(img:hover) img:not(:hover) {
    scale: 0.8;
    opacity: 0.5;
    filter: grayscale(70%);
}

.modal2 {
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

.modal-content2 {
    max-width: 80%;
    max-height: 80%;
    margin: 0 auto;
    display: block;
}

.close-button2 {
    position: absolute;
    top: 15px;
    right: 15px;
    font-size: 30px;
    cursor: pointer;
    color: #fff;
}

/* Style for the gallery2 images */
.gallery2 img {
    cursor: pointer;
}

    </style>



<script>
 // Get references to the gallery2, modal, and modal image
const gallery2 = document.querySelector('.gallery2');
const modal2 = document.getElementById('imageModal2');
const modalImage2 = document.getElementById('modalImage2');

// Open the modal when an image is clicked
gallery2.addEventListener('click', (e) => {
    if (e.target.tagName === 'IMG') {
        modalImage2.src = e.target.src;
        modal2.style.display = 'block';
    }
});

// Close the modal
function closeModal2() {
    modal2.style.display = 'none';
}

// Close the modal when clicking outside the image
modal2.addEventListener('click', (e) => {
    if (e.target === modal2) {
        closeModal2();
    }
});

// Allow navigation between images using arrow keys
document.addEventListener('keydown', (e) => {
    if (modal2.style.display === 'block') {
        const imageList = Array.from(gallery2.querySelectorAll('img'));
        const currentIndex = imageList.findIndex((img) => img.src === modalImage2.src);

        if (e.key === 'ArrowLeft' && currentIndex > 0) {
            modalImage2.src = imageList[currentIndex - 1].src;
        } else if (e.key === 'ArrowRight' && currentIndex < imageList.length - 1) {
            modalImage2.src = imageList[currentIndex + 1].src;
        }
    }
});

</script>


