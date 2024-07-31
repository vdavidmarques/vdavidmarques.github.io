<?php
    $rootDir = "";
    if(strpos($_SERVER['HTTP_HOST'], 'localhost')===FALSE)
    {
    //On Production
    $rootDir = $_SERVER['DOCUMENT_ROOT'];
    } else {
        //On Dev server
        $rootDir = $_SERVER['DOCUMENT_ROOT'] . '/cloudaitech';

        $find = '/var/www/html';
        $replacement = '';
        $root = str_replace($find, $replacement, $rootDir);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CloudAi Tech</title>
    <!-- <link rel="stylesheet" href="src/css/output.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo $root  ?>/src/js/tailwindcss.js"></script>
    <link rel="stylesheet" href="<?php echo $root  ?>/src/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style type="text/tailwindcss">
        @layer base {
            .container{
                @apply mx-auto px-4 lg:px-8
            }
              /* 20px */
            .heading-title-xxs{
                @apply font-neuro text-sm lg:text-[1.25rem] lg:leading-9 tracking-wide
            }
        
            /* 30px */
            .heading-title-xs{
                @apply font-neuro text-lg lg:text-[1.875rem] lg:leading-8 tracking-wide
            }
            
            /* 32px */
            .heading-title-sm{
                @apply font-neuro lg:text-[2rem] lg:leading-[3.125rem] tracking-wide
            }
            
            /* 46px */
            .heading-title-md{
                @apply font-neuro text-2xl lg:text-[2.875rem] lg:leading-[3.125rem] tracking-wide
            }
            
            /* 50px */
            .heading-title-lg{
                @apply font-neuro lg:text-[3.125rem] lg:leading-[3.75rem] tracking-wide
            }
            
            /* 60px */
            .heading-title-xl{
                @apply font-neuro text-5xl lg:text-[3.75rem] lg:leading-[3.125rem] tracking-wide
            }
            
            /* 65px */
            .heading-title-2xl{
                @apply font-neuro text-[1.625rem] leading-[1.875rem] lg:text-[4.0625rem] lg:leading-[5.4375rem] tracking-wide
            }

            .heading-text-lg{
                @apply lg:text-[1rem] lg:leading-[1.75rem]
            }

            .heading-text-xl{
                @apply text-[0.875rem] leading-6 lg:leading-9 lg:text-[1.25rem]
            }

            .button{
                @apply w-fit h-9 rounded-[0.625rem] uppercase px-5 py-3 flex items-center justify-center heading-title-xxs transition-colors
            }

            .button-first{
                @apply bg-red-dark text-white border border-white hover:bg-red-ultradark
            }

            .button-second{
                @apply bg-white text-red-dark border border-red-dark hover:bg-red-ultradark hover:text-white hover:border-red-ultradark
            }

            .navbar ul li a, .button-first{
                @apply transition-colors
            }

            header .navbar ul li a{
                @apply hover:text-red-dark 
            }

            footer .navbar ul li a{
                @apply hover:text-red-ultradark
            }

            .bg-swiper-button-navigation-icon {
                @apply bg-[url('./src/icon/arrow-right-circle.svg')] 
            }
            .swiper-button-navigation{
                @apply after:bg-no-repeat bg-cover
            }

            .bg-red-hard-light{
                @apply bg-red-dark w-full h-full absolute top-0 left-0 opacity-90 mix-blend-darken z-10
            }
        }
    </style>
     <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
</head>
<body class="bg-black text-white font-resamitz text-lg relative">
   
    <header class="text-white container flex justify-between items-center h-[6.5625rem]">
        <a href="<?php echo $root ?>">
            <img src="<?php echo $root  ?>/src/images/cloudaitech-logo.svg" alt="CloudAi Tech logo" class="w-auto h-[3.875rem] object-contain z-30">
        </a>
        <img src="<?php echo $root  ?>/src/icon/nav-mobile-menu-icon.svg" alt="CloudAi Tech - Menu mobile" class="w-auto h-5 object-contain ml-auto lg:hidden" onclick="openMenu()">
        <img src="<?php echo $root  ?>/src/icon/close-icon.svg" alt="CloudAi Tech - Menu mobile Close" class="close navbar w-auto h-5 object-contain ml-auto" onclick="closeMenu()">
        <nav class="navbar font-neuro text-base tracking-wide">
            <ul class="gap-x-16 lg:flex">
                <li>
                    <a href="<?php echo $root  ?>/about-us">About Us</a>
                </li>
                <li>
                    <a href="<?php echo $root  ?>/services" class="cursor-not-allowed">Services</a>
                </li>
                <li>
                    <a href="<?php echo $root  ?>/contact">Contact</a>
                </li>
                <li>
                    <a href="<?php echo $root  ?>/portfolio">Portfolio</a>
                </li>
            </ul>
        </nav>
    </header>