<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chromium Arcade</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">

</head>
<body>
    <?php include 'navbar.php'?>
    <?php include 'php/christmas.php'?>

    <div class="shadow profile-card">
        <div class="tab-container">
            <div class="tabs">
                <div class="tab-label">
                    <h2>User Settings</h2>
                </div>
                <div class="tab">
                    <h3>General</h3>
                </div>
                <div class="tab">
                    <h3>History</h3>
            </div>
                <div class="tab">
                    <h3>Change Username</h3>
            </div>
                <div class="tab">
                    <h3>Change Email</h3>
            </div>
                <div class="tab">
                    <h3>Change Password</h3>
            </div>
                <div class="tab">
                    <h3>Danger Zone</h3>
            </div>
                <div class="tab">
                    <h3>Help</h3>
            </div>
                <div class="tab signout">
                    <h3>Sign Out</h3>
            </div>
            </div>
        </div>
        <div class="tab-content">
            <?php 
                include 'php/profile/general.php';
                include 'php/profile/history.php';
            ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>
    
    <script src="javascript/games.js"></script>
    <script src="javascript/darkmode.js" onload="darkmodecheck()"></script>
    <script src="javascript/profie.js"></script>

</body>
</html>