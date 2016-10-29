var main = function(){
	$modal = $('.modal-frame');    
        $overlay = $('.modal-overlay');    /* Need this to clear out the keyframe classes so they dont clash with each other between ener/leave. Cheers. */    

        $modal.bind('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e){      
            if($modal.hasClass('state-leave')) {       
             $modal.removeClass('state-leave');      
            }    
        });    

        $('.close').on('click', function(){      
            $overlay.removeClass('state-show');      
            $modal.removeClass('state-appear').addClass('state-leave');   
        });

        $('.modal-overlay').on('click', function(){      
            $overlay.removeClass('state-show');      
            $modal.removeClass('state-appear').addClass('state-leave');   
        });    

        $('.open').on('click', function(){      
            $overlay.addClass('state-show');      
            $modal.removeClass('state-leave').addClass('state-appear');    
        });

        $( function() {
          // init Isotope
          var $container = $('.isotope').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            getSortData: {
              name: '.name',
              symbol: '.symbol',
              number: '.number parseInt',
              category: '[data-category]',
              weight: function( itemElem ) {
                var weight = $( itemElem ).find('.weight').text();
                return parseFloat( weight.replace( /[\(\)]/g, '') );
              }
            }
          });

          // filter functions
          var filterFns = {
            // show if number is greater than 50
            numberGreaterThan50: function() {
              var number = $(this).find('.number').text();
              return parseInt( number, 10 ) > 50;
            },
            // show if name ends with -ium
            ium: function() {
              var name = $(this).find('.name').text();
              return name.match( /ium$/ );
            }
          };

          // bind filter button click
          $('#filters').on( 'click', 'button', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            filterValue = filterFns[ filterValue ] || filterValue;
            $container.isotope({ filter: filterValue });
          });
          
          // change is-checked class on buttons
          $('.button-group').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'button', function() {
              $buttonGroup.find('.is-checked').removeClass('is-checked');
              $( this ).addClass('is-checked');
            });
          });
          
        });
};

$(document).ready(main);