<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>upload your file:</label>
        <input type="file" name="file" >
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
<?php 
if(isset($_POST["submit"])) {

    $file = $_FILES["file"];

    $file["name"];
    $file["full_path"];
    $file["error"];
    $file["size"];
    $file["tmp_name"];

    if ($file["error"] == 0) {
        // move_uploaded_file(arg1, arg2) : moves file named arg1 to address arg2
		$ok = move_uploaded_file($file["tmp_name"] ,"pdf/" . $file["name"]);

        if($ok) {
			$msg = '<p class="success">Die Datei wurde erfolgreich hochgeladen.</p>';
		}
		else {
			$msg = '<p class="error">Leider konnte die Datei nicht am Zielort gespeichert werden.</p>';
		}
    }
    // echo "<pre>";
    // var_dump($_FILES);
    // echo "</pre>";
    // echo "Selected file name: " . $file_name;
}

// if(count($_FILES)>0) {
// 	//es ist ein Formular abgeschickt worden, wo zumindest die Möglichkeit besteht, eine Datei hochzuladen; ob tatsächlich eine Datei hochgeladen wurde, ist noch nicht sicher
// 	if($_FILES["UL"]["error"]==0) {
// 		//während des Uploads ist kein Fehler aufgetreten --> Datei an den Zielort verschieben
// 		//move_uploaded_file($_FILES["UL"]["tmp_name"],$_FILES["UL"]["name"]);
// 		//move_uploaded_file($_FILES["UL"]["tmp_name"],"Skriptum.pdf");
// 		$ok = move_uploaded_file($_FILES["UL"]["tmp_name"],"pdf/" . $_FILES["UL"]["name"]);
// 		if($ok) {
// 			$msg = '<p class="success">Die Datei wurde erfolgreich hochgeladen.</p>';
// 		}
// 		else {
// 			$msg = '<p class="error">Leider konnte die Datei nicht am Zielort gespeichert werden.</p>';
// 		}
// 	}
// 	else {
// 		$msg = '<p class="error">Während des Uploads ist (irgendein) Fehler aufgetreten.</p>';
// 	}
// }
?>
</html>