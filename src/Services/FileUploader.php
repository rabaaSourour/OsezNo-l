<?php

namespace App\Services;

class FileUploader
{
    private static ?string $uploadedFilePath = null;

    public static function upload(array $file): ?string
    {
        $targetDir = __DIR__ . '/../../public/assets/uploaded_images/';
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        
        if ($file['error'] !== UPLOAD_ERR_OK) {
            throw new \Exception("Erreur lors du téléchargement de l'image.");
        }

        $fileMimeType = mime_content_type($file['tmp_name']);
        if (!in_array($fileMimeType, $allowedTypes)) {
            throw new \Exception("Type de fichier non autorisé : $fileMimeType.");
        }

        $fileExtension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $uniqueFileName = uniqid('img_', true) . '.' . $fileExtension;
        $targetFilePath = $targetDir . $uniqueFileName;

        if (!move_uploaded_file($file['tmp_name'], $targetFilePath)) {
            throw new \Exception("Erreur lors du déplacement du fichier.");
        }

        self::$uploadedFilePath = '/assets/uploaded_images/' . $uniqueFileName;
        return self::$uploadedFilePath;
    }

    public static function getUploadedFilePath(): ?string
    {
        return self::$uploadedFilePath;
    }
}
