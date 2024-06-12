<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <!-- Styles -->
        <style>
          @import url('https://fonts.googleapis.com/css?family=Stalemate');
*, *:before, *:after {
  box-sizing: border-box;
}

img {
  max-width: 100%;
}
body {
/*   background:  linear-gradient(
      rgba(255, 250, 250, 0.75), 
      rgba(255, 250, 250, 0.75)), url(https://image.freepik.com/free-vector/forest-herbs-blue-background_8365-70.jpg); */
/*     background:     linear-gradient(
      rgba(255, 250, 250, 0.75), 
      rgba(255, 250, 250, 0.75)
    ), url(https://i.pinimg.com/736x/3c/c0/54/3cc0541a55ce0550f78246bed0a96380--vintage-floral-backgrounds-vintage-wallpapers.jpg); */
    background:  linear-gradient(
      rgba(255, 255, 255, 0.9), 
      rgba(255, 255, 255, 0.9)), url(https://s-media-cache-ak0.pinimg.com/originals/30/b3/a9/30b3a9b27032a6b9c1d7a69d2400fb9e.jpg);
  font-family: 'Stalemate', cursive;
}


.container {
  overflow: hidden;
 // margin-top: 3%;
}
.book-wrapper {
  position: relative;
  margin: 2% auto;
  width: 670px;
}

.book-wrapper img {
      filter: drop-shadow(15px 5px 5px #494338);
}
.pages-container {
    position: absolute;
    top: 4%;
    left: 3%;
    right: 0;
    bottom: 0;
    width: 91.5%;
    height: 91%;
}

.pages {

}
.pages [class^="page-num-"] {
	background-image: url("https://img00.deviantart.net/cbb9/i/2005/258/c/4/paper_texture_v5_by_bashcorpo.jpg");
   background-size: auto 100%;
  position: relative;
}


.pages-content {
    text-align: center;
      position: absolute;
    width: 100%;
    height: 100%;
    display: table;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 10%;
}

.content-inner {
      text-align: center;
    display: table-cell;
    vertical-align: middle;
}


.book-wrapper {
   user-select: none;
}


.page-num-1 .pages-background {
    background: linear-gradient( rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.1)), url(https://openclipart.org/image/2400px/svg_to_png/242093/Vintage-Floral-Texture-Background.png);
    background-size: cover;
    opacity: 0.2;
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
}

            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
           <!--
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            -->
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <!--
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>-->
                <div class="container">
                    <div class="book-wrapper">
                      <div class="book-cover">
                        <img src="https://github.com/slyka85/assets/blob/master/bookcover2.png?raw=true" alt="">
                      </div>
                      <div class="pages-container">
                        <div class="pages">
                          <div class="page-num-1">
                            <div class="pages-content">
                              <div class="pages-background"></div>
                              <div class="content-inner">
                                <h1>Chapter 1</h1>
                                <div class="text"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ea non vitae a assumenda sint quod, dolores laboriosam velit corrupti nobis cupiditate perspiciatis natus exercitationem, architecto esse ratione blanditiis! Itaque.</p></div>
                              </div>
                            </div>
                          </div>
                          <div class="page-num-2">
                            <div class="pages-content">
                              <div class="content-inner">
                                <h1>Chapter 2</h1>
                                <div class="text">
                                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos, cumque autem! Magni eligendi qui officiis? Fugit iste voluptatum atque voluptatibus totam! Nisi accusantium saepe hic. Aut nobis nesciunt mollitia error.</p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam odio modi, hic ratione fugit quod natus, excepturi quae minus voluptatum cupiditate quia magnam eveniet ex, reiciendis voluptates ipsam iste laudantium!</p>
                                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati deserunt magnam, at perspiciatis aut. Voluptatem consequuntur neque quisquam?</p>
                                  </div>
                              </div>
                            </div>
                  
                          </div>
                          <div class="page-num-3">
                            <div class="pages-content">
                              <div class="content-inner">
                                <h1>Chapter 3</h1>
                                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate voluptas molestiae tempore amet adipisci dicta incidunt nisi alias distinctio fugit blanditiis dignissimos nobis deserunt eum consequuntur ipsam, perspiciatis numquam repellendus.</p>
                                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Delectus in odio deserunt est hic minima inventore, mollitia, officia aspernatur eaque voluptatibus? Amet, molestias adipisci delectus ea eligendi sit numquam illo.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="page-num-4">
                            <div class="pages-content">
                              <div class="content-inner">
                                <h1>The End</h1>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                  </div>
            </div>
        </div>
        <script>
            	/**
 * turn.js 4th release
 * turnjs.com
 * turnjs.com/license.txt
 *
 * Copyright (C) 2012 Emmanuel Garcia
 * All rights reserved
 **/

(function($) {

'use strict';

var has3d,
  
  hasRot,

  vendor = '',
  
  version = '4.1.0',

  PI = Math.PI,

  A90 = PI/2,

  isTouch = 'ontouchstart' in window,

  mouseEvents = (isTouch) ?
    {
      down: 'touchstart',
      move: 'touchmove',
      up: 'touchend',
      over: 'touchstart',
      out: 'touchend'
    }
    :
    {
      down: 'mousedown',
      move: 'mousemove',
      up: 'mouseup',
      over: 'mouseover',
      out: 'mouseout'
    },

  // Contansts used for each corner
  //   | tl * tr |
  // l | *     * | r
  //   | bl * br |

  corners = {
    backward: ['bl', 'tl'],
    forward: ['br', 'tr'],
    all: ['tl', 'bl', 'tr', 'br', 'l', 'r']
  },

  // Display values

  displays = ['single', 'double'],

  // Direction values

  directions = ['ltr', 'rtl'],

  // Default options

  turnOptions = {

    // Enables hardware acceleration

    acceleration: true,

    // Display

    display: 'double',

    // Duration of transition in milliseconds

    duration: 600,

    // First page

    page: 1,
    
    // Enables gradients

    gradients: true,

    // Corners used when turning the page

    turnCorners: 'bl,br',

    // Events

    when: null
  },

  flipOptions = {

    // Size of the active zone of each corner

    cornerSize: 100

  },

  // Number of pages in the DOM, minimum value: 6

  pagesInDOM = 6,
  

turnMethods = {

  // Singleton constructor
  // $('#selector').turn([options]);

  init: function(options) {

    // Define constants
    
    has3d = 'WebKitCSSMatrix' in window || 'MozPerspective' in document.body.style;
    hasRot = rotationAvailable();
    vendor = getPrefix();

    var i, that = this, pageNum = 0, data = this.data(), ch = this.children();

    // Set initial configuration

    options = $.extend({
      width: this.width(),
      height: this.height(),
      direction: this.attr('dir') || this.css('direction') || 'ltr'
    }, turnOptions, options);

    data.opts = options;
    data.pageObjs = {};
    data.pages = {};
    data.pageWrap = {};
    data.pageZoom = {};
    data.pagePlace = {};
    data.pageMv = [];
    data.zoom = 1;
    data.totalPages = options.pages || 0;
    data.eventHandlers = {
      touchStart: $.proxy(turnMethods._touchStart, this),
      touchMove: $.proxy(turnMethods._touchMove, this),
      touchEnd: $.proxy(turnMethods._touchEnd, this),
      start: $.proxy(turnMethods._eventStart, this)
    };



    // Add event listeners

    if (options.when)
      for (i in options.when)
        if (has(i, options.when))
          this.bind(i, options.when[i]);

    // Set the css

    this.css({position: 'relative', width: options.width, height: options.height});

    // Set the initial display

    this.turn('display', options.display);

    // Set the direction

    if (options.direction!=='')
      this.turn('direction', options.direction);
    
    // Prevent blue screen problems of switching to hardware acceleration mode
    // By forcing hardware acceleration for ever

    if (has3d && !isTouch && options.acceleration)
      this.transform(translate(0, 0, true));

    // Add pages from the DOM

    for (i = 0; i<ch.length; i++) {
      if ($(ch[i]).attr('ignore')!='1') {
        this.turn('addPage', ch[i], ++pageNum);
      }
    }

    // Event listeners

    $(this).bind(mouseEvents.down, data.eventHandlers.touchStart).
      bind('end', turnMethods._eventEnd).
      bind('pressed', turnMethods._eventPressed).
      bind('released', turnMethods._eventReleased).
      bind('flip', turnMethods._flip);

    $(this).parent().bind('start', data.eventHandlers.start);

    $(document).bind(mouseEvents.move, data.eventHandlers.touchMove).
      bind(mouseEvents.up, data.eventHandlers.touchEnd);

    // Set the initial page

    this.turn('page', options.page);

    // This flipbook is ready

    data.done = true;

    return this;
  },

  // Adds a page from external data

  addPage: function(element, page) {

    var currentPage,
      className,
      incPages = false,
      data = this.data(),
      lastPage = data.totalPages+1;

    if (data.destroying)
      return false;

    // Read the page number from the className of `element` - format: p[0-9]+

    if ((currentPage = /\bp([0-9]+)\b/.exec($(element).attr('class'))))
      page = parseInt(currentPage[1], 10);

    if (page) {
      
      if (page==lastPage)
        incPages = true;
      else if (page>lastPage)
        throw turnError('Page "'+page+'" cannot be inserted');

    } else {
      
      page = lastPage;
      incPages = true;

    }

    if (page>=1 && page<=lastPage) {

      if (data.display=='double')
        className = (page%2) ? ' odd' : ' even';
      else
        className = '';

      // Stop animations
      if (data.done)
        this.turn('stop');

      // Move pages if it's necessary
      if (page in data.pageObjs)
        turnMethods._movePages.call(this, page, 1);

      // Increase the number of pages
      if (incPages)
        data.totalPages = lastPage;

      // Add element
      data.pageObjs[page] = $(element).
        css({'float': 'left'}).
        addClass('page p' + page + className);

      if (!hasHardPage() &&  data.pageObjs[page].hasClass('hard')) {
        data.pageObjs[page].removeClass('hard');
      }

      // Add page
      turnMethods._addPage.call(this, page);

      // Remove pages out of range
      turnMethods._removeFromDOM.call(this);
    }

    return this;
  },

  // Adds a page

  _addPage: function(page) {
    
    var data = this.data(),
      element = data.pageObjs[page];

    if (element)
      if (turnMethods._necessPage.call(this, page)) {

        if (!data.pageWrap[page]) {

          // Wrapper
          data.pageWrap[page] = $('<div/>',
            {'class': 'page-wrapper',
              page: page,
              css: {position: 'absolute',
              overflow: 'hidden'}});

          // Append to this flipbook
          this.append(data.pageWrap[page]);

          if (!data.pagePlace[page]) {
            
            data.pagePlace[page] = page;
            // Move `pageObjs[page]` to wrapper
            data.pageObjs[page].appendTo(data.pageWrap[page]);
          
         }

          // Set the size of the page
          var prop = turnMethods._pageSize.call(this, page, true);
          element.css({width: prop.width, height: prop.height});
          data.pageWrap[page].css(prop);

        }

        if (data.pagePlace[page] == page) {

         // If the page isn't in another place, create the flip effect
          turnMethods._makeFlip.call(this, page);

      }
        
      } else {

        // Place
        data.pagePlace[page] = 0;

        // Remove element from the DOM
        if (data.pageObjs[page])
          data.pageObjs[page].remove();

      }

  },

  // Checks if a page is in memory
  
  hasPage: function(page) {

    return has(page, this.data().pageObjs);
  
  },

  // Centers the flipbook

  center: function(page) {
    
    var data = this.data(),
      size = $(this).turn('size'),
      left = 0;

    if (!data.noCenter) {
      if (data.display=='double') {
        var view = this.turn('view', page || data.tpage || data.page);

        if (data.direction=='ltr') {
          if (!view[0])
            left -= size.width/4;
          else if (!view[1])
            left += size.width/4;
        } else {
          if (!view[0])
            left += size.width/4;
          else if (!view[1])
            left -= size.width/4;
        }
      
      }

      $(this).css({marginLeft: left});
    }

    return this;

  },

  // Destroys the flipbook

  destroy: function () {

    var page,
      flipbook = this,
      data = this.data(),
      events = [
        'end', 'first', 'flip', 'last', 'pressed',
        'released', 'start', 'turning', 'turned',
        'zooming', 'missing'];

    if (trigger('destroying', this)=='prevented')
      return;

    data.destroying = true;

    $.each(events, function(index, eventName) {
      flipbook.unbind(eventName);
    });

    this.parent().unbind('start', data.eventHandlers.start);

    $(document).unbind(mouseEvents.move, data.eventHandlers.touchMove).
      unbind(mouseEvents.up, data.eventHandlers.touchEnd);
    
    while (data.totalPages!==0) {
      this.turn('removePage', data.totalPages);
    }

    if (data.fparent)
      data.fparent.remove();

    if (data.shadow)
      data.shadow.remove();

    this.removeData();
    data = null;

    return this;

  },

  // Checks if this element is a flipbook

  is: function() {

    return typeof(this.data().pages)=='object';

  },

  // Sets and gets the zoom value

  zoom: function(newZoom) {
    
    var data = this.data();

    if (typeof(newZoom)=='number') {

      if (newZoom<0.001 || newZoom>100)
        throw turnError(newZoom+ ' is not a value for zoom');
      
      if (trigger('zooming', this, [newZoom, data.zoom])=='prevented')
        return this;
      
      var size = this.turn('size'),
        currentView = this.turn('view'),
        iz = 1/data.zoom,
        newWidth = Math.round(size.width * iz * newZoom),
        newHeight = Math.round(size.height * iz * newZoom);
    
      data.zoom = newZoom;

      $(this).turn('stop').
        turn('size', newWidth, newHeight);
        /*.
        css({marginTop: size.height * iz / 2 - newHeight / 2});*/

      if (data.opts.autoCenter)
        this.turn('center');
      /*else
        $(this).css({marginLeft: size.width * iz / 2 - newWidth / 2});*/

      turnMethods._updateShadow.call(this);

      for (var i = 0; i<currentView.length; i++) {
        if (currentView[i] && data.pageZoom[currentView[i]]!=data.zoom) {
  
          this.trigger('zoomed',[
            currentView[i],
            currentView,
            data.pageZoom[currentView[i]],
            data.zoom]);

          data.pageZoom[currentView[i]] = data.zoom;
      }
    }

      return this;

    } else
      return data.zoom;

  },

  // Gets the size of a page

  _pageSize: function(page, position) {

    var data = this.data(),
      prop = {};

    if (data.display=='single') {

      prop.width = this.width();
      prop.height = this.height();

      if (position) {
        prop.top = 0;
        prop.left = 0;
        prop.right = 'auto';
      }

    } else {

      var pageWidth = this.width()/2,
        pageHeight = this.height();

      if (data.pageObjs[page].hasClass('own-size')) {
        prop.width = data.pageObjs[page].width();
        prop.height = data.pageObjs[page].height();
      } else {
        prop.width = pageWidth;
        prop.height = pageHeight;
      }
      
      if (position) {
        var odd = page%2;
        prop.top = (pageHeight-prop.height)/2;

        if (data.direction=='ltr') {
          
          prop[(odd) ? 'right' : 'left'] = pageWidth-prop.width;
          prop[(odd) ? 'left' : 'right'] = 'auto';

        } else {
          
          prop[(odd) ? 'left' : 'right'] = pageWidth-prop.width;
          prop[(odd) ? 'right' : 'left'] = 'auto';

        }
      
      }
    }

    return prop;

  },

  // Prepares the flip effect for a page

  _makeFlip: function(page) {

    var data = this.data();

    if (!data.pages[page] && data.pagePlace[page]==page) {
      
      var single = data.display=='single',
        odd = page%2;

      data.pages[page] = data.pageObjs[page].
        css(turnMethods._pageSize.call(this, page)).
        flip({
          page: page,
          next: (odd || single) ? page+1 : page-1,
          turn: this
        }).
        flip('disable', data.disabled);

        // Issue about z-index
        turnMethods._setPageLoc.call(this, page);

        data.pageZoom[page] = data.zoom;
        
    }

    return data.pages[page];
  },

  // Makes pages within a range

  _makeRange: function() {

    var page, range,
      data = this.data();

    if (data.totalPages<1)
      return;

    range = this.turn('range');

    for (page = range[0]; page<=range[1]; page++)
      turnMethods._addPage.call(this, page);

  },

  // Returns a range of pages that should be in the DOM
  // Example:
  // - page in the current view, return true
  // * page is in the range, return true
  // Otherwise, return false
  //
  // 1 2-3 4-5 6-7 8-9 10-11 12-13
  //   **  **  --   **  **

  range: function(page) {

    var remainingPages, left, right, view,
      data = this.data();

      page = page || data.tpage || data.page || 1;
      view = turnMethods._view.call(this, page);

      if (page<1 || page>data.totalPages)
        throw turnError('"'+page+'" is not a valid page');

    
      view[1] = view[1] || view[0];
      
      if (view[0]>=1 && view[1]<=data.totalPages) {

        remainingPages = Math.floor((pagesInDOM-2)/2);

        if (data.totalPages-view[1] > view[0]) {
          left = Math.min(view[0]-1, remainingPages);
          right = 2*remainingPages-left;
        } else {
          right = Math.min(data.totalPages-view[1], remainingPages);
          left = 2*remainingPages-right;
        }

      } else {
        left = pagesInDOM-1;
        right = pagesInDOM-1;
      }

      return [Math.max(1, view[0]-left),
          Math.min(data.totalPages, view[1]+right)];

  },

  // Detects if a page is within the range of `pagesInDOM` from the current view

  _necessPage: function(page) {
    
    if (page===0)
      return true;

    var range = this.turn('range');

    return this.data().pageObjs[page].hasClass('fixed') ||
      (page>=range[0] && page<=range[1]);
    
  },

  // Releases memory by removing pages from the DOM

  _removeFromDOM: function() {

    var page, data = this.data();

    for (page in data.pageWrap)
      if (has(page, data.pageWrap) &&
        !turnMethods._necessPage.call(this, page))
      turnMethods._removePageFromDOM.call(this, page);
    
  },

  // Removes a page from DOM and its internal references

  _removePageFromDOM: function(page) {

    var data = this.data();

    if (data.pages[page]) {
      var dd = data.pages[page].data();

      flipMethods._moveFoldingPage.call(data.pages[page], false);

      if (dd.f && dd.f.fwrapper)
        dd.f.fwrapper.remove();

      data.pages[page].removeData();
      data.pages[page].remove();
      delete data.pages[page];
    }

    if (data.pageObjs[page])
      data.pageObjs[page].remove();

    if (data.pageWrap[page]) {
      data.pageWrap[page].remove();
      delete data.pageWrap[page];
    }

    turnMethods._removeMv.call(this, page);

    delete data.pagePlace[page];
    delete data.pageZoom[page];

  },

  // Removes a page

  removePage: function(page) {

    var data = this.data();

    // Delete all the pages
    if (page=='*') {
      
      while (data.totalPages!==0) {
        this.turn('removePage', data.totalPages);
      }

    } else {

      if (page<1 || page>data.totalPages)
        throw turnError('The page '+ page + ' doesn\'t exist');
        
      if (data.pageObjs[page]) {

        // Stop animations
        this.turn('stop');

        // Remove `page`
        turnMethods._removePageFromDOM.call(this, page);

        delete data.pageObjs[page];

      }

      // Move the pages
      turnMethods._movePages.call(this, page, -1);

      // Resize the size of this flipbook
      data.totalPages = data.totalPages-1;

      // Check the current view

      if (data.page>data.totalPages) {

       data.page = null;
       turnMethods._fitPage.call(this, data.totalPages);

      } else {

        turnMethods._makeRange.call(this);
        this.turn('update');

      }
    }

    return this;
  
  },

  // Moves pages

  _movePages: function(from, change) {

    var page,
      that = this,
      data = this.data(),
      single = data.display=='single',
      move = function(page) {

        var next = page + change,
          odd = next%2,
          className = (odd) ? ' odd ' : ' even ';

        if (data.pageObjs[page])
          data.pageObjs[next] = data.pageObjs[page].
            removeClass('p' + page + ' odd even').
            addClass('p' + next + className);

        if (data.pagePlace[page] && data.pageWrap[page]) {

          data.pagePlace[next] = next;
        
          if (data.pageObjs[next].hasClass('fixed'))
            data.pageWrap[next] = data.pageWrap[page].
              attr('page', next);
          else
            data.pageWrap[next] = data.pageWrap[page].
              css(turnMethods._pageSize.call(that, next, true)).
              attr('page', next);
      
            if (data.pages[page])
              data.pages[next] = data.pages[page].
                flip('options', {
                  page: next,
                  next: (single || odd) ? next+1 : next-1
                });

            if (change) {
              delete data.pages[page];
              delete data.pagePlace[page];
              delete data.pageZoom[page];
              delete data.pageObjs[page];
              delete data.pageWrap[page];
            }

        }

    };

    if (change>0)
      for (page=data.totalPages; page>=from; page--)
        move(page);
    else
      for (page=from; page<=data.totalPages; page++)
        move(page);

  },

  // Sets or Gets the display mode

  display: function(display) {

    var data = this.data(),
      currentDisplay = data.display;

    if (display===undefined) {
      
      return currentDisplay;

    } else {

      if ($.inArray(display, displays)==-1)
        throw turnError('"'+display + '" is not a value for display');
      
      switch(display) {
        case 'single':

          // Create a temporal page to use as folded page

          if (!data.pageObjs[0]) {
            this.turn('stop').
              css({'overflow': 'hidden'});

            data.pageObjs[0] = $('<div />',
                {'class': 'page p-temporal'}).
              css({width: this.width(), height: this.height()}).
              appendTo(this);
          }

          this.addClass('shadow');

        break;
        case 'double':

          // Remove the temporal page

          if (data.pageObjs[0]) {
            this.turn('stop').css({'overflow': ''});
            data.pageObjs[0].remove();
            delete data.pageObjs[0];
          }

          this.removeClass('shadow');

        break;
      }
      

      data.display = display;

      if (currentDisplay) {
        var size = this.turn('size');
        turnMethods._movePages.call(this, 1, 0);
        this.turn('size', size.width, size.height).
          turn('update');
      }

      return this;

    }
  
  },
  
  // Gets and sets the direction of the flipbook

  direction: function(dir) {

    var data = this.data();

    if (dir===undefined) {

      return data.direction;

    } else {

      dir = dir.toLowerCase();

      if ($.inArray(dir, directions)==-1)
        throw turnError('"' + dir + '" is not a value for direction');

      if (dir=='rtl') {
        $(this).attr('dir', 'ltr').
          css({direction: 'ltr'});
      }

      data.direction = dir;

      if (data.done)
        this.turn('size', $(this).width(), $(this).height());

      return this;
    }

  },

  // Detects animation

  animating: function() {

    return this.data().pageMv.length>0;

  },

  // Gets the current activated corner

  corner: function() {
    
    var corner,
      page,
      data = this.data();

    for (page in data.pages) {
      if (has(page, data.pages))
        if ((corner = data.pages[page].flip('corner'))) {
          return corner;
        }
    }

    return false;
  },

  // Gets the data stored in the flipbook

  data: function() {
    
    return this.data();

  },

  // Disables and enables the effect

  disable: function(disable) {

    var page,
      data = this.data(),
      view = this.turn('view');

    data.disabled = disable===undefined || disable===true;

    for (page in data.pages) {
      if (has(page, data.pages))
        data.pages[page].flip('disable',
          (data.disabled) ? true : $.inArray(parseInt(page, 10), view)==-1);
    }

    return this;

  },

  // Disables and enables the effect

  disabled: function(disable) {

    if (disable===undefined) {
      return this.data().disabled===true;
    } else {
      return this.turn('disable', disable);
    }

  },

  // Gets and sets the size

  size: function(width, height) {

    if (width===undefined || height===undefined) {
      
      return {width: this.width(), height: this.height()};

    } else {

      this.turn('stop');

      var page, prop,
        data = this.data(),
        pageWidth = (data.display=='double') ? width/2 : width;

      this.css({width: width, height: height});

      if (data.pageObjs[0])
        data.pageObjs[0].css({width: pageWidth, height: height});
      
      for (page in data.pageWrap) {
        if (!has(page, data.pageWrap)) continue;

        prop = turnMethods._pageSize.call(this, page, true);

        data.pageObjs[page].css({width: prop.width, height: prop.height});
        data.pageWrap[page].css(prop);
        
        if (data.pages[page])
          data.pages[page].css({width: prop.width, height: prop.height});
      }

      this.turn('resize');

      return this;

    }
  },

  // Resizes each page

  resize: function() {

    var page, data = this.data();

    if (data.pages[0]) {
      data.pageWrap[0].css({left: -this.width()});
      data.pages[0].flip('resize', true);
    }

    for (page = 1; page <= data.totalPages; page++)
      if (data.pages[page])
        data.pages[page].flip('resize', true);

    turnMethods._updateShadow.call(this);

    if (data.opts.autoCenter)
      this.turn('center');

  },

  // Removes an animation from the cache

  _removeMv: function(page) {

    var i, data = this.data();
      
    for (i=0; i<data.pageMv.length; i++)
      if (data.pageMv[i]==page) {
        data.pageMv.splice(i, 1);
        return true;
      }

    return false;

  },

  // Adds an animation to the cache
  
  _addMv: function(page) {

    var data = this.data();

    turnMethods._removeMv.call(this, page);
    data.pageMv.push(page);

  },

  // Gets indexes for a view

  _view: function(page) {
  
    var data = this.data();
    
    page = page || data.page;

    if (data.display=='double')
      return (page%2) ? [page-1, page] : [page, page+1];
    else
      return [page];

  },

  // Gets a view

  view: function(page) {

    var data = this.data(),
      view = turnMethods._view.call(this, page);

    if (data.display=='double')
      return [(view[0]>0) ? view[0] : 0,
        (view[1]<=data.totalPages) ? view[1] : 0];
    else
      return [(view[0]>0 && view[0]<=data.totalPages) ? view[0] : 0];

  },

  // Stops animations

  stop: function(ignore, animate) {

    if (this.turn('animating')) {
  
      var i, opts, page,
        data = this.data();

      if (data.tpage) {
        data.page = data.tpage;
        delete data['tpage'];
      }

      for (i = 0; i<data.pageMv.length; i++) {

        if (!data.pageMv[i] || data.pageMv[i]===ignore)
          continue;

        page = data.pages[data.pageMv[i]];
        opts = page.data().f.opts;

        page.flip('hideFoldedPage', animate);

        if (!animate)
          flipMethods._moveFoldingPage.call(page, false);

        if (opts.force) {
          opts.next = (opts.page%2===0) ? opts.page-1 : opts.page+1;
          delete opts['force'];
        }

      }
    }
    
    this.turn('update');

    return this;
  },

  // Gets and sets the number of pages

  pages: function(pages) {

    var data = this.data();

    if (pages) {

      if (pages<data.totalPages) {

        for (var page = data.totalPages; page>pages; page--)
          this.turn('removePage', page);

      }

        data.totalPages = pages;
        turnMethods._fitPage.call(this, data.page);

      return this;

    } else
      return data.totalPages;

  },

  // Checks missing pages

  _missing : function(page) {
    
    var data = this.data();

    if (data.totalPages<1)
      return;

    var p,
        range = this.turn('range', page),
        missing = [];

    for (p = range[0]; p<=range[1]; p++) {
      if (!data.pageObjs[p])
        missing.push(p);
    }

    if (missing.length>0)
      this.trigger('missing', [missing]);

  },

  // Sets a page without effect

  _fitPage: function(page) {

    var data = this.data(),
      newView = this.turn('view', page);

    turnMethods._missing.call(this, page);
    
    if (!data.pageObjs[page])
      return;

    data.page = page;
  
    this.turn('stop');

    for (var i = 0; i<newView.length; i++) {

      if (newView[i] && data.pageZoom[newView[i]]!=data.zoom) {
  
        this.trigger('zoomed',[
          newView[i],
          newView,
          data.pageZoom[newView[i]],
          data.zoom]);

        data.pageZoom[newView[i]] = data.zoom;

      }
    }

    turnMethods._removeFromDOM.call(this);
    turnMethods._makeRange.call(this);
    turnMethods._updateShadow.call(this);
    this.trigger('turned', [page, newView]);
    this.turn('update');

    if (data.opts.autoCenter)
      this.turn('center');

  },
  
  // Turns the page

  _turnPage: function(page) {

    var current,
      next,
      data = this.data(),
      place = data.pagePlace[page],
      view = this.turn('view'),
      newView = this.turn('view', page);


    if (data.page!=page) {

      var currentPage = data.page;

      if (trigger('turning', this, [page, newView])=='prevented') {

        if (currentPage==data.page && $.inArray(place, data.pageMv)!=-1)
          data.pages[place].flip('hideFoldedPage', true);
        
        return;

      }

      if ($.inArray(1, newView)!=-1)
        this.trigger('first');
      if ($.inArray(data.totalPages, newView)!=-1)
        this.trigger('last');

    }

    if (data.display=='single') {
      current = view[0];
      next = newView[0];
    } else if (view[1] && page>view[1]) {
      current = view[1];
      next = newView[0];
    } else if (view[0] && page<view[0]) {
      current = view[0];
      next = newView[1];
    }

    var optsCorners = data.opts.turnCorners.split(','),
      flipData = data.pages[current].data().f,
      opts = flipData.opts,
      actualPoint = flipData.point;

    turnMethods._missing.call(this, page);
    
    if (!data.pageObjs[page])
      return;

    this.turn('stop');

    data.page = page;

    turnMethods._makeRange.call(this);

    data.tpage = next;

    if (opts.next!=next) {
      opts.next = next;
      opts.force = true;
    }

    this.turn('update');

    flipData.point = actualPoint;
    
    if (flipData.effect=='hard')
      if (data.direction=='ltr')
        data.pages[current].flip('turnPage',
          (page>current) ? 'r' : 'l');
      else
        data.pages[current].flip('turnPage',
          (page>current) ? 'l' : 'r');
    else {
      if (data.direction=='ltr')
        data.pages[current].flip('turnPage',
          optsCorners[(page>current) ? 1 : 0]);
      else
        data.pages[current].flip('turnPage',
          optsCorners[(page>current) ? 0 : 1]);
    }

  },

  // Gets and sets a page

  page: function(page) {

    var data = this.data();

    if (page===undefined) {
      
      return data.page;

    } else {

      if (!data.disabled && !data.destroying) {

        page = parseInt(page, 10);

        if (page>0 && page<=data.totalPages) {

          if (page!=data.page) {
            if (!data.done || $.inArray(page, this.turn('view'))!=-1)
              turnMethods._fitPage.call(this, page);
            else
              turnMethods._turnPage.call(this, page);
          }
      
          return this;

        } else {
        
          throw turnError('The page ' + page + ' does not exist');

        }

      }

    }

  },

  // Turns to the next view

  next: function() {

    return this.turn('page', Math.min(this.data().totalPages,
      turnMethods._view.call(this, this.data().page).pop() + 1));
  
  },

  // Turns to the previous view

  previous: function() {

    return this.turn('page', Math.max(1,
      turnMethods._view.call(this, this.data().page).shift() - 1));

  },

  // Shows a peeling corner

  peel: function(corner, animate) {
    
    var data = this.data(),
      view = this.turn('view');

    animate = (animate===undefined) ? true : animate===true;

    if (corner===false) {
      
      this.turn('stop', null, animate);

    } else {
    
      if (data.display=='single') {

        data.pages[data.page].flip('peel', corner, animate);

      } else {

        var page;

        if (data.direction=='ltr') {
          
          page = (corner.indexOf('l')!=-1) ? view[0] : view[1];

        } else {
          
          page = (corner.indexOf('l')!=-1) ? view[1] : view[0];

        }
        
        if (data.pages[page])
          data.pages[page].flip('peel', corner, animate);

      }
    }

    return this;

  },

  // Adds a motion to the internal list
  // This event is called in context of flip

  _addMotionPage: function() {

    var opts = $(this).data().f.opts,
      turn = opts.turn,
      dd = turn.data();

    turnMethods._addMv.call(turn, opts.page);

  },

  // This event is called in context of flip

  _eventStart: function(e, opts, corner) {

    var data = opts.turn.data(),
      actualZoom = data.pageZoom[opts.page];

    if (e.isDefaultPrevented()) {
      turnMethods._updateShadow.call(opts.turn);
      return;
    }

    if (actualZoom && actualZoom!=data.zoom) {
      
      opts.turn.trigger('zoomed',[
        opts.page,
        opts.turn.turn('view', opts.page),
        actualZoom,
        data.zoom]);

      data.pageZoom[opts.page] = data.zoom;

    }

    if (data.display=='single' && corner) {

      if ((corner.charAt(1)=='l' && data.direction=='ltr') ||
        (corner.charAt(1)=='r' && data.direction=='rtl'))
      {
        
        opts.next = (opts.next<opts.page) ? opts.next : opts.page-1;
        opts.force = true;

      } else {
        
        opts.next = (opts.next>opts.page) ? opts.next : opts.page+1;

      }

    }

    turnMethods._addMotionPage.call(e.target);
    turnMethods._updateShadow.call(opts.turn);
  },

  // This event is called in context of flip

  _eventEnd: function(e, opts, turned) {
  
    var that = $(e.target),
      data = that.data().f,
      turn = opts.turn,
      dd = turn.data();

    if (turned) {

      var tpage = dd.tpage || dd.page;
    
      if (tpage==opts.next || tpage==opts.page) {
        delete dd.tpage;

        turnMethods._fitPage.call(turn, tpage || opts.next, true);
      }

    } else {
      
      turnMethods._removeMv.call(turn, opts.page);
      turnMethods._updateShadow.call(turn);
      turn.turn('update');

    }
    
  },
  
  // This event is called in context of flip

  _eventPressed: function(e) {

    var page,
      data = $(e.target).data().f,
      turn = data.opts.turn,
      turnData = turn.data(),
      pages = turnData.pages;
    
    turnData.mouseAction = true;

    turn.turn('update');

    return data.time = new Date().getTime();

  },

  // This event is called in context of flip

  _eventReleased: function(e, point) {

    var outArea,
      page = $(e.target),
      data = page.data().f,
      turn = data.opts.turn,
      turnData = turn.data();
    
    if (turnData.display=='single') {
      outArea = (point.corner=='br' || point.corner=='tr') ?
        point.x<page.width()/2:
        point.x>page.width()/2;
    } else {
      outArea = point.x<0 || point.x>page.width();
    }

    if ((new Date()).getTime()-data.time<200 || outArea) {

      e.preventDefault();
      turnMethods._turnPage.call(turn, data.opts.next);

    }

    turnData.mouseAction = false;

  },

  // This event is called in context of flip
  
  _flip: function(e) {

    e.stopPropagation();

    var opts = $(e.target).data().f.opts;

    opts.turn.trigger('turn', [opts.next]);

    if (opts.turn.data().opts.autoCenter) {
      opts.turn.turn('center', opts.next);
    }

  },

 //
  _touchStart: function() {
    var data = this.data();
    for (var page in data.pages) {
      if (has(page, data.pages) &&
        flipMethods._eventStart.apply(data.pages[page], arguments)===false) {
          return false;
      }
    }
  },
  
  //
  _touchMove: function() {
    var data = this.data();
    for (var page in data.pages) {
      if (has(page, data.pages)) {
        flipMethods._eventMove.apply(data.pages[page], arguments);
      }
    }
  },

  //
  _touchEnd: function() {
    var data = this.data();
    for (var page in data.pages) {
      if (has(page, data.pages)) {
        flipMethods._eventEnd.apply(data.pages[page], arguments);
      }
    }
  },

  // Calculate the z-index value for pages during the animation

  calculateZ: function(mv) {

    var i, page, nextPage, placePage, dpage,
      that = this,
      data = this.data(),
      view = this.turn('view'),
      currentPage = view[0] || view[1],
      total = mv.length-1,
      r = {pageZ: {}, partZ: {}, pageV: {}},

      addView = function(page) {
        var view = that.turn('view', page);
        if (view[0]) r.pageV[view[0]] = true;
        if (view[1]) r.pageV[view[1]] = true;
      };
    
    for (i = 0; i<=total; i++) {
      page = mv[i];
      nextPage = data.pages[page].data().f.opts.next;
      placePage = data.pagePlace[page];
      addView(page);
      addView(nextPage);
      dpage = (data.pagePlace[nextPage]==nextPage) ? nextPage : page;
      r.pageZ[dpage] = data.totalPages - Math.abs(currentPage-dpage);
      r.partZ[placePage] = data.totalPages*2 -  total + i;
    }

    return r;
  },

  // Updates the z-index and display property of every page

  update: function() {

    var page,
      data = this.data();

    if (this.turn('animating') && data.pageMv[0]!==0) {

      // Update motion

      var p, apage, fixed,
        pos = this.turn('calculateZ', data.pageMv),
        corner = this.turn('corner'),
        actualView = this.turn('view'),
        newView = this.turn('view', data.tpage);
  
      for (page in data.pageWrap) {

        if (!has(page, data.pageWrap))
          continue;

        fixed = data.pageObjs[page].hasClass('fixed');

        data.pageWrap[page].css({
          display: (pos.pageV[page] || fixed) ? '' : 'none',
          zIndex:
            (data.pageObjs[page].hasClass('hard') ?
              pos.partZ[page]
              :
              pos.pageZ[page]
            ) || (fixed ? -1 : 0)
        });

        if ((p = data.pages[page])) {

          p.flip('z', pos.partZ[page] || null);

          if (pos.pageV[page])
            p.flip('resize');
          
          if (data.tpage) { // Is it turning the page to `tpage`?

            p.flip('hover', false).
              flip('disable',
                $.inArray(parseInt(page, 10), data.pageMv)==-1 &&
                page!=newView[0] &&
                page!=newView[1]);

          } else {

            p.flip('hover', corner===false).
              flip('disable', page!=actualView[0] && page!=actualView[1]);

          }

        }

      }

    } else {

      // Update static pages

      for (page in data.pageWrap) {

        if (!has(page, data.pageWrap))
          continue;

        var pageLocation = turnMethods._setPageLoc.call(this, page);

        if (data.pages[page]) {
          data.pages[page].
            flip('disable', data.disabled || pageLocation!=1).
            flip('hover', true).
            flip('z', null);
        }
      }
    }

    return this;
  },

  // Updates the position and size of the flipbook's shadow

  _updateShadow: function() {
    
    var view, view2, shadow,
      data = this.data(),
      width = this.width(),
      height = this.height(),
      pageWidth = (data.display=='single') ? width : width/2;

    view = this.turn('view');

    if (!data.shadow) {
      data.shadow = $('<div />', {
          'class': 'shadow',
          'css': divAtt(0, 0, 0).css
        }).
        appendTo(this);
    }

    for (var i = 0; i<data.pageMv.length; i++) {
      if (!view[0] || !view[1])
        break;
    
      view = this.turn('view', data.pages[data.pageMv[i]].data().f.opts.next);
      view2 = this.turn('view', data.pageMv[i]);

      view[0] = view[0] && view2[0];
      view[1] = view[1] && view2[1];
    }

    if (!view[0]) shadow = (data.direction=='ltr') ? 1 : 2;
    else if (!view[1]) shadow = (data.direction=='ltr') ? 2 : 1;
    else shadow = 3;

    switch (shadow) {
      case 1:
        data.shadow.css({
          width: pageWidth,
          height: height,
          top: 0,
          left: pageWidth
        });
        break;
      case 2:
        data.shadow.css({
          width: pageWidth,
          height: height,
          top: 0,
          left: 0
        });
        break;
      case 3:
        data.shadow.css({
          width: width,
          height: height,
          top: 0,
          left: 0
        });
        break;
    }

  },

  // Sets the z-index and display property of a page
  // It depends on the current view

  _setPageLoc: function(page) {

    var data = this.data(),
      view = this.turn('view'),
      loc = 0;

    
    if (page==view[0] || page==view[1])
      loc = 1;
    else if (
      (data.display=='single' && page==view[0]+1) ||
      (data.display=='double' && page==view[0]-2 || page==view[1]+2)
    )
      loc = 2;

    if (!this.turn('animating'))
      switch (loc) {
        case 1:
          data.pageWrap[page].css(
          {
            zIndex: data.totalPages,
            display: ''
          });
        break;
        case 2:
          data.pageWrap[page].css(
          {
            zIndex: data.totalPages-1,
            display: ''
          });
        break;
        case 0:
          data.pageWrap[page].css(
          {
            zIndex: 0,
            display: (data.pageObjs[page].hasClass('fixed')) ? '' : 'none'}
          );
        break;
      }
    
    return loc;
  },

  // Gets and sets the options

  options: function(options) {
    
    if (options===undefined) {
      
      return this.data().opts;

    } else {

      var data = this.data();

      // Set new values

      $.extend(data.opts, options);
      
      // Set pages

      if (options.pages)
        this.turn('pages', options.pages);

      // Set page

      if (options.page)
        this.turn('page', options.page);

      // Set display

      if (options.display)
        this.turn('display', options.display);
      
      // Set direction

      if (options.direction)
        this.turn('direction', options.direction);

      // Set size

      if (options.width && options.height)
        this.turn('size', options.width, options.height);
      
      // Add event listeners

      if (options.when)
        for (var eventName in options.when)
          if (has(eventName, options.when)) {
            this.unbind(eventName).
              bind(eventName, options.when[eventName]);
          }

      return this;
    }

  },

  // Gets the current version

  version: function() {

    return version;

  }
},

// Methods and properties for the flip page effect

flipMethods = {

  // Constructor

  init: function(opts) {

    this.data({f: {
      disabled: false,
      hover: false,
      effect: (this.hasClass('hard')) ? 'hard' : 'sheet'
    }});
  
    this.flip('options', opts);

    flipMethods._addPageWrapper.call(this);

    return this;
  },

  setData: function(d) {
    
    var data = this.data();

    data.f = $.extend(data.f, d);

    return this;
  },

  options: function(opts) {
    
    var data = this.data().f;

    if (opts) {
      flipMethods.setData.call(this,
        {opts: $.extend({}, data.opts || flipOptions, opts)});
      return this;
    } else
      return data.opts;

  },

  z: function(z) {
    
    var data = this.data().f;

    data.opts['z-index'] = z;

    if (data.fwrapper)
      data.fwrapper.css({
        zIndex: z || parseInt(data.parent.css('z-index'), 10) || 0
      });

    return this;
  },

  _cAllowed: function() {
    
    var data = this.data().f,
      page = data.opts.page,
      turnData = data.opts.turn.data(),
      odd = page%2;
    
    if (data.effect=='hard') {
    
      return (turnData.direction=='ltr') ?
        [(odd) ? 'r' : 'l'] :
        [(odd) ? 'l' : 'r'];

    } else {

      if (turnData.display=='single') {

        if (page==1)
          return (turnData.direction=='ltr') ?
            corners['forward'] : corners['backward'];
        else if (page==turnData.totalPages)
          return (turnData.direction=='ltr') ?
            corners['backward'] : corners['forward'];
        else
          return corners['all'];

      } else {

        return (turnData.direction=='ltr') ?
          corners[(odd) ? 'forward' : 'backward']
          :
          corners[(odd) ? 'backward' : 'forward'];

      }

    }

  },

  _cornerActivated: function(p) {

    var data = this.data().f,
      width = this.width(),
      height = this.height(),
      point = {x: p.x, y: p.y, corner: ''},
      csz = data.opts.cornerSize;

    if (point.x<=0 || point.y<=0 || point.x>=width || point.y>=height)
      return false;

    var allowedCorners = flipMethods._cAllowed.call(this);

    switch (data.effect) {
      case 'hard':
        
        if (point.x>width-csz)
          point.corner = 'r';
        else if (point.x<csz)
          point.corner = 'l';
        else
          return false;
            
        break;

      case 'sheet':
        
        if (point.y<csz)
          point.corner+= 't';
        else if (point.y>=height-csz)
          point.corner+= 'b';
        else
          return false;
    
        if (point.x<=csz)
          point.corner+= 'l';
        else if (point.x>=width-csz)
          point.corner+= 'r';
        else
          return false;
     
        break;
      }

    return (!point.corner || $.inArray(point.corner, allowedCorners)==-1) ?
      false : point;

  },

  _isIArea: function(e) {

    var pos = this.data().f.parent.offset();

    e = (isTouch && e.originalEvent) ? e.originalEvent.touches[0] : e;

    return flipMethods._cornerActivated.call(this,
      {
        x: e.pageX-pos.left,
        y: e.pageY-pos.top
      });

  },

  _c: function(corner, opts) {

    opts = opts || 0;

    switch (corner) {
      case 'tl':
        return point2D(opts, opts);
      case 'tr':
        return point2D(this.width()-opts, opts);
      case 'bl':
        return point2D(opts, this.height()-opts);
      case 'br':
        return point2D(this.width()-opts, this.height()-opts);
      case 'l':
        return point2D(opts, 0);
      case 'r':
        return point2D(this.width()-opts, 0);
    }

  },

  _c2: function(corner) {

    switch (corner) {
      case 'tl':
        return point2D(this.width()*2, 0);
      case 'tr':
        return point2D(-this.width(), 0);
      case 'bl':
        return point2D(this.width()*2, this.height());
      case 'br':
        return point2D(-this.width(), this.height());
      case 'l':
        return point2D(this.width()*2, 0);
      case 'r':
        return point2D(-this.width(), 0);
    }

  },

  _foldingPage: function() {

    var data = this.data().f;

    if (!data)
      return;

    var opts = data.opts;

    if (opts.turn) {
      data = opts.turn.data();
      if (data.display == 'single')
        return (opts.next>1 || opts.page>1) ? data.pageObjs[0] : null;
      else
        return data.pageObjs[opts.next];
    }

  },

  _backGradient: function() {

    var data = this.data().f,
      turnData = data.opts.turn.data(),
      gradient =  turnData.opts.gradients && (turnData.display=='single' ||
         (data.opts.page!=2 && data.opts.page!=turnData.totalPages-1));

    if (gradient && !data.bshadow)
      data.bshadow = $('<div/>', divAtt(0, 0, 1)).
        css({'position': '', width: this.width(), height: this.height()}).
        appendTo(data.parent);

    return gradient;

  },

  type: function () {
    
    return this.data().f.effect;

  },

  resize: function(full) {
    
    var data = this.data().f,
      turnData = data.opts.turn.data(),
      width = this.width(),
      height = this.height();

    switch (data.effect) {
      case 'hard':
        
      if (full) {
        data.wrapper.css({width: width, height: height});
        data.fpage.css({width: width, height: height});
        if (turnData.opts.gradients) {
          data.ashadow.css({width: width, height: height});
          data.bshadow.css({width: width, height: height});
        }
      }

      break;
      case 'sheet':

      if (full) {
        var size = Math.round(Math.sqrt(Math.pow(width, 2)+Math.pow(height, 2)));

        data.wrapper.css({width: size, height: size});
        data.fwrapper.css({width: size, height: size}).
          children(':first-child').
          css({width: width, height: height});

        data.fpage.css({width: width, height: height});

        if (turnData.opts.gradients)
          data.ashadow.css({width: width, height: height});

        if (flipMethods._backGradient.call(this))
          data.bshadow.css({width: width, height: height});
      }

      if (data.parent.is(':visible')) {
        var offset = findPos(data.parent[0]);

        data.fwrapper.css({top: offset.top,
          left: offset.left});

        //if (data.opts.turn) {
         offset = findPos(data.opts.turn[0]);
         data.fparent.css({top: -offset.top, left: -offset.left});
        //}
      }

      this.flip('z', data.opts['z-index']);

      break;
    }

  },

  // Prepares the page by adding a general wrapper and another objects

  _addPageWrapper: function() {

    var att,
      data = this.data().f,
      turnData = data.opts.turn.data(),
      parent = this.parent();

    data.parent = parent;

  if (!data.wrapper)
    switch (data.effect) {
      case 'hard':
        
        var cssProperties = {};
        cssProperties[vendor + 'transform-style'] = 'preserve-3d';
        cssProperties[vendor + 'backface-visibility'] = 'hidden';

        data.wrapper = $('<div/>', divAtt(0, 0, 2)).
          css(cssProperties).
          appendTo(parent).
          prepend(this);

        data.fpage = $('<div/>', divAtt(0, 0, 1)).
          css(cssProperties).
          appendTo(parent);
        
        if (turnData.opts.gradients) {
          data.ashadow = $('<div/>', divAtt(0, 0,  0)).
            hide().
            appendTo(parent);

          data.bshadow = $('<div/>', divAtt(0, 0,  0));
        }

      break;
      case 'sheet':
        
        var width = this.width(),
          height = this.height(),
          size = Math.round(Math.sqrt(Math.pow(width, 2)+Math.pow(height, 2)));
        
        data.fparent = data.opts.turn.data().fparent;

        if (!data.fparent) {
          var fparent = $('<div/>', {css: {'pointer-events': 'none'}}).hide();
            fparent.data().flips = 0;
            fparent.css(divAtt(0, 0, 'auto', 'visible').css).
            appendTo(data.opts.turn);
            
            data.opts.turn.data().fparent = fparent;
            data.fparent = fparent;
        }

        this.css({position: 'absolute', top: 0, left: 0, bottom: 'auto', right: 'auto'});

        data.wrapper = $('<div/>', divAtt(0, 0, this.css('z-index'))).
          appendTo(parent).
          prepend(this);

        data.fwrapper = $('<div/>', divAtt(parent.offset().top, parent.offset().left)).
          hide().
          appendTo(data.fparent);

        data.fpage = $('<div/>', divAtt(0, 0, 0, 'visible')).
          css({cursor: 'default'}).
          appendTo(data.fwrapper);

        if (turnData.opts.gradients)
          data.ashadow = $('<div/>', divAtt(0, 0,  1)).
          appendTo(data.fpage);

        flipMethods.setData.call(this, data);

      break;
    }

    // Set size
    flipMethods.resize.call(this, true);

  },

  // Takes a 2P point from the screen and applies the transformation

  _fold: function(point) {

    var data = this.data().f,
      turnData = data.opts.turn.data(),
      o = flipMethods._c.call(this, point.corner),
      width = this.width(),
      height = this.height();

    switch (data.effect) {

      case 'hard':

        if (point.corner=='l')
          point.x = Math.min(Math.max(point.x, 0), width*2);
        else
          point.x = Math.max(Math.min(point.x, width), -width);

        var leftPos,
          shadow,
          gradientX,
          fpageOrigin,
          parentOrigin,
          totalPages = turnData.totalPages,
          zIndex = data.opts['z-index'] || totalPages,
          parentCss = {'overflow': 'visible'},
          relX = (o.x) ? (o.x - point.x)/width : point.x/width,
          angle = relX * 90,
          half = angle<90;

        switch (point.corner) {
          case 'l':

            fpageOrigin =  '0% 50%';
            parentOrigin =  '100% 50%';

            if (half) {
              leftPos = 0;
              shadow = data.opts.next-1>0;
              gradientX = 1;
            } else {
              leftPos = '100%';
              shadow = data.opts.page+1<totalPages;
              gradientX = 0;
            }

          break;
          case 'r':

            fpageOrigin =  '100% 50%';
            parentOrigin =  '0% 50%';
            angle = -angle;
            width = -width;

            if (half) {
              leftPos = 0;
              shadow = data.opts.next+1<totalPages;
              gradientX = 0;
            } else {
              leftPos = '-100%';
              shadow = data.opts.page!=1;
              gradientX = 1;
            }

          break;
        }

        parentCss[vendor+'perspective-origin'] = parentOrigin;

        data.wrapper.transform('rotateY('+angle+'deg)' +
          'translate3d(0px, 0px, '+(this.attr('depth')||0)+'px)', parentOrigin);

        data.fpage.transform('translateX('+width+'px) rotateY('+(180+angle)+'deg)', fpageOrigin);

        data.parent.css(parentCss);

        if (half) {
          relX = -relX+1;
          data.wrapper.css({zIndex: zIndex+1});
          data.fpage.css({zIndex: zIndex});
        } else {
          relX = relX-1;
          data.wrapper.css({zIndex: zIndex});
          data.fpage.css({zIndex: zIndex+1});
        }

        if (turnData.opts.gradients) {
          if (shadow)
            data.ashadow.css({
              display: '',
              left: leftPos,
              backgroundColor: 'rgba(0,0,0,'+(0.5*relX)+')'
            }).
            transform('rotateY(0deg)');
          else
            data.ashadow.hide();

          data.bshadow.css({opacity:-relX + 1});

          if (half) {
            if (data.bshadow.parent()[0]!=data.wrapper[0]) {
              data.bshadow.appendTo(data.wrapper);
            }
          } else {
            if (data.bshadow.parent()[0]!=data.fpage[0]) {
              data.bshadow.appendTo(data.fpage);
            }
          }
          /*data.bshadow.css({
            backgroundColor: 'rgba(0,0,0,'+(0.1)+')'
          })*/
          gradient(data.bshadow, point2D(gradientX * 100, 0), point2D((-gradientX + 1)*100, 0),
            [[0, 'rgba(0,0,0,0.3)'],[1, 'rgba(0,0,0,0)']],2);
          
        }

        break;
      case 'sheet':

        var that = this,
          a = 0,
          alpha = 0,
          beta,
          px,
          gradientEndPointA,
          gradientEndPointB,
          gradientStartVal,
          gradientSize,
          gradientOpacity,
          shadowVal,
          mv = point2D(0, 0),
          df = point2D(0, 0),
          tr = point2D(0, 0),
          folding = flipMethods._foldingPage.call(this),
          tan = Math.tan(alpha),
          ac = turnData.opts.acceleration,
          h = data.wrapper.height(),
          top = point.corner.substr(0, 1) == 't',
          left = point.corner.substr(1, 1) == 'l',

      compute = function() {

        var rel = point2D(0, 0);
        var middle = point2D(0, 0);

        rel.x = (o.x) ? o.x - point.x : point.x;

        if (!hasRot) {
          rel.y = 0;
        } else {
          rel.y = (o.y) ? o.y - point.y : point.y;
        }

        middle.x = (left)? width - rel.x/2 : point.x + rel.x/2;
        middle.y = rel.y/2;
        
        var alpha =  A90-Math.atan2(rel.y, rel.x),
          gamma = alpha - Math.atan2(middle.y, middle.x),
          distance =  Math.max(0, Math.sin(gamma) * Math.sqrt(Math.pow(middle.x, 2) + Math.pow(middle.y, 2)));
          
          a = deg(alpha);

          tr = point2D(distance * Math.sin(alpha), distance * Math.cos(alpha));

          if (alpha > A90) {
            tr.x = tr.x + Math.abs(tr.y * rel.y/rel.x);
            tr.y = 0;
            if (Math.round(tr.x*Math.tan(PI-alpha)) < height) {
              point.y = Math.sqrt(Math.pow(height, 2)+2 * middle.x * rel.x);
              if (top) point.y =  height - point.y;
              return compute();
            }
          }
      
          if (alpha>A90) {
            var beta = PI-alpha, dd = h - height/Math.sin(beta);
            mv = point2D(Math.round(dd*Math.cos(beta)), Math.round(dd*Math.sin(beta)));
            if (left) mv.x = - mv.x;
            if (top) mv.y = - mv.y;
          }

          px = Math.round(tr.y/Math.tan(alpha) + tr.x);
      
          var side = width - px,
            sideX = side*Math.cos(alpha*2),
            sideY = side*Math.sin(alpha*2);
            df = point2D(
              Math.round((left ? side -sideX : px+sideX)),
              Math.round((top) ? sideY : height - sideY));
          
        // Gradients
          if (turnData.opts.gradients) {

            gradientSize = side*Math.sin(alpha);

            var endingPoint = flipMethods._c2.call(that, point.corner),
             far = Math.sqrt(Math.pow(endingPoint.x-point.x, 2)+Math.pow(endingPoint.y-point.y, 2))/width;

            shadowVal = Math.sin(A90*((far>1) ? 2 - far : far));

            gradientOpacity = Math.min(far, 1);

           
              gradientStartVal = gradientSize>100 ? (gradientSize-100)/gradientSize : 0;

              gradientEndPointA = point2D(
                gradientSize*Math.sin(alpha)/width*100,
                gradientSize*Math.cos(alpha)/height*100);
           

              if (flipMethods._backGradient.call(that)) {

                gradientEndPointB = point2D(
                  gradientSize*1.2*Math.sin(alpha)/width*100,
                  gradientSize*1.2*Math.cos(alpha)/height*100);

                if (!left) gradientEndPointB.x = 100-gradientEndPointB.x;
                if (!top) gradientEndPointB.y = 100-gradientEndPointB.y;

              }

          }

          tr.x = Math.round(tr.x);
          tr.y = Math.round(tr.y);

        return true;
      },

      transform = function(tr, c, x, a) {
      
        var f = ['0', 'auto'], mvW = (width-h)*x[0]/100, mvH = (height-h)*x[1]/100,
          cssA = {left: f[c[0]], top: f[c[1]], right: f[c[2]], bottom: f[c[3]]},
          cssB = {},
          aliasingFk = (a!=90 && a!=-90) ? (left ? -1 : 1) : 0,
          origin = x[0] + '% ' + x[1] + '%';

        that.css(cssA).
          transform(rotate(a) + translate(tr.x + aliasingFk, tr.y, ac), origin);

        data.fpage.css(cssA).transform(
          rotate(a) +
          translate(tr.x + df.x - mv.x - width*x[0]/100, tr.y + df.y - mv.y - height*x[1]/100, ac) +
          rotate((180/a - 2)*a),
          origin);

        data.wrapper.transform(translate(-tr.x + mvW-aliasingFk, -tr.y + mvH, ac) + rotate(-a), origin);

        data.fwrapper.transform(translate(-tr.x + mv.x + mvW, -tr.y + mv.y + mvH, ac) + rotate(-a), origin);
      
        if (turnData.opts.gradients) {

          if (x[0])
            gradientEndPointA.x = 100-gradientEndPointA.x;

          if (x[1])
            gradientEndPointA.y = (100-gradientEndPointA.y);

          cssB['box-shadow'] = '0 0 20px rgba(0,0,0,'+(0.5*shadowVal)+')';
          folding.css(cssB);

          gradient(data.ashadow,
              point2D(left?100:0, top?0:100),
              point2D(gradientEndPointA.x, gradientEndPointA.y),
              [[gradientStartVal, 'rgba(0,0,0,0)'],
              [((1-gradientStartVal)*0.8)+gradientStartVal, 'rgba(0,0,0,'+(0.2*gradientOpacity)+')'],
              [1, 'rgba(255,255,255,'+(0.2*gradientOpacity)+')']],
              3,
              alpha);

          if (flipMethods._backGradient.call(that))
            gradient(data.bshadow,
                point2D(left?0:100, top?0:100),
                point2D(gradientEndPointB.x, gradientEndPointB.y),
                [[0.6, 'rgba(0,0,0,0)'],
                [0.8, 'rgba(0,0,0,'+(0.3*gradientOpacity)+')'],
                [1, 'rgba(0,0,0,0)']
                ],
                3);
        }

      };

      switch (point.corner) {
        case 'l' :


        break;
        case 'r' :


        break;
        case 'tl' :
          point.x = Math.max(point.x, 1);
          compute();
          transform(tr, [1,0,0,1], [100, 0], a);
        break;
        case 'tr' :
          point.x = Math.min(point.x, width-1);
          compute();
          transform(point2D(-tr.x, tr.y), [0,0,0,1], [0, 0], -a);
        break;
        case 'bl' :
          point.x = Math.max(point.x, 1);
          compute();
          transform(point2D(tr.x, -tr.y), [1,1,0,0], [100, 100], -a);
        break;
        case 'br' :
          point.x = Math.min(point.x, width-1);
          compute();
          transform(point2D(-tr.x, -tr.y), [0,1,1,0], [0, 100], a);
        break;
      }

    break;
  }

    data.point = point;
  
  },

  _moveFoldingPage: function(move) {

    var data = this.data().f;

    if (!data)
      return;

    var turn = data.opts.turn,
      turnData = turn.data(),
      place = turnData.pagePlace;
      
    if (move) {

      var nextPage = data.opts.next;
  
      if (place[nextPage]!=data.opts.page) {

        if (data.folding)
          flipMethods._moveFoldingPage.call(this, false);

        var folding = flipMethods._foldingPage.call(this);
        
        folding.appendTo(data.fpage);
        place[nextPage] = data.opts.page;
        data.folding = nextPage;
      }

      turn.turn('update');

    } else {

      if (data.folding) {

        if (turnData.pages[data.folding]) {
         
          // If we have flip available

          var flipData = turnData.pages[data.folding].data().f;
          
          turnData.pageObjs[data.folding].
            appendTo(flipData.wrapper);

        } else if (turnData.pageWrap[data.folding]) {
          
          // If we have the pageWrapper

          turnData.pageObjs[data.folding].
            appendTo(turnData.pageWrap[data.folding]);

        }

        if (data.folding in place) {
          place[data.folding] = data.folding;
        }

        delete data.folding;

      }
    }
  },

  _showFoldedPage: function(c, animate) {

    var folding = flipMethods._foldingPage.call(this),
      dd = this.data(),
      data = dd.f,
      visible = data.visible;

    if (folding) {

      if (!visible || !data.point || data.point.corner!=c.corner) {

        var corner = (
          data.status=='hover' ||
          data.status=='peel' ||
          data.opts.turn.data().mouseAction) ?
        c.corner : null;

        visible = false;

        if (trigger('start', this, [data.opts, corner])=='prevented')
          return false;

      }

      if (animate) {
        
        var that = this,
          point = (data.point && data.point.corner==c.corner) ?
          data.point : flipMethods._c.call(this, c.corner, 1);
      
        this.animatef({
          from: [point.x, point.y],
          to: [c.x, c.y],
          duration: 500,
          frame: function(v) {
            c.x = Math.round(v[0]);
            c.y = Math.round(v[1]);
            flipMethods._fold.call(that, c);
          }
        });

      } else  {

        flipMethods._fold.call(this, c);

        if (dd.effect && !dd.effect.turning)
          this.animatef(false);

      }

      if (!visible) {

        switch(data.effect) {
          case 'hard':

            data.visible = true;
            flipMethods._moveFoldingPage.call(this, true);
            data.fpage.show();
            if (data.opts.shadows)
              data.bshadow.show();

          break;
          case 'sheet':

            data.visible = true;
            data.fparent.show().data().flips++;
            flipMethods._moveFoldingPage.call(this, true);
            data.fwrapper.show();
            if (data.bshadow)
              data.bshadow.show();

          break;
        }

      }

      return true;

    }

    return false;
  },

  hide: function() {

    var data = this.data().f,
      turnData = data.opts.turn.data(),
      folding = flipMethods._foldingPage.call(this);

    switch (data.effect) {
      case 'hard':
        
        if (turnData.opts.gradients) {
          data.bshadowLoc = 0;
          data.bshadow.remove();
          data.ashadow.hide();
        }

        data.wrapper.transform('');
        data.fpage.hide();

      break;
      case 'sheet':

        if ((--data.fparent.data().flips)===0)
          data.fparent.hide();

        this.css({left: 0, top: 0, right: 'auto', bottom: 'auto'}).
          transform('');

        data.wrapper.transform('');

        data.fwrapper.hide();

        if (data.bshadow)
          data.bshadow.hide();

        folding.transform('');

      break;
    }

      data.visible = false;

    return this;
  },

  hideFoldedPage: function(animate) {

    var data = this.data().f;

    if (!data.point) return;

    var that = this,
      p1 = data.point,
      hide = function() {
        data.point = null;
        data.status = '';
        that.flip('hide');
        that.trigger('end', [data.opts, false]);
      };

    if (animate) {

      var p4 = flipMethods._c.call(this, p1.corner),
        top = (p1.corner.substr(0,1)=='t'),
        delta = (top) ? Math.min(0, p1.y-p4.y)/2 : Math.max(0, p1.y-p4.y)/2,
        p2 = point2D(p1.x, p1.y+delta),
        p3 = point2D(p4.x, p4.y-delta);
    
      this.animatef({
        from: 0,
        to: 1,
        frame: function(v) {
          var np = bezier(p1, p2, p3, p4, v);
          p1.x = np.x;
          p1.y = np.y;
          flipMethods._fold.call(that, p1);
        },
        complete: hide,
        duration: 800,
        hiding: true
      });

    } else {

      this.animatef(false);
      hide();

    }
  },

  turnPage: function(corner) {

    var that = this,
      data = this.data().f,
      turnData = data.opts.turn.data();

    corner = {corner: (data.corner) ?
      data.corner.corner :
      corner || flipMethods._cAllowed.call(this)[0]};

    var p1 = data.point ||
      flipMethods._c.call(this,
        corner.corner,
        (data.opts.turn) ? turnData.opts.elevation : 0),
      p4 = flipMethods._c2.call(this, corner.corner);

      this.trigger('flip').
        animatef({
          from: 0,
          to: 1,
          frame: function(v) {

            var np = bezier(p1, p1, p4, p4, v);
            corner.x = np.x;
            corner.y = np.y;
            flipMethods._showFoldedPage.call(that, corner);

          },
          complete: function() {
            
            that.trigger('end', [data.opts, true]);

          },
          duration: turnData.opts.duration,
          turning: true
        });

      data.corner = null;
  },

  moving: function() {

    return 'effect' in this.data();
  
  },

  isTurning: function() {

    return this.flip('moving') && this.data().effect.turning;
  
  },

  corner: function() {
    
    return this.data().f.corner;
      
  },

  _eventStart: function(e) {

    var data = this.data().f,
      turn = data.opts.turn;

    if (!data.corner && !data.disabled && !this.flip('isTurning') &&
      data.opts.page==turn.data().pagePlace[data.opts.page])
    {

      data.corner = flipMethods._isIArea.call(this, e);

      if (data.corner && flipMethods._foldingPage.call(this)) {

        this.trigger('pressed', [data.point]);
        flipMethods._showFoldedPage.call(this, data.corner);

        return false;

      } else
        data.corner = null;

    }

  },

  _eventMove: function(e) {

    var data = this.data().f;

    if (!data.disabled) {

      e = (isTouch) ? e.originalEvent.touches : [e];

      if (data.corner) {

        var pos = data.parent.offset();
        data.corner.x = e[0].pageX-pos.left;
        data.corner.y = e[0].pageY-pos.top;
        flipMethods._showFoldedPage.call(this, data.corner);

      } else if (data.hover && !this.data().effect && this.is(':visible')) {

        var point = flipMethods._isIArea.call(this, e[0]);

        if (point) {

          if ((data.effect=='sheet' && point.corner.length==2)  || data.effect=='hard') {
            data.status = 'hover';
            var origin = flipMethods._c.call(this, point.corner, data.opts.cornerSize/2);
            point.x = origin.x;
            point.y = origin.y;
            flipMethods._showFoldedPage.call(this, point, true);
          }
        
        } else {
          
          if (data.status=='hover') {
            data.status = '';
            flipMethods.hideFoldedPage.call(this, true);
          }

        }

      }

    }

  },

  _eventEnd: function() {

    var data = this.data().f,
      corner = data.corner;

    if (!data.disabled && corner) {
      if (trigger('released', this, [data.point || corner])!='prevented') {
        flipMethods.hideFoldedPage.call(this, true);
      }
    }

    data.corner = null;

  },

  disable: function(disable) {

    flipMethods.setData.call(this, {'disabled': disable});
    return this;

  },

  hover: function(hover) {
    
    flipMethods.setData.call(this, {'hover': hover});
    return this;

  },

  peel: function (corner, animate) {

    var data = this.data().f;

    if (corner) {

      if ($.inArray(corner, corners.all)==-1)
        throw turnError('Corner '+corner+' is not permitted');

      if ($.inArray(corner, flipMethods._cAllowed.call(this))!=-1) {

        var point = flipMethods._c.call(this, corner, data.opts.cornerSize/2);
        
        data.status = 'peel';

        flipMethods._showFoldedPage.call(this,
        {
          corner: corner,
          x: point.x,
          y: point.y
        }, animate);

      }


    } else {

      data.status = '';

      flipMethods.hideFoldedPage.call(this, animate);
      
    }

    return this;
  }
};


// Processes classes

function dec(that, methods, args) {

  if (!args[0] || typeof(args[0])=='object')
    return methods.init.apply(that, args);

  else if (methods[args[0]])
    return methods[args[0]].apply(that, Array.prototype.slice.call(args, 1));

  else
    throw turnError(args[0] + ' is not a method or property');

}


// Attributes for a layer

function divAtt(top, left, zIndex, overf) {
    
  return {'css': {
    position: 'absolute',
    top: top,
    left: left,
    'overflow': overf || 'hidden',
    zIndex: zIndex || 'auto'
  }
};
      
}

// Gets a 2D point from a bezier curve of four points

function bezier(p1, p2, p3, p4, t) {

  var a = 1 - t,
    b = a * a * a,
    c = t * t * t;
    
  return point2D(Math.round(b*p1.x + 3*t*a*a*p2.x + 3*t*t*a*p3.x + c*p4.x),
    Math.round(b*p1.y + 3*t*a*a*p2.y + 3*t*t*a*p3.y + c*p4.y));

}
  
// Converts an angle from degrees to radians

function rad(degrees) {
  
  return degrees/180*PI;

}

// Converts an angle from radians to degrees

function deg(radians) {
  
  return radians/PI*180;

}

// Gets a 2D point

function point2D(x, y) {
  
  return {x: x, y: y};

}

// Webkit 534.3 on Android wrongly repaints elements that use overflow:hidden + rotation

function rotationAvailable() {
  var parts;

  if ((parts = /AppleWebkit\/([0-9\.]+)/i.exec(navigator.userAgent))) {
    var webkitVersion = parseFloat(parts[1]);
    return (webkitVersion>534.3);
  } else {
    return true;
  }
}

// Returns the traslate value

function translate(x, y, use3d) {
  
  return (has3d && use3d) ? ' translate3d(' + x + 'px,' + y + 'px, 0px) '
  : ' translate(' + x + 'px, ' + y + 'px) ';

}

// Returns the rotation value

function rotate(degrees) {
  
  return ' rotate(' + degrees + 'deg) ';

}

// Checks if a property belongs to an object

function has(property, object) {
  
  return Object.prototype.hasOwnProperty.call(object, property);

}

// Gets the CSS3 vendor prefix

function getPrefix() {

  var vendorPrefixes = ['Moz','Webkit','Khtml','O','ms'],
  len = vendorPrefixes.length,
  vendor = '';

  while (len--)
    if ((vendorPrefixes[len] + 'Transform') in document.body.style)
      vendor='-'+vendorPrefixes[len].toLowerCase()+'-';

  return vendor;

}

// Detects the transitionEnd Event

function getTransitionEnd() {

  var t,
    el = document.createElement('fakeelement'),
    transitions = {
      'transition':'transitionend',
      'OTransition':'oTransitionEnd',
      'MSTransition':'transitionend',
      'MozTransition':'transitionend',
      'WebkitTransition':'webkitTransitionEnd'
    };

  for (t in transitions) {
    if (el.style[t] !== undefined) {
      return transitions[t];
    }
  }
}

// Gradients

function gradient(obj, p0, p1, colors, numColors) {

  var j, cols = [];

  if (vendor=='-webkit-') {

    for (j = 0; j<numColors; j++)
      cols.push('color-stop('+colors[j][0]+', '+colors[j][1]+')');
    
    obj.css({'background-image':
        '-webkit-gradient(linear, '+
        p0.x+'% '+
        p0.y+'%,'+
        p1.x+'% '+
        p1.y+'%, '+
        cols.join(',') + ' )'});
  } else {
    
    p0 = {x:p0.x/100 * obj.width(), y:p0.y/100 * obj.height()};
    p1 = {x:p1.x/100 * obj.width(), y:p1.y/100 * obj.height()};

    var dx = p1.x-p0.x,
      dy = p1.y-p0.y,
      angle = Math.atan2(dy, dx),
      angle2 = angle - Math.PI/2,
      diagonal = Math.abs(obj.width()*Math.sin(angle2))+Math.abs(obj.height()*Math.cos(angle2)),
      gradientDiagonal = Math.sqrt(dy*dy + dx*dx),
      corner = point2D((p1.x<p0.x) ? obj.width() : 0, (p1.y<p0.y) ? obj.height() : 0),
      slope = Math.tan(angle),
      inverse = -1/slope,
      x = (inverse*corner.x - corner.y - slope*p0.x + p0.y)/(inverse-slope),
      c = {x: x, y: inverse*x - inverse*corner.x + corner.y},
      segA = (Math.sqrt( Math.pow(c.x-p0.x,2) + Math.pow(c.y-p0.y,2)));

      for (j = 0; j<numColors; j++)
        cols.push(' '+colors[j][1]+' '+((segA + gradientDiagonal*colors[j][0])*100/diagonal)+'%');

      obj.css({'background-image': vendor+'linear-gradient(' + (-angle) + 'rad,' + cols.join(',') + ')'});
  }
}


// Triggers an event

function trigger(eventName, context, args) {

  var event = $.Event(eventName);
  context.trigger(event, args);
  if (event.isDefaultPrevented())
    return 'prevented';
  else if (event.isPropagationStopped())
    return 'stopped';
  else
    return '';
}

// JS Errors

function turnError(message) {

  function TurnJsError(message) {
    this.name = "TurnJsError";
    this.message = message;
  }

  TurnJsError.prototype = new Error();
  TurnJsError.prototype.constructor = TurnJsError;
  return new TurnJsError(message);

}

// Find the offset of an element ignoring its transformation

function findPos(obj) {

  var offset = {top: 0, left: 0};

  do{
    offset.left += obj.offsetLeft;
    offset.top += obj.offsetTop;
  } while ((obj = obj.offsetParent));

  return offset;

}

// Checks if there's hard page compatibility
// IE9 is the only browser that does not support hard pages

function hasHardPage() {
  return (navigator.userAgent.indexOf('MSIE 9.0')==-1);
}

// Request an animation

window.requestAnim = (function() {
  return window.requestAnimationFrame ||
    window.webkitRequestAnimationFrame ||
    window.mozRequestAnimationFrame ||
    window.oRequestAnimationFrame ||
    window.msRequestAnimationFrame ||
    function(callback) {
      window.setTimeout(callback, 1000 / 60);
    };

})();

// Extend $.fn

$.extend($.fn, {

  flip: function() {
    return dec($(this[0]), flipMethods, arguments);
  },

  turn: function() {
    return dec($(this[0]), turnMethods, arguments);
  },

  transform: function(transform, origin) {

    var properties = {};
    
    if (origin)
      properties[vendor+'transform-origin'] = origin;
    
    properties[vendor+'transform'] = transform;
  
    return this.css(properties);

  },

  animatef: function(point) {

    var data = this.data();

    if (data.effect)
      data.effect.stop();

    if (point) {

      if (!point.to.length) point.to = [point.to];
      if (!point.from.length) point.from = [point.from];

      var diff = [],
        len = point.to.length,
        animating = true,
        that = this,
        time = (new Date()).getTime(),
        frame = function() {

          if (!data.effect || !animating)
            return;

          var v = [],
            timeDiff = Math.min(point.duration, (new Date()).getTime() - time);

          for (var i = 0; i < len; i++)
            v.push(data.effect.easing(1, timeDiff, point.from[i], diff[i], point.duration));

          point.frame((len==1) ? v[0] : v);

          if (timeDiff==point.duration) {
            delete data['effect'];
            that.data(data);
            if (point.complete)
              point.complete();
          } else {
            window.requestAnim(frame);
          }
        };

      for (var i = 0; i < len; i++)
        diff.push(point.to[i] - point.from[i]);

      data.effect = $.extend({
        stop: function() {
          animating = false;
        },
        easing: function (x, t, b, c, data) {
          return c * Math.sqrt(1 - (t=t/data-1)*t) + b;
        }
      }, point);

      this.data(data);

      frame();

    } else {
      
      delete data['effect'];

    }
  }
});

// Export some globals

$.isTouch = isTouch;
$.mouseEvents = mouseEvents;
$.cssPrefix = getPrefix;
$.cssTransitionEnd = getTransitionEnd;
$.findPos = findPos;

})(jQuery);

$(window).ready(function() {
	  $('.pages').turn({
      duration: 1500,
      width: 620,
      height: 445,
	  //  acceleration: true,
    //  display: 'single',
     // autoCenter: true,
     turnCorners: "bl,br",
	    elevation: 300,
	    when: {
	      turned: function(e, page) {
	        console.log('Current view: ', $(this).turn('view'));
	      }
	    }
	  });
	});


        </script>
    </body>
</html>
