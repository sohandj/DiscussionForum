<?php
session_start();

echo '<nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/Forum2">Discussion Forum2</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-3 mb-lg-0">
                <li class="nav-item">
                    <a class="btn btn-primary nav-link " aria-current="page" href="/Forum2">Home</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary nav-link" href="contact.php">Contact</a>
                </li>
        </ul>        
            </div>
    </div>
</nav>';
 
?>