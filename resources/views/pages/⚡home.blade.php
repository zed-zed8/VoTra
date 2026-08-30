<?php

use Livewire\Component;


new class extends Component
{
    //
};
?>

<main class="me-3 mb-5 flex justify-center items-center">
    <section class="bg-background h-full w-screen px-5">
        <div class="flex justify-center">
            <div class="md:w-lg flex items-center justify-center">
                <div class="">
                    <h1
                        class="text-2xl font-extrabold bg-linear-to-r from-primary-600 to-purple-600 bg-clip-text text-transparent">
                        Welcome to Vocabulary Tracker
                    </h1>
                </div>
                <div class="">
                    <svg xmlns="http://w3.org" viewBox="0 -960 960 960"
                        class="w-40 h-40 mobile-m:w-50 mobile-m:h-50 mobile-l:w-60 mobile-l:h-60 fill-[url(#icon-gradient)] stroke-[url(#icon-gradient)] stroke-[1.5] stroke-linecap-round stroke-linejoin-round">
                        <!-- 1. Define the gradient colors here -->
                        <defs>
                            <linearGradient id="icon-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#9810fa" />
                                <stop offset="50%" stop-color="#00849f" />
                                <stop offset="100%" stop-color="#9810fa" />
                            </linearGradient>
                        </defs>

                        <!-- 2. The paths automatically inherit the stroke gradient from the parent SVG -->
                        <path
                            d="M160-391h45l23-66h104l24 66h44l-97-258h-46l-97 258Zm81-103 38-107h2l38 107h-78Zm319-70v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-600q-38 0-73 9.5T560-564Zm0 220v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-380q-38 0-73 9t-67 27Zm0-110v-68q33-14 67.5-21t72.5-7q26 0 51 4t49 10v64q-24-9-48.5-13.5T700-490q-38 0-73 9.5T560-454ZM260-320q47 0 91.5 10.5T440-278v-394q-41-24-87-36t-93-12q-36 0-71.5 7T120-692v396q35-12 69.5-18t70.5-6Zm260 42q44-21 88.5-31.5T700-320q36 0 70.5 6t69.5 18v-396q-33-14-68.5-21t-71.5-7q-47 0-93 12t-87 36v394Zm-40 118q-48-38-104-59t-116-21q-42 0-82.5 11T100-198q-21 11-40.5-1T40-234v-482q0-11 5.5-21T62-752q46-24 96-36t102-12q58 0 113.5 15T480-740q51-30 106.5-45T700-800q52 0 102 12t96 36q11 5 16.5 15t5.5 21v482q0 23-19.5 35t-40.5 1q-37-20-77.5-31T700-240q-60 0-116 21t-104 59ZM280-499Z" />
                    </svg>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center">
            <div class="h-lg w-lg bg-surface p-2 flex flex-col">
                <div class="text-text-primary mb-5">
                    Vocab Tracker helps you collect, organize, and review the words you encounter every day. Save
                    unfamiliar words, learn
                    their meanings, and keep track of your progress as your vocabulary grows. Whether you're reading,
                    studying, writing, or
                    simply discovering new words, we make it easy to turn those discoveries into words you actually
                    remember just by tracking them.
                </div>
                <div class="text-text-muted">
                    Track your progress now
                </div>
                <div class="text-text-primary w-full">
                    <a href="new" wire:navigate class="">
                        <button class="text-center bg-primary-500 rounded-xl p-2 w-full cursor-pointer">
                            Get Started →
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center mt-2">
            <div class="h-lg w-lg bg-surface p-2 flex flex-col">
                <div class="text-center text-text-primary text-xl mb-2">
                    Contact
                </div>
                <ul class="text-text-muted flex justify-around text-sm">
                    <li><a href="https://www.youtube.com/@zid.08">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-youtube" viewBox="0 0 16 16">
                                    <path
                                        d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z" />
                                </svg>
                                <span>zid.08</span>
                            </div>
                        </a></li>
                    <li><a href="mailto:ziddanm45@gmail.com">
                            <div class="flex items-center gap-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-google" viewBox="0 0 16 16">
                                    <path
                                        d="M15.545 6.558a9.4 9.4 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.7 7.7 0 0 1 5.352 2.082l-2.284 2.284A4.35 4.35 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.8 4.8 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.7 3.7 0 0 0 1.599-2.431H8v-3.08z" />
                                </svg>
                                <span>Ziddanm45@gmail.com</span>
                            </div>
                        </a></li>
                </ul>
            </div>
        </div>
    </section>
</main>