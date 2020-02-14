<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset class="search-fieldset">
		<a href="#" id="search-toggle" class="search-toggle" aria-hidden="true">
			<i class="fa fa-search"></i>
		</a>
		<label id="search-form" class="hide-search">
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		<input type="submit" class="screen-reader-text" value="<?php echo esc_html( 'Search' ); ?>">
	</fieldset>
</form>