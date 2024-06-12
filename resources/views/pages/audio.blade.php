    @php
        $audios = \App\Models\audios::orderBy('created_at', 'desc')->get();
    @endphp
    <center>
        <div class="scroll" style="padding:25px;">
            <div class="gallery">
                
                @foreach ($audios as $audio)
                    <div>
                        <a href="{{ $audio->link}}"  target="_blank">
                        <img src="{{ asset('storage/images/' . $audio->image_path) }}" alt="">
                        <p style="width:90px; line-height: 1; font-size:10px;" class="Audioheader theunseen mt-2">{{ $audio->title}}</p>
                        </a>
                    </div>
                @endforeach
            

                 
                   
                    
            </div>
        </div>
        <h1 class="UNDERTOWNPERSONALUSE audioTitle">Firi's Audio Archive</h1>
    </center>

<style>


.gallery{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1vh;
    margin-inline: auto;
    max-width: 40rem;
    padding: 2vh;
}

.Audioheader{
   font-size:14px;
   color:black;
} 

.audioTitle {
    font-size:25px;
    color:black;
    margin-top:10px;
}

 .gallery > div img{
    width: 100%;
    aspect-ratio: 1 / 1;
    object-fit: cover;
    transition: all 0.3s ease;
    border-radius:10px;
}

.gallery:has(img:hover) img:not(:hover) {
    scale: 0.8;
    opacity: 0.5;
    filter: grayscale(70%);
}

          
            div.scroll {
                margin:4px, 4px;
                padding:10px;
                width: 100%;
                height: 450px;
                overflow-x: hidden;
                overflow-y: auto;
                text-align:justify;
            }
        </style>