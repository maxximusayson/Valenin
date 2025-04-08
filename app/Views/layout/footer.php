<!-- /Views/layout/footer.php -->
<footer class="bg-white border-t py-10">
  <div class="container mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
    
    <!-- Left: Logo + Socials -->
    <div class="flex flex-col items-center md:items-start gap-4">
      <!-- VALENIN Logo Text -->
      <div class="text-[#28c76f] text-2xl font-semibold tracking-widest">
        VALENIN
      </div>

      <!-- Social Icons -->
      <div class="flex space-x-4">
        <?php
          $socials = [
            ['icon' => 'fab fa-facebook-f', 'url' => '#'],
            ['icon' => 'fab fa-instagram', 'url' => '#'],
            ['icon' => 'fab fa-twitter', 'url' => '#'],
            ['icon' => 'fab fa-tiktok', 'url' => '#'],
          ];
          foreach ($socials as $social):
        ?>
          <a href="<?= $social['url'] ?>" class="w-9 h-9 flex items-center justify-center bg-black text-white rounded-full hover:bg-[#28c76f] transition">
            <i class="<?= $social['icon'] ?>"></i>
          </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Right: Subscribe Form -->
    <div class="flex flex-col items-center md:items-end gap-3 w-full md:w-auto">
      <!-- Label -->
      <span class="text-sm font-semibold text-[#28c76f] text-center md:text-right">
        Subscribe to VALENIN Updates
      </span>
      
      <!-- Form -->
      <form class="flex w-full max-w-sm">
        <input type="email" placeholder="Enter your email address"
          class="flex-1 px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-[#28c76f] focus:border-[#28c76f]">
        <button type="submit" class="bg-[#28c76f] text-white px-4 rounded-r-md hover:bg-[#1ca759] transition">
          SUBMIT
        </button>
      </form>
    </div>

  </div>
</footer>

