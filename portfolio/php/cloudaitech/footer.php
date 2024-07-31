    <footer class="text-white">
        <div class="bg-red-dark pb-10 pt-8 lg:py-5">
            <div class="container grid grid-cols-12 items-center">
                <div class="col-span-12 lg:col-span-3">
                    <a href="/">
                        <img src="<?php echo $root  ?>/src/images/cloudaitech-logo.svg" alt="CloudAi Tech logo" class="w-[9.375rem] h-20 object-contain z-30">
                    </a>
                </div>
                <div class="col-span-12 mt-10 lg:mt-0 lg:col-span-9">
                    <nav class="navbar font-neuro text-base tracking-wide">
                        <ul class="gap-y-5 lg:gap-y-0 lg:gap-x-16 flex flex-col lg:flex-row">
                            <li>
                                <a href="/about-us.php">About Us</a>
                            </li>
                            <li>
                                <a href="/services.php" class="cursor-not-allowed">Services</a>
                            </li>
                            <li>
                                <a href="/contact.php">Contact</a>
                            </li>
                            <li>
                                <a href="/portfolio.php">Portfolio</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-red-ultradark py-6">
            <div class="container">
                <h3 class="text-sm">
                <?php echo date("Y") ?>  - All rights reserved
                </h3>
            </div>
        </div>
    </footer>

    <script type="module" src="<?php echo $root  ?>/src/js/swiper.js"></script>
    <script src="<?php echo $root  ?>/src/js/script.js"></script>
</body>
</html>