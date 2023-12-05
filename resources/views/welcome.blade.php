<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AguraMarket</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

         <link
      rel="shortcut icon"
      href="./images/favicon.svg"
      type="image/svg+xml"
    />

    
    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

        <!-- Styles -->
        <style>
                        
                    /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}

                    

                    /*-----------------------------------*\
                    #CUSTOM PROPERTY
                    \*-----------------------------------*/

                    :root {
                    /**
                    * colors
                    */

                    --safety-orange: hsl(25, 100%, 50%);
                    --lavender-gray: hsl(230, 19%, 81%);
                    --persian-rose: hsl(328, 100%, 59%);
                    --red-crayola: hsl(341, 100%, 49%);
                    --eerie-black: hsl(240, 6%, 10%);
                    --light-gray: hsl(0, 0%, 80%);
                    --cultured-2: hsl(210, 60%, 98%);
                    --platinum: hsl(0, 0%, 90%);
                    --gray-web: hsl(220, 5%, 49%);
                    --cultured: hsl(0, 0%, 93%);
                    --black_10: hsla(0, 0%, 0%, 0.1);
                    --black_5: hsla(0, 0%, 0%, 0.05);
                    --white-1: hsl(0, 0%, 100%);
                    --white-2: hsl(0, 14%, 98%);
                    --black: hsl(0, 0%, 0%);
                    --blue: hsl(210, 100%, 50%);
                    --dark-blue: hsl(210, 100%, 25%);
                    --light-blue: hsl(210, 100%, 75%);

                    /**
                    * gradient color
                    */

                    --gradient: linear-gradient(
                        to left top,
                        var(--persian-rose),
                        var(--safety-orange)
                    );

                    /**
                    * typography
                    */

                    --ff-roboto: "Roboto", sans-serif;
                    --ff-league-spartan: "League Spartan", sans-serif;

                    --fs-1: 3.5rem;
                    --fs-2: 3rem;
                    --fs-3: 2.1rem;
                    --fs-4: 1.7rem;
                    --fs-5: 1.4rem;
                    --fs-6: 1.3rem;

                    --fw-700: 700;
                    --fw-500: 500;

                    /**
                    * spacing
                    */

                    --section-padding: 60px;

                    /**
                    * shadow
                    */

                    --shadow-1: 0 6px 24px var(--black_5);
                    --shadow-2: 0 2px 28px var(--black_10);

                    /**
                    * border radius
                    */

                    --radius-2: 2px;
                    --radius-5: 5px;
                    --radius-8: 8px;

                    /**
                    * transition
                    */

                    --transition-1: 0.25s ease;
                    --transition-2: 0.5s ease;
                    --cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);
                    }

                    /*-----------------------------------*\
                    #RESET
                    \*-----------------------------------*/

                    *,
                    *::before,
                    *::after {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    }

                    li {
                    list-style: none;
                    }

                    a {
                    text-decoration: none;
                    color: inherit;
                    }

                    a,
                    img,
                    span,
                    time,
                    label,
                    input,
                    button,
                    textarea,
                    ion-icon {
                    display: block;
                    }

                    img {
                    height: auto;
                    }

                    input,
                    button,
                    textarea {
                    background: none;
                    border: none;
                    font: inherit;
                    }

                    input,
                    textarea {
                    width: 100%;
                    }

                    button {
                    cursor: pointer;
                    }

                    ion-icon {
                    pointer-events: none;
                    }

                    address {
                    font-style: normal;
                    }

                    html {
                    font-family: var(--ff-roboto);
                    font-size: 10px;
                    scroll-behavior: smooth;
                    }

                    body {
                    background-color: var(--white-1);
                    color: var(--gray-web);
                    font-size: 1.6rem;
                    line-height: 1.8;
                    }

                    ::-webkit-scrollbar {
                    width: 10px;
                    }

                    ::-webkit-scrollbar-track {
                    background-color: hsl(0, 0%, 98%);
                    }

                    ::-webkit-scrollbar-thumb {
                    background-color: hsl(0, 0%, 88%);
                    }

                    ::-webkit-scrollbar-thumb:hover {
                    background-color: hsl(0, 0%, 70%);
                    }

                    :focus-visible {
                    outline-offset: 4px;
                    }

                    /*-----------------------------------*\
                    #REUSED STYLE
                    \*-----------------------------------*/
                    .container {
                    padding-inline: 15px;
                    }

                    .btn {
                    max-width: max-content;
                    color: var(--white-1);
                    font-size: var(--fs-6);
                    font-weight: var(--fw-700);
                    padding: 10px 30px;
                    border-radius: var(--radius-5);
                    transition: var(--transition-1);
                    }

                    .btn-primary {
                    background-image: var(--gradient);
                    background-size: 1000%;
                    }

                    .btn-primary:is(:hover, :focus) {
                    background-position: bottom right;
                    }

                    .btn-secondary {
                    background-color: var(--white-1);
                    color: var(--eerie-black);
                    }
                    .btn-secondary:is(:hover, :focus) {
                    background-color: var(--eerie-black);
                    color: var(--white-1);
                    }

                    .section {
                    padding-block: var(--section-padding);
                    }

                    .h1,
                    .h2,
                    .h3 {
                    color: var(--eerie-black);
                    font-family: var(--ff-league-spartan);
                    line-height: 1.2;
                    }

                    .h1 {
                    font-size: var(--fs-1);
                    }

                    .h2 {
                    font-size: var(--fs-2);
                    }

                    .h3 {
                    font-size: var(--fs-3);
                    }

                    .w-100 {
                    width: 100%;
                    }

                    .section-title,
                    .section-text {
                    text-align: center;
                    }

                    .section-text {
                    font-size: var(--fs-6);
                    }

                    .grid-list {
                    display: grid;
                    gap: 30px;
                    }

                    .img-holder {
                    aspect-ratio: var(--width) / var(--height);
                    }

                    .img-cover {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    }

                    /*-----------------------------------*\
                    #HEADER
                    \*-----------------------------------*/

                    .header {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    background-color: var(--white-1);
                    padding-block: 15px;
                    border-block-end: 1px solid var(--cultured);
                    z-index: 4;
                    transition: var(--transition-1);
                    }
                    .header .title {
                        position: relative;
                        left: 0;
                        top: 20px;
                        color: var(--dark-blue);
                        font-weight: var(--fw-700);
                        font-size: var(--fs-3)
                    }
                    .header .logo {
                        width: 60px;
                        height: 60px;
                        border-radius: 50%;

                    }
                    .header .auth {
                        display: flex;
                    }
                    
                    .header.active {
                        filter: drop-shadow(var(--shadow-2));
                        }

                    .header > .container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    }


                    .header .btn {
                    margin-block-start: 10px;
                    }

                    /*-----------------------------------*\
                    #HEO
                    \*-----------------------------------*/

                    .hero {
                    padding-block-start: calc(var(--section-padding) + 50px);
                    text-align: left;
                    background-color: var(--platinum);
                    }

                    .hero-content {
                    margin-block-end: 30px;
                    }

                    .hero-subtitle {
                    color: var(--eerie-black);
                    font-size: var(--fs-5);
                    font-weight: var(--fw-500);
                    }

                    .hero-title {
                    margin-block: 12px 8px;
                    }

                    .hero-text {
                    font-size: var(--fs-7);
                    }

                    .hero .btn {
                    margin-inline: auto;
                    margin-block-start: 20px;
                    }

                    /*-----------------------------------*\
                    #SERVICE
                    \*-----------------------------------*/

                    .service {
                    background-color: var(--platinum);
                    }

                    .service .section-text {
                    margin-block: 5px 35px;
                    }

                    .service-card {
                    background-color: var(--white-1);
                    padding: 20px 15px;
                    border: 1px solid var(--platinum);
                    border-radius: var(--radius-5);
                    text-align: center;
                    box-shadow: var(--shadow-1);
                    transition: var(--transition-2);
                    }

                    .service-card:is(:hover, :focus-within) {
                    transform: translateY(-10px);
                    }

                    .service-card .card-icon {
                    color: var(--white-1);
                    font-size: 25px;
                    max-width: max-content;
                    margin-inline: auto;
                    padding: 18px;
                    border-radius: 50%;
                    }

                    .service-card .card-title {
                    margin-block: 20px 8px;
                    }

                    .service-card .card-text {
                    font-size: var(--fs-6);
                    }



        </style>
    </head>
    <body>
        
        
        <header class="header" data-header>
            <div class="container">
                <div class="flex justify-center">
                    <img class="logo" src="AguraMarketLogo.png" alt="AguraMarket">
                    <a href="#" class="title">AguraMarket</a>
                </div>
                
                @if (Route::has('login'))
                <div>
                    @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                    <div class="auth" >
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>
        
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                        </div>
                    </div>
                        @endif
            </div>
        
    </header>

    <main>
      <article>
        <!-- 
          - #HERO
         -->

        <section class="section hero" id="home" aria-label="hero">
          <div class="container">
            <div class="hero-content">
              <p class="hero-subtitle">AguraMarket - A Digital Marketing Agency</p>
              <h1 class="h1 hero-title">We are available for marketing</h1>

              <p class="hero-text">
                Ready to take your digital marketing to the next level? Contact
                us Today for a free consultation and let's discuss how we can
                help you achieve your online goals. We look forward to make
                partnership with you on your digital marketing journey
              </p>

              <a href="#" class="btn btn-primary">Get Started</a>
            </div>

          </div>
        </section>

        <!-- 
          - #SERVICE
         -->
        <section class="section service" id="service" aria-label="service">
          <div class="container">
            <h2 class="h2 section-title">Services Offered</h2>

            <p class="section-text">
              At AguraMarket, we offer range of services designed to increase
              the productivity of the businesses of all sizes.
            </p>

            <ul class="grid-list">
              <li>
                <div class="service-card">
                  <div class="card-icon" style="background-color: #13c4a1">
                    <ion-icon name="chatbox"></ion-icon>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">SEO Optimization</a>
                  </h3>

                  <p class="card-text">
                    Boost your website's search engine rankings and attract more
                    organic traffic.
                  </p>
                </div>
              </li>
              <li>
                <div class="service-card">
                  <div class="card-icon" style="background-color: #6610f2">
                    <ion-icon name="desktop"></ion-icon>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">PPC Marketing</a>
                  </h3>

                  <p class="card-text">
                    Drive immediate traffic and conversions with targeted Ad
                    campaigns.
                  </p>
                </div>
              </li>
              <li>
                <div class="service-card">
                  <div class="card-icon" style="background-color: #ffb700">
                    <ion-icon name="bulb"></ion-icon>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Social Media Marketing</a>
                  </h3>

                  <p class="card-text">
                    Brand your name overall the world and enjoy limitless wider
                    market research.
                  </p>
                </div>
              </li>
              <li>
                <div class="service-card">
                  <div class="card-icon" style="background-color: #fc3549">
                    <ion-icon name="phone-portrait"></ion-icon>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Content Marketing</a>
                  </h3>

                  <p class="card-text">
                    Create valuable content that resonates with your audience
                    and drives leads.
                  </p>
                </div>
              </li>
              <li>
                <div class="service-card">
                  <div class="card-icon" style="background-color: #00d280">
                    <ion-icon name="archive"></ion-icon>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Email Marketing</a>
                  </h3>

                  <p class="card-text">
                    Nurture leads and build customer loyality through effective
                    email campaigns.
                  </p>
                </div>
              </li>
              <li>
                <div class="service-card">
                  <div class="card-icon" style="background-color: #ff612f">
                    <ion-icon name="build"></ion-icon>
                  </div>

                  <h3 class="h3">
                    <a href="#" class="card-title">Web Development Marketing</a>
                  </h3>

                  <p class="card-text">
                    Create a user-friendly and mobile-responsive website that
                    converts visitors into customers.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </section>
      </article>
    </main>
                </div>
            </div>
        </div>
    </body>
</html>
