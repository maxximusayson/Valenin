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
<!-- contact.php -->
<br><br><br>
<section class="bg-[#EDF1ED] py-16 px-8">
  <div class="max-w-7xl mx-auto">
    <div class="grid md:grid-cols-2 gap-10">
      <!-- Left Side -->
      <div>
        <h2 class="text-[32px] font-bold text-[#1B4D3E] mb-4">CONTACT US</h2>
        <p class="text-[24px] font-semibold text-[#1B4D3E]">
          Have questions?<br>Message us here.
        </p>
      </div>

      <!-- Right Side - Form -->
      <div>
        <h3 class="text-md font-bold text-[#1B4D3E] mb-2">ONLINE INQUIRY</h3>
        <form class="space-y-4">
          <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
              <label class="block text-sm font-bold text-[#1B4D3E] mb-1">NAME:</label>
              <input type="text" class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
            <div class="flex-1">
              <label class="block text-sm font-bold text-[#1B4D3E] mb-1">EMAIL ADDRESS:</label>
              <input type="text" class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
          </div>
          <div>
            <label class="block text-sm font-bold text-[#1B4D3E] mb-1">MESSAGE:</label>
            <textarea rows="4" class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="bg-[#B9CCC3] py-10 px-8">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10">
    <!-- Map -->
    <div>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.248701335749!2d120.96551131136302!3d14.412821781586942!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397d3c80e517133%3A0x9f6e4a94e6a015de!2sGencys%20Digital%20Trading%20Inc.!5e0!3m2!1sen!2sph!4v1744114354045!5m2!1sen!2sph&maptype=satellite"
    width="100%"
    height="300"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    class="rounded-md shadow-md"
  ></iframe>
</div>


    <!-- Contact Info -->
    <div class="flex flex-col justify-center text-center md:text-left text-[#0f1f1d]">
      <p class="text-lg">3rd Flr. Plazuela De Molino<br>9006 Molino Blvd. Bacoor City</p>
      <p class="mt-4 underline">0912356789</p>
      <p class="mt-2">email@valenin.com</p>
    </div>
  </div>
</section>

<?= view('layout/footer') ?>