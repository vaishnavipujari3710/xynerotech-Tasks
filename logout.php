<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // User confirmed logout
    $_SESSION = [];
    session_destroy();
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Logout Confirmation - HomeEase</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen p-4">
  <div class="bg-white p-8 rounded shadow-md max-w-md w-full text-center">
    <h1 class="text-xl font-bold mb-4">Are you sure you want to logout?</h1>
    <form method="POST" class="flex justify-center gap-4">
      <button type="submit" class="bg-red-600 text-white px-6 py-2 rounded hover:bg-red-700 transition">Yes, Logout</button>
      <a href="dashboard.php" class="bg-gray-300 px-6 py-2 rounded hover:bg-gray-400 transition">Cancel</a>
    </form>
  </div>
</body>
</html>
