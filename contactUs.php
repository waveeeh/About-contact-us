<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="./img/Group 236.svg" type="image/x-icon" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              fontColor: "#1E1E1E",
              card1: "#FBC0C0",
              card2: "#F4E87A",
              card3: "#AEA8F8",
              card4: "#F4E884",
              button: "#3E3C3C",
              profcard: "#F1EFEF",
              nav: "#808185",
            },
            fontFamily: {
              sans: ["IBM Plex Sans", "sans-serif"],
            },
          },
        },
      };
    </script>
  </head>
  <body>

    <div class="container mx-auto pl-32 p-8">
        <div class="flex justify-between items-center">
            <h1 class="font-semibold text-3xl">Interlink</h1>
        </div>

        <div class="flex flex-col lg:flex-row mt-10">
        
            <div class="bg-[#F7F7F7] w-full lg:w-[668px] h-auto lg:h-[877px] rounded-[15px] shadow-lg p-10 mb-10 lg:mb-0">
                <h2 class="text-[#0E0E0E] font-semibold text-[30px] lg:text-[40px]">
                    Let's Connect, Drop Us a Message
                </h2>
                <p class="text-[#0F0F0F] text-[20px] lg:text-[24px] font-light mt-4">
                    Need help or have feedback? We're here for you. Reach out, and we'll respond shortly.
                </p>
                <hr class="border-0 h-[1px] bg-[#000000] w-[90%] lg:w-[572px] my-10 mx-auto" />

                <div class="flex flex-col lg:flex-row space-y-4 lg:space-y-0 lg:space-x-4 mt-16">
                    <div>
                        <label class="block text-[18px] text-[#0E0E0E]">First Name</label>
                        <input 
                            type="text" 
                            placeholder="First Name" 
                            class="w-full lg:w-[267px] h-[44px] rounded-[6px] border border-[#D0C7C7] px-3 py-2 placeholder-[#BFB6B6] text-[18px] mt-2" />
                    </div>
                    <div>
                        <label class="block text-[18px] text-[#0E0E0E]">Last Name</label>
                        <input 
                            type="text" 
                            placeholder="Last Name" 
                            class="w-full lg:w-[267px] h-[44px] rounded-[6px] border border-[#D0C7C7] px-3 py-2 placeholder-[#BFB6B6] text-[18px] mt-2" />
                    </div>
                </div>

                <div class="mt-6">
                    <label class="block text-[18px] text-[#0E0E0E]">Email</label>
                    <input 
                        type="email" 
                        placeholder="Email Address" 
                        class="w-full lg:w-[548px] h-[44px] rounded-[6px] border border-[#D0C7C7] px-3 py-2 placeholder-[#BFB6B6] text-[18px] mt-2" />
                </div>

                <div class="my-10">
                    <label class="block text-[18px] text-[#0E0E0E]">Message</label>
                    <textarea 
                        placeholder="Leave us a message" 
                        class="w-full lg:w-[548px] h-[120px] rounded-[6px] border border-[#D0C7C7] px-3 py-2 placeholder-[#BFB6B6] text-[18px] mt-2"></textarea>
                </div>

                <div class="flex items-center space-x-3">
                    <input type="checkbox" class="h-6 w-6 rounded border-[#D0C7C7] checked:bg-[#000000]" />
                    <label class="text-[18px] text-[#0E0E0E]">
                        I acknowledge and accept our clear privacy policy.
                    </label>
                </div>
            </div>

        
            <div class="lg:ml-10 flex flex-col items-center">
                <div class="shadow-lg mb-6 w-full lg:w-[652px] h-[412px] rounded-[15px]">
                    <img 
                        src="" 
                        alt="Image" 
                        class="w-full h-full object-cover rounded-[15px]" />
                </div>

                <div class="bg-[#F7F7F7] w-full lg:w-[652px] h-auto rounded-[15px] shadow-lg flex items-center p-6 space-x-4 mb-6">
                    <div class="bg-[#FBC0C0] w-[61px] h-[62px] rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" 
                            height="24" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            class="lucide lucide-mail">
                            <rect width="20" 
                                height="16" 
                                x="2" y="4" 
                                rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-medium text-[24px] text-[#000000]">Chat to Us</h3>
                        <p class="text-[20px] text-[#0F0F0F]">interlink@gmail.com</p>
                    </div>
                </div>

                <div class="bg-[#F7F7F7] w-full lg:w-[652px] h-auto rounded-[15px] shadow-lg flex items-center p-6 space-x-4 mb-6">
                    <div class="bg-[#F4E87A] w-[61px] h-[62px] rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" 
                            height="24" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            class="lucide lucide-phone">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-medium text-[24px] text-[#000000]">Call Us</h3>
                        <p class="text-[20px] text-[#0F0F0F]">+6397 928 2938</p>
                    </div>
                </div>

                <div class="bg-[#F7F7F7] w-full lg:w-[652px] h-auto rounded-[15px] shadow-lg flex items-center p-6 space-x-4">
                    <div class="bg-[#AEA8F8] w-[61px] h-[62px] rounded-full flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" 
                            width="24" 
                            height="24" 
                            viewBox="0 0 24 24" 
                            fill="none" 
                            stroke="currentColor" 
                            stroke-width="2" 
                            stroke-linecap="round" 
                            stroke-linejoin="round" 
                            class="lucide lucide-map-pinned">
                            <path d="M18 8c0 3.613-3.869 7.429-5.393 8.795a1 1 0 0 1-1.214 0C9.87 15.429 6 11.613 6 8a6 6 0 0 1 12 0"/>
                            <circle 
                                cx="12" 
                                cy="8" 
                                r="2"/>
                            <path d="M8.714 14h-3.71a1 1 0 0 0-.948.683l-2.004 6A1 1 0 0 0 3 22h18a1 1 0 0 0 .948-1.316l-2-6a1 1 0 0 0-.949-.684h-3.712"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-medium text-[24px] text-[#000000]">Visit Us</h3>
                        <p class="text-[20px] text-[#0F0F0F]">CICT, NEUST, Sumacab, Cabanatuan City</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
  </body>
</html>
