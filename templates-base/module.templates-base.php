<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'templates-base/2.1.4',
	array(
		// Identification
		//
		'label' => 'Templates foundation',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'api-client/1.0.0'
		),
		'mandatory' => true,
		'visible' => false,
		//'installer' => 'MyInstaller',

		// Components
		//
		'datamodel' => array(
			'model.templates-base.php'
		),
		'webservice' => array(
			
		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),
		
		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any 

		// Default settings
		//
		'settings' => array(
			// Select where, in the main UI, the extra data should be displayed:
			//     tab (dedicated tab)
			//     properties (right after the properties, but before the log if any)
			//     none (extra data accessed only by programs)
			'view_extra_data' => 'relations',
			
			// 以下全部使用person和team的id
			'special' => array('上线APP'=>2),
			'plan' => array(2,3,5),
			'team_id' => 4,
			// 用friendlyname做唯一性校验的类
			'checkuniq_with_friendlyname' => array("RDS", "MySQL")
		),
	)
);
