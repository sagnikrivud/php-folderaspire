<?php

namespace Sagnikd\FolderAspire;

class Folder {
  /**
   * Constructor
   */
  public function __construct()
  {

  }
  
  /**
   * Create directory
   *
   * @param [type] $folderName
   * @param [type] $permission
   * @return void
   */
  public function createDirectory($folderName, $permission)
  {

  }

  /**
   * Lock or Abandoned folder
   *
   * @param [type] $folderName
   * @param string $lockType
   * @param [type] $path
   * @return void
   */
  public function lockDirectory($folderName,  $lockType = 'exclusive', $path)
  {

  }

  /**
   * Import a folder from another Parent directory
   *
   * @param [type] $folder
   * @param [type] $importPath
   * @return void
   */
  public function importDirectory($folder, $importPath)
  {

  }

  /**
   * Search a folder under a entire parent directory and return Path 
   *
   * @param [type] $folder
   * @return void
   */
  public function getFolderLocation($folderName)
  {

  }
}