<?= $this->include('layout/header') ?>
<body>
<!-- Loader -->
<div id="loader" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-[#649D92] text-white opacity-100 transition-opacity duration-700 ease-in-out">
    <!-- Logo Image -->
    <img src="<?= base_url('images/logo.png') ?>" alt="Valenin Logo" class="h-20 md:h-24 mb-6">

    <!-- Spinner SVG -->
    <svg class="animate-spin h-10 w-10 mt-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
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

<!-- Contact Section -->
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
        <form class="space-y-4" action="<?= base_url('contact/submit'); ?>" method="post">
          <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
              <label class="block text-sm font-bold text-[#1B4D3E] mb-1">NAME:</label>
              <input type="text" name="name" class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600" required>
            </div>
            <div class="flex-1">
              <label class="block text-sm font-bold text-[#1B4D3E] mb-1">EMAIL ADDRESS:</label>
              <input type="email" name="email" class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600" required>
            </div>
          </div>
          <div>
            <label class="block text-sm font-bold text-[#1B4D3E] mb-1">MESSAGE:</label>
            <textarea rows="4" name="message" class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600" required></textarea>
          </div>
          <button type="submit" class="bg-[#1B4D3E] text-white py-2 px-6 rounded-md font-bold shadow-lg hover:bg-green-600 transition duration-300">SEND</button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php if (session()->getFlashdata('success')): ?>
  <div id="toast-success" class="fixed top-5 right-5 z-50 max-w-xs bg-white border border-gray-200 rounded-xl shadow-lg" role="alert">
    <div class="flex p-4">
      <div class="shrink-0">
        <svg class="shrink-0 size-4 text-teal-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
        </svg>
      </div>
      <div class="ms-3">
        <p class="text-sm text-gray-700">
          <?= session()->getFlashdata('success'); ?>
        </p>
      </div>
    </div>
  </div>
<?php elseif (session()->getFlashdata('error')): ?>
  <div id="toast-error" class="fixed top-5 right-5 z-50 max-w-xs bg-white border border-gray-200 rounded-xl shadow-lg" role="alert">
    <div class="flex p-4">
      <div class="shrink-0">
        <svg class="shrink-0 size-4 text-red-500 mt-0.5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"></path>
        </svg>
      </div>
      <div class="ms-3">
        <p class="text-sm text-gray-700">
          <?= session()->getFlashdata('error'); ?>
        </p>
      </div>
    </div>
  </div>
<?php endif; ?>
<script>
  // Auto-hide toast after 3 seconds
  window.addEventListener('DOMContentLoaded', () => {
    const toastSuccess = document.getElementById('toast-success');
    const toastError = document.getElementById('toast-error');

    [toastSuccess, toastError].forEach(toast => {
      if (toast) {
        setTimeout(() => {
          toast.classList.add('opacity-0', 'transition-opacity', 'duration-500');
          setTimeout(() => toast.remove(), 500); // Fully remove after fade
        }, 3000);
      }
    });
  });
</script>


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

<!-- Bootstrap JS (Ensure Bootstrap's JS is included for toast functionality) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>



</body>
<?= view('layout/footer') ?>