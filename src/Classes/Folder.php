<?php

namespace Sagnikd\FolderAspire;
use Sagnikd\FolderAspire\Src\Contracts\FolderContracts;

class Folder implements FolderContracts{
  /**
   * Constructor
   */
  public function __construct($initiaLize = null)
  {
    $this->initiaLize = $initiaLize;
  }
  
  /**
   * Create directory
   *
   * @param [type] $folderName
   * @param [type] $permission
   * @return void
   */
  public function createDirectory($directoryPath, $permission)
  {
    $basePath = __DIR__;
    if (mkdir($basePath . '/' . $directoryPath, $permission, true)) {
      return true;
    }
      return false;
  }

  /**
   * Lock or Abandoned folder
   *
   * @param [type] $folderName
   * @param string $lockType
   * @param [type] $path
   * @return void
   */
  public function lockDirectory($folderName,  $lockType = 'exclusive', $path): bool
  {
    $folderPath = $path . '/' . $folderName;
    $desiredPermissions = ($lockType === 'exclusive') ? 0700 : 0500;
    if (chmod($folderPath, $desiredPermissions)) {
      return true;
    }
      return false;
  }

  /**
   * Import a folder from another Parent directory
   *
   * @param [type] $folder
   * @param [type] $importPath
   * @return void
   */
  public function importDirectory($sourceFolder, $importPath)
  {
    $destinationFolder = $importPath;
    if (!is_dir($destinationFolder)) {
      mkdir($destinationFolder, 0775, true);
    }
    $iterator = new RecursiveIteratorIterator(
      new RecursiveDirectoryIterator($sourceFolder, RecursiveDirectoryIterator::SKIP_DOTS),
      RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($iterator as $item) {
      $target = $destinationFolder . '/' . $iterator->getSubPathName();
      // Copy files
      if ($item->isFile()) {
          copy($item, $target);
      }
      // Create directories
      elseif ($item->isDir()) {
          mkdir($target);
      }
    }
    return $destinationFolder;
  }

  /**
   * Search a folder under a entire parent directory and return Path 
   *
   * @param [type] $folder
   * @return void
   */
  public function getFolderLocation($directory = null, $filename = null)
  {
    $basePath = __DIR__;
    if (!empty($directory) && is_dir($directory)) {
      // If a valid directory is provided, search for the filename in the directory and its subdirectories
      $address = glob($directory . '/**/' . $filename, GLOB_BRACE);
    } elseif (!empty($filename) && is_file($filename)) {
      // If a valid filename is provided, search for the filename in the current directory and its subdirectories
      $address = glob($basePath . '/**/' . $filename, GLOB_BRACE);
    }
      return $address;
  }

  /**
   * Get appropriate namespace of an Class file
   *
   * @param [type] $folder
   * @param [type] $path
   * @return void
   */
  public function recoverNamespace($folder = null, $classFile)
  {
    $reflection = new ReflectionClass($classFile);
    $namespace = $reflection->getNamespaceName();
    return $namespace;
  }

  /**
   * Remove file or directory
   *
   * @param [type] $fileOrDir
   * @return boolean
   */
  public function removeFileOrDirectory($fileOrDir): bool
  {
    if (!empty($fileOrDir) && is_dir($fileOrDir)) {
      rmdir($fileOrDir);
    } elseif (is_file($fileOrDir)) {
      unlink($fileOrDir);
    }
  }
}