<!DOCTYPE html>
<html lang="en" class="dark">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>sidebar</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
  </head>
  <body>
    <span class="absolute left-4 top-5 cursor-pointer text-4xl text-white" onclick="Openbar()">
      <i class="bi bi-filter-left rounded-md bg-gray-900 px-2"></i>
    </span>
    <div class="sidebar fixed bottom-0 left-[-300px] top-0 h-screen w-[300px] overflow-y-auto bg-gray-900 p-2 text-center shadow duration-1000 lg:left-0">
      <div class="text-xl text-gray-100">
        <div class="mt-1 flex items-center rounded-md p-2.5">
          <i class="bi bi-app-indicator rounded-md bg-blue-600 px-2 py-1"></i>
          <h1 class="ml-3 text-[15px] text-xl font-bold text-gray-200">Tailwindbar</h1>
          <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i>
        </div>
        <hr class="my-2 text-gray-600" />

        <div>
          <div class="mt-2 flex cursor-pointer items-center rounded-md p-2.5 px-4 duration-300 hover:bg-blue-600">
            <i class="bi bi-house-door-fill"></i>
            <span class="ml-4 text-[15px] text-gray-200">Home</span>
          </div>
          <div class="mt-2 flex cursor-pointer items-center rounded-md p-2.5 px-4 duration-300 hover:bg-blue-600">
            <i class="bi bi-bookmark-fill"></i>
            <span class="ml-4 text-[15px] text-gray-200">Bookmark</span>
          </div>
          <hr class="my-4 text-gray-600" />
          <div class="mt-2 flex cursor-pointer items-center rounded-md p-2.5 px-4 duration-300 hover:bg-blue-600">
            <i class="bi bi-envelope-fill"></i>
            <span class="ml-4 text-[15px] text-gray-200">Messages</span>
          </div>

          <div class="mt-2 flex cursor-pointer items-center rounded-md p-2.5 px-4 duration-300 hover:bg-blue-600">
            <i class="bi bi-chat-left-text-fill"></i>
            <div class="flex w-full items-center justify-between" onclick="dropDown()">
              <span class="ml-4 text-[15px] text-gray-200">Chatbox</span>
              <span class="rotate-180 text-sm" id="arrow">
                <i class="bi bi-chevron-down"></i>
              </span>
            </div>
          </div>
          <div class="mx-auto mt-2 w-4/5 text-left text-sm font-thin leading-7" id="submenu">
            <h1 class="mt-1 cursor-pointer rounded-md p-2 hover:bg-gray-700">Social</h1>
            <h1 class="mt-1 cursor-pointer rounded-md p-2 hover:bg-gray-700">Personal</h1>
            <h1 class="mt-1 cursor-pointer rounded-md p-2 hover:bg-gray-700">Friends</h1>
          </div>
          <div class="mt-3 flex cursor-pointer items-center rounded-md p-2.5 px-4 duration-300 hover:bg-blue-600">
            <i class="bi bi-box-arrow-in-right"></i>
            <span class="ml-4 text-[15px] text-gray-200">Logout</span>
          </div>
        </div>
      </div>
    </div>

    <script>
      function dropDown() {
        document.querySelector('#submenu').classList.toggle('hidden')
        document.querySelector('#arrow').classList.toggle('rotate-0')
      }
      dropDown()

      function Openbar() {
        document.querySelector('.sidebar').classList.toggle('left-[-300px]')
      }
    </script>
  </body>
</html>
