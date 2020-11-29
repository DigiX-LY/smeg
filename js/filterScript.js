let selectedLines = [];
    function addSelected(line){
        
        selectedLines.push(line);
        $('.filter-lines').children().hide();
        for(var i=0; i<=selectedLines.length; i++)
        {
            $(".filter-lines").children('#'+selectedLines[i]).show();
        }

    }
    function removeSelected(line){
        // delete elements based on the line clicked
        selectedLines.splice(selectedLines.indexOf(line),1);
        $('.filter-lines').children('#'+line).hide();
        if(selectedLines.length == 0 )
        {
            $('.filter-lines').children().show();
        }
    }