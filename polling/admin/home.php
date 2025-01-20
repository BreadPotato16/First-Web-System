<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polling System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Include SweetAlert2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="icon" href="../img/icon.png" type="image/x-icon">

</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><i class="fas fa-poll"></i> Polling System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php" id="homeLink"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="poll.php" id="createPollLink"><i class="fas fa-plus-circle"></i> Create Poll</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view.php" id="viewPollLink"><i class="fas fa-eye"></i> View Polls</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vote.php" id="votesLink"><i class="fas fa-vote-yea"></i> Votes</a>
                    </li>
                </ul>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i> Username
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end"  aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#" id="logoutButton"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main content area -->
    <div class="container mt-4">
        <h1>Welcome to the Polling System</h1>
        <p>This is where your main content will go.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/dayjs@1.10.4/dayjs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.all.min.js"></script>
    
    <script>
        // You can add your custom JavaScript here
        $(document).ready(function() {
            // Example: Logout button click handler
            $('#logoutButton').click(function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Logout',
                    text: 'Are you sure you want to logout?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, logout!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Perform logout action here
                        Swal.fire('Logged Out!', 'You have been successfully logged out.', 'success');
                        // Redirect to login page or perform other logout actions
                    }
                });
            });
        });
    </script>
</body>
</html>

