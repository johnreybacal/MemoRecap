function getAngle($this){
	var angle;
    var matrix = $this.children('div.rotate').css("-webkit-transform") ||
        $this.children('div.rotate').css("-moz-transform") ||
        $this.children('div.rotate').css("-ms-transform") ||
        $this.children('div.rotate').css("-o-transform") ||
        $this.children('div.rotate').css("transform");
    if (matrix && matrix !== 'none'){
        var values = matrix.split('(')[1].split(')')[0].split(',');
        var a = values[0];
        var b = values[1];
        angle = Math.round(Math.atan2(b, a) * (180 / Math.PI));
    }
    else{
        angle = 0;
    }
    if(angle < 0){
    	angle = (180 + angle) + 180;
    }
    return angle;
}

function displayAssetAttributes($this){
	$('#selectedAsset').html($this.attr('id'));
	// var $this = $(this);
	var thisPos = $this.position();
	var parPos = $this.parent().position();
	var x = thisPos.left - parPos.left;
	var y = thisPos.top - parPos.top;	
	var angle = getAngle($this);
	$('#pos').html("x: " + x + "<br />y: " + y);
	$('#siz').html("w: " + $this.css('width') + "<br />h: " + $this.css('height'));
	$('#ang').html(angle)	
}

function assetInteractability(id){
	$('#' + id).resizable({
		containment: "#workspace",		//para hanggang workspace lng ung laki
		// animate: true, ghost: true,		    	
		minHeight: 50, minWidth: 50,
		resize: function(event, ui){
			displayAssetAttributes($('#' + id));
		},
		handles: "n, e, s, w, nw, ne, sw, se"
	}).draggable({
		containment: "#workspace", 		//para di lumabas sa workspace
		helper: "original", cursor: "move",
		drag: function(){
			displayAssetAttributes($('#' + id));
		}
	}).css("z-index", assets[currentPage].split('/').length - 1);	
	$('.rotatable').rotatable({
		rotate: function(){
			displayAssetAttributes($('#' + id));
		}
	}).removeClass('rotatable');
	$('#' + id).mousedown(function(){//gawing focusable lol kinuha ko lng ung id haha
		displayAssetAttributes($(this));
	});
}

$(document).ready(function(){
	$('#prevPage').click(function(){
		if(currentPage > 0){
			$("#p-" + currentPage).hide();
			$("#z-" + currentPage).hide();		
			currentPage--;		
			$("#p-" + currentPage).show();
			$("#z-" + currentPage).show();	
			$('#currentPage').html(Number(currentPage + 1));
		}
	});

	$('#nextPage').click(function(){
		if(currentPage < pageCount - 1){
			$("#p-" + currentPage).hide();
			$("#z-" + currentPage).hide();		
			currentPage++;		
			$("#p-" + currentPage).show();
			$("#z-" + currentPage).show();	
			$('#currentPage').html(Number(currentPage + 1));
		}
	});
});