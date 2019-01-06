(function() {
    tinymce.PluginManager.add('block_fullimg', function( editor, url ) {
        editor.addButton( 'block_fullimg', {
            title: 'background image ',
            icon: true,
            image: url + '/icon-img.png',

            onclick: function() {
                editor.windowManager.open( {
                    title: 'block image',
                    body: [

                      {
                          type: 'textbox',
                          name: 'img',
                          label: tinyMCE_object.image_title,
                          value: '',
                          classes: 'my_input_image',
                      },
                      {
                          type: 'button',
                          name: 'my_upload_button',
                          label: '',
                          text: tinyMCE_object.image_button_title,
                          classes: 'my_upload_button',
                      },

                      {
                      type   : 'textbox',
                      name   : 'height',
                      label  : 'hauteur de l\'image',
                      value  : ''
                  },

                  {
                  type   : 'textbox',
                  name   : 'padding',
                  label  : 'padding',
                  value  : ''
              },

                      {
                      type   : 'textbox',
                      name   : 'class',
                      label  : 'class (ajouter la classe "wrap-content-single")',
                      value  : 'wrap-content-single'
                  },





                    ],

                    onsubmit: function( e ) {
                        editor.insertContent( '[block_fullimg img="' + e.data.img + '" height="' + e.data.height + '" padding="'+ e.data.padding +'" class="' + e.data.class + '"]');
                    }
                });

            },
        });
    });

})();
