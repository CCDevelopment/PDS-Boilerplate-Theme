<?php
/**
* Search form template, for the top header
**/?>
<form id="searchform" role="search" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
  <div class="simple-search input-group">
    <input class="form-control text-1 search-field" id="headerSearch" name="s" type="search" value="" placeholder="Search...">
    <span class="input-group-append">
      <button class="btn search-submit" value="Search" type="submit">
        <i class="fa fa-search header-nav-top-icon"></i>
      </button>
    </span>
  </div>
</form>
