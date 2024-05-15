<aside class="side-bar" id="side-bar">
    <div class="logo" id="logo">
        <a href="#">
            <img id="sc-logo" src="images/SC LOGO BLACK.png" alt="sc-logo" />
        </a>
    </div>
    <div class="side-link">
        <ul class="links">
            <li>
                <a class="s-link <?= $active == "dashboard" ? "active" : "" ?>" href="index.php">
                    <img src="images/icons/dashboard-svgrepo-com.svg" class="icon">
                    <span class="link-name <?= $active == "dashboard" ? "active" : "" ?>">Dashboard</span>
                </a>
            </li>

            <li>
                <a class="s-link <?= $active == "student_management" ? "active" : "" ?>" href="student_management.php">
                    <img src="images/icons/profile-2user-svgrepo-com.svg" class="icon">
                    <span class="link-name">Student Manager</span>
                </a>
            </li>
            <li>
                <a class="s-link <?= $active == "attendance" ? "active" : "" ?>" href="attendance.php">
                    <img src="images/icons/upload-logs-svgrepo-com.svg" class="icon">

                    <span class="link-name">Attendance Logs</span>
                </a>
            </li>
            <li>
                <a class="s-link <?= $active == "profile" ? "active" : "" ?>" href="index.php">
                    <img src="images/icons/graph-svgrepo-com.svg" class="icon">

                    <span class="link-name <?= $active == "profile" ? "active" : "" ?>">Data and Reports</span>
                </a>
            </li>
            <li>
                <a class="s-link <?= $active == "profile" ? "active" : "" ?>" href="index.php" id="logout">
                    <img src="images/icons/log-out-outlined-svgrepo-com.svg" class="icon">

                    <span class="link-name <?= $active == "profile" ? "active" : "" ?>">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>