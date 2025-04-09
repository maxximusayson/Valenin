<?= $this->include('layout/header') ?>

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
