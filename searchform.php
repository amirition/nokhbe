
<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<form role="search" method="get" class="search-form cell medium-12 grid-x" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="grid-x cell medium-12">
		<div class="cell small-10">
		</div>
		<div class="cell small-2">
		</div>
	</div>

	<div class="input-group cell medium-12 grid-x">
		<input type="search" id="<?php echo $unique_id; ?>" class="input-group-field" placeholder="جستجو..." value="<?php echo get_search_query(); ?>" name="s" />
		<div class="input-group-button">
			<button type="submit" class="search-submit postfix button success">جستجو</button>
		</div>
	</div>
</form>