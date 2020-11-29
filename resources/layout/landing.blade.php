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
   
   <body  class="bg-gray-100 font-sans leading-normal tracking-normal font-sans antialiased text-gray-900 leading-normal tracking-wider ">
      <div class="flex md:flex-row-reverse flex-wrap">
		
		 <!--Main Content-->
         <div class="w-full md:w-4/5 bg-gray-100">
            <div class="container bg-gray-100 pt-16 px-6">
            <div class="max-w-4xl flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0">
    
    <!--Main Col-->
 
    @yield('content');
    
    
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
                  
                  @foreach ($sign as $sign)
                  <li class="mr-3 flex-1">
                     <a href="{{route('sign.show',$sign->id)}}" class="block py-1 md:py-3 pl-1 align-middle text-gray-800 no-underline hover:text-pink-500 border-b-2 border-gray-800 md:border-gray-900 hover:border-pink-500">
                     <i class="fas fa-link pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">{{$sign-> sign}}</span>
                     </a>
                  </li>
                  @endforeach
               </ul>
            </div>
         </div>
      </div>
   </body>


   <script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	  <script src="https://unpkg.com/tippy.js@4"></script>
	  <script>
		//Init tooltips
		tippy('.link',{
		  placement: 'bottom'
		})

		//Toggle mode
		const toggle = document.querySelector('.js-change-theme');
		const body = document.querySelector('body');
		const profile = document.getElementById('profile');
		
		
		toggle.addEventListener('click', () => {

		  if (body.classList.contains('text-gray-900')) {
			toggle.innerHTML = "☀️";
			body.classList.remove('text-gray-900');
			body.classList.add('text-gray-100');
			profile.classList.remove('bg-white');
			profile.classList.add('bg-gray-900');
		  } else
		  {
			toggle.innerHTML = "🌙";
			body.classList.remove('text-gray-100');
			body.classList.add('text-gray-900');
			profile.classList.remove('bg-gray-900');			
			profile.classList.add('bg-white');
			
		  }
		});
		
    </script>
	
</body>
</html>


