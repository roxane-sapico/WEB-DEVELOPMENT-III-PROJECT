<script>
    document.getElementById('logout-link').addEventListener('click', function (e) {
        e.preventDefault();

        // Display a confirmation dialog
        var confirmLogout = confirm("Are you sure you want to log out?");

        if (confirmLogout) {
            // If "Yes" is clicked, redirect to index.html
            window.location.href = "index.html";
        }
    });
</script>
