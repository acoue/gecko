/**
 * 
 */
function ChangeVisibilityOutil(id,idImagePlus){
	
    var elem = document.getElementById(id);
    if(elem.style.display == ""){
    	document.getElementById(id).style.display='block'; 
    	document.getElementById(idImagePlus).style.display='none';    
    } else if(elem.style.display == "none"){
        document.getElementById(id).style.display='block';   
    	document.getElementById(idImagePlus).style.display='none';    
    } else {
        document.getElementById(id).style.display='none';
    	document.getElementById(idImagePlus).style.display='block'; 
    }
}

function ChangeVisibility(id){
    var elem = document.getElementById(id);
    if(elem.style.display == ""){
    	document.getElementById(id).style.display='block';  
    } else if(elem.style.display == "none"){
        document.getElementById(id).style.display='block';       
    } else {
        document.getElementById(id).style.display='none';
    }
}

function ChangeVisibilityAndTextInChamp(id, idText, valueText){
    var elem = document.getElementById(id);
    
    if(elem.style.display == ""){
        document.getElementById(id).style.display='block';
        document.getElementById(idText).value=valueText;
        document.getElementById(idText).disabled = true;
    } else if(elem.style.display == "none"){
        document.getElementById(id).style.display='block';  
        document.getElementById(idText).value=valueText;  
        document.getElementById(idText).disabled = true;   
    } else {
        document.getElementById(id).style.display='none';
        document.getElementById(idText).value='';
        document.getElementById(idText).disabled = false;
    }    
}