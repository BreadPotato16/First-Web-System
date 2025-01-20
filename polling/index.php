<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Polling System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 100px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .eye-icon {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 10;
            color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <h2 class="text-center mb-4">Login to Polling System</h2>
            <form id="loginForm">
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <span class="eye-icon" id="togglePassword">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="text-center mt-3">
                Don't have an account? <a href="signup.php">Sign up</a>
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.0/dist/sweetalert2.all.min.js"></script>
    
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add your login logic here
            alert('Login functionality to be implemented');
        });

        // Show/Hide password toggle
       document.getElementById('togglePassword').addEventListener('mousedown', function() {
           document.getElementById('password').setAttribute('type', 'text');
           this.querySelector('i').classList.remove('fa-eye');
           this.querySelector('i').classList.add('fa-eye-slash');
       });

       document.getElementById('togglePassword').addEventListener('mouseup', function() {
           document.getElementById('password').setAttribute('type', 'password');
           this.querySelector('i').classList.remove('fa-eye-slash');
           this.querySelector('i').classList.add('fa-eye');
       });
    </script>
</body>
</html>

