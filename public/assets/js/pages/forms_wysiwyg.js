$(function() {
    // wysiwyg editor
    altair_wysiwyg.init();
});

// wysiwyg editor
altair_wysiwyg = {
    init: function() {
        var $wysiwygEditor = $('#wysiwyg_editor');

        if($wysiwygEditor.length) {
            $wysiwygEditor
                .ckeditor(function() {
                /* Callback function code. */
                }, {
                    customConfig: '../../assets/js/custom/ckeditor_config.js'
                });
        }

    }
};