<?php
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/***************************************************************
 * Extension Manager/Repository config file for ext: "dpf"
 *
 * Auto generated by Extension Builder 2014-10-28
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title'            => 'Qucosa Publication',
    'description'      => '',
    'category'         => 'plugin',
    'author'           => 'effective WEBWORK GmbH',
    'author_email'     => 'info@effective-webwork.de',
    'state'            => 'stable',
    'internal'         => '',
    'uploadfolder'     => '1',
    'createDirs'       => 'uploads/tx_dpf',
    'clearCacheOnLoad' => 0,
    'version'          => '1.3.6',
    'constraints'      => array(
        'depends'   => array(
            'typo3' => '6.2.0-6.2.99',
            'static_info_tables' => '6.3.0'
        ),
        'conflicts' => array(
        ),
        'suggests'  => array(
        ),
    ),
);
