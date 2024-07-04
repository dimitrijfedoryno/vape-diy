<script>
    const toggleButton = document.getElementById('dark-mode-toggle');
    const body = document.body;

    toggleButton.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
    });
</script>

<script>
    // Add event listener to the toggle button
    document.addEventListener('DOMContentLoaded', () => {
        const toggleButton = document.getElementById('dark-mode-toggle');
        const darkModeIcon = document.getElementById('dark-mode-icon');
        const body = document.body;

        if (toggleButton && darkModeIcon && body) {
            console.log("Elements found, adding event listener.");
            toggleButton.addEventListener('click', () => {
                console.log("Button clicked.");
                body.classList.toggle('dark-mode');
                if (body.classList.contains('dark-mode')) {
                    darkModeIcon.classList.remove('fa-moon');
                    darkModeIcon.classList.add('fa-sun');
                } else {
                    darkModeIcon.classList.remove('fa-sun');
                    darkModeIcon.classList.add('fa-moon');
                }
            });
        } else {
            console.log("One or more elements not found.");
        }
    });
</script>

</body>

</html>