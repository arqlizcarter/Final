<script type="text/javascript">
function ajaxFunction(){
       var ajaxRequest;
       try{
	       // Opera 8.0+, Firefox, Safari
	       ajaxRequest = new XMLHttpRequest();
       } catch (e){
	       // Internet Explorer Browsers
	       try{
		       ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
	       } catch (e) {
		       try{
			       ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
		       } catch (e){
			       //browsers all not support, rare case
			       alert("Your browser broke!");
			       return false;
		       }
	       }
       }
return ajaxRequest;
}
function showData() {
	htmlRequest = ajaxFunction();
	if (htmlRequest==null){ // If it cannot create a new Xmlhttp object.
		alert ("Browser does not support HTTP Request"); 
		return; 
	} 
	
	htmlRequest.onreadystatechange = function(){
		if(htmlRequest.readyState == 4){
			document.getElementById("shoutarea").innerHTML = htmlRequest.responseText;
		}
	}
	htmlRequest.open("GET", "/outputinfo.php", true);
	htmlRequest.send(null);
}
showData();
setInterval("showData()",1000);
function saveData(){ 
	htmlRequest = ajaxFunction();
	if (htmlRequest==null){ // If it cannot create a new Xmlhttp object.
		alert ("Browser does not support HTTP Request"); 
		return;
	} 
	
	if(document.shoutbox.shouter.value == "" || document.shoutbox.shouter.value == "NULL" || document.shoutbox.shouter_comment.value == "" || document.shoutbox.shouter_comment.value == "NULL"){ 
		alert('You need to fill in name and message!'); 
		return; 
	} 
	htmlRequest.open('POST', '../sendshout.php'); 
	htmlRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); 
	htmlRequest.send('name='+document.shoutbox.shouter.value+'&message='+document.shoutbox.shouter_comment.value+'&email='+document.shoutbox.shouter_contact.value); 

	document.shoutbox.shouter_comment.value = ''; // Updates the shout box‰Ûªs text area to NULL.
	document.shoutbox.shouter_comment.focus(); // Focuses the text area.
	
} 
</script>