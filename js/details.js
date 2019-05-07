function download() {
	var zip_file_path = "../templates/agro_farm.zip" //put inside "" your path with file.zip
	var zip_file_name = "something" //put inside "" file name or something
	var a = document.createElement("a");
	document.body.appendChild(a);
	a.style = "display: none";
	a.href = zip_file_path;
	a.download = zip_file_name;
	a.click();
	document.body.removeChild(a);
}