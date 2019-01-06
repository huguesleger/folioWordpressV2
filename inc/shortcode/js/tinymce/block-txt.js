(function() {
    tinymce.PluginManager.add('block_detail', function( editor, url ) {
        editor.addButton( 'block_detail', {
            title: 'block texte',
            icon: true,
            image: url + '/icon-txt.png',

            onclick: function() {
                editor.windowManager.open( {
                    title: 'block texte',
                    body: [

                        {
                            type   : 'textbox',
                            multiline: true,
                            minWidth : 350,
                            minHeight: 80,
                            name   : 'textbox',
                            label  : 'descprition',
                            value  : ''
                        },

                        {
                            type   : 'textbox',
                            multiline: true,
                            minWidth : 350,
                            name   : 'textbox2',
                            label  : 'objectif',
                            value  : ''
                        },

                        {
                            type   : 'listbox',
                            minWidth : 350,
                            name   : 'textbox3',
                            label  : 'ann\ée',
                            values : [
  			                        { text: '2025', value: '2025' },
                                { text: '2024', value: '2024' },
  			                        { text: '2023', value: '2023' },
                                { text: '2022', value: '2022' },
                                { text: '2021', value: '2021' },
                                { text: '2020', value: '2020' },
                                { text: '2019', value: '2019' },
                                { text: '2018', value: '2018' },
                                { text: '2017', value: '2017' },
                                { text: '2016', value: '2016' },
                                { text: '2015', value: '2015' },
                                { text: '2014', value: '2014' },
                                { text: '2013', value: '2013' },
                                { text: '2012', value: '2012' },
                                { text: '2011', value: '2011' },
                                { text: '2010', value: '2010' },

            			                    ]
                        },

                        {
                            type   : 'textbox',
                            multiline: true,
                            minWidth : 350,
                            name   : 'textbox4',
                            label  : 'env tech',
                            value  : ''
                        },

                        {
                            type   : 'listbox',
                            name   : 'colorbox',
                            label  : 'couleur du texte',
                            // text   : '#fff',
                            values : [
                                { text: 'light', value: '#fff' },
                                { text: 'dark', value: '#333' }
                            ]
                        },

                        {
                            type   : 'colorpicker',
                            name   : 'colorpicker',
                            label  : 'couleur du block',
                            classes: 'colorpicker',
                            value: ''
                        },





                    ],

                    onsubmit: function( e ) {
                        editor.insertContent( '[block_detail  txt="' + e.data.textbox + '" txt_min="' + e.data.textbox2 + '" txt_annee="' + e.data.textbox3 + '" txt_env="' + e.data.textbox4 + '" color="' + e.data.colorbox + '" background="' + e.data.colorpicker + '"]');
                    }
                });

            },
        });
    });

})();
