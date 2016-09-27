<?php

class SquibAdmin extends ModelAdmin {

	private static $managed_models = array(
		'Squib',
	);

	private static $url_segment = 'squib';

	private static $menu_title = 'Squibs';
}
