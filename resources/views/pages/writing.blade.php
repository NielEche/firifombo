    @php
        $writing = \App\Models\writings::inRandomOrder()->paginate(10);
    @endphp
    <center>
        <div class="scroll" style="padding:40px;">
            <div class="writing">
                
                @foreach ($writing as $writing)
                <div x-data="{ open: false }">
                    <div class="writingCon">
                     <h6  @click="open = true" style="line-height:1; font-size:16px;" class=" theunseen text-black" >{{ $writing->title}}</h6>
                     <p @click="open = true" id="open-writing-button" class="writingBody theunseen">{{ \Illuminate\Support\Str::limit($writing->content, 50, '...') }}</p>
                    </div>
                       <!-- Modal overlay -->
                    <div x-show="open" class="scroll fixed inset-0 z-50 overflow-auto bg-black bg-opacity-20 flex items-center justify-center">
                        <!-- Modal content -->
                        <div class="bg-white p-6 absolute rounded shadow-md" style="width: 20rem; height:auto !important; top: -0;">
                            <div class="flex justify-between pb-10">
                                <!-- Close button -->
                                <button @click="open = false" class="mt-2 px-2 py-2 bg-black text-black border border-black rounded" style="font-size: 12px; background: yellow;">Close</button>
                            </div>
                            <a href="{{ $writing->link}}" target="_blank"><h2 class="text-lg font-bold mb-0  theunseen" style="color:black; line-height: 1;">{{ $writing->title}}</h2>
                            <p class="UNDERTOWNPERSONALUSE text-xs py-2">See More</p></a>
                            <hr>

                            <p class="writingBody theunseen">{{ $writing->content}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                    
                    
 
            </div>
        </div>

        <h1 class="UNDERTOWNPERSONALUSE writingTitle">Firi's Writing Archive</h1>
        
    </center>

<style>


.writing{
    padding: 0vh 3vh;
}

.writingTitle {
    font-size:25px;
    color:black;
    margin-top:10px;
}

.writingCon {
    margin-bottom:20px;
}

.writingHeader{
    font-size:25px;
    color:black !important;
    line-height:1;
} 

.writingBody {
    font-size:12px;
    color:black !important;   
}

 .gallery > div {
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