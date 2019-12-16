<?php session_start();

    include("include/isLoggedIn.php");
    include("include/connect.php");
    $bgID = $_GET["id"];
    if($isLoggedIn) {

        $bgData = array(
            "level" => "",
            "beforeAfter" => "",
            "time" => "",
            "date" => "",
        );

        $bgData = $pdo->prepare("SELECT * FROM `bg` WHERE `id` = '$bgID';");
        $bgData->execute();
        $row = $bgData->fetch();

        if(!$row) {
            header("Location:/glucocheck/dashboard.php");
        }
    } else {
        header("Location:/glucocheck/index.php");
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Update BG Entry</title>
        <?php include("include/head.php");?>
        <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/entry-forms.css">
    </head>

    <body>
        <?php include("include/header.php"); ?> 	
    	<main class="gc-container">
            <section class="dashboard--header">
                <h1 class="gc-header">Update BG Entry</h1>
                <a class="header-dashboard-link" href="dashboard.php"><h2 class="header-dashboard-text">Dashboard</h2></a>
            </section>
            <section class="dashboard-container dashboard--entry-form">
                <div class="form-content-wrapper">
                    <form 
                        action="handlers/updateBG.php" 
                        method="POST"
                        enctype="multipart/form-data"
                        id="bg-form">
                        <div class="form-label-container">
                            <label class="gc-label-header" for="level">BG level</label><br>
                            <input 
                                type="text" 
                                placeholder="Enter a numeric value" 
                                name="level" 
                                value="<?php echo $row["level"]?>"
                                required>
                        </div>
                        <div class="form-label-container">
                            <label class="gc-label-header" for="beforeAfter">Before/After </label>
                                <select name="beforeAfter" id="beforeAfter">
                                    <option value="beforeAfter">--</option>
                                    <option value="before">Before</option>
                                    <option value="after">After</option>
                                </select> 
                        </div>
                        <div class="form-label-container">
                            <label class="gc-label-header" for="time">Time </label><br>
                            <input 
                                type="text" 
                                placeholder="00:00:00" 
                                name="time"
                                value="<?php echo $row["time"]?>">
                        </div>          
                        <div class="form-label-container">
                            <label class="gc-label-header" for="date">Date </label><br>
                            <input 
                                class="input-bottom"
                                type="date" 
                                placeholder="YYYY MM DD" 
                                name="date"
                                value="<?php echo $row["date"]?>">
                        </div>
                        <div class="form-label-container">        
                            <button type="submit" id="submit" class="gc-button gc-button-type-secondary">Submit</button>
                        </div>
                        <div class="form-label-container">
					        <a href="<?php echo("handlers/deleteBG.php?id=$bgID");?>">Delete</a>
                        </div>
                    </form>
                </div>
            </section>
		</main>
		<?php include("include/footer.php"); ?> 
    </body>
</html>
