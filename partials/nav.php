<nav class="navbar">
    <div class="left-nav">
        <h1 id="page-title">Dashboard</h1>
    </div>
    <div class="right-nav">
        <img src="images/icons/profile-svgrepo-com.svg"
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function getCurrentPage() {
            const path = window.location.pathname;
            // Example paths: '/', '/index.html', '/management.html'
            if (path === '/' || path.includes('index.php')) {
                return 'Dashboard';
            } else if (path.includes('student_management.php')) {
                return 'Student Management';
            }
            else if (path.includes('attendance.php')) {
                return 'Attendance Logs';
            }
            // Add more conditions for other pages as needed
            return 'Dashboard'; // Default text
        }

        // Get the title element
        const pageTitleElement = document.getElementById('page-title');

        // Set the title based on the current page
        pageTitleElement.textContent = getCurrentPage();
    });
</script>