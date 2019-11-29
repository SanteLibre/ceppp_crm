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
$vardefs = array (
  'fields' => 
  array (
    'adresse_perso_city' => 
    array (
      'required' => false,
      'name' => 'adresse_perso_city',
      'vname' => 'LBL_ADRESSE_PERSO_CITY',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
    ),
    'adresse_perso_state' => 
    array (
      'required' => false,
      'name' => 'adresse_perso_state',
      'vname' => 'LBL_ADRESSE_PERSO_STATE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
    ),
    'adresse_perso_postalcode' => 
    array (
      'required' => false,
      'name' => 'adresse_perso_postalcode',
      'vname' => 'LBL_ADRESSE_PERSO_POSTALCODE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 20,
      'size' => '20',
    ),
    'adresse_perso_country' => 
    array (
      'required' => false,
      'name' => 'adresse_perso_country',
      'vname' => 'LBL_ADRESSE_PERSO_COUNTRY',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
    ),
    'adresse_perso' => 
    array (
      'required' => false,
      'name' => 'adresse_perso',
      'vname' => 'LBL_ADRESSE_PERSO',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'professionnels_sante' => 
    array (
      'required' => false,
      'name' => 'professionnels_sante',
      'vname' => 'LBL_PROFESSIONNELS_SANTE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'exp_decision' => 
    array (
      'required' => false,
      'name' => 'exp_decision',
      'vname' => 'LBL_EXP_DECISION',
      'type' => 'radioenum',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => 'Vous sentez-vous partenaires de vos soins ?',
      'qdetail_en' => 'Do you feel like a partner in the care you receive?',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'yes_no_dunno_list',
      'studio' => 'visible',
      'dbType' => 'enum',
      'separator' => '<br>',
      'help' => '',
    ),
    'etabl_sante' => 
    array (
      'required' => false,
      'name' => 'etabl_sante',
      'vname' => 'LBL_ETABL_SANTE',
      'type' => 'SmartDropdown',
      'options' => 'etab_sante_list',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => 'Dans quels établissements de soins et servivces êtes-vous suivis (ou avez vous été suivis) ?',
      'qdetail_en' => 'What is the patient\'s principal healthcare organization? (ex. hospitals)',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'etabl_prem_ligne' => 
    array (
      'required' => false,
      'name' => 'etabl_prem_ligne',
      'vname' => 'LBL_ETABL_PREM_LIGNE',
      'type' => 'SmartDropdown',
      'options' => 'etab_sante_list',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => 'Dans quels établissements de soins et servivces êtes-vous suivis (ou avez vous été suivis) en première ligne ?',
      'qdetail_en' => 'What is the patient\'s primary healthcare organization? (ex. primary healthcare clinic)',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'med_1' => 
    array (
      'required' => false,
      'name' => 'med_1',
      'vname' => 'LBL_MED_1',
      'type' => 'text',
      'rows' => '4',
      'cols' => '20',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => 'Prenez-vous des médicaments ? Si oui, lesquels ?',
      'qdetail_en' => 'Does the patient take medication? If yes which ones? Please select all that apply',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '100',
      'size' => '20',
      'studio' => 'visible',
      'dependency' => false,
      'dbType' => 'varchar',
    ),
    'med_2' => 
    array (
      'required' => false,
      'name' => 'med_2',
      'vname' => 'LBL_MED_2',
      'type' => 'SmartDropdown',
      'options' => 'medicaments_list',
      'isMultiSelect' => true,
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => 'Le pp prend-il des médicaments? Si oui, lesquels ?',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'med_3' => 
    array (
      'required' => false,
      'name' => 'med_3',
      'vname' => 'LBL_MED_3',
      'type' => 'SmartDropdown',
      'options' => 'medicaments_list',
      'isMultiSelect' => true,
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => 'Le pp prend-il des médicaments? Si oui, lesquels ?',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'prob_sant' => 
    array (
      'required' => false,
      'name' => 'prob_sant',
      'vname' => 'LBL_PROB_SANT',
      'type' => 'SmartDropdown',
      'isMultiSelect' => true,
      'options' => 'cim10_list',
      'len' => '1024',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => 'Quel est ou quels sont vos principales problématiques de santé ?',
      'qdetail_en' => 'What is/are your main health issues?',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'dependency' => false,
      'dbType' => 'varchar',
    ),
    'experience_maladie' => 
    array (
      'required' => false,
      'name' => 'experience_maladie',
      'vname' => 'LBL_EXPERIENCE_MALADIE',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => 'Veuillez décrire votre problématique de santé',
      'qdetail_en' => 'Could you describe your experience with your illness?',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
    ),
    'domaine_soin' => 
    array (
      'required' => false,
      'name' => 'domaine_soin',
      'vname' => 'LBL_DOMAINE_SOIN',
      'type' => 'SmartDropdown',
      'options' => 'specialites_soin_list',
      'isMultiSelect' => true,
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'qdetail' => 'Veuillez nommer les spécialités pour lesquelles vous avez reçu des soins',
      'qdetail_en' => 'In which healthcare specialty does the patient have most experience?',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'perspective' => 
    array (
      'required' => false,
      'name' => 'perspective',
      'vname' => 'LBL_PERSPECTIVE',
      'type' => 'varchar',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => 'Quelle est votre perspective ?',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
    ),
    'maladie_rare_details' => 
    array (
      'required' => false,
      'name' => 'maladie_rare_details',
      'vname' => 'LBL_MALADIE_RARE_DETAILS',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
      'qdetail' => 'Souffrez-vous d\'une maladie rare ? Veuillez la préciser',
      'qdetail_en' => 'Do you suffer from a rare disease? Please give details',
    ),
    'preneur_decisions' => 
    array (
      'required' => false,
      'name' => 'preneur_decisions',
      'vname' => 'LBL_PRENEUR_DECISIONS',
      'type' => 'text',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'size' => '20',
      'studio' => 'visible',
      'rows' => '4',
      'cols' => '20',
      'qdetail' => 'Qui prend les décisions qui concernent vos soins et services ?',
      'qdetail_en' => 'Who makes the decisions concerning your health and healthcare?',
    ),
  ),
  'relationships' => 
  array (
  ),
);