<!doctype html>
<html class="scroll-smooth duration-700">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="scroll-smooth">

<!--Header-->
<div data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="700"="fade-down" class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </div>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a>Home</a></li>
        <li><a href="#service">Services</a></li>
        <li><a href="#about">About us</a></li>
      </ul>
    </div>
    <a class=""><img src="/img/AADLogo.png" alt="Company Logo" id="top"></a>
  </div>
  
  <div class="navbar-end">
  <div class="navbar-end hidden lg:flex ">
    <ul class="menu menu-horizontal px-1 ">
      <li class="hover:underline-offset-8  hover:text-[#5B61DC]"><a class="hover:underline-offset-8" href="#top">Home</a></li>
      <li class="hover:underline-offset-8 hover:text-[#5B61DC]"><a class="hover:underline-offset-8" href="#service">Services</a></li>
      <li class="hover:text-[#5B61DC]"><a class="hover:underline-offset-8 scroll-smooth" href="#about">About</a></li>
    </ul>
    </div>
  <button class="btn bg-[#5B61DC] text-white hover:bg-violet-700 scroll-smooth"> <a href="#contact">Contact Us</a></button>
</div>
  </div>
</div>
</div>

<!--Hero-->

<div class="grid gap-8 p-10 md:grid-cols-2 md:items-center lt:mt-20">
<div class="text-center md:text-left" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <h1 class="font-bold text-2xl px-5 py-2 lg:text-6xl">Innovative <span class="text-[#5B61DC]">Software Solutions</span> for Modern Businesses</h1>
  <p class="px-5 py-2">Empowering your business with cutting-edge technology</p>
  <button class="btn bg-[#5B61DC] text-white hover:bg-violet-700 md:ml-5"><a href="#contact">Get in touch</a></button>
</div>
<div class= "ml-5" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
<dotlottie-player src="https://lottie.host/49b52c3f-a9a9-4291-8f9f-088471c136b1/Jb7jgrzrAz.json" background="transparent" speed="1"" loop autoplay></dotlottie-player>
</div>
</div>


<!--Service--> 
<div class="hidden lg:flex">
<div class="bg-[#172A38] px-5" id="service"> 
  <h2 class="font-bold text-4xl pt-10 text-center text-[#5B61DC]" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">SERVICES</h2>
  <div class="flex flex-wrap  justify-center pb-10">


<div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service1.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Web Development</h2>
    <p>We build responsive, user-centric websites and web applications that provide a seamless experience across all devices.</p>
  </div>
</div>

<div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service2.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Mobile Development</h2>
    <p>We design and develop high-performing mobile apps for Android and iOS that engage users and achieve your business goals.</p>
  </div>
</div>

<div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service3.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Custom Software Development</h2>
    <p>We create bespoke software solutions tailored to meet your unique business needs, enhancing efficiency and driving growth.</p>
  </div>
</div>

<div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service4.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Virtual Reality (VR)</h2>
    <p>Dive into fully immersive VR environments designed for gaming, training, and simulations, offering unforgettable user experiences and innovative solutions.</p>
  </div>
</div>


<div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service5.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Augmented Reality (AR)</h2>
    <p>Transform your business with immersive AR experiences that blend the digital and physical worlds, perfect for enhancing customer engagement and streamlining operations.</p>
  </div>
</div>

<div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service6.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Business Software</h2>
    <p>Optimize your operations with custom business software solutions tailored to enhance efficiency, productivity, and growth.</p>
  </div>
</div>

</div>
</div>
</div>


<!--service-mobile-view-->
<div class="bg-[#172A38] lg:hidden">
<h2 class="font-bold text-4xl pt-10 text-center text-[#5B61DC]" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">SERVICES</h2>
<div class="w-full carousel rounded-box">

  <div class="carousel-item w-full justify-center">
 <div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service1.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Web Development</h2>
    <p>We build responsive, user-centric websites and web applications that provide a seamless experience across all devices.</p>
  </div>
</div>
  </div>

  <div class="carousel-item w-full justify-center">
  <div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service2.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Mobile Development</h2>
    <p>We design and develop high-performing mobile apps for Android and iOS that engage users and achieve your business goals.</p>
  </div>
</div>
  </div> 

  <div class="carousel-item w-full justify-center">
  <div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service3.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Custom Software Development</h2>
    <p>We create bespoke software solutions tailored to meet your unique business needs, enhancing efficiency and driving growth.</p>
  </div>
