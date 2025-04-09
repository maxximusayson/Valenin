<?= $this->include('layout/header') ?>

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
