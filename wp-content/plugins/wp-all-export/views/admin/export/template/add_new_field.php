<script type="text/javascript">
    (function ($) {

        var get_valid_ajaxurl = function () {
            var $URL = ajaxurl;
            if (typeof export_id != "undefined") {
                if ($URL.indexOf("?") == -1) {
                    $URL += '?id=' + export_id;
                }
                else {
                    $URL += '&id=' + export_id;
                }
            }
            return $URL;
        };

        function processElementName($element, $elementName) {
            if ($element.find('input[name^=cc_type]').val().indexOf('image_') !== -1) {
                $elementName = 'Image ' + $elementName;
            }
            if ($element.find('input[name^=cc_type]').val().indexOf('attachment_') !== -1) {
                $elementName = 'Attachment ' + $elementName;
            }
            return $elementName;
        }

        $(function () {

            var $addAnotherForm = $('fieldset.wp-all-export-edit-column');
            $addAnotherForm.click(function () {
                var rel = $addAnotherForm.attr('rel');
            });

            $('select[name="column_value_type"]').change(function(){
                $('.column_name').val($(this).find('option:selected').text());
            });

            $('.column_name').keyup(function(){
                if($(this).val != '' && $(this).hasClass('error')) {
                    $(this).removeClass('error');
                }
            });

            $('.preview_action').unbind('click').click(function (event) {
                return false;
            });

            $('input[name="combine_multiple_fields"]').change(function () {
                if ($(this).val() == '1') {
                    $('#combine_multiple_fields_value_container').slideDown();
                    $('#combine_multiple_fields_data').slideDown();
                    $('.php_snipped').slideUp();
                    $('.wp-all-export-advanced-field-options-content').hide();
                    $('.export-single').slideUp();
                    $('.single-field-options').slideUp();
                    $('.column_name').val('');

                    $('.wpallexport-plugin .save_action').addClass('disabled');

                } else {
                    $('#combine_multiple_fields_value_container').slideUp();
                    $('#combine_multiple_fields_data').slideUp();
                    $('.export-single').slideDown();
                    $('.php_snipped').slideDown();
                    $('.single-field-options').slideDown();
                    $('.column_name').val($('select[name="column_value_type"]').find('option:selected').text());
                    $('.wp-all-export-advanced-field-options-content').show();

                    $('.wpallexport-plugin .save_action').removeClass('disabled');
                }
            });

            $('#combine_multiple_fields_value').droppable({
                drop: function (event, ui) {

                    $('.add-new-field-notice').slideDown();
                    event.preventDefault();
                    event.stopPropagation();
                    return false;
                }

            });

            $('#combine_multiple_fields_value').keydown(function (event, ui) {

                    $('.add-new-field-notice').slideDown();
                    event.preventDefault();
                    event.stopPropagation();
                    return false;
                });

            var availableNames = [
            ];

            $('#available_data .wpallexport-xml-element').each(function(){

                var text = $(this).html();
                if(availableNames.indexOf(text) < 0) {
                    availableNames.push(text);
                }
            });

            $('.column_name').autocomplete({
                source: availableNames,
                close: function() {
                    return false;
                }
            });
        });

    })(jQuery);
</script>
<form>
    <div class="wp-all-export-field-options" style="width: 54%; float:left; max-height: 70vh;">
        <div class="input" style="margin-bottom: 15px;">
            <label style="padding:4px; display: block;" class="wpae_column_name"><br />
<font size='1'><table class='xdebug-error xe-uncaught-exception' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Fatal error: Uncaught Error: Call to undefined function _e() in /app/public/wp-content/plugins/wp-all-export/views/admin/export/template/add_new_field.php on line <i>116</i></th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Error: Call to undefined function _e() in /app/public/wp-content/plugins/wp-all-export/views/admin/export/template/add_new_field.php on line <i>116</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0024</td><td bgcolor='#eeeeec' align='right'>359592</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/app/public/wp-content/plugins/wp-all-export/views/admin/export/template/add_new_field.php' bgcolor='#eeeeec'>.../add_new_field.php<b>:</b>0</td></tr>
</table></font>
