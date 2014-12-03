<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8" />
        <title><?php echo $_viewData['userData']['username']; ?>'s user profile - {{ $appName }}</title>
        
        {{ style('styles/main.css') }}
        {{ favicon('favicon.ico') }}
        
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <br />
        <center>
            You're now viewing the user-profile view.<br />
            Click <a href="<?= URL::route('home'); ?>">here</a> to go home.
        </center>
        
        <div id="main-content">
            <div style="background:#f3f3f3; padding:32px 24px; border: 1px solid #ddd; border-radius:4px;">
                <b>User Data</b>
                <?php echo '<pre>', print_r($_viewData['userData']), '</pre>'; ?>
            </div><br />
            
            <form method="POST">
                Update password:
                <input type="password" name="password" />
                
                <input type="submit" value=" Update " />
            </form>
        </div>
    </body>
</html>
