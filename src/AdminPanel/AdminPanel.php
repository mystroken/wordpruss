<?php

namespace WordPruss\AdminPanel;

/**
 * Class AdminPanel
 *
 * @package WordPruss\AdminPanel
 * @author Mystro Ken <mystroken@gmail.com>
 */
class AdminPanel
{
    protected $pageTitle;
	protected $function;
	protected $menuSlug;
	protected $capability;

	protected $menuTitle;
    protected $iconUrl;
    protected $position;

    public function __construct() {

	    add_menu_page(
		    $this->pluginName,
		    $this->pluginName,
		    'manage_options',
		    $this->pluginSlug,
		    array( $this, 'menu_view' ),
		    APPLEMANIAK_GALLERY_ICON_URL,
		    '65.1994'
	    );

    }


}