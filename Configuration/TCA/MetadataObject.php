<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_dpf_domain_model_metadataobject'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_dpf_domain_model_metadataobject']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, display_name, max_iteration, mandatory, mapping, mods_extension, input_field, input_option_list, fill_out_service',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, display_name, max_iteration, mandatory, mapping, mods_extension, input_field, input_option_list, fill_out_service, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,                       
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
                                //'readOnly' => 1,
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
                                //'readOnly' => 1,
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_dpf_domain_model_metadataobject',
				'foreign_table_where' => 'AND tx_dpf_domain_model_metadataobject.pid=###CURRENT_PID### AND tx_dpf_domain_model_metadataobject.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
                        'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'name' => array(
			'exclude' => 1,
                        'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,uniqueInPid'
			),
		),
		'display_name' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.display_name',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'max_iteration' => array(
			'exclude' => 1,
                        'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.max_iteration',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			)
		),
		'mandatory' => array(
			'exclude' => 1,
                        'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.mandatory',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'mapping' => array(
			'exclude' => 1,
                        'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.mapping',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
                'mods_extension' => array(
			'exclude' => 1,
                        'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.mods_extension',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'input_field' => array(
			'exclude' => 1,
                        'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.input_field',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.input_type.input', \EWW\Dpf\Domain\Model\MetadataObject::input),
                                        array('LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.input_type.textarea', \EWW\Dpf\Domain\Model\MetadataObject::textarea),
                                        array('LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.input_type.select',\EWW\Dpf\Domain\Model\MetadataObject::select),
                                        array('LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.input_type.checkbox',\EWW\Dpf\Domain\Model\MetadataObject::checkbox),                                                         
                                ),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),            
                'input_option_list' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_formfield.input_option_list',
			'config' => array(
				'type' => 'select',
                                'items' => array(
                                    array('',0),
                                ),
				'foreign_table' => 'tx_dpf_domain_model_inputoptionlist',              
                                'foreign_table_where' => ' AND (tx_dpf_domain_model_inputoptionlist.pid=###PAGE_TSCONFIG_ID###) AND (tx_dpf_domain_model_inputoptionlist.sys_language_uid = 0)',                                
				'minitems' => 0,
				'maxitems' => 1,
			),
		),
                'fill_out_service' => array(
			'exclude' => 1,
                        'l10n_mode' => 'exclude',
			'label' => 'LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.fill_out_service',
			'config' => array(
                                'type' => 'select',
				'items' => array(
                                        array('',0),
					array('LLL:EXT:dpf/Resources/Private/Language/locallang_db.xlf:tx_dpf_domain_model_metadataobject.fill_out_service.urn', \EWW\Dpf\Domain\Model\MetadataObject::FILL_OUT_SERVICE_URN),
                                ),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''				
			),
		),
		'metadatagroup' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),            
	),
);
