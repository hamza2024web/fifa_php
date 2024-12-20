<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Management Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .fade-in {
            animation: fadeIn 0.8s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-gray-100 text-blue-800 font-sans">
    <!-- Full Container -->
    <div class="flex h-screen">
        <!-- Sidebar -->
        <aside class="w-72 bg-gray-800 text-white flex flex-col shadow-lg">
            <div class="text-center text-3xl font-bold py-6 bg-gray-900">⚡ Dashboard</div>
            <nav class="flex-1 space-y-4 px-4">
                <button onclick="showSection('player')" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-blue-700 transition">
                    <i class="fas fa-user"></i> <span>Player Management</span>
                </button>
                <button onclick="showSection('nationality')" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-green-500 transition">
                    <i class="fas fa-flag"></i> <span>Nationality Management</span>
                </button>
                <button onclick="showSection('club')" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-yellow-500 transition">
                    <i class="fas fa-building"></i> <span>Club Management</span>
                </button>
                <a href="./index.php"><button class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-yellow-500 transition">
                    <i class="fas fa-building"></i> <span>User</span>
                </button></a>
                <button onclick="showSection('add-player')" class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg hover:bg-green-500 transition">
                    <i class="fas fa-plus"></i> <span>Add Player</span>
                </button>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 bg-white rounded-lg shadow-lg fade-in">
            <!-- Player Management Section -->
            <div id="player-section">
                <!-- Your existing player section content remains unchanged -->
                <h1 class="text-3xl font-bold text-gray-800 mb-6">Player Management</h1>
                <div class="w-full max-w-6xl bg-white rounded-lg shadow-md overflow-hidden">
                    <table class="table-auto w-full border-collapse">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">nome</th>
                                <th class="px-4 py-2">photo</th>
                                <th class="px-4 py-2">flag</th>
                                <th class="px-4 py-2">positions</th>
                                <th class="px-4 py-2">logo</th>
                                <th class="px-4 py-2">rating</th>
                                <th class="px-4 py-2">statuus</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                        <?php
                        include('./assets/backend/config.php');
                            $query = "select * , player.id as player_id from player 
                            INNER JOIN nationnality ON player.nationnality_id = nationnality.id 
                            INNER JOIN club ON player.club_id = club.id ;";
                            $query_run = mysqli_query($con, $query);
                
                            if (mysqli_num_rows($query_run) > 0){
                                foreach($query_run as $row){
                                    ?>
                                    <tr class="hover:bg-gray-100 transition">
                                        <td class="border px-4 py-2 text-center"><?= $row['nom_player']; ?></td>
                                        <td class="border px-4 py-2 text-center"><img src="<?= $row['photo']; ?>" alt="photo player" height="70px" width="70px" ></td>
                                        <td class="border px-4 py-2 text-center"><img src="<?= $row['flag']; ?>" alt="photo player" height="70px" width="70px" ></td>
                                        <td class="border px-4 py-2 text-center" ><?= $row['positions']; ?></td>
                                        <td class="border px-4 py-2 text-center"><img src="<?= $row['logo']; ?>" alt="photo player" height="70px" width="70px" ></td>
                                        <td class="border px-4 py-2 text-center"><?= $row['rating']; ?></td>
                                        <td class="border px-4 py-2 text-center">
                                            <?= $row['statuus'] == 'principal' ? '<span class="text-green-600 font-semibold">principal</span>' : '<span class="text-red-600 font-semibold">reserve</span>'; '<span class="text-red-600 font-semibold">all</span>'?>
                                        </td>
                                        <td class="border px-4 py-2 text-center space-x-2">
                                            <a href="edit.php?id=<? echo $row['player_id']; ?>" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Edit</a>
                                            <a href="delete.php?id=<? echo $row['player_id']; ?>" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('Are you sure?');">Delete</a>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo '<tr><td colspan="6" class="text-center py-4 text-gray-600 font-semibold">No record found</td></tr>';
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Nationality Management Section -->
            <div id="nationality-section" style="display: none;">
                <!-- Your existing nationality section content remains unchanged -->
                <h1 class="text-3xl font-bold text-gray-800 mb-6">Nationality Management</h1>
                <div class="w-full max-w-6xl bg-white rounded-lg shadow-md overflow-hidden">
                    <table class="table-auto w-full border-collapse">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">name</th>
                                <th class="px-4 py-2">flag</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <?php
                                include('./assets/backend/config.php');
                                $query = "SELECT * , nationnality.id as nationality_id FROM nationnality";
                                $query_run = mysqli_query($con, $query);
                
                                if (mysqli_num_rows($query_run) > 0){
                                    foreach($query_run as $row){
                                        ?>
                                        <tr class="hover:bg-gray-100 transition">
                                            <td class="border px-4 py-2 text-center"><?= $row['id']; ?></td>
                                            <td class="border px-4 py-2"><?= $row['name_nationnality']; ?></td>
                                            <td class="border px-4 py-2"><img src="<?= $row['flag']; ?>" alt="nationnality flag" height="50px" width="50px"></td>
                                            <td class="border px-4 py-2 text-center space-x-2">
                                                <a href="edit.php?id=<?= $row['nationality_id']; ?>" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Edit</a>
                                                <a href="delete.php?id_nationality=<?= $row['nationality_id']; ?>" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('Are you sure?');">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo '<tr><td colspan="6" class="text-center py-4 text-gray-600 font-semibold">No record found</td></tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Club Management Section -->
            <div id="club-section" style="display: none;">
                <!-- Your existing club section content remains unchanged -->
                <h1 class="text-3xl font-bold text-gray-800 mb-6">Club Management</h1>
                <div class="w-full max-w-6xl bg-white rounded-lg shadow-md overflow-hidden">
                    <table class="table-auto w-full border-collapse">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">name</th>
                                <th class="px-4 py-2">logo</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <?php
                                include('./assets/backend/config.php');
                                $query = "SELECT * , club.id as club_id FROM club";
                                $query_run = mysqli_query($con, $query);
                
                                if (mysqli_num_rows($query_run) > 0){
                                    foreach($query_run as $row){
                                        ?>
                                        <tr class="hover:bg-gray-100 transition">
                                            <td class="border px-4 py-2 text-center"><?= $row['id']; ?></td>
                                            <td class="border px-4 py-2"><?= $row['name_club']; ?></td>
                                            <td class="border px-4 py-2"><img src="<?= $row['logo']; ?>" alt="club logo" height="50px" width="50px"></td>
                                            <td class="border px-4 py-2 text-center space-x-2">
                                                <a href="edit.php?id=<?= $row['club_id']; ?>" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Edit</a>
                                                <a href="delete.php?id_club=<?= $row['club_id']; ?>" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition" onclick="return confirm('Are you sure?');">Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo '<tr><td colspan="6" class="text-center py-4 text-gray-600 font-semibold">No record found</td></tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Add Player Section -->
            <div id="add-player-section" style="display: none;">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">Add New Player</h1>
                <form class="bg-gray-100 p-6 rounded-lg shadow-md" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="image" class="block text-sm font-medium">Image:</label>
                            <input type="file" id="image" name="image" class="w-full border p-2 rounded">
                        </div>
                        <div>
                            <label for="name" class="block text-sm font-medium">Name:</label>
                            <input type="text" placeholder="Enter the name..." id="name" name="name" class="w-full border p-2 rounded">
                        </div>
                        <div>
                            <label for="position" class="block text-sm font-medium">Position:</label>
                            <select id="position" name="position" class="w-full border p-2 rounded">
                                <option value="CF">CF</option>
                                <option value="ST">ST</option>
                                <option value="LW">LW</option>
                                <option value="RW">RW</option>
                                <option value="CM">CM</option>
                                <option value="CMD">CMD</option>
                                <option value="CB">CB</option>
                                <option value="RB">RB</option>
                                <option value="LB">LB</option>
                                <option value="GK">GK</option>
                            </select>
                        </div>
                        <div>
                            <label for="nationality" class="block text-sm font-medium">Nationality:</label>
                            <input type="text" placeholder="Enter nationality..." id="nationality" name="nationality" class="w-full border p-2 rounded">
                        </div>
                        <div>
                            <label for="flag" class="block text-sm font-medium">Flag:</label>
                            <input type="file" id="flag" name="flag" class="w-full border p-2 rounded">
                        </div>
                        <div>
                            <label for="club" class="block text-sm font-medium">Club:</label>
                            <input type="text" placeholder="Enter club name..." id="club" name="club" class="w-full border p-2 rounded">
                        </div>
                        <div>
                            <label for="logo" class="block text-sm font-medium">Logo:</label>
                            <input type="file" id="logo" name="logo" class="w-full border p-2 rounded">
                        </div>
                        <div>
                            <label for="rating" class="block text-sm font-medium">Rating:</label>
                            <input type="number" placeholder="Enter rating..." id="rating" name="rating" class="w-full border p-2 rounded">
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium">Status:</label>
                            <select id="status" name="status" class="w-full border p-2 rounded">
                                <option value="principal">Principal</option>
                                <option value="reserve">Reserve</option>
                                <option value="all">All</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6 flex justify-end">
                        <button type="reset" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600 transition">Reset</button>
                        <button type="submit" name="submit" class="ml-4 px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Add Player</button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <script>
        // Fixed JavaScript function for section switching
        function showSection(sectionId) {
            // Hide all sections first
            document.getElementById('player-section').style.display = 'none';
            document.getElementById('nationality-section').style.display = 'none';
            document.getElementById('club-section').style.display = 'none';
            document.getElementById('add-player-section').style.display = 'none';
            
            // Show the selected section
            document.getElementById(sectionId + '-section').style.display = 'block';
        }

        // Initialize the page with player section visible
        document.addEventListener('DOMContentLoaded', function() {
            showSection('player');
        });
    </script>

    <?php
    if (isset($_POST['submit'])) {
        include('./assets/backend/config.php');
        
        // Handle file uploads
        $image = $_FILES['image']['name'];
        $flag = $_FILES['flag']['name'];
        $logo = $_FILES['logo']['name'];
        
        // Get other form data
        $name = $_POST['name'];
        $position = $_POST['position'];
        $rating =  $_POST['rating'];
        $status =  $_POST['status'];
        $nationality = $_POST['nationality'];
        $club = $_POST['club'];

        // Insert nationality
        $nation = "INSERT INTO nationnality (name_nationnality, flag) VALUES ('$nationality', '$flag')";
        mysqli_query($con, $nation);
        $nation_id = mysqli_insert_id($con);

        // Insert club
        $club_query = "INSERT INTO club (name_club, logo) VALUES ('$club', '$logo')";
        mysqli_query($con, $club_query);
        $club_id = mysqli_insert_id($con);

        // Insert player
        $sql = "INSERT INTO player (nom_player, photo, positions, rating, statuus, nationnality_id, club_id) 
                VALUES ('$name', 'uploads/players/$image', '$position', '$rating', '$status', $nation_id, $club_id)";
        
        if(mysqli_query($con, $sql)) {
            echo "<script>alert('Player added successfully!'); window.location.href='dashboard.php';</script>";
        } else {
            echo "<script>alert('Error adding player: " . mysqli_error($con) . "');</script>";
        }
    }
    ?>
</body>
</html>