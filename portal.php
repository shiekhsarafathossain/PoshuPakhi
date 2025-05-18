<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Choose Your Portal</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: radial-gradient(circle at top left, #7f5af0, #2cb67d);
      animation: bgMove 10s ease-in-out infinite;
    }

    @keyframes bgMove {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center">

  <div class="bg-white bg-opacity-90 backdrop-blur-lg shadow-2xl rounded-3xl p-10 w-[90%] max-w-3xl">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">🔐 Choose Your Portal</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      
      <!-- Admin Card -->
      <a href="./Admin_Panel/admin_login.php" class="transform hover:scale-105 transition-all duration-300 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 p-6 text-white shadow-lg">
        <div class="flex flex-col items-center">
          <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M12 6V4m0 16v-2m8-8h2M4 12H2m15.536-7.536l1.414 1.414M6.05 17.95l-1.414 1.414m0-13.828l1.414 1.414M17.95 17.95l1.414-1.414M9 12a3 3 0 116 0 3 3 0 01-6 0z"/>
          </svg>
          <h2 class="text-2xl font-semibold">Admin Panel</h2>
          <p class="mt-2 text-sm opacity-90">Manage system settings and users</p>
        </div>
      </a>

      <!-- Staff Card -->
      <a href="./Stuff_Panel/admin_login.php" class="transform hover:scale-105 transition-all duration-300 rounded-xl bg-gradient-to-br from-green-400 to-emerald-600 p-6 text-white shadow-lg">
        <div class="flex flex-col items-center">
          <svg class="w-16 h-16 mb-4" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path d="M5.121 17.804A3.001 3.001 0 0110 19h4a3.001 3.001 0 014.879-1.196M12 14a4 4 0 100-8 4 4 0 000 8z"/>
          </svg>
          <h2 class="text-2xl font-semibold">Staff Panel</h2>
          <p class="mt-2 text-sm opacity-90">Handle day-to-day operations</p>
        </div>
      </a>

    </div>
  </div>

</body>
</html>
