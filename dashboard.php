<?php
session_start();

// Session timeout duration (15 minutes)
$timeout_duration = 900;

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.html"); // Redirect to login page
    exit();
}

// Check for session timeout
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    session_unset();
    session_destroy();
    header("Location: index.html?timeout=1");
    exit();
}

// Update last activity time
$_SESSION['last_activity'] = time();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dashboard - HomeEase</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center justify-center p-4">

  <div class="bg-white p-8 rounded shadow-md max-w-md w-full text-center">
    <h1 class="text-2xl font-bold mb-4">Welcome, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
    <p class="mb-6">You are logged in to HomeEase.</p>
    <a href="logout.php" class="inline-block bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition">Logout</a>
  </div>

</body>
</html>
