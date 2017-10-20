function zoomIn() {  
    if(zoomValue < 200){
        zoomValue = Number(zoomValue) + 10;      
        $('#divContent').animate({'zoom': zoomValue + '%'});        
    }
}  
function zoomOut() {  
    if(zoomValue > 40){
        zoomValue -= 10
        $('#divContent').animate({'zoom': zoomValue + '%'});
    }
} 
function zoomOrig(setDefault) {          
    $('#divContent').animate({'zoom': '100%'});
    $('#workspace').animate({'left': '0px', 'top': '0px'});
    if(setDefault){
        zoomValue = 100;
    }
}
function zoomBack(){
    $('#divContent').animate({'zoom': zoomValue + '%'});
}
