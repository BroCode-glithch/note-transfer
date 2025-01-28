<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note Transfer Protocol</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Notification styles */
        .notification {
            position: fixed;
            z-index: 1050;
            padding: 1rem 1.5rem;
            border-radius: 0.5rem;
            display: none;
            animation: fadeIn 0.5s ease, fadeOut 0.5s ease 4.5s;
        }

        .notification-success {
            background-color: #28a745;
            color: white;
        }

        .notification-error {
            background-color: #dc3545;
            color: white;
        }

        .notification-top-right {
            top: 1rem;
            right: 1rem;
        }

        .notification-bottom-left {
            bottom: 1rem;
            left: 1rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeOut {
            from {
                opacity: 1;
                transform: translateY(0);
            }
            to {
                opacity: 0;
                transform: translateY(-10px);
            }
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="bg-dark text-white py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="h3">Note Transfer Protocol</h1>
                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/register') }}">Register</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content Section -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Notifications -->
    @if(session('success'))
        <div class="notification notification-success notification-top-right">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="notification notification-error notification-bottom-left">
            {{ session('error') }}
        </div>
    @endif

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2025 Note Transfer Protocol. All rights reserved.</p>
        <p>Made with ❤️ by <a href="https://github.com/BroCode-glithch" class="text-white">BroCode-glithch</a></p>
    </footer>

    <!-- Bootstrap JS and Dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <!-- Show notifications with a delay -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const notifications = document.querySelectorAll('.notification');
            notifications.forEach(notification => {
                notification.style.display = 'block';
                setTimeout(() => {
                    notification.style.display = 'none';
                }, 5000); // Hide after 5 seconds
            });
        });
    </script>
</body>
</html>
