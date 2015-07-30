<?php
$english = array(
	// labels
	'gcRegister:email_initial' => 'Enter your e-mail',
	'gcRegister:email_secondary' => 'Confirm your e-mail',
	'gcRegister:username' => 'Your username (auto-generated)',
	'gcRegister:password_initial' => 'Password',
	'gcRegister:password_secondary' => 'Confirm your Password',
	'gcRegister:display_name' => 'Display name',
	'gcRegister:display_name_notice' => 'Please enter your first and last name, as you are known in the workplace. As per the Terms and Conditions, your display name must reflect your real name. Pseudonyms are not allowed.',
	'gcRegister:please_enter_email' => 'Please enter email',
	'gcRegister:department_name' => 'Enter your Department',
	'gcRegister:register' => 'Register',

	// error messages on the form
	'gcRegister:failedMySQLconnection' => 'unable to connect to the database',
	'gcRegister:invalid_email' => 'invalid email',
	'gcRegister:empty_field' => 'empty field',
	'gcRegister:mismatch' => 'mismatch',

	// notice
	'gcRegister:email_notice' => '<b>NOTE:</b> Accounts can only be created using a valid Government of Canada email address. If you entered a non-Government of Canada email address you will receive an <code>invalid email</code> notice. If you believe this notice is in error, please contact: <a href="mailto:gcconnex@tbs-sct.gc.ca">GCconnex@tbs-sct.gc.ca</a>',
	'gcRegister:terms_and_conditions' => 'I have read, understood, and agree to the <a href="http://gcconnex.gc.ca/terms">terms and conditions of use</a>.',
	'gcRegister:tutorials_notice' => '<a href="http://www.gcpedia.gc.ca/wiki/Tutorials_on_GC2.0_Tools_/_Tutoriels_sur_les_outils_GC2.0/GCconnex">GCconnex tutorials</a>',
	
	// error messages that pop up
	'gcRegister:toc_error' => '- Terms and Conditions of Use must be accepted',
	'gcRegister:email_in_use' => 'This email address has already been registered',
	'gcRegister:password_mismatch' => '- passwords do not match',
	'gcRegister:password_too_short' => '- password must contain min 6 characters',
	'gcRegister:email_mismatch' => '- emails do not match',
	'gcRegister:display_name_is_empty' => '- display name cannot be empty',
);

add_translation("en", $english);