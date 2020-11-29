use Stichoza\GoogleTranslate\GoogleTranslate;


<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Tailwind Starter Template - Responsive Header : Tailwind Toolbox</title>
      <meta name="author" content="name">
      <meta name="description" content="description here">
      <meta name="keywords" content="keywords,here">
      <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
      <!--Replace with your tailwind.css once created-->
      <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
      <!--Totally optional :) -->
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
   </head>
   
   <body class="bg-gray-100 font-sans leading-normal tracking-normal">
      <div class="flex md:flex-row-reverse flex-wrap">
		
		 <!--Main Content-->
         <!--Main Content-->
         <div class="w-full md:w-4/5 bg-gray-100">
            <div class="container bg-gray-100 pt-16 px-6">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
    <!--Main Col-->
    <div id="profile" class="w-full lg:w-3/5 rounded-lg lg:rounded-l-lg lg:rounded-r-none shadow-2xl bg-white opacity-75 mx-6 lg:mx-0">
    
  
      <div class="p-4 md:p-12 text-center lg:text-left">
        <!-- Image for mobile view-->
        <div class="block lg:hidden rounded-full shadow-xl mx-auto -mt-16 h-48 w-48 bg-cover bg-center" ></div>
        
        <h1 class="text-3xl font-bold pt-8 lg:pt-0">{{$sign->sign}}</h1>
        <div class="mx-auto lg:mx-0 w-4/5 pt-3 border-b-2 border-green-500 opacity-25"></div>
        <p class="pt-8 text-sm">{{$sign->description}}</p>
  
        
  
        
        <!-- Use https://simpleicons.org/ to find the svg for your preferred product --> 
  
      </div>
  
    </div>
    
    <!--Img Col-->
    <div class="w-full lg:w-2/5">
      <!-- Big profile image for side bar (desktop) -->
      <img src="/horoscopo/resources/views/simbolos/{{$sign->sign}}.png" class="rounded-none lg:rounded-lg shadow-2xl hidden lg:block">
      <!-- Image from: http://unsplash.com/photos/MP0IUfwrn0A -->
      
    </div>
    
    
    <!-- Pin to top right corner -->
      <div class="absolute top-0 right-0 h-12 w-18 p-4">
      <button class="js-change-theme focus:outline-none">🌙</button>
      </div>
  
  </div>
            </div>
         </div>
		 
		 <!--Sidebar-->
         <div class="w-full md:w-1/5 bg-gray-900 md:bg-gray-900 px-2 text-center fixed bottom-0 md:pt-8 md:top-0 md:left-0 h-16 md:h-screen md:border-r-4 md:border-gray-600">
            <div class="md:relative mx-auto lg:float-right lg:px-6">
               <ul class="list-reset flex flex-row md:flex-col text-center md:text-left">
                  
                  
                  <li class="mr-3 flex-1">
                     <a href="{{route('sign.index')}}" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                     <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Retorna</span>
                     </a>
                  </li>
                
               </ul>
            </div>
         </div>
      </div>
   </body>
</html>