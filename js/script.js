function deleteAsset(){
	alert(assets[currentPage]);
	var selectedAsset = $('#selectedAsset').html();			
	$('#' + selectedAsset).remove();	//delete asset
	$('#' + selectedAsset + "-z").remove();		//delete on z-order
	assets[currentPage] = assets[currentPage].replace(selectedAsset + "/", "");		//delete asset data
	alert(assets[currentPage]);
}

$(document).ready(function(){    

	$('#tools').sortable({
		revert: 'invalid', scroll: false
	});

	$("#addPage").click(function(){
		$("#workspace").append("<div id = \"p-" + pageCount + "\" class = \"pages ui-droppable\"></div>");
		$("#pagination").append("<li id = \"page-" + pageCount + "\" class = \"page-button ui-sortable-handle\">" + (pageCount + 1) + "</li>");
		$("#z-order-container").append("<ol reversed id = \"z-" + pageCount + "\" class = \"z-order\"></ol>");
		$("#page-" + pageCount.toString()).click(function(){	//para sa mga generated buttons
			var page = $(this).attr("id");				//kunin ung pinindot
			$("#p-" + currentPage.toString()).hide();	//hide page and z-order of current page
			$("#z-" + currentPage.toString()).hide();				
			currentPage = page.substring(5);			
			$("#p-" + currentPage.toString()).show();	//show selected page and z-order
			$("#z-" + currentPage.toString()).show();
			$("#currentPage").html(Number(currentPage) + 1);
			$('.attr').html('');
		});

		$("#z-" + pageCount.toString()).sortable({			//para sa generated na z-order
			update: function(){
				var order = $(this).sortable("toArray");
				order.reverse();
				for(var i = 0; i < order.length; i++){
					$("#" + order[i].replace("-z", "")).css("z-index", i + 1);
				}
			}
		});

		$("#p-" + pageCount.toString()).droppable({
			accept: ".first",						//para sa generated pages
			drop: function(event, ui){
				var id = assetID + '-' + $('#wtf').html();				
	    		assets[currentPage] += id + "/";
	    		assetID++;
				$(ui.helper).removeClass("first");
				$(ui.helper).addClass("asset");
				$(this).append($(ui.helper).clone().wrapInner('<div class = "rotatable rotate"></div>').attr('id', id));				
				assetInteractability(id);
	    		$("#z-" + currentPage.toString()).prepend("<li id = \"" + id + "-z\">" + id + "</li>");
	    		$("#z-" + currentPage).children('#' + id + '-z').mousedown(function(){
					displayAssetAttributes($('#' + id));
				});
			}
		});		
		$("#p-" + currentPage).hide();
		$("#z-" + currentPage).hide();
		$("#p-" + pageCount).show();
		$("#z-" + pageCount).show();
		currentPage = pageCount;
		$('#p-' + currentPage).css({'background': hexToRgb($('#bgc').val())});
		$('#p-' + currentPage).attr('data-bg', 'rgb');
		$('#currentPage').html(Number(currentPage + 1));
		assets[pageCount] = "";
		pageCount++;
	});		

	$('#delete-asset').click(function(){deleteAsset();});
	
	$('#delete-page').click(function(){
		if(pageCount > 1){			
			$('#page-' + currentPage).remove();	//delete pagination
			$('#p-' + currentPage).remove();		//delete page
			$('#z-' + currentPage).remove();		//delete z-order		
			assets.splice(currentPage, 1)		//delete asset data
			for(var i = currentPage; i < pageCount; i++){//fix pagination
				$('#page-' + i).html(i);
				$('#page-' + i).attr('id', 'tempPage');			
				$('#tempPage').attr('id', 'page-' + (i - 1));
				$('#p-' + i).attr('id', 'tempPage');
				$('#tempPage').attr('id', 'p-' + (i - 1));
				$('#z-' + i).attr('id', 'tempPage');
				$('#tempPage').attr('id', 'z-' + (i - 1));
			}
			pageCount--;
			if(currentPage == pageCount){
				currentPage--;
			}
			$('#p-' + currentPage).show();
			$('#z-' + currentPage).show();
			$("#currentPage").html(Number(currentPage) + 1);
		}else{
			alert("NANI???");
		}
	});

	$('#pagination').sortable({
		containment: "#pagination-container",
		update: function(){
			var order = $(this).sortable("toArray");
			var tempAssets = assets;
			var temp = "";			
			//alert($(this).sortable("toArray") + "   " + assets);			
			for(var i = 0; i < order.length; i++){//add temporary id
				var li = $('#' + order[i]);						//pagination
				var li2 = $('#p-' + order[i].substring(5));		//page
				var li3 = $('#z-' + order[i].substring(5));		//z-order
				li.attr('id', 'temp' + i);
				li2.attr('id', 'temppage' + i);
				li3.attr('id', 'tempz' + i);
				li.html(i + 1);
			}
			for(var i = 0; i < order.length; i++){//fix id
				$('#temp' + i).attr('id', 'page-' + i);
				$('#temppage' + i).attr('id', 'p-' + i);
				$('#tempz' + i).attr('id', 'z-' + i);
			}
			for(var i = 0; i < order.length; i++){//sort assets
				for(var j = 0; j < order.length - i - 1; j++){
					var wtf = Number(order[j].substring(5));					
					temp = tempAssets[wtf];				
					tempAssets[wtf] = tempAssets[j];
					tempAssets[j] = temp;					
				}
			}
			var getBack = currentPage;
			for(var p = 0; p <= pageCount; p++){
				if(currentPage != p){
					$("#p-" + currentPage).hide();
					$("#z-" + currentPage).hide();
					$("#p-" + p).show();
					$("#z-" + p).show();
				}
				currentPage = p;				
			}		
			$("#p-" + currentPage).hide();
			$("#z-" + currentPage).hide();
			currentPage = getBack;
			$("#p-" + currentPage).show();
			$("#z-" + currentPage).show();	
		}
	});

	$('#changeBG').click(function(){		
		$('#p-' + currentPage).css({'background': hexToRgb($('#bgc').val())});
		// $('#p-' + currentPage).css({'background':'rgb('+$('#R').val()+', '+$('#G').val()+', '+$('#B').val()+')'});
		$('#p-' + currentPage).attr('data-bg', 'rgb');
	});

	$('#bgc').change(function(){  
	    $('#hexcolor').html($(this).val());
	});

});

function hexToRgb(hex){
    hex = hex.replace('#','');
    r = parseInt(hex.substring(0,2), 16);
    g = parseInt(hex.substring(2,4), 16);
    b = parseInt(hex.substring(4,6), 16);
    result = 'rgb('+r+','+g+','+b+')';    
    return result;
}						