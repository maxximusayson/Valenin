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
<body class="font-['Rubik'] min-h-screen">
    <div class="bg-gradient-to-b from-white to-green-100 h-lvh">
        <div class="text-center pt-24 pb-10">
            <br>
            <br>
            <h1 class="text-4xl font-bold text-green-800 mb-8">SERVICES</h1>

            <div class="flex flex-wrap justify-center gap-8 px-4">
                <!-- Service Card 1 -->
                <div class="relative w-[350px] h-[358px] bg-white rounded-lg shadow-md ">
                    <img src="<?= base_url('images/career/intern.png') ?>" alt="Service 1" class="w-full h-full object-cover">
                    <button class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-green-500 text-white py-2 px-6 rounded-md text-sm font-bold shadow-lg">
                        LEARN MORE
                    </button>
                </div>

                <!-- Service Card 2 -->
                <div class="relative w-[350px] h-[358px] bg-white rounded-lg shadow-md ">
                    <img src="<?= base_url('images/career/intern.png') ?>" alt="Service 2" class="w-full h-full object-cover">
                    <button class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-green-500 text-white py-2 px-6 rounded-md text-sm font-bold shadow-lg">
                        LEARN MORE
                    </button>
                </div>

                <!-- Service Card 3 -->
                <div class="relative w-[350px] h-[358px] bg-white rounded-lg shadow-md ">
                    <img src="<?= base_url('images/career/intern.png') ?>" alt="Service 3" class="w-full h-full object-cover">
                    <button class="absolute -bottom-4 left-1/2 transform -translate-x-1/2 bg-green-500 text-white py-2 px-6 rounded-md text-sm font-bold shadow-lg">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?= $this->include('layout/footer') ?>
</body>