</div>
  </div>

  <div class="carousel-item w-full justify-center">
  <div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service4.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Virtual Reality (VR)</h2>
    <p>Dive into fully immersive VR environments designed for gaming, training, and simulations, offering unforgettable user experiences and innovative solutions.</p>
  </div>
</div>
  </div> 

  <div class="carousel-item w-full justify-center">
  <div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service5.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Augmented Reality (AR)</h2>
    <p>Transform your business with immersive AR experiences that blend the digital and physical worlds, perfect for enhancing customer engagement and streamlining operations.</p>
  </div>
</div>
  </div> 

  <div class="carousel-item w-full justify-center">
    <div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service1.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Web Development</h2>
    <p>We build responsive, user-centric websites and web applications that provide a seamless experience across all devices.</p>
  </div>
</div>
  </div> 

  <div class="carousel-item w-full justify-center">
  <div class="card w-96 bg-base-100 shadow-xl m-5" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <figure><img src="/img/Service6.png" alt="Shoes" /></figure>
  <div class="card-body">
    <h2 class="card-title text-[#5B61DC]">Business Software</h2>
    <p>Optimize your operations with custom business software solutions tailored to enhance efficiency, productivity, and growth.</p>
  </div>
</div>

</div>
</div>
  </div> 


</div>
</div>




<!--About Us-->

<div class="bg-[#5B61DC] p-5 md:flex md:justify-center md:items-center md:px-5 md:h-96 xl:px-72" id="about">
<div class="text-center p-2 md:text-right" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
  <h1 class="text-7xl font-bold text-white">About us</h1>
</div>
<div class="text-center py-2 px-2 text-white md:text-left" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
  <p>AAD Software Services is dedicated to delivering innovative and reliable software solutions that empower businesses to thrive in the digital age. Our mission is to provide top-notch 
    custom software, mobile apps, and web development services tailored to meet the unique needs of our clients.</p><br>
<p>We envision becoming a leading technology partner, recognized for our commitment to excellence, customer satisfaction, and sustainable practices.</p>
</div>
</div>
</div>


<!--Contact Us-->
<div class="max-w-screen-lg mx-auto p-5" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700" >
    <div class="grid grid-cols-1 md:grid-cols-12 border">
        <div class="bg-[#172A38] md:col-span-4 p-10 text-white">
            <p class="mt-4 text-sm leading-7 font-regular uppercase" id="contact">
                Contact
            </p>
            <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight">
                Get In <span class="text-[#5B61DC]">Touch</span>
            </h3>
            <p class="mt-4 leading-7 text-gray-200">
            At AAD Software Services, we are committed to delivering exceptional software solutions tailored to your unique needs. Whether you have a question, need support, or are looking to discuss a new project, our dedicated team is here to assist you. 
            </p>
           
        </div>
        <form class="md:col-span-8 p-10" method="POST" action="{{route('sendemail')}}">
          @if (session('success'))
              <div class="text-center text-red-500 my-10">
                  {{session('success')}}
              </div>
          @endif
          @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        First Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        id="grid-first-name" 
                        type="text" 
                        placeholder="Jane"
                        id="firstname"
                        name="firstname"
                    >
                  @error('firstname')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                  @enderror
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-last-name">
                        Last Name
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" 
                        type="text" 
                        placeholder="Phoenix"
                        id="lastname"
                        name="lastname"
                    >
                    @error('lastname')
                      <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Email Address
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-email" 
                        type="email" 
                        placeholder="********@*****.**"
                        id="email"
                        name="email"
                    >
                    @error('email')
                      <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Your Message
                    </label>
                    <textarea rows="10"
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="message"
                        name="message"
                        ></textarea>
                    @error('message')
                      <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-between w-full px-3 mt-10">
                    <button
                        class="shadow bg-[#5B61DC] hover:bg-violet-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded"
                        type="submit">
                        Send Message
                    </button>
                </div>

            </div>

        </form>

    </div>
</div>



<!--Footer-->

<div>
<footer class="bg-[#5B61DC] p-5 md:flex md:justify-around">
  <div class="flex justify-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="700">
<img src="/img/AADALT.png" alt="">
</div>
<div class="flex justify-center" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="700">
<img class="px-1 scale-75" src="/img/facebook.png" alt="">
<img class="px-1 scale-75" src="/img/insta.png" alt="">
<img class="px-1 scale-75" src="/img/google.png" alt="">
</div>
</div>
</footer>
<div class="bg-[#5B61DC] text-center p-2 text-[#ffffff] text-xs">
  <p>© 2024 AAD Software Services. All rights reserved.</p>
</div>


<script src="../path/to/flowbite/dist/flowbite.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
</body>
</html>

