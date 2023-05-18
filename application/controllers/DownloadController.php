<?php
class DownloadController extends CI_Controller {
    public function index() {
        $this->load->helper('url');
        // Set the path to the file you want to download
        $filePath = "assets/marksheet.pdf";

        // Check if the file exists
        if (file_exists($filePath)) {
            // Set the appropriate headers for the file download
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($filePath) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filePath));
            readfile($filePath);
            exit;
        } else {
            // Handle the case when the file does not exist
            echo 'File not found';
        }
    }
}
?>
