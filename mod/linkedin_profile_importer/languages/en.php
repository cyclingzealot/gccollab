<?php

$english = array(

	'hybridauth:admin:diagnostics' => 'HybridAuth Diagnostics',

	'hybridauth:admin:diagnostics:requirement' => 'Requirement',
	'hybridauth:admin:diagnostics:status' => 'Status',
	'hybridauth:admin:diagnostics:message' => 'Notes',

	'hybridauth:admin:diagnostics:php_version' => 'PHP 5.2+',
	'hybridauth:admin:diagnostics:php_version:pass' => 'PHP >= 5.2.0 installed.',
	'hybridauth:admin:diagnostics:php_version:fail' => 'PHP >= 5.2.0 not installed.',

	'hybridauth:admin:diagnostics:elgg_oauth' => 'OAuth API 1.8 plugin',
	'hybridauth:admin:diagnostics:elgg_oauth:pass' => 'OAuth API 1.8 plugin is disabled',
	'hybridauth:admin:diagnostics:elgg_oauth:fail' => 'OAuth API plugin enabled.<br /><b>OAuth API plugin</b> is not compatible with this plugin, and many providers like twitter and myspace wont work! Please disabled it!',
	
	'hybridauth:admin:diagnostics:curl' => 'CURL Extension',
	'hybridauth:admin:diagnostics:curl:pass' => 'PHP Curl extension [http://www.php.net/manual/en/intro.curl.php] installed.',
	'hybridauth:admin:diagnostics:curl:fail' => 'PHP Curl extension [http://www.php.net/manual/en/intro.curl.php] not installed.',

	'hybridauth:admin:diagnostics:json' => 'JSON Extension',
	'hybridauth:admin:diagnostics:json:pass' => 'PHP JSON extension [http://php.net/manual/en/book.json.php] installed.',
	'hybridauth:admin:diagnostics:json:fail' => 'PHP JSON extension [http://php.net/manual/en/book.json.php] is disabled.',

	'hybridauth:admin:diagnostics:pecl_oauth' => 'PECL OAuth Extension',
	'hybridauth:admin:diagnostics:pecl_oauth:pass' => 'PECL OAuth extension [http://php.net/manual/en/book.oauth.php] not installed.',
	'hybridauth:admin:diagnostics:pecl_oauth:fail' => 'PECL OAuth extension [http://php.net/manual/en/book.oauth.php] installed. OAuth PECL extension is not compatible with this library.',

	'hybridauth:admin:elgg_social_login' => 'Import user settings from elgg_social_login',
	'hybridauth:admin:elgg_social_login:count' => 'It appears that you have had <i>elgg_social_login</i> installed on your site before enabling <i>linkedin_profile_importer</i>.<br />
							We have found <b>%s</b> users that have used their social accounts previously to log in to your site. <br />
							You can import their settings now so that their ability to use social accounts is not disrupted.<br />
							In case of conflicting user records, earlier user records will be preserved',
	'hybridauth:admin:elgg_social_login:action' => '%s records were updated',

	'hybridauth:admin:social_connect' => 'Import user settings from social_connect',
	'hybridauth:admin:social_connect:count' => 'It appears that you have had <i>social_connect</i> installed on your site before enabling <i>linkedin_profile_importer</i>.<br />
							We have found <b>%s</b> users that have used their social accounts previously to log in to your site. <br />
							You can import their settings now so that their ability to use social accounts is not disrupted.<br />
							In case of conflicting user records, earlier user records will be preserved',
	'hybridauth:admin:social_connect:action' => '%s records were updated',

	'hybridauth:debug_mode' => 'Debug Mode',
	'hybridauth:debug_mode:enable' => 'On',
	'hybridauth:debug_mode:disable' => 'Off',

	'hybridauth:provider:enable' => 'Enable this provider',
	'hybridauth:provider:enabled' => 'Enable',
	'hybridauth:provider:disabled' => 'Disable',

	'hybridauth:provider:id' => 'Provider ID',
	'hybridauth:provider:key' => 'Public Key',
	'hybridauth:provider:secret' => 'Private Key',

	'hybridauth:provider:LinkedIn:key' => 'API Key',
	'hybridauth:provider:LinkedIn:secret' => 'Secret Key',

	'hybridauth:provider:scope' => 'Permissions scope',
	
	'hybridauth:adapter:pass' => 'Service is active',

	'hybridauth:connect' => 'or connect with:',
	'hybridauth:login:provider' => 'You have been logged in using your %s account.',
	'hybridauth:link:provider' => 'You have successfully linked your account with %s.',
	'hybridauth:link:provider:error' => 'This %s account has already been linked to another profile in the system. Please log in using that profile to deauthorize it, or link this profile to another account.',
	'hybridauth:unlink:provider' => 'There was a problem authenticating your account with %s. The link has been removed. If you have deauthorized our site in %s, you can reanable the link by visiting your settings page.',

	'hybridauth:provider:user:authenticate' => 'Connect account',
	'hybridauth:provider:user:deauthorize' => 'Disconnect account',
	'hybridauth:provider:user:default' => 'You have not linked any LinkedIn accounts.',
	'hybridauth:provider:user:authenticated' => 'You have successfully linked your LinkedIn account.',
	'hybridauth:provider:user:deauthorized' => 'You have successfully unlinked your LinkedIn account.',
	
	'hybridauth:accounts' => 'LinkedIn accounts',

	'profile:birthday' => 'Birthday',
	'profile:address' => 'Mailing Address',
	'profile:languages' => 'Languages',
	'profile:industry' => 'Industry',
	'profile:awards' => 'Awards',
	'profile:associations' => 'Associations',
	'profile:linkedin_url' => 'LinkedIn',

	'tag_names:languages' => 'Languages',
	'tag_names:industry' => 'Industry',
	'tag_names:awards' => 'Awards',
	'tag_names:associations' => 'Associations',

	'linkedin' => 'HybridAuth LinkedIn tools',
	'linkedin:import' => 'Import LinkedIn Profile',
	'linkedin:import:instructions' => 'Use the checkboxes to specify which content you would like to import.',

	'linkedin:general' => 'Background and Contact Information',
	'linkedin:general:error' => '%s details could not be imported',
	'linkedin:general:success' => 'Background and contact information was updated successfully',

	'linkedin:positions' => 'Past and Current Positions',
	'linkedin:position:label' => '%s at %s',
	'linkedin:positions:select' => 'Select positions you would like to import or update:',
	'linkedin:positions:access' => 'Select an access level for imported items',
	'linkedin:position:success:import' => 'Position "%s" successfully imported',
	'linkedin:position:success:update' => 'Position "%s" successfully updated',
	'linkedin:position:error' => 'Position "%s" could not be imported',

	'linkedin:projects' => 'Projects',
	'linkedin:projects:select' => 'Select projects you would like to import or update:',
	'linkedin:projects:access' => 'Select an access level for imported items',
	'linkedin:project:success:import' => 'Project "%s" successfully imported',
	'linkedin:project:success:update' => 'Project "%s" successfully updated',
	'linkedin:project:error' => 'Project "%s" could not be imported',

	'linkedin:educations' => 'Educations',
	'linkedin:educations:select' => 'Select educations you would like to import or update:',
	'linkedin:educations:access' => 'Select an access level for imported items',
	'linkedin:education:success:import' => 'Education at "%s" successfully imported',
	'linkedin:education:success:update' => 'Education at "%s" successfully updated',
	'linkedin:education:error' => 'Education at "%s" could not be imported',

	'linkedin:publications' => 'Publications',
	'linkedin:publications:select' => 'Select publications you would like to import or update:',
	'linkedin:publications:access' => 'Select an access level for imported items',
	'linkedin:publication:success:import' => 'Publication "%s" successfully imported',
	'linkedin:publication:success:update' => 'Publication "%s" successfully updated',
	'linkedin:publication:error' => 'Publication "%s" could not be imported',

	'linkedin:patents' => 'Patents',
	'linkedin:patents:select' => 'Select patents you would like to import or update:',
	'linkedin:patents:access' => 'Select an access level for imported items',
	'linkedin:patent:success:import' => 'Patent "%s" successfully imported',
	'linkedin:patent:success:update' => 'Patent "%s" successfully updated',
	'linkedin:patent:error' => 'Patent "%s" could not be imported',

	'linkedin:certifications' => 'Certifications',
	'linkedin:certifications:label' => '%s issued by %s',
	'linkedin:certifications:select' => 'Select certifications you would like to import or update:',
	'linkedin:certifications:access' => 'Select an access level for imported items',
	'linkedin:certification:success:import' => 'Certification "%s" successfully imported',
	'linkedin:certification:success:update' => 'Certification "%s" successfully updated',
	'linkedin:certification:error' => 'Certification "%s" could not be imported',

	'linkedin:courses' => 'Courses',
	'linkedin:courses:select' => 'Select courses you would like to import or update:',
	'linkedin:courses:access' => 'Select an access level for imported items',
	'linkedin:course:success:import' => 'Course "%s" successfully imported',
	'linkedin:course:success:update' => 'Course "%s" successfully updated',
	'linkedin:course:error' => 'Course "%s" could not be imported',

	'linkedin:volunteer_experiences' => 'Volunteer Experiences',
	'linkedin:volunteer_experiences:label' => '%s at %s',
	'linkedin:volunteer_experiences:select' => 'Select volunteer experiences you would like to import or update:',
	'linkedin:volunteer_experiences:access' => 'Select an access level for imported items',
	'linkedin:volunteer_experience:success:import' => 'Volunteer experience "%s" successfully imported',
	'linkedin:volunteer_experience:success:update' => 'Volunteer experience "%s" successfully updated',
	'linkedin:volunteer_experience:error' => 'Volunteer experience "%s" could not be imported',

	'linkedin:recommendations' => 'Recommenadtions',
	'linkedin:recommendations:label' => 'By %s %s',
	'linkedin:recommendations:select' => 'Select recommendations you would like to import or update:',
	'linkedin:recommendations:access' => 'Select an access level for imported items',
	'linkedin:recommendation:success:import' => 'Recommendation by %s successfully imported',
	'linkedin:recommendation:success:update' => 'Recommendation by %s successfully updated',
	'linkedin:recommendation:error' => 'Recommendation by %s could not be imported',

	'linkedin:is_current' => 'present',
	'linkedin:project:url' => 'Project Link',
	'linkedin:publication:url' => 'Publication Link',
	'linkedin:publication:date' => 'Date of publication: %s',
	'linkedin:publication:publisher' => 'Publisher: %s',
	'linkedin:publication:authors' => 'Authors: %s',
	'linkedin:patent:status' => 'Status: %s',
	'linkedin:patent:status:patent' => 'Patent Issued',
	'linkedin:patent:status:application' => 'Patent Pending',
	'linkedin:patent:date:patent' => 'Issued on %s',
	'linkedin:patent:date:application' => 'Filed on %s',
	'linkedin:patent:office' => 'Patent office: %s',
	'linkedin:patent:inventors' => 'Inventors: %s',
	'linkedin:patent:url' => 'Patent Link',
	'linkedin:patent:number:patent' => 'Patent Number',
	'linkedin:patent:number:application' => 'Application Number',
	'linkedin:certification:calendar_start' => 'Issue date: %s',
	'linkedin:certification:calendar_end' => 'Expiration date: %s',
	'linkedin:certification:authority' => 'Issuing authority: %s',
	'linkedin:certification:number' => 'License number: %s',
	'linkedin:certification:url' => 'Certification Link',
	'linkedin:course:number' => 'Course number: %s',
	
	// Widgets
	'linkedin:widget:employment' => 'Employment',
	'linkedin:widget:employment:desc' => 'Employment history',
	'linkedin:widget:projects' => 'Projects',
	'linkedin:widget:projects:desc' => 'User projects',
	'linkedin:widget:education' => 'Education',
	'linkedin:widget:education:desc' => 'User education',
	'linkedin:widget:publications' => 'Publications',
	'linkedin:widget:publications:desc' => 'User publications',
	'linkedin:widget:patents' => 'Patents',
	'linkedin:widget:patents:desc' => 'User patents',
	'linkedin:widget:certification' => 'Certification',
	'linkedin:widget:certification:desc' => 'User certification',
	'linkedin:widget:courses' => 'Courses',
	'linkedin:widget:courses:desc' => 'User courses',
	'linkedin:widget:volunteer_experiences' => 'Volunteer Experiences',
	'linkedin:widget:volunteer_experiences:desc' => 'Volunteer Experiences',
	'linkedin:widget:recommendations' => 'Recommendations',
	'linkedin:widget:recommendations:desc' => 'Recommendations received by the user',
);

add_translation("en", $english);
