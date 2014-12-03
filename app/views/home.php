<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8" />
        <title>{{ $appName }}</title>
        
        {{ style('styles/main.css') }}
        {{ favicon('favicon.ico') }}
        
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="main-content">
            <form id="calculator" method="POST" action="<?= URL::route('calculator-post'); ?>">
                <table border="1">
                    <tr>
                        <td><input type="text" name="input" value="0" /></td>
                    </tr>
                    <tr>
                        <td>test</td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
