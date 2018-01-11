

function hideEdit() {
	var i;
	var x = document.getElementById('edit_changes');
	x.style.display='none';
	var y = document.getElementById('save_changes');
	y.style.display='block';
	document.getElementById('delete_info').style.display='block';
	var z = document.getElementsByClassName("mutable");
	for(i=0;i<z.length;i++) {
		z[i].style.display='block';
	}
}

function showEdit() {
	var i;
	var x = document.getElementById('edit_changes');
	x.style.display='block';
	var y = document.getElementById('save_changes');
	y.style.display='none';
	document.getElementById('delete_info').style.display='none';
	var z = document.getElementsByClassName("mutable");
	for(i=0;i<z.length;i++) {
		z[i].style.display='none';
	}
}

function showDelete() {
	var i;
	var x = document.getElementsByClassName('check'); 
	for(i=0;i<x.length;i++) {
		x[i].style.display = 'block';
	}
	var y = document.getElementById('save_changes');
	y.style.display='none';
	document.getElementById('delete').style.display = 'block';
	var z = document.getElementsByClassName("mutable");
	for(i=0;i<z.length;i++) {
		z[i].style.display='none';
	}
}

function hideDelete() {
	var i;
	var x = document.getElementsByClassName('check'); 
	for(i=0;i<x.length;i++) {
		x[i].style.display = 'none';
	}
	var y = document.getElementById('save_changes');
	y.style.display='block';
	document.getElementById('delete').style.display = 'none';
	var z = document.getElementsByClassName("mutable");
	for(i=0;i<z.length;i++) {
		z[i].style.display='block';
	}
}
