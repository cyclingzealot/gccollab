<?php

elgg_register_event_handler('init', 'system', 'gc_profile_nudge_init');

function gc_profile_nudge_init() {

    elgg_extend_view('gc_streaming_content/widgets/stream_newsfeed_index/content', 'gc_profile_nudge/helloWorld');
    elgg_extend_view('resources/index', 'gc_profile_nudge/helloWorld');


    register_translations(elgg_get_plugins_path() . "gc_profile_nudge/languages/");
	elgg_echo("onboard:nudge:intro:title");
}
