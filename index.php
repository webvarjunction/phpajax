<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_AJAX</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--    Custome CSS-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
    <div class="main">
        
<!--        header-->
        
        <div class="header">
            <h1>PHP CRUD USING AJAX</h1>
<!--            search box-->
            <div id="search_box">
                <label for="">Search : </label>
                <input type="text" id="search" autocomplete="off">
            </div>
        </div>
        
<!--        user input form-->
        
        <div class="userInputForm">
            <form id="addForm">
                <label for="">First Name : </label>
                <input type="text" name="" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <label for="">Last Name : </label>
                <input type="text" name="" id="lname">&nbsp;&nbsp;
                <input type="submit" value="Save" id="save-btn">
            </form>
        </div>
        
<!--        user data -->
        <div id="table-data">
<!--            load data from ajax-load.php -->
        </div>
    </div>
     <div id="modal">
            <div id="modal-form">
                <h2>Edit Form</h2>
                <table cellpadding="10px" width="100%">
                    
                </table>
                <div id="close-btn">X</div>
            </div>
        </div>
    
    <!--    jQuery File Link-->
    <script src="js/jquery.js" type="text/javascript"></script>
    <!--    jQuery Ajax file link-->
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>