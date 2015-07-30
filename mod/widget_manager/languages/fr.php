<?php 

	$french = array(
		
		// special access level
		'LOGGED_OUT' => "Logged out users",
		'access:admin_only' => "Administrators only",
		
		// admin menu items
		'admin:widgets' => "Widgets",
		'admin:widgets:manage' => "Manage",
		'admin:widgets:manage:index' => "Manage Index",
		'admin:statistics:widgets' => "Widget Usage",
		
		// widget edit wrapper
		'widget_manager:widgets:edit:custom_title' => "Titre personnalisé",
		'widget_manager:widgets:edit:custom_url' => "lien du titre personnalisé",
		'widget_manager:widgets:edit:hide_header' => "Hide header",
		'widget_manager:widgets:edit:custom_class' => "Custom CSS class",
		'widget_manager:widgets:edit:disable_widget_content_style' => "No widget style",
			
		// group
		'widget_manager:groups:enable_widget_manager' => "Activer la gestion des widgets",
	
		// admin settings
		'widget_manager:settings:index' => "Index",
		'widget_manager:settings:group' => "Group",
		
		'widget_manager:settings:custom_index' => "Use Widget Manager custom index?",
		'widget_manager:settings:custom_index:non_loggedin' => "For non-loggedin users only",
		'widget_manager:settings:custom_index:loggedin' => "For loggedin users only",
		'widget_manager:settings:custom_index:all' => "For all users",
	
		'widget_manager:settings:widget_layout' => "Choose a widget layout",
		'widget_manager:settings:widget_layout:33|33|33' => "Default layout (33% per column)",
		'widget_manager:settings:widget_layout:50|25|25' => "Wide left column (50%, 25%, 25%)",
		'widget_manager:settings:widget_layout:25|50|25' => "Wide middle column (25%, 50%, 25%)",
		'widget_manager:settings:widget_layout:25|25|50' => "Wide right column (25%, 25%, 50%)",
		'widget_manager:settings:widget_layout:75|25' => "Two column (75%, 25%)",
		'widget_manager:settings:widget_layout:60|40' => "Two column (60%, 40%)",
		'widget_manager:settings:widget_layout:50|50' => "Two column (50%, 50%)",
		'widget_manager:settings:widget_layout:40|60' => "Two column (40%, 60%)",
		'widget_manager:settings:widget_layout:25|75' => "Two column (25%, 75%)",
		
		'widget_manager:settings:index_top_row' => "Show a top row on the index page",
		'widget_manager:settings:index_top_row:none' => "No top row",
		'widget_manager:settings:index_top_row:full_row' => "Full width row",
		'widget_manager:settings:index_top_row:two_column_left' => "Two column aligned left",
		
		'widget_manager:settings:disable_free_html_filter' => "Disable HTML filtering for Free HTML widgets on index (ADMIN ONLY)",
		
		'widget_manager:settings:group:enable' => "Enable Widget Manager for groups",
		'widget_manager:settings:group:option_default_enabled' => "Widget management for groups default enabled",
		'widget_manager:settings:group:option_admin_only' => "Only administrator can enable group widgets",

		'widget_manager:settings:multi_dashboard' => "Multi Dashboard",
		'widget_manager:settings:multi_dashboard:enable' => "Enable multiple dashboards",

		// views
		// settings
		'widget_manager:forms:settings:no_widgets' => "No widgets to manage",
		'widget_manager:forms:settings:can_add' => "Can be added",
		'widget_manager:forms:settings:hide' => "Hide",

		// lightbox
		'widget_manager:button:add' => "Ajouter un widget",
		'widget_manager:widgets:lightbox:title:dashboard' => "Ajouter des widgets à votre tableau de bord personnel",
		'widget_manager:widgets:lightbox:title:profile' => "Add widgets to your public profile",
		'widget_manager:widgets:lightbox:title:index' => "Add widgets to the index",
		'widget_manager:widgets:lightbox:title:groups' => "Add widgets to the group profile",
		'widget_manager:widgets:lightbox:title:admin' => "Add widgets to your admin dashboard",
        'widget_manager:widgets:lightbox:filter:no-results' => "Aucun résultat ne correspond aux critères de votre filtre.",

        // multi dashboard
		'widget_manager:multi_dashboard:add' => "Nouvel onglet",
		'widget_manager:multi_dashboard:extras' => "Ajouter en tant qu’onglet du tableau de bord",
		
		// multi dashboard - edit
		'widget_manager:multi_dashboard:new' => "Create a new dashboard",
		'widget_manager:multi_dashboard:edit' => "Edit dashboard: %s",
		
 		'widget_manager:multi_dashboard:types:title' => "Sélectionnez le type de tableau de bord",
		'widget_manager:multi_dashboard:types:widgets' => "Widgets",
		'widget_manager:multi_dashboard:types:iframe' => "iFrame",
		
		'widget_manager:multi_dashboard:num_columns:title' => "Nombre de colonnes",
		'widget_manager:multi_dashboard:iframe_url:title' => "iFrame URL",
		'widget_manager:multi_dashboard:iframe_url:description' => "Note: please make sure the URL begins with http:// or https://. Not all sites may support the use of iFrames",
		'widget_manager:multi_dashboard:iframe_height:title' => "iFrame height",
		
		'widget_manager:multi_dashboard:required' => "Les champs marqués d’un * sont obligatoires",
		
		// actions
		// manage
		'widget_manager:action:manage:error:context' => "Invalid context to save widget configuration",
		'widget_manager:action:manage:error:save_setting' => "Error while saving the setting %s for widget %s",
		'widget_manager:action:manage:success' => "Widget configuration saved successfully",
		
		// multi dashboard - edit
		'widget_manager:actions:multi_dashboard:edit:error:input' => "Invalid input, please submit a title",
		'widget_manager:actions:multi_dashboard:edit:success' => "Succesfully created/edited a dashboard",
		
		// multi dashboard - delete
		'widget_manager:actions:multi_dashboard:delete:error:delete' => "Unable to remove dashboard %s",
		'widget_manager:actions:multi_dashboard:delete:success' => "Dashboard %s succesfully removed",
		
		// multi dashboard - drop
		'widget_manager:actions:multi_dashboard:drop:success' => "The widget has successfully been moved the the new dashboard",
		
		// multi dashboard - reorder
		'widget_manager:actions:multi_dashboard:reorder:error:order' => "Please supply a new order",
		'widget_manager:actions:multi_dashboard:reorder:success' => "Dashboard reordered successfully",
		
		// widgets
		'widget_manager:widgets:edit:advanced' => "Avancé",
		'widget_manager:widgets:fix' => "Fix this widget on the dashboard/profile",
			
		// index_login
		'widget_manager:widgets:index_login:description' => "Show a login box",
		'widget_manager:widgets:index_login:welcome' => "<b>%s</b> welcome on the <b>%s</b> community",
		
		// index_members
		'widget_manager:widgets:index_members:name' => "Members",
		'widget_manager:widgets:index_members:description' => "Show the members of your site",
		'widget_manager:widgets:index_members:user_icon' => "Must the users have a profileicon",
		'widget_manager:widgets:index_members:no_result' => "No users found",
		
		// index_memebers_online
		'widget_manager:widgets:index_members_online:name' => "Online members",
		'widget_manager:widgets:index_members_online:description' => "Show the online members of your site",
		'widget_manager:widgets:index_members_online:member_count' => "How many members to show",
		'widget_manager:widgets:index_members_online:user_icon' => "Must the users have a profileicon",
		'widget_manager:widgets:index_members_online:no_result' => "No users found",
		
		// index_bookmarks
		'widget_manager:widgets:index_bookmarks:description' => "Show the latest bookmarks on your community",
		
		// index_activity
		'widget_manager:widgets:index_activity:description' => "Show the latest activity on your site",
	
		// image_slider
		'widget_manager:widgets:image_slider:name' => "Image Slider",
		'widget_manager:widgets:image_slider:description' => "Show an Image Slider",
		'widget_manager:widgets:image_slider:slider_type' => "Slider Type",
		'widget_manager:widgets:image_slider:slider_type:s3slider' => "s3Slider",
		'widget_manager:widgets:image_slider:slider_type:flexslider' => "FlexSlider",
		'widget_manager:widgets:image_slider:seconds_per_slide' => "Seconds per slide",
		'widget_manager:widgets:image_slider:slider_height' => "Height of slides (pixels)",
		'widget_manager:widgets:image_slider:overlay_color' => "Overlay Color (hex)",
		'widget_manager:widgets:image_slider:title' => "Slide",
		'widget_manager:widgets:image_slider:label:url' => "Image url",
		'widget_manager:widgets:image_slider:label:text' => "Text",
		'widget_manager:widgets:image_slider:label:link' => "Link",
		'widget_manager:widgets:image_slider:label:direction' => "Direction",
		'widget_manager:widgets:image_slider:direction:top' => "Top",
		'widget_manager:widgets:image_slider:direction:right' => "Right",
		'widget_manager:widgets:image_slider:direction:bottom' => "Bottom",
		'widget_manager:widgets:image_slider:direction:left' => "Left",
		
		'widget_manager:filter_widgets' => "Filtrer des widgets",
	);
	add_translation("fr", $french);

	$twitter_search = array(
		// twitter_search
		'widgets:twitter_search:name' => "Recherche Twitter",
		'widgets:twitter_search:description' => "Afficher une recherche personnalisée de Twitter",
		
		'widgets:twitter_search:query' => "Search query",
		'widgets:twitter_search:query:help' => "try some advanced queries",
		'widgets:twitter_search:title' => "Widget title (optional)",
		'widgets:twitter_search:subtitle' => "Widget subtitle (optional)",
		'widgets:twitter_search:height' => "Widget height (pixels)",
		'widgets:twitter_search:background' => "Set a custom background color (HEX eq 4690d6)",
		'widgets:twitter_search:not_configured' => "This widget is not yet configured",
	);
	add_translation("fr", $twitter_search);
	
	$content_by_tag = array(
		// content_by_tag
		'widgets:content_by_tag:name' => "Contenu trié par mot-clé",
		'widgets:content_by_tag:description' => "Trouver du contenu au moyen d’un mot-clé",
		
		'widgets:content_by_tag:owner_guids' => "Who needs to write the items",
		'widgets:content_by_tag:group_only' => "Only show content from this group",
		'widgets:content_by_tag:entities' => "Which entities to show",
		'widgets:content_by_tag:tags' => "Tag(s) (comma separated)",
		'widgets:content_by_tag:tags_option' => "How to use the tag(s)",
		'widgets:content_by_tag:tags_option:and' => "AND",
		'widgets:content_by_tag:tags_option:or' => "OR",
		'widgets:content_by_tag:display_option' => "How to list the content",
		'widgets:content_by_tag:display_option:normal' => "Normal",
		'widgets:content_by_tag:display_option:simple' => "Simple",
		'widgets:content_by_tag:display_option:slim' => "Slim (single line)",
		'widgets:content_by_tag:highlight_first' => "Number of highlighted items (slim only)",
	);
	add_translation("fr", $content_by_tag);
	
	$rss = array(
		// RSS widget (based on SimplePie)
		'widgets:rss:title' => "RSS Feed",
		'widgets:rss:description' => "Afficher un fil RSS (à partir de SimplePie)",
		'widgets:rss:error:notset' => "Aucune URL de fil RSS indiquée",
		
		'widgets:rss:settings:rss_count' => "Number of feeds to show",
		'widgets:rss:settings:rssfeed' => "URL of the RSS feed",
		'widgets:rss:settings:show_feed_title' => "Show feed title",
		'widgets:rss:settings:excerpt' => "Show an excerpt",
		'widgets:rss:settings:show_item_icon' => "Show item icon (if available)",
		'widgets:rss:settings:post_date' => "Show post date",
		'widgets:rss:settings:post_date:option:friendly' => "Show friendly time",
		'widgets:rss:settings:post_date:option:date' => "Show date",
	);
	add_translation("fr", $rss);
	
	$free_html = array(
		// Free HTML
		'widgets:free_html:title' => "HTML libre",
		'widgets:free_html:description' => "Ajouter votre propre contenu en HTML",
		'widgets:free_html:settings:html_content' => "Please supply the HTML to display",
		'widgets:free_html:no_content' => "This widget is not yet configured",
		
	);
	add_translation("fr", $free_html);
	
	$tagcloud = array(
		'widgets:tagcloud:description' => "Afficher un nuage de mots-clés en fonction de l’ensemble du contenu du site, du groupe ou de l’utilisateur",
		'widgets:tagcloud:no_data' => "No data available to display a tagcloud",
	);
	add_translation("fr", $tagcloud);
	
	$entity_statistics = array(
		// entity_statistics widget
		"widgets:entity_statistics:title" => "Statistics", 
		"widgets:entity_statistics:description" => "Shows site statistics", 
		"widgets:entity_statistics:settings:selected_entities" => "Select the entities you wish to show", 
	
	);
	add_translation("fr", $entity_statistics);
	
	$messages = array(
		// messages widget
		"widgets:messages:description" => "Shows your latest messages", 
		"widgets:messages:not_logged_in" => "You need to be logged in to use this widget", 
		"widgets:messages:settings:only_unread" => "Only show unread messages",
	);
	add_translation("fr", $messages);
	
	$favorites = array(
		// favorites widget
		"widgets:favorites:title" => "Favoris de la communauté", 
		"widgets:favorites:description" => "indique vos pages Web préférées de la communauté",
		 
		"widgets:favorites:delete:success" => "Favorite removed", 
		"widgets:favorites:delete:failed" => "Failed to remove favorite", 
		"widgets:favorites:save:success" => "Favorite created", 
		"widgets:favorites:save:failed" => "Failed to create favorite", 
		"widgets:favorites:toggle:missing_input" => "Missing input for this action", 
		"widgets:favorites:content:more_info" => "joutez les pages Web de votre communauté qui sont vos préférées à ce widget en cliquant sur l’icône en forme d’étoile sur le menu latéral.", 

		"widgets:favorites:menu:add" => "Ajouter cette page à votre widget des favoris", 
		"widgets:favorites:menu:remove" => "Remove this page from your favorites widget", 
			
	);
	add_translation("fr", $favorites);
	