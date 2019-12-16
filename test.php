<?php
    // article-form.php includes the article form and the ability to call the updateArticle.php
    include("includes/isAdmin.php");

    if($isAdmin) {
        // Add an article
        // initialize article form data 
        $articleData = array(
            "title" => "",
            "author" => "",
            "category" => "",
            "text" => "",
            "image" => "",
            "link" => "",
        );
        // handles form action 
        $articleFormAction = "handlers/addArticle.php";
        $pageHeader = "Add Article";

        // fetch article by id if provided in URL and override article form data
        if(isset($_GET["articleId"])) {

            // fetch article
            $id = $_GET["articleId"];
            $stmt = $pdo->prepare("SELECT * FROM `posts` WHERE `id` = '$id';");
            $stmt->execute();
            $row = $stmt->fetch();

            // overridering default with the fetched articles data
            $articleData['title'] = $row['title'];
            $articleData['author'] = $row['author'];
            $articleData['category'] = $row['category'];
            $articleData['text'] = $row['text'];
            $articleData['image'] = $row['image'];
            $articleData['link'] = $row['link'];
            
            // change form action to call update article
            $articleFormAction = "handlers/updateArticle.php?articleId=$id";
            // Article page header as a literal string/ changeable
            $pageHeader = "Edit Article";
        }
    } else {
        header("Location:/a2_dev_readme/read.php");
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <?php include("includes/head.php");?>
        <title>Article Form</title>
    </head>

    <body>
        <?php include("includes/header.php"); ?> 	
    	<main>
            <div class="container">
                <h1><?php echo $pageHeader ?></h1>
                <form
                    action="<?php echo $articleFormAction?>"
                    method="POST"
                    enctype="multipart/form-data"
                >
                    <label for="title">Article Title: </label>
                    <input
                        id="title"
                        name="title"
                        type="input"
                        value="<?php echo($articleData['title']);?>"/>
                    <br>
                    <label for="author">Author: </label>
                    <input
                        id="author"
                        name="author"
                        type="input"
                        value="<?php echo($articleData['author']);?>"/>
                    <br>
                    <div class="article-category-container">
                        <h3>Article Category</h3>
                            <label for="category-interest-industry">Industry</label>
                                <input
                                    type="radio"
                                    id="category-interest-industry"
                                    name="category"
                                    value="industry"
                                    <?php
                                        if($articleData['category'] == 'industry') {
                                            echo "checked";
                                        };
                                    ?>
                                >

                            <label for="category-interest-technical">Technology</label>
                                <input type="radio" 
                                    id="category-interest-technical" 
                                    name="category" 
                                    value="technology"
                                    <?php 
                                        if($articleData['category'] == 'technology') {
                                            echo "checked";
                                        };
                                    ?>
                                >
                            <label for="category-interest-career">Career</label>
                                <input type="radio"     
                                    id="category-interest-career" 
                                    name="category" 
                                    value="career"
                                    <?php 
                                        if($articleData['category'] == 'career') {
                                            echo "checked";
                                        };
                                    ?>
                                >
                    </div><br><br>
                    <div class="article-text-container">
                        <label for="text"><h3>Article Post</h3></label><br>
                        <textarea 
                            name="text" 
                            placeholder="Let your creativity run wild">
                            <?php echo($articleData['text']);?>
                        </textarea>
                    </div>
                    <div class=article-url-container">
                        <label for="link"><h3>URL to Full Post</h3></label><br>
                        <input 
                            type="input" 
                            name="link" 
                            value="<?php echo($articleData['link']);?>"/>
                    </div>
                    <div class="article-features">
                        <label for="image"><h3>Upload an image:</h3> </label>
                            <input id="image" name="image" type="file" value="image"/> <br>
                    </div>
                    <input type="submit" name="upload_image" value="Submit">
                </form>
            </div>
		</main>
		<?php include("includes/footer.php"); ?> 
    </body>
</html/>