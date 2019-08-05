<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'pat',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Patients',
  'published_date' => '2019-08-05 15:45:45',
  'type' => 'module',
  'version' => 1565019945,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Patients',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'pat_Patients',
      'class' => 'pat_Patients',
      'path' => 'modules/pat_Patients/pat_Patients.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'pat_PerspectivePatient',
      'class' => 'pat_PerspectivePatient',
      'path' => 'modules/pat_PerspectivePatient/pat_PerspectivePatient.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/pat_patients_pat_perspectivepatientMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/pat_Patients',
      'to' => 'modules/pat_Patients',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/pat_PerspectivePatient',
      'to' => 'modules/pat_PerspectivePatient',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/pat_PerspectivePatient.php',
      'to_module' => 'pat_PerspectivePatient',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/pat_PerspectivePatient.php',
      'to_module' => 'pat_PerspectivePatient',
      'language' => 'fr_FR',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/pat_Patients.php',
      'to_module' => 'pat_Patients',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/pat_Patients.php',
      'to_module' => 'pat_Patients',
      'language' => 'fr_FR',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/fr_FR.lang.php',
      'to_module' => 'application',
      'language' => 'fr_FR',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/pat_patients_pat_perspectivepatient_pat_PerspectivePatient.php',
      'to_module' => 'pat_PerspectivePatient',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/pat_patients_pat_perspectivepatient_pat_Patients.php',
      'to_module' => 'pat_Patients',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);