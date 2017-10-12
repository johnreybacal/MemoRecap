<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/textasset.js"></script>
</head>
<body onload="enableEditMode()">
<div class="container-fluid">
   <h3 class="text-danger">Text can be resize and change font</h3>
   <div class="container-fluid">  
      <div class="row">
         <div class="col-md-3">  
            <button class="btn btn-primary btn-block" disabled id="addtext">Add Text</button>
         </div>
         <div class="col-md-9">
            <div class="col-md-12">
               <div class="form-group">
                  <div class="row">
                     <div class="col-md-3">
                        <select class="form-control" onchange="execCommandWithArg('fontName', this.value);">
                           <datalist>
                             <option id="Arial">Arial</option>
                             <option id="Cooper">Cooper</option>
                             <option id="Helvetica">Comic Sans</option>
                             <option id="Helvetica">Georgia</option>
                             <option id="Courier">Courier New</option>
                             <option id="Tnr">Times New Roman</option>
                             <option id="Verdana">Verdana</option>
                           </datalist>
                        </select>
                     </div>
                     <div class="col-md-2">
                        <select class="form-control" onchange="execCommandWithArg('fontSize', this.value);">
                           <datalist>
                             <option>1</option>
                             <option>10</option>
                             <option>12</option>
                             <option>14</option>
                             <option>16</option>
                             <option>18</option>
                             <option>20</option>
                             <option>24</option>
                             <option>28</option>
                             <option>32</option>
                           </datalist>
                        </select>
                     </div>
                     <div class="col-md-7">
                        <button class="btn btn-primary" onclick="execCmd('bold')"><b>B </b></button>
                        <button class="btn btn-primary" onclick="execCmd('italic')"><i>I</i></button>
                        <button class="btn btn-primary" onclick="execCmd('underline')"><u>U</u></button>
                        <button class="btn btn-primary" onclick="execCmd('strikeThrough')"><u>Strike Through</u></button>
                        <button class="btn btn-primary" onclick="execCmd('justifyLeft')"><u>Align Left</u></button>
                        <button class="btn btn-primary" onclick="execCmd('justifyCenter')"><u>Align Center</u></button>
                        <button class="btn btn-primary" onclick="execCmd('justifyRight')"><u>Align Right</u></button>
                        <button class="btn btn-primary" onclick="execCmd('justifyFull')"><u>Align Justify</u></button>
                        <button class="btn btn-primary" onclick="execCmd('cut')"><u>Cut</u></button>
                        <button class="btn btn-primary" onclick="execCmd('copy')"><u>Copy</u></button>
                        <button class="btn btn-primary" onclick="execCmd('indent')"><u>Indent</u></button>
                        <button class="btn btn-primary" onclick="execCmd('outdent')"><u>Outdent</u></button>
                        <button class="btn btn-primary" onclick="execCmd('insertUnorderedList')"><u>U-List</u></button>
                        <button class="btn btn-primary" onclick="execCmd('insertOrderedList')"><u>O-List</u></button>
                        <button class="btn btn-primary" onclick="execCmd('insertHorizontalRule')"><u>HR</u></button>
                        Fore Color: <input type="color" onchange="execCommandWithArg('foreColor', this.value);">
                        Background Color: <input type="color" onchange="execCommandWithArg('hiliteColor', this.value);">
                        <button class="btn btn-primay" onchange="execCommandWithArg('insertImage', prompt('Enter the image Url', ''));">Image</button>
                        <button class="btn btn-primary" onclick="execCmd('selectAll')"><u>Select All</u></button>
                     </div>
                  </div>
               </div>
               <iframe name="texty" id="canvas" style="width: 800px; height: 500px;""></iframe>
               <p id="sample">font</p>
            </div><!-- end of col-12 -->
         </div><!-- end of col-9 -->
      </div>
   </div>
</div>   
</body>
</html>