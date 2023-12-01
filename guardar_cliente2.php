<?php
include("db.php");

// Verifica si el formulario ha sido enviado
if (isset($_POST['enviar_archivos_cliente'])) {
    // Procesar el documento de identidad
    if (isset($_FILES['documento_PDF'])) {
        $docPdf = $_FILES['documento_PDF'];
        $doc_name = $docPdf['name'];
        $doc_tmp_name = $docPdf['tmp_name'];

        $doc_ext = pathinfo($doc_name, PATHINFO_EXTENSION);
        $doc_new_name = uniqid("DOC-", true) . '.' . $doc_ext;
        $doc_upload_path = 'uploads_documentos/' . $doc_new_name;
        move_uploaded_file($doc_tmp_name, $doc_upload_path);
    } else {
        echo "Documento de identidad no enviado.";
        exit;
    }

    // Procesar la licencia de conducir
    if (isset($_FILES['licencia'])) {
        $licPdf = $_FILES['licencia'];
        $lic_name = $licPdf['name'];
        $lic_tmp_name = $licPdf['tmp_name'];

        $lic_ext = pathinfo($lic_name, PATHINFO_EXTENSION);
        $lic_new_name = uniqid("LIC-", true) . '.' . $lic_ext;
        $lic_upload_path = 'uploads_licencias/' . $lic_new_name;
        move_uploaded_file($lic_tmp_name, $lic_upload_path);
    } else {
        echo "Licencia de conducir no enviada.";
        exit;
    }

    // Obtener el ID del cliente de la variable de sesión
    $clienteID = $_SESSION['id_cliente'];

    // Actualizar la base de datos con las rutas de los archivos
    $query = "UPDATE cliente SET Documento_identidad = '$doc_upload_path', Licencia_conduccion = '$lic_upload_path' WHERE Identificacion = '$clienteID'";
    
    if (mysqli_query($conn, $query)) {
        echo "Información del cliente actualizada con éxito.";
        header("Location: registro_cliente/registro3.php");
    } else {
        echo "Error al actualizar la información del cliente: " . mysqli_error($conn);
    }
}
?>
