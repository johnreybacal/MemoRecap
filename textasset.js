   /*function changeFont(getfont){
      if(getfont != ""){
         var setfont = getfont.options[getfont.selectedIndex].text;
         document.getElementById("sample").innerHTML = setfont;
         // document.getElementById("ta").style.fontFamily = setfont;
         $('#canvas').css({'font-family': setfont});
      }
   }
   function changeSize(getsize){
      if(getsize != ""){
         var setsize = getsize.options[getsize.selectedIndex].text;
         $('#sample').html(setsize);
         $('#canvas').css({'font-size': setsize + 'px'});
      }
   }*/
   function enableEditMode(){
         texty.document.designMode = "on";
      }

   function execCmd(command){
      texty.document.execCommand(command, false, null);
   }

   function execCommandWithArg(command, arg) {
      texty.document.execCommand(command, false, arg);
   }