<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf8" />
        <title>Home - {{ $appName }}</title>
        
        {{! style('//cdnjs.cloudflare.com/ajax/libs/foundation/5.4.7/css/foundation.min.css', false) }}
        {{! style('styles/main.css') }}
        {{! favicon('favicon.ico') }}
        
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    <body>
        <form method="POST" id="calc-form" autocomplete="off" class="row">
            <div class="small-12 medium-6 large-4 columns">
                <div id="form-container" class="content">
                    <h3>Web Calc</h3>
                    
                    <label class="field">
                        X:
                        <input type="number"
                               id="input-x"
                               name="calc_input_x"
                               value="{{ $_POST['calc_input_x'] or '' }}"
                               placeholder="0"
                        />
                    </label>
                    
                    <label class="field">
                        Y:
                        <input type="number"
                               id="input-y"
                               name="calc_input_y"
                               value="{{ $_POST['calc_input_y'] or '' }}"
                               placeholder="0"
                        />
                    </label>
                    
                    <table>
                        <tr>
                            <td>
                                <div class="type">
                                    <input type="radio"
                                           name="calc_type"
                                           value="addition"
                                           id="calc-addition"
                                           @if(isset($_POST['calc_type']))
                                               {{ ($_POST['calc_type'] == 'addition') ? 'checked' : '' }}
                                           @else
                                               checked
                                           @endif
                                    />
                                    <label class="button secondary"
                                           for="calc-addition"
                                    >+</label>
                                </div>
                            </td>
                            <td>
                                <div class="type">
                                    <input type="radio"
                                           name="calc_type"
                                           value="subtraction"
                                           id="calc-subtraction"
                                           @if(isset($_POST['calc_type']) &&
                                               $_POST['calc_type'] == 'subtraction'
                                           )
                                               checked
                                           @endif
                                    />
                                    <label class="button secondary"
                                           for="calc-subtraction"
                                    >-</label>
                                </div>
                            </td>
                            <td>
                                <div class="type">
                                    <input type="radio"
                                           name="calc_type"
                                           value="multiplication"
                                           id="calc-multiplication"
                                           @if(isset($_POST['calc_type']) &&
                                               $_POST['calc_type'] == 'multiplication'
                                           )
                                               checked
                                           @endif
                                    />
                                    <label class="button secondary"
                                           for="calc-multiplication"
                                    >&times;</label>
                                </div>
                            </td>
                            <td>
                                <div class="type">
                                    <input type="radio"
                                           name="calc_type"
                                           value="division"
                                           id="calc-division"
                                           @if(isset($_POST['calc_type']) &&
                                               $_POST['calc_type'] == 'division'
                                           )
                                               checked
                                           @endif
                                    />
                                    <label class="button secondary"
                                           for="calc-division"
                                    >&divide;</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="type">
                                    <input type="radio"
                                           name="calc_type"
                                           value="power"
                                           id="calc-power"
                                           @if(isset($_POST['calc_type']) &&
                                               $_POST['calc_type'] == 'power'
                                           )
                                               checked
                                           @endif
                                    />
                                    <label class="button secondary"
                                           for="calc-power"
                                    >x<sup>2</sup></label>
                                </div>
                            </td>
                            <td>
                                <div class="type">
                                    <input type="radio"
                                           name="calc_type"
                                           value="square root"
                                           id="calc-square-root"
                                           @if(isset($_POST['calc_type']) &&
                                               $_POST['calc_type'] == 'square root'
                                           )
                                               checked
                                           @endif
                                    />
                                    <label class="button secondary"
                                           for="calc-square-root"
                                    >&radic;x</label>
                                </div>
                            </td>
                            <td>
                                <div class="type">
                                    <input type="radio"
                                           name="calc_type"
                                           value="power of"
                                           id="calc-power-of"
                                           @if(isset($_POST['calc_type']) &&
                                               $_POST['calc_type'] == 'power of'
                                           )
                                               checked
                                           @endif
                                    />
                                    <label class="button secondary"
                                           for="calc-power-of"
                                    >x<sup>y</sup></label>
                                </div>
                            </td>
                            <td>
                                <div class="type">
                                    <input type="radio"
                                           name="calc_type"
                                           value="multiplication table"
                                           id="calc-multiplication-table"
                                           @if(isset($_POST['calc_type']) &&
                                               $_POST['calc_type'] == 'multiplication table'
                                           )
                                               checked
                                           @endif
                                    />
                                    <label class="button secondary"
                                           for="calc-multiplication-table"
                                    >tafel x</label>
                                </div>
                            </td>
                        </tr>
                    </table>
                    
                    <input type="submit"
                           class="button calc"
                           value="Calculate"
                    />
                </div>
            </div>
            
            <div id="calc-result-container" class="small-12 medium-6 large-8 columns">
                <div class="content">
                    <h3>Result</h3>
                    <textarea id="calc-result"
                              name="calc_result"
                              placeholder="N/A"
                              readonly
                    >{{ $calcResult or '' }}</textarea>
                </div>
            </div>
        </form>
        
        {{! script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', false) }}
        {{! script('scripts/calc.js') }}
    </body>
</html>
