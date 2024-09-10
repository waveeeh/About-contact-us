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

      <div class="pt-20 flex flex-col items-start">
        <span class="text-4xl font-bold">
          InterLink: Connecting 
          <span class="text-[#FFAD60]">Internships</span>,
        </span>
        <span class="text-4xl font-bold">
          Building 
          <span class="text-[#FC4100]">Futures</span>
        </span>
      </div>
    </div>

  <div class="relative">
    <svg xmlns="http://www.w3.org/2000/svg" 
      viewBox="0 0 1440 690" 
      class="w-full h-full">
      <path fill="#4B8AD3" 
        fill-opacity="1"
         d="M0,96L48,117.3C96,139,192,181,288,192C384,203,480,181,576,176C672,171,768,181,864,176C960,171,1056,149,1152,165.3C1248,181,1344,235,1392,261.3L1440,288L1440,897L1392,897C1344,897,1248,897,1152,897C1056,897,960,897,864,897C768,897,672,897,576,897C480,897,384,897,288,897C192,897,96,897,48,897L0,897Z">
      </path>
      <text 
        x="60" 
        y="260" 
        fill="white" 
        font-size="40" 
        font-weight="bold" 
        font-family="IBM Plex Sans">
        Core Values
      </text>
    </svg>

    <div class="absolute top-24 w-full h-full flex flex-col justify-center items-center px-16 py-16">
      <div class="grid grid-cols-3 gap-8 text-white mt-14">
        <div class="flex flex-col">
          <div class="flex items-start">
            <div class="bg-white rounded-full p-2 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" 
              width="24" 
              height="24" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              class="text-[#4B8AD3] lucide lucide-zap">
                <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"/>
              </svg>
            </div>
            <div>
              <h2 class="text-2xl font-semibold">Efficiency</h2>
              <p class="text-lg mt-2">
              Streamlining every step of the internship process to save time and reduce complexity.
              </p>
            </div>
          </div>
        </div>


        <div class="flex flex-col">
          <div class="flex items-start">
            <div class="bg-white rounded-full p-2 mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" 
                width="24" 
                height="24" 
                viewBox="0 0 24 24" 
                fill="none" 
                stroke="currentColor" 
                stroke-width="2" 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                class="text-[#4B8AD3] lucide lucide-lightbulb">
                  <path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/>
                  <path d="M9 18h6"/>
                  <path d="M10 22h4"/>
              </svg>
            </div>
            <div>
              <h2 class="text-2xl font-semibold">Innovation</h2>
              <p class="text-lg mt-2">
                Continuously improving through technology and new ideas to provide the most effective solutions.
              </p>
            </div>
          </div>
        </div>


        <div class="flex flex-col">
          <div class="flex items-start">
            <div class="bg-white rounded-full p-2 mr-4">
              <svg xmlns="http://www.w3.org/2000/svg" 
                width="24" 
                height="24" 
                viewBox="0 0 24 24" 
                fill="none" 
                stroke="currentColor" 
                stroke-width="2" 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                class="text-[#4B8AD3] lucide lucide-square-arrow-up">
                  <rect width="18" 
                    height="18" 
                    x="3" 
                    y="3" 
                    rx="2"/>
                    <path d="m16 12-4-4-4 4"/>
                    <path d="M12 16V8"/>
              </svg>
            </div>
            <div>
              <h2 class="text-2xl font-semibold">Growth-Oriented</h2>
              <p class="text-lg mt-2">
                Focusing on personal and professional development, ensuring students gain valuable real-world experience.
              </p>
            </div>
          </div>
        </div>
      </div>


      <div class="grid grid-cols-2 gap-10 mt-16 text-white">
        <div class="flex flex-col items-start">
          <div class="flex items-start">
            <div class="bg-white rounded-full p-2 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" 
              width="24" 
              height="24" 
              viewBox="0 0 24 24" 
              fill="none" 
              stroke="currentColor" 
              stroke-width="2" 
              stroke-linecap="round" 
              stroke-linejoin="round" 
              class="text-[#4B8AD3] lucide lucide-heart-handshake">
              <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/>
              <path d="M12 5 9.04 7.96a2.17 2.17 0 0 0 0 3.08c.82.82 2.13.85 3 .07l2.07-1.9a2.82 2.82 0 0 1 3.79 0l2.96 2.66"/>
              <path d="m18 15-2-2"/>
              <path d="m15 18-2-2"/>
            </svg> 
            </div>
            <div>
              <h2 class="text-2xl font-semibold">Support</h2>
              <p class="text-lg mt-2">
                Offering guidance and resources to all users, ensuring a smooth and rewarding internship experience.
              </p>
            </div>
          </div>
        </div>


        <div class="flex flex-col items-start">
          <div class="flex items-start">
            <div class="bg-white rounded-full p-2 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" 
                width="24" 
                height="24" 
                viewBox="0 0 24 24" 
                fill="none" 
                stroke="currentColor" 
                stroke-width="2" 
                stroke-linecap="round" 
                stroke-linejoin="round" 
                class="text-[#4B8AD3] lucide lucide-life-buoy">
                <circle 
                  cx="12" 
                  cy="12" 
                  r="10"/>
                  <path d="m4.93 4.93 4.24 4.24"/>
                  <path d="m14.83 9.17 4.24-4.24"/>
                  <path d="m14.83 14.83 4.24 4.24"/>
                  <path d="m9.17 14.83-4.24 4.24"/>
                  <circle 
                    cx="12" 
                    cy="12" 
                    r="4"/>
                </svg>
            </div>
            <div>
              <h2 class="text-2xl font-semibold">Collaboration</h2>
              <p class="text-lg mt-2">
                We foster strong partnerships between students, coordinators, and companies, ensuring that each stakeholder’s needs are met effectively.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container mx-auto p-16 mt-12">
    <div class="flex justify-between items-start">
      <h2 class="text-5xl font-bold">Collaboration Link</h2>


      <p class="text-2xl text-[#4A4848] mx-36">
        Where coordinators, companies, and students seamlessly connect to create meaningful internship experiences. Together, we foster growth, ensure success, and build a bridge between education and career opportunities.
      </p>
    </div>
  </div>

  <div class="container mx-auto p-16 mt-12 text-[#4A4848]">   
    <div class="grid grid-cols-2 gap-16">
      <div>
        <img 
          src="" 
          alt="" 
          class="w-[689px] h-[430px]" />
        <h3 class="text-2xl font-medium mt-4">COMPANIES</h3>
        <p class="text-2xl mt-2">
          Engage with future professionals, and contribute to shaping the next generation of the workforce.
        </p>
        
        <div class="mt-12"></div>

        <img 
          src="" 
          alt="" 
          class="w-[689px] h-[430px]" />
        <h3 class="text-2xl font-medium mt-4">OJT COORDINATOR</h3>
        <p class="text-2xl mt-2">
          Easily manage student placements, track progress, and foster connections with companies to ensure successful internships.
        </p>
      </div>


      <div class="relative">
        <img 
          src="" 
          alt="" 
          class="w-[524px] h-[623px] absolute right-0 top-0" />
          <div class="absolute top-[660px] right-0">
            <h3 class="text-2xl font-medium">STUDENTS</h3>
            <p class="text-2xl mt-2">
              Seamlessly connect with opportunities, gain real-world experience, and build a foundation for your career journey.
            </p>
          </div>
      </div>
    </div>
  </div>
  

  <div class="relative">
    <svg 
      xmlns="http://www.w3.org/2000/svg" 
      viewBox="0 0 1440 678" 
      class="w-full h-full">
        <path 
          fill="#F4E884" 
          fill-opacity="1" 
          d="M0,96L48,117.3C96,139,192,181,288,192C384,203,480,181,576,176C672,171,768,181,864,176C960,171,1056,149,1152,165.3C1248,181,1344,235,1392,261.3L1440,288L1440,897L1392,897C1344,897,1248,897,1152,897C1056,897,960,897,864,897C768,897,672,897,576,897C480,897,384,897,288,897C192,897,96,897,48,897L0,897Z">
      </path>
    </svg>


    <div class="absolute top-24 w-full h-full flex flex-col justify-center items-center px-16 py-16">
      <div class="grid grid-cols-2 gap-16">
        <div class="w-[619px] h-[374px] bg-white rounded-2xl p-16 flex flex-col justify-center items-center text-center">
          <h2 class="text-4xl font-semibold text-[#4A4848]">
            VISION
          </h2>
          <p class="text-2xl font-medium mt-4 text-[#4A4848]">
            To be the premier platform in internship management, setting the benchmark for seamless, technology-driven interactions and growth among schools, companies, and students in a modern, paperless work environment.
          </p>
        </div>
  
        <div class="w-[619px] h-[374px] bg-white rounded-2xl p-16 flex flex-col justify-center items-center text-center">
          <h2 class="text-4xl font-semibold text-[#4A4848]">
            MISSION
          </h2>
          <p class="text-2xl font-medium mt-4 text-[#4A4848]">
            To streamline the internship process by leveraging technology to create a paperless environment, bridging gaps between schools, companies, and students with innovative, efficient, and skill-matching solutions.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="relative pt-16 pb-16 flex flex-col items-center">
    <h2 class="text-4xl font-semibold text-[#4A4848] text-center mb-8 py-14">
      MEET OUR TEAM
    </h2>

    <div class="w-full flex flex-col items-center">
      <div class="grid grid-cols-4 gap-8 mb-8">
        <img src="" 
          alt="" 
          class="w-[309px] h-[420px] rounded-[17px] object-cover">

        <img src="" 
          alt="" 
          class="w-[309px] h-[420px] rounded-[17px] object-cover">

        <img src="" 
          alt="" 
          class="w-[309px] h-[420px] rounded-[17px] object-cover">

        <img src="" 
          alt="" 
          class="w-[309px] h-[420px] rounded-[17px] object-cover">
      </div>

      <p class="text-2xl font-medium text-[#4A4848] text-center w-4/5 py-10">
        The InterLink team consists of dedicated professionals with a passion for education, technology, and student success. We are committed to delivering an internship experience that is efficient, personalized, and supportive of all our users' goals.
      </p>
    </div>
  </div>
  </body>
</html>
