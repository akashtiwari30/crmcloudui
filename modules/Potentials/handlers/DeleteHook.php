<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

class CustomHooks_DeleteHook extends VTEventHandler
{
    public function handleEvent($eventName, $entityData)
    {
        if ($eventName === 'vtiger.entity.beforedelete') {
            $moduleName = $entityData->getModuleName();
            $recordId = $entityData->getId();

            if ($moduleName == 'Potentials') {
                $this->DeleteSiteFilesAndDB($entityData);
            }
        }
    }

    private function DeleteSiteFilesAndDB($entityData)
    {

        $moduleName = $entityData->getModuleName();
        $recordId = $entityData->getId();

        $folderPath =  $entityData->get('cf_887');
        $db = $entityData->get('cf_885');

        $this->deleteFolder($folderPath);
        $this->deleteDB($db);
    }

    // Function to delete a folder and its contents
    function deleteFolder($folderPath)
    {
        if (!is_dir($folderPath)) {
            return "Error: The specified path is not a directory.";
        }

        $files = array_diff(scandir($folderPath), ['.', '..']);
        foreach ($files as $file) {
            $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;
            is_dir($filePath) ? $this->deleteFolder($filePath) : unlink($filePath);
        }

        rmdir($folderPath);
        return "Folder and its contents deleted successfully.";
    }

    // Function to delete a database
    function deleteDB($dbname)
    {

        if (!empty($dbname)) {

            $sql = "DROP DATABASE `$dbname`";

            $conn = new mysqli('localhost', 'root', '');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $result = $conn->query("SHOW DATABASES LIKE '$dbname'");

            if ($result && $result->num_rows > 0) {
                $sql = "DROP DATABASE `$dbname`";
                if ($conn->query($sql) === TRUE) {
                } else {
                }
            } else {
            }
        }
    }
}
