<>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php if(isset($_SESSION['user']))$_SESSION['user']?> - Home</title>
</head>
<body>
   <?php  ?>
    <?php if(($_SESSION['role']=='0'))
            include('home_user.php');
        else if(($_SESSION['role']=='1'))
            include('home_auth.php');
    
    
    ?>
    
</body>
</html>