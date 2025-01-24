<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <style>
        body {
            background: linear-gradient(135deg, #feb692, #ea5455);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            display: flex;
            align-items: stretch;
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            width: 80%;
            max-width: 900px;
        }

        .image {
            flex: 1;
            background: url('<?php echo base_url("download.jpg"); ?>') no-repeat center center;
            background-size: cover;
        }

        .login-form {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
            background: #ffffff;
        }

        .card-header {
            background: linear-gradient(135deg, #ea5455, #ea5455);
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 1.5rem;
            font-weight: bold;
            border-radius: 30px;
        }

        .form-control {
            border-radius: 30px;
            padding: 10px 20px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #feb692, #ea5455);
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #ea5455, #feb692);
            transform: scale(1.05);
        }

        .card-footer {
            text-align: center;
            background: #f8f9fa;
            padding: 15px;
            border-top: 1px solid #e9ecef;
        }

        .card-footer a {
            color: #ea5455;
            text-decoration: none;
            font-weight: bold;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="image"></div>
        <div class="login-form">
            <div class="card-header">
                Selamat Datang!
            </div>
            <div class="card-body">
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('error'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= site_url('login/auth'); ?>">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
            <div class="card-footer">
                <p>Don't have an account? <a href="#">Sign up</a></p>
            </div>
        </div>
    </div>
    <script>
        // Optional: Fade out flash message
        $(document).ready(function () {
            setTimeout(function () {
                $('.alert').fadeOut('slow');
            }, 3000);
        });
    </script>
</body>
</html>
