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
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    </head>
    <body>
        <div id="main-content">
            <form id="calculator" method="POST" action="<?= URL::route('calculator-post'); ?>">
                <table>
                    <tr>
                        <td colspan="4">
                            <input type="text"
                                   name="input"
                                   placeholder="0"
                            />
                        </td>
                    </tr>
                    <tr>
                        <td><button class="button" data-id="CE" disabled>CE</button></td>
                        <td><button class="button" data-id="backspace" disabled>&larr;</button></td>
                        <td><button class="button" data-id="%">%</button></td>
                        <td><button class="button" data-id="+">+</button></td>
                    </tr>
                    <tr>
                        <td><button class="button" data-id="7">7</button></td>
                        <td><button class="button" data-id="8">8</button></td>
                        <td><button class="button" data-id="9">9</button></td>
                        <td><button class="button" data-id="-">-</button></td>
                    </tr>
                    <tr>
                        <td><button class="button" data-id="4">4</button></td>
                        <td><button class="button" data-id="5">5</button></td>
                        <td><button class="button" data-id="6">6</button></td>
                        <td><button class="button" data-id="*">*</button></td>
                    </tr>
                    <tr>
                        <td><button class="button" data-id="4">1</button></td>
                        <td><button class="button" data-id="5">2</button></td>
                        <td><button class="button" data-id="6">3</button></td>
                        <td><button class="button" data-id="/">/</button></td>
                    </tr>
                    <tr>
                        <td><button class="button" data-id="0">0</button></td>
                        <td><button class="button" data-id=".">.</button></td>
                        <td colspan="2"><button class="button" data-id="=">=</button></td>
                    </tr>
                </table>
            </form>
        </div>
        
        {{ script('scripts/calculator.js') }}
    </body>
</html>
