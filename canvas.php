<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/textassets.js"></script>
</head>
<body>
<div class="container-fluid">
   <h3 class="text-danger">Text can be resize and change font</h3>
   <div class="container-fluid">  
      <div class="row">
         <div class="col-md-3">  
            <button class="btn btn-primary btn-block" disabled id="addtext">Add Text</button>
         </div>
         <div class="col-md-9">
            <div class="col-md-12">               
               <div class="row">
                  <div class="col-md-3">
                     <select class="form-control" id="font" onchange="changeFont(this);">
                        <datalist>
                          <option selected="true" id="Arial">Arial</option>
                          <option id="Cooper">Cooper</option>
                          <option id="Helvetica">Helvetica</option>
                          <option id="Courier">Courier New</option>
                          <option id="Tnr">Times New Roman</option>
                          <option id="Verdana">Verdana</option>
                        </datalist>
                     </select>
                  </div>
                  
               </div><!-- end of <row> -->            
            	<label for="canvas">Canvas Area:</label>
            	<div id="canvas">
               	<div class="container" id="draggable">
                  	<textarea name="ta" id="ta" placeholder="Enter Text Here"></textarea>
               	</div>
            	</div>
            	<p id="sample">font</p>
            </div><!-- end of col-12 -->
         </div><!-- end of col-9 -->
      </div>
   </div>
</div>   
</body>
</html>