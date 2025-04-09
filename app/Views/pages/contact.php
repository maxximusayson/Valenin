<?= $this->include('layout/header') ?>

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
        <form class="space-y-4" action="<?= base_url('contact/submit'); ?>" method="post">
          <div class="flex flex-col md:flex-row gap-4">
            <div class="flex-1">
              <label class="block text-sm font-bold text-[#1B4D3E] mb-1">NAME:</label>
              <input type="text" name="name" class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
            <div class="flex-1">
              <label class="block text-sm font-bold text-[#1B4D3E] mb-1">EMAIL ADDRESS:</label>
              <input type="text" name="email" class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600">
            </div>
          </div>
          <div>
            <label class="block text-sm font-bold text-[#1B4D3E] mb-1">MESSAGE:</label>
            <textarea rows="4" name="message" class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-green-600"></textarea>
          </div>
          <button type="submit" class="bg-[#1B4D3E] text-white py-2 px-6 rounded-md font-bold shadow-lg hover:bg-green-600 transition duration-300">SEND</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Toast Notifications -->
<?php if (session()->getFlashdata('success')): ?>
    <div class="toast align-items-center text-bg-success border-0 position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <?= session()->getFlashdata('success'); ?>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php elseif (session()->getFlashdata('error')): ?>
    <div class="toast align-items-center text-bg-danger border-0 position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                <?= session()->getFlashdata('error'); ?>
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
<?php endif; ?>

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

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Initialize Bootstrap Toasts for success/error
    var successToast = document.querySelector('.toast.bg-success');
    var errorToast = document.querySelector('.toast.bg-danger');

    if (successToast) {
      var toast = new bootstrap.Toast(successToast);
      toast.show();
    }
    if (errorToast) {
      var toast = new bootstrap.Toast(errorToast);
      toast.show();
    }
  });
</script>

<?= view('layout/footer') ?>
