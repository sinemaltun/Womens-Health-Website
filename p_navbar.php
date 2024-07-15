<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light align-items-end">
    <a class="navbar-brand mb-0 d-flex align-items-center" href="p_index.php">
        <img src="logo.png" width="55" height="55" class="d-inline-block align-center" alt="Logo">
        <span class="navbar-text">Women's Health</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contents
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="p_cancer.php">Cancer Awareness</a></li>
                <li><a class="dropdown-item" href="p_unity.php">Unity in Health</a></li>
                <li><a class="dropdown-item" href="p_mental.php">Mental Health</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="p_index.php">Home Page</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center" href="p_contact.php">Contact</a>
            </li>
            <?php if(isset($_COOKIE['user'])): ?>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="p_logout.php">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center" href="p_login.php">Login</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

