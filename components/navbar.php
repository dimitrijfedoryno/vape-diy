<body class="transition duration-500">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">

            <div class="flex-1 text-center">
                <a href="#" class="text-white text-lg">Home</a>
            </div>

            <div class="flex-1 text-center">
                <a href="#" class="text-white text-lg">Jak to funguje?</a>
            </div>
            
            <div class="flex-1 text-center">
                <a href="#" class="text-white text-lg">F.A.Q</a>
            </div>

            <div class="flex items-center space-x-4">
                <button id="dark-mode-toggle" class="bg-gray-700 text-white px-3 py-2 rounded">
                    <i id="dark-mode-icon" class="fas fa-moon"></i>
                </button>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        const toggleButton = document.getElementById('dark-mode-toggle');
                        const darkModeIcon = document.getElementById('dark-mode-icon');
                        const body = document.body;

                        toggleButton.addEventListener('click', () => {
                            body.classList.toggle('dark-mode');
                            if (body.classList.contains('dark-mode')) {
                                darkModeIcon.classList.remove('fa-moon');
                                darkModeIcon.classList.add('fa-sun');
                            } else {
                                darkModeIcon.classList.remove('fa-sun');
                                darkModeIcon.classList.add('fa-moon');
                            }
                        });
                    });
                </script>

                <a href="https://www.instagram.com" class="text-white">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 0C8.741 0 8.333.014 7.053.074c-1.276.059-2.154.252-2.91.512A5.925 5.925 0 0 0 2.487 1.44c-.708.493-1.25 1.074-1.74 1.74a5.923 5.923 0 0 0-.854 1.656 7.436 7.436 0 0 0-.512 2.91C.014 8.333 0 8.741 0 12c0 3.259.014 3.667.074 4.947.059 1.276.252 2.154.512 2.91.205.602.482 1.16.854 1.656.493.708 1.074 1.25 1.74 1.74.602.374 1.16.649 1.656.854.756.26 1.634.453 2.91.512C8.333 23.986 8.741 24 12 24c3.259 0 3.667-.014 4.947-.074 1.276-.059 2.154-.252 2.91-.512.602-.205 1.16-.482 1.656-.854.708-.493 1.25-1.074 1.74-1.74.374-.602.649-1.16.854-1.656.26-.756.453-1.634.512-2.91.059-1.28.074-1.688.074-4.947 0-3.259-.014-3.667-.074-4.947-.059-1.276-.252-2.154-.512-2.91a5.924 5.924 0 0 0-.854-1.656 5.924 5.924 0 0 0-1.74-1.74 5.924 5.924 0 0 0-1.656-.854c-.756-.26-1.634-.453-2.91-.512C15.667.014 15.259 0 12 0zM12 2.4c3.181 0 3.563.012 4.823.07 1.125.054 1.739.248 2.146.414.531.207.912.457 1.313.857.4.4.65.782.857 1.313.166.407.36 1.021.414 2.146.058 1.26.07 1.642.07 4.823s-.012 3.563-.07 4.823c-.054 1.125-.248 1.739-.414 2.146a3.76 3.76 0 0 1-.857 1.313 3.757 3.757 0 0 1-1.313.857c-.407.166-1.021.36-2.146.414-1.26.058-1.642.07-4.823.07s-3.563-.012-4.823-.07c-1.125-.054-1.739-.248-2.146-.414a3.756 3.756 0 0 1-1.313-.857 3.755 3.755 0 0 1-.857-1.313c-.166-.407-.36-1.021-.414-2.146-.058-1.26-.07-1.642-.07-4.823s.012-3.563.07-4.823c.054-1.125.248-1.739.414-2.146a3.755 3.755 0 0 1 .857-1.313 3.756 3.756 0 0 1 1.313-.857c.407-.166 1.021-.36 2.146-.414 1.26-.058 1.642-.07 4.823-.07zM12 5.838a6.162 6.162 0 1 0 0 12.324 6.162 6.162 0 0 0 0-12.324zm0 2.4a3.762 3.762 0 1 1 0 7.524 3.762 3.762 0 0 1 0-7.524zm6.406-.2a1.44 1.44 0 1 1-2.88 0 1.44 1.44 0 0 1 2.88 0z" />
                    </svg>
                </a>

                <a href="mailto:example@example.com" class="text-white">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 12.713l-11.485-7.713h22.97l-11.485 7.713zm0 2.566l11.485-7.713v11.434h-22.97v-11.434l11.485 7.713z" />
                    </svg>
                </a>

            </div>
        </div>
    </nav>