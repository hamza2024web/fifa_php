<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Management Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        /* Smooth Fade Animation */
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
    </style>
</head>
<body class="bg-gray-100 text-gray-800 font-sans">

    <!-- Full Container -->
    <div class="flex h-screen">

        <!-- Sidebar -->
        <aside class="w-72 bg-gray-800 text-white flex flex-col shadow-lg">
            <div class="text-center text-3xl font-bold py-6 bg-gray-900">⚡ Dashboard</div>
            <nav class="flex-1 space-y-4 px-4">
                <button onclick="showSection('player')" class="w-full flex items-center space-x-3 px-4 py-3 bg-blue-600 rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-user"></i> <span>Player Management</span>
                </button>
                <button onclick="showSection('nationality')" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-green-500 transition">
                    <i class="fas fa-flag"></i> <span>Nationality Management</span>
                </button>
                <button onclick="showSection('club')" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-yellow-500 transition">
                    <i class="fas fa-building"></i> <span>Club Management</span>
                </button>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-white rounded-lg shadow-lg fade-in">

            <!-- Header -->
            <header class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800">Player Management</h1>
                <button onclick="toggleTheme()" class="bg-gray-200 hover:bg-gray-300 p-2 rounded-lg">
                    <i class="fas fa-moon text-gray-700"></i>
                </button>
            </header>

            <!-- Table Section Centered -->
            <div class="flex items-center justify-center fade-in">
                <div class="w-full max-w-6xl bg-white rounded-lg shadow-md overflow-hidden">
                    <table class="table-auto w-full border-collapse">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">Player</th>
                                <th class="px-4 py-2">Position</th>
                                <th class="px-4 py-2">Rating</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <?php
                                include('./assets/backend/config.php');

                                $query = "SELECT * FROM player";
                                $query_run = mysqli_query($con, $query);

                                if (mysqli_num_rows($query_run) > 0){
                                    foreach($query_run as $row){
                                        ?>
                                        <tr class="hover:bg-gray-100 transition">
                                            <td class="border px-4 py-2 text-center"><?= $row['id']; ?></td>
                                            <td class="border px-4 py-2"><?= $row['nom_player']; ?></td>
                                            <td class="border px-4 py-2"><?= $row['positions']; ?></td>
                                            <td class="border px-4 py-2 text-center"><?= $row['rating']; ?></td>
                                            <td class="border px-4 py-2 text-center">
                                                <?php if($row['statuus'] == 'principal'): ?>
                                                    <span class="text-green-600 font-semibold">principal</span>
                                                <?php else: ?>
                                                    <span class="text-red-600 font-semibold">reserve</span>
                                                <?php endif; ?>
                                                <?php if($row['statuus'] == 'all'): ?>
                                                    <span class="text-red-600 font-semibold">all</span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="border px-4 py-2 text-center space-x-2">
                                                <a href="edit.php?id=<?= $row['id']; ?>" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Edit</a>
                                                <a href="delete.php?id=<?= $row['id']; ?>" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="6" class="text-center py-4 text-gray-600 font-semibold">No record found</td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Section Navigation
        function showSection(section) {
            alert(section + " Section Activated");
        }

        // Theme Toggle Placeholder
        function toggleTheme() {
            alert("Dark mode toggle not implemented yet!");
        }
    </script>

</body>
</html>
