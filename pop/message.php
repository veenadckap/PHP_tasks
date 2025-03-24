<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Popup Modal Box</title>
     <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .active .show-modal { display: none; }
      .active .overlay { opacity: 1; pointer-events: auto; }
      .active .modal-box { opacity: 1; pointer-events: auto; transform: translate(-50%, -50%) scale(1); }
    </style>
  </head>
  <body class="font-poppins">
    <section class="fixed inset-0 bg-blue-100 flex justify-center items-center">
      <button class="show-modal text-white bg-blue-600 hover:bg-blue-700 rounded-lg px-6 py-4 text-lg font-normal">
        Show Modal
      </button>
      <span class="overlay fixed inset-0 bg-black bg-opacity-30 opacity-0 pointer-events-none"></span>

      <div class="modal-box fixed left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 shadow-lg flex flex-col items-center max-w-sm w-full p-6 rounded-2xl bg-white opacity-0 pointer-events-none transition-transform duration-300 scale-110">
        <i class="fa-regular fa-circle-check text-blue-600 text-7xl"></i>
        <h2 class="mt-5 text-2xl font-medium text-gray-800">Completed</h2>
        <h3 class="text-center text-lg font-normal text-gray-800 mt-2">You have successfully downloaded all the source code files.</h3>

        <div class="buttons mt-6 flex space-x-4">
          <button class="close-btn text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-lg px-4 py-2">Ok, Close</button>
          <button class="text-sm text-white bg-blue-600 hover:bg-blue-700 rounded-lg px-4 py-2">Open File</button>
        </div>
      </div>
    </section>

    <script>
      const section = document.querySelector("section"),
        overlay = document.querySelector(".overlay"),
        showBtn = document.querySelector(".show-modal"),
        closeBtn = document.querySelector(".close-btn");

      showBtn.addEventListener("click", () => section.classList.add("active"));

      overlay.addEventListener("click", () => section.classList.remove("active"));

      closeBtn.addEventListener("click", () => section.classList.remove("active"));
    </script>
  </body>
</html>
