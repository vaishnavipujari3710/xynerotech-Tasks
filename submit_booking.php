<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Booking Confirmation</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md text-left w-full max-w-3xl">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize form data
        $fullname = htmlspecialchars($_POST['fullname']);
        $email   = htmlspecialchars($_POST['email']);
        $phone   = htmlspecialchars($_POST['phone']);
        $address = htmlspecialchars($_POST['address']);
        $service = htmlspecialchars($_POST['service']);
        $date    = htmlspecialchars($_POST['date']);
        $time    = htmlspecialchars($_POST['time']);

        // Display confirmation message
        echo "<h2 class='text-2xl font-semibold text-green-600 mb-4'>Booking Submitted Successfully!</h2>";
        echo "<p class='mb-2'><strong> Full Name:</strong> $fullname</p>";
        echo "<p class='mb-2'><strong>Email:</strong> $email</p>";
        echo "<p class='mb-2'><strong>Phone Number:</strong> $phone</p>";
        echo "<p class='mb-2'><strong>Full Address:</strong> $address</p>";
        echo "<p class='mb-2'><strong>Service Type:</strong> $service</p>";
        echo "<p class='mb-2'><strong>Preferred Date:</strong> $date</p>";
        echo "<p class='mb-2'><strong>Preferred Time:</strong> $time</p>";
        echo "<a href='book.html' class='inline-block mt-6 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600'>Book Another</a>";
    } else {
        echo "<h2 class='text-xl text-red-500'>Invalid Request</h2>";
    }
    ?>
  </div>
</body>
</html>
