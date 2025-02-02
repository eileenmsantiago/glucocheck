<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <?php include("include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="/glucocheck/css/components/signup.css">
</head>
<body>
    <?php include("include/header.php");?>
    <main>
        <section class="form-wrapper">
            <div class="gc-container">
                <div class="form-content-container">
                    <div class="signup-form-header">
                        <h1 class="gc-header">Profile</h1>
                        <p class="gc-p">Complete your GlucoCheck Profile to get started</p>
                    </div>
                    <div class="form-content">
                        <form 
                            method="POST"
                            enctype="multipart/form-data"
                            class="register-form">
                            <div class="signup-form-header">
                                <h3>Personal Health</h3>
                            </div>
                            <label for="dob">Date of Birth: </label><br>
                            <input 
                                type="date" 
                                placeholder="YYYY MM DD" 
                                name="dob" 
                                required><br>
                            <label for="sex">Sex: </label><br>
                                <select name="sex" id="sex">
                                    <option value="sex"> -- Please choose an option -- </option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="prefer">Prefer not to say</option>
                                    <option value="other">Other</option>
                                </select> 
                            <label for="weight">Weight: </label><br>
                            <input 
                                type="text" 
                                placeholder="Enter a numeric number in lbs" 
                                name="weight" 
                                required><br>
                            <label for="height">Height: </label><br>
                            <input 
                                type="text" 
                                placeholder="Enter a numeric number in ft" 
                                name="height" 
                                required><br>
                            <label for="sex">Diabetes Type: </label><br>
                                <select name="diabetesType" id="diabetesType">
                                    <option value="diabetesType"> -- Please choose an option -- </option>
                                    <option value="type1">Type 1 — Insulin Independent</option>
                                    <option value="type2">Type 2 — Insulin Dependent </option>
                                    <option value="other">Other (Gestational) </option>
                                </select> <br>
                            <label for="medication">Medication for diabetes: </label><br>
                            <input 
                                class="input-bottom"
                                type="text" 
                                placeholder="Medication(s) for your type of diabetes" 
                                name="medication" 
                                required><br>
                            <div class="signup-form-header">
                                <h3>Doctor's Information</h3>
                            </div>
                            <label for="doctorName">Name of Endocrinologist/ Family Physician: </label><br>
                            <input 
                                type="text" 
                                placeholder="Endocrinologist or family physician's full name" 
                                name="doctorName" 
                                required><br>
                            <label for="doctorNumber">Endocrinologist/ Family Physician's contact number </label><br>
                            <input 
                                class="input-bottom"
                                type="text" 
                                placeholder="+1" 
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                name="doctorNumber" 
                                required><br>
                            <button type="submit" class="gc-button gc-button-type-secondary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include("include/footer.php") ?>
</body>
</html>  
  
  