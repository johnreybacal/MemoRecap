function ZoomIn() {  
    var ZoomInValue = parseInt(document.getElementById("divContent").style.zoom) + 10;      
    if(ZoomInValue < 200){
        document.getElementById("divContent").style.zoom = ZoomInValue + '%';  
        return false;          
    }
}  

function ZoomOut() {  
    var ZoomOutValue = parseInt(document.getElementById("divContent").style.zoom) - 10;  
    if(ZoomOutValue > 40){
        document.getElementById("divContent").style.zoom = ZoomOutValue + '%';  
        return false;          
    }
} 
 function Zoomorg() {  
    var ZoomOutValue = parseInt(100) + '%';  
    document.getElementById("divContent").style.zoom = ZoomOutValue;  
    return false;  
}