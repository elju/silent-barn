/**
 * Home page
 */

var HomePage = new PageClass;
HomePage.extend({

    // set up page event handlers
    //
    load: function() {
        this.base();

        var self = this;
        _.defer( function() {
            self.urls();
        });
        
        App.Log.debug( 'HomePage load()', 'sys' );
    },

    urls: function() {
        // set up section links
        //
        $( '.section-link' ).on( 'click', function() {
            var target = $( this ).data( 'target' ),
                $section = $( '#section-' + target );

            if ( ! $section.length ) {
                return false;
            }

            App.Page.scrollTo( 
                $section,
                {
                    topPadding: -50
                });
        });

        // paypal links
        //
        $( '.paypal-donate' ).on( 'click', function() {
            $( 'form#paypal-form' ).submit();
        });

        // back to top
        //
        $( '.return-top' ).on( 'click', function() {
            App.Page.returnTop();
        });
    }

});




// End of file
