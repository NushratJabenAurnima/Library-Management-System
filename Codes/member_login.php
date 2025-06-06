<?php

include 'config.php';
include 'header.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $member_name = $_POST['member_name']; 
    $password = $_POST['password']; 

    // Check if inputs are not empty
    if (!empty($member_name) && !empty($password)) {
    
        $sql = "SELECT * FROM member_details WHERE member_name = '$member_name'";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            $member = $result->fetch_assoc();

            // Compare password
            if ($password === $member['member_password']) {
                // Set session variables
                $_SESSION['member_id'] = $member['member_id'];
                $_SESSION['member_name'] = $member['member_name'];
                $_SESSION['member_type'] = $member['member_type'];

                // Redirect to member dashboard
                header("Location: member_dashboard.php");
                exit;
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "Member not found.";
        }
    } else {
        $error = "Member Name and Password cannot be empty.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 1rem 0;
            margin-top: 5vh;
        }

        .login-container {
            max-width: 900px;
            margin: 50px auto;
            height: 70vh;
            display: flex;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .illustration {
            background-color: #4a90e2;
            color: white;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .illustration img {
            width: 100%;
        }
        .form-container {
            flex: 1;
            background-color: white;
            padding: 40px;
        }
        .form-container h2 {
            margin-bottom: 30px;
            color: #4a90e2;
        }
        .btn-primary {
            background-color: #4a90e2;
            border-color: #4a90e2;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="illustration">
            <img src="m.jpg" alt="Illustration">
        </div>
        <div class="form-container">
            <h2>Member Login</h2>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger text-center"><?= $error ?></div>
            <?php endif; ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="member_name" class="form-label">Member Name</label>
                    <input type="text" name="member_name" id="member_name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy; <?= date('Y') ?> Library Management. All Rights Reserved.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
