<?php

return [
  'router' => [
      'routes' => [
          'api-lock-directory' => [
              'type' => 'Segment',
              'options' => [
                  'route' => '/api/lock-directory',
                  'defaults' => [
                      'controller' => Sagnikd\FolderAspire\Classes\Folder::class,
                      'action' => 'lockDirectory',
                  ],
              ],
              'may_terminate' => true,
              'child_routes' => [
                  'post' => [
                      'type' => 'Method',
                      'options' => [
                          'verb' => 'post',
                      ],
                      'may_terminate' => true,
                  ],
              ],
          ],
          'api-import-directory' => [
              'type' => 'Segment',
              'options' => [
                  'route' => '/api/import/directory',
                  'defaults' => [
                      'controller' => Sagnikd\FolderAspire\Classes\Folder::class,
                      'action' => 'importDirectory',
                  ],
              ],
              'may_terminate' => true,
              'child_routes' => [
                  'get' => [
                      'type' => 'Method',
                      'options' => [
                          'verb' => 'post',
                      ],
                      'may_terminate' => true,
                  ],
              ],
          ],
      ],
  ],
];
