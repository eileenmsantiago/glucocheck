<?php 

    // dashboard.php

    include("include/connect.php");
    
    // Receives the blood glucose levels ('level') from the 'bg' table
    $bgData = $pdo->prepare("SELECT * FROM `bg`;");
    $bgData->execute();

    // Receives the user's information from the 'users' table
    $user = $pdo->prepare("SELECT * FROM `users`;");
    $user->execute();

    while($row = $user->fetch()) {
        $userDetails = $row;
    }

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/dashboard.css">
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/dataTable.css">
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/entryForms.css">
</head>
<body>
    <?php 
        include("include/header.php");
        // foreach($userDetails as $userInfo);
    ?>
    <main>
        <div class="gc-container">
            <section class="dashboard--header">
                <h1 class="gc-header">Hi, <?php echo $userDetails["fname"]; ?></h1>
                <h2 id="header-dashboard">Dashboard</h2>
            </section>
            <section class="dashboard-container dashboard--entry-form">
                <div class="entry-form--content_wrapper">
                    <h2 class="gc-header">New BG Entry</h2>
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
                            <label class="gc-label-header" for="beforeAfter">Before or after meal </label>
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
            <section class="dashboard-container dashboard--entry-latest">
                <h2 class="gc-header">Latest Entries</h2>
                <table id="data-table--entry-latest">
                        <thead>
                            <tr>
                                <th class="gc-label-header" scope="col">BG Level</th>
                                <th class="gc-label-header" scope="col">Range</th>
                                <th class="gc-label-header" scope="col">Before/After</th>
                                <th class="gc-label-header" scope="col">Time</th>
                                <th class="gc-label-header" scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row"><?php echo $userBgInfo["level"]; ?></td>
                                <td scope="row">
                                    <div class="level-circle <?php echo $userBgInfo['statusColor']?>"></div>
                                </td>
                                <td scope="row"><?php echo $userBgInfo["beforeAfter"]; ?></td>
                                <td scope="row"><?php echo $userBgInfo["time"]; ?></td>
                                <td scope="row"><?php echo $userBgInfo["date"]; ?></td>
                            </tr>
                        </tbody>






                        
                        <?php 
                            // foreach($userBg as $userBgInfo): 
                            // set a limit of 3 entries
                            $i=0;
                            foreach($userBg as $userBgInfo): if ($i < 3) {
                            
                            $i +=1;
                            }    
                        ?>
                            <tr>
                                <td scope="row"><?php echo $userBgInfo["level"]; ?></td>
                                <td scope="row">
                                    <div class="level-circle <?php echo $userBgInfo['statusColor']?>"></div>
                                </td>
                                <td scope="row"><?php echo $userBgInfo["beforeAfter"]; ?></td>
                                <td scope="row"><?php echo $userBgInfo["time"]; ?></td>
                                <td scope="row"><?php echo $userBgInfo["date"]; ?></td>
                            </tr>
                        </tbody>
                        <?php endforeach; ?>
                    </table>
            </section>
            <section class="dashboard--4-col">
                <div class="dashboard-container bg--col" id="currentBg">
                    <h3 class="gc-header">Current BG</h3>
                    <p class="bg-level--p"><?php echo $userBgInfo["level"]; ?> mmol/L</p>
                    <div class="level-circle <?php echo $userBgInfo['statusColor']?>"></div>
                </div>
                <div class="dashboard-container bg--col" id="averageBg">
                    <h3 class="gc-header">Average BG</h3>
                    <p class="bg-level--p"><?php echo $userBgInfo["level"]; ?> mmol/L</p>
                    <div class="level-circle <?php echo $userBgInfo['statusColor']?>"></div>
                </div>
                <div class="dashboard-container bg--col" id="highestBg">
                    <h3 class="gc-header">Highest BG</h3>
                    <p class="bg-level--p"><?php echo $userBgInfo["level"]; ?> mmol/L</p>
                    <div class="level-circle <?php echo $userBgInfo['statusColor']?>"></div>
                </div>
                <div class="dashboard-container bg--col" id="lowestBg">
                    <h3 class="gc-header">Lowest BG</h3>
                    <p class="bg-level--p"><?php echo $userBgInfo["level"]; ?> mmol/L</p>
                    <div class="level-circle <?php echo $userBgInfo['statusColor']?>"></div>
                </div>
                
            </section>
            <section class="dashboard-container dashboard--graph">
                <div class="graph-range--container">

                </div>
                <div class="bg-graph--container">
                    <table id="data-table--graph">

                    </table>
                    <table id="data-table--graph">
                        <thead>
                            <tr id="head-row">
                            </tr>
                        </thead>
                        <tbody>
                            <tr id="bg-row">
                                <!-- <th scope="row">6</th>
                                <th scope="row">9</th>
                                <th scope="row">11</th>
                                <th scope="row">12</th> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
    <?php include("include/footer.php") ?>
    <script src="/glucocheck/js/dashboard.js"></script>
    <script src="/glucocheck/js/graph.js"></script>
</body>
</html>