<?php session_start();

    include("include/isUser.php");
    include("include/connect.php");

    if($isUser) {

        $bgData = array(
            "level" => "",
            "beforeAfter" => "",
            "time" => "",
            "date" => "",
        );

        $bgID = $_GET["id"];
        $bgData = $pdo->prepare("SELECT * FROM `bg` WHERE `id` = '$id';");
        $bgData->execute();
        $row = $bgData->fetch();

        $bgData['level'] = $row['level'];
        $bgData['beforeAfter'] = $row['beforeAfter'];
        $bgData['time'] = $row['time'];
        $bgData['date'] = $row['date'];
    
        $userData = array();
        while($row = $bgData->fetch()) {
            $level = $row["level"];
            if($level >= 14) {
                $row["statusColor"] = "red";
            } else if ($level < 14 && $level >= 10 ) {
                $row["statusColor"] = "yellow";
            } else {
                $row["statusColor"] = "green";
            }
            $userBg[] = $row;
        }

        if(!$bgData) {
            header("Location:/glucocheck/index.php");
        }
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
                        action="handlers/addBgEntry.php" 
                        method="POST"
                        enctype="multipart/form-data"
                        id="bg-form">
                        <div class="form-label-container">
                            <label class="gc-label-header" for="level">BG level</label><br>
                            <input 
                                type="text" 
                                placeholder="Enter a numeric value" 
                                name="level" 
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
                                name="time">
                        </div>          
                        <div class="form-label-container">
                            <label class="gc-label-header" for="date">Date </label><br>
                            <input 
                                class="input-bottom"
                                type="date" 
                                placeholder="YYYY MM DD" 
                                name="date">
                        </div>
                        <div class="form-label-container">        
                            <button type="submit" id="submit" class="gc-button gc-button-type-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </section>
		</main>
		<?php include("include/footer.php"); ?> 
    </body>
</html>
