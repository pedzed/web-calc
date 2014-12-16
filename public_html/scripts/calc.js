(function($){
    
    var calcForm = $('#calc-form');
    var calcResult = $('#calc-result');
    var calcInputX = $('#input-x');
    var calcInputY = $('#input-y');
    var calcType = $('input[name="calc_type"]');
    var calcTypeChecked = $('input[name="calc_type"]:checked');
    
    function addResult(result){
        calcResult.val(calcResult.val() + result + '\n');
    }
    
    function toggleInputY(calcTypeChecked){
        switch(calcTypeChecked.val()){
            case 'power':
            case 'square root':
                calcInputY.prop('readonly', true);
            break;
            
            default:
                calcInputY.prop('readonly', false);
            break;
        }
    }
    
    toggleInputY(calcTypeChecked);
    
    calcType.change(function(){
        calcTypeChecked = $('input[name="calc_type"]:checked');
        
        toggleInputY(calcTypeChecked);
    });
    
})(jQuery);
