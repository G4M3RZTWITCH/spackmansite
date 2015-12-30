<script>
		viewModel.menu = getMenuViewModel();
        ko.applyBindings(viewModel);
        viewModel.menu.visiblelist(viewModel.menu.dropdowns.about);
        
		$(document).ready(function(){
			$('header').on('mouseenter', '.is-dropdown', {'show': true}, dostuff);
			$('header').on('mouseleave', '.is-dropdown', {'show': false}, dostuff);
		});
		function dostuff(event){
            var $dropdown = $('.is-dropdown');
            if($dropdown.is(':hidden') && !event.data.show){return;}
			var $gallerydropdown = $('.gallery-dropdown');
			if(event.data.show && viewModel.menu.dropdowns[event.target.dataset.name]){
                viewModel.menu.visiblelist(viewModel.menu.dropdowns[event.target.dataset.name]);
                //$dropdown.offset({top: $dropdown.offset().top, left: event.target.offsetLeft});
				$gallerydropdown.show();
				$gallerydropdown.one('mouseenter', function(e){
					$gallerydropdown.show();
				});
				$gallerydropdown.one('mouseleave', function(e){
					$gallerydropdown.hide();
				});
			}else{
				$gallerydropdown.hide();
			}
			
		}
</script>