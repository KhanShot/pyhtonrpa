jQuery(function($) {
	const {counters} = window.wpym;

	$(this).on('added_to_wishlist', function (e, data) {
		counters.forEach(counter => {
			ym(counter.number, 'reachGoal', 'ym-add-to-wishlist');
		});
	});
});
