function setModeActive(modeActive, idProduct){
		if(modeActive == 'Delete'){
			document.getElementById('modeActive').value = "Delete";
			document.getElementById("idProduct").value = idProduct;
		}
		else if(modeActive == 'Add'){
			document.getElementById('modeActive').value = "Add";
		}
		else if(modeActive == 'Edit'){
			document.getElementById('modeActive').value = "Edit";
			document.getElementById("idProduct").value = idProduct;
		}
}
