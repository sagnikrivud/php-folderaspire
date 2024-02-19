<?php
namespace Sagnikd\FolderAspire\Src\Contracts;

/**
 * Interface FolderContracts
 */
interface FolderContracts {
  /**
   * Create directory
   *
   * @param [type] $folderName
   * @param [type] $permission
   * @return void
   */
  public function createDirectory($directoryPath, $permission);

  /**
   * Lock or Abandoned folder
   *
   * @param [type] $folderName
   * @param string $lockType
   * @param [type] $path
   * @return void
   */
  public function lockDirectory($folderName,  $lockType = 'exclusive', $path);

  /**
   * Import a folder from another Parent directory
   *
   * @param [type] $folder
   * @param [type] $importPath
   * @return void
   */
  public function importDirectory($sourceFolder, $importPath);

  /**
   * Search a folder under a entire parent directory and return Path 
   *
   * @param [type] $folder
   * @return void
   */
  public function getFolderLocation($directory = null, $filename = null);

  /**
   * Get appropriate namespace of an Class file
   *
   * @param [type] $folder
   * @param [type] $path
   * @return void
   */
  public function recoverNamespace($folder = null, $classFile);

  /**
   * Remove file or directory
   *
   * @param [type] $fileOrDir
   * @return boolean
   */
  public function removeFileOrDirectory($fileOrDir) : bool;
}