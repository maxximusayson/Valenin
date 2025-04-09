<?= $this->include('layout/header') ?>

<!-- Loader -->
<div id="loader" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-[#649D92] text-white 
    opacity-100 transition-opacity duration-700 ease-in-out">
    
     <!-- Logo Image -->
     <img src="<?= base_url('images/logo.png') ?>" alt="Valenin Logo" class="h-20 md:h-24 mb-6">

    <!-- Spinner SVG -->
    <svg class="animate-spin h-10 w-10 mt-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor"
            d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
    </svg>
</div>

<script>
    // Show loader for 5 seconds, then fade out
    setTimeout(() => {
        const loader = document.getElementById('loader');
        loader.classList.add('opacity-0'); // triggers transition
        setTimeout(() => {
            loader.style.display = 'none';
        }, 700); // match duration-700
    }, 3000);
</script>


<body class="font-['Rubik'] bg-gradient-to-b from-white to-green-100">
    <div class="text-center p-0 bg-gradient-to-b from-white to-green-100 min-h-screen">
        <br>
        <br>
        <br>
        <br>
        <h1 class="text-4xl font-bold text-green-800 mb-4">Career</h1>
        <h2 class="text-xl text-green-800">LET’S BUILD THE FUTURE OF TECHNOLOGY TOGETHER</h2>
        <p class="text-green-800 max-w-3xl mx-auto text-sm md:text-base mt-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>

        <div class="max-w-6xl w-full mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 mt-4 p-4">
                <!-- Careers Card 1 -->
                <div class="rounded-lg overflow-hidden">
                    <div class="rounded-lg flex items-center justify-center">
                        <img src="<?= base_url('images/career/career.png') ?>" alt="career" class="w-90 md:w-96 object-cover rounded-lg">
                    </div>
                    <div class="p-4">
                        <h3 class="text-center font-bold text-lg text-green-800 mb-2">CAREERS AT VALENIN</h3>
                        <p class="text-green-800 text-sm text-center  mb-4 w-80 mx-auto">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="text-center">
                            <button class="bg-green-800 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-md transition duration-300">
                                LEARN MORE
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Careers Card 2 -->
                <div class="rounded-lg overflow-hidden">
                    <div class="rounded-lg flex items-center justify-center">
                        <img src="<?= base_url('images/career/career.png') ?>" alt="career" class="w-90 md:w-96 object-cover rounded-lg">
                    </div>
                    <div class="p-4">
                        <h3 class=" text-green-800 text-center font-bold text-lg mb-2">CAREERS AT VALENIN</h3>
                        <p class="text-green-800 text-sm text-center mb-4 w-80 mx-auto">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <div class="text-center">
                            <button class="bg-green-800 hover:bg-green-600 text-white font-bold py-2 px-6 rounded-md transition duration-300">
                                LEARN MORE
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<?= $this->include('layout/footer') ?>
