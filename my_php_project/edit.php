<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Player Informations</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
    include('./assets/backend/config.php');
    $id = $_GET['id'];
    $sql = "SELECT * 
    FROM player 
    INNER JOIN nationnality ON player.nationnality_id = nationnality.id
    INNER JOIN club ON player.club_id = club.id 
    WHERE player.id = $id 
    LIMIT 1;
    ";
    $query_run = mysqli_query($con , $sql);
    if(mysqli_fetch_assoc($query_run) > 0){
        // Successfully deleted
        echo "<script>
        alert('Player deleted successfully!'); 
        window.location.href='dashboard.php';
        </script>";
    }
    ?>
        <div id="add-player-section" style="display: none;">
                <h1 class="text-3xl font-bold text-gray-800 mb-6">Add New Player</h1>
                <form class="bg-gray-100 p-6 rounded-lg shadow-md" method="POST" enctype="multipart/form-data">
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="image" class="block text-sm font-medium">Image:</label>
                            <input type="file" id="image" name="image" class="w-full border p-2 rounded" value="<?php echo isset($row['photo'])?>">
                        </div>
                        <div>
                            <label for="name" class="block text-sm font-medium">Name:</label>
                            <input type="text" placeholder="Enter the name..." id="name" name="name" class="w-full border p-2 rounded" value="<?php echo isset($row['nom_player'])?>">
                        </div>
                        <div>
                            <label for="position" class="block text-sm font-medium">Position:</label>
                            <select id="position" name="position" class="w-full border p-2 rounded" value="<?php echo isset($row['positions'])?>">
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
                            <input type="text" placeholder="Enter nationality..." id="nationality" name="nationality" class="w-full border p-2 rounded" value="<?php echo isset($row['nome_nationnality'])?>">
                        </div>
                        <div>
                            <label for="flag" class="block text-sm font-medium">Flag:</label>
                            <input type="file" id="flag" name="flag" class="w-full border p-2 rounded" value="<?php echo isset($row['flag'])?>">
                        </div>
                        <div>
                            <label for="club" class="block text-sm font-medium">Club:</label>
                            <input type="text" placeholder="Enter club name..." id="club" name="club" class="w-full border p-2 rounded" value="<?php echo isset($row['name_club'])?>">
                        </div>
                        <div>
                            <label for="logo" class="block text-sm font-medium">Logo:</label>
                            <input type="file" id="logo" name="logo" class="w-full border p-2 rounded" value="<?php echo isset($row['logo'])?>">
                        </div>
                        <div>
                            <label for="rating" class="block text-sm font-medium">Rating:</label>
                            <input type="number" placeholder="Enter rating..." id="rating" name="rating" class="w-full border p-2 rounded" value="<?php echo isset($row['rating'])?>">
                        </div>
                        <div>
                            <label for="status" class="block text-sm font-medium">Status:</label>
                            <select id="status" name="status" class="w-full border p-2 rounded" value="<?php echo isset($row['statuus'])?>">
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
    <script>
        // Fixed JavaScript function for section switching
        function showSection(sectionId) {
            document.getElementById('add-player-section').style.display = 'block';
            
            document.getElementById(sectionId + '-section').style.display = 'block';
        }

        document.addEventListener('DOMContentLoaded', function() {
            showSection('add-player-section');
        });
    </script>
</body>
</html>
