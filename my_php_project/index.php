<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIFA Ultimate Team</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <section id="terain-and-form">
        <section class="terain" id="terain">
            <div class="parent-formation">
                <div class="attack" id="attack">
                    <div class="card-player"draggable="true">
                    </div>
                    <div class="card-player"draggable="true">
                    </div>
                    <div class="card-player"draggable="true">
                    </div>
                </div>
                <div class="milieu" id="milieu">
                    <div class="card-player"draggable="true">
                    </div>
                    <div class="card-player"draggable="true">
                    </div>
                    <div class="card-player"draggable="true">
                    </div>
                </div>
                <div class="deffence" id="deffence">
                    <div class="card-player"draggable="true">
                    </div>
                    <div class="card-player"draggable="true">
                    </div>
                    <div class="card-player"draggable="true">
                    </div>
                    <div class="card-player" draggable="true">
                    </div>
                </div>
                <div class="goal-keaper" id="goal-keaper">
                    <div class="card-player" draggable="true">
                    </div>
                </div>
            </div>
        </section>
        <section class="cards">            
            <section class="substition">
            <h1>substition</h1>
            <div class="card-substition">
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
                <div class="card-player"draggable="true">
                </div>
            </div>
        </section>
            <div id="card-container">
                <form class="form" id="form">
                    <div class="inputs-general">
                        <label for="image">Image:</label>
                        <input type="file" id="image" name="image">
                        
                        <label for="name">Enter the name:</label>
                        <input type="text" placeholder="Please enter the name..." id="name" name="name">
                        
                        <label for="position">Enter the position:</label>
                        <select name="position" id="position">
                            <option value="position">position</option>
                            <option value="CF">CF</option>
                            <option value="ST">ST</option>
                            <option value="LW">LW</option>
                            <option value="RW">RW</option>
                            <option value="CM">CM</option>
                            <option value="CM">CMD</option>
                            <option value="CB">CB</option>
                            <option value="RB">RB</option>
                            <option value="LB">LB</option>
                            <option value="GK">GK</option>
                        </select>
                        
                        <label for="nationality">Enter the nationality:</label>
                        <input type="text" placeholder="Please enter the nationality..." id="nationality" name="nationality" >
                        
                        <label for="image">Enter the flag:</label>
                        <input type="file" placeholder="Please enter the type of flag..." id="flag" name="flag" >
                        
                        <label for="club">Enter the name of club:</label>
                        <input type="text" placeholder="Please enter the name of club..." id="club" name="club" >
                        
                        <label for="logo">Enter the logo:</label>
                        <input type="file" placeholder="Please enter the type of logo..." id="logo" name="logo" >
                        <label for="rating">Enter the rating:</label>
                        <input type="number" placeholder="Please enter the rating..." id="rating" name="rating" >
                        
                    </div>
                    <div id="inputs-gk">
                        <label for="diving">Enter the diving:</label>
                        <input type="number" placeholder="Please enter diving..." id="diving" name="diving" >
                        
                        <label for="handling">Enter the handling:</label>
                        <input type="number" placeholder="Please enter the handling..." id="handling" name="handling" >
                        
                        <label for="kicking">Enter the kicking:</label>
                        <input type="number" placeholder="Please enter the kicking..." id="kicking" name="kicking" >
                        
                        <label for="reflexes">Enter the reflexes:</label>
                        <input type="number" placeholder="Please enter the reflexes..." id="reflexes" name="reflexes" >
    
                        <label for="speed">Enter the speed:</label>
                        <input type="number" placeholder="Please enter the speed..." id="speed" name="speed" >
                        
                        <label for="positioning">Enter the positioning:</label>
                        <input type="number" placeholder="Please enter the positioning..." id="positioning" name="positioning" >
                    </div>
                    <div id="inputs-rest">
                        <label for="pace">Enter the pace:</label>
                        <input type="number" placeholder="Please enter pace..." id="pace" name="pace" >
                        
                        <label for="shooting">Enter the shooting:</label>
                        <input type="number" placeholder="Please enter the shooting..." id="shooting" name="shooting" >
                        
                        <label for="passing">Enter the passing:</label>
                        <input type="number" placeholder="Please enter the passing..." id="passing" name="passing" >
                        
                        <label for="dribbling">Enter the dribbling:</label>
                        <input type="number" placeholder="Please enter the dribbling..." id="dribbling" name="dribbling" >
    
                        <label for="defending">Enter the defending:</label>
                        <input type="number" placeholder="Please enter the defending..." id="defending" name="defending" >
                        
                        <label for="physical">Enter the physical:</label>
                        <input type="number" placeholder="Please enter the physical..." id="physical" name="physical" >
                    </div>
                    <button type="submit" >Submit</button>
                </form>
            </div>
            <button class="add-button" id="add-button" onclick="displayForm(1)">Add a Player</button>
        </section>
    </section>

    <section class="all-players">
        <h1>All Players</h1>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players"draggable="true">
        </div>
        <div class="card-player card-player-all-players" draggable="true">
        </div>
        <div class="card-player card-player-all-players" draggable="true">
        </div>
        <div class="card-player card-player-all-players " draggable="true">
        </div>
        <div class="card-player card-player-all-players" draggable="true">
        </div>
        <div class="card-player card-player-all-players" draggable="true">
        </div>
        <div class="card-player card-player-all-players" draggable="true">
        </div>
        <div class="card-player card-player-all-players" draggable="true">
        </div>
        <div class="card-player card-player-all-players" draggable="true">
        </div>
    </section>
 
<script src="assets/js/script.js"></script>
</body>
</html>
