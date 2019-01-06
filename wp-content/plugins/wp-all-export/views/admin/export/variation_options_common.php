<script type="text/javascript">
    (function ($) {
        $(function () {

            function updateCheckSelect() {
                var exportVariations = $('#export_variations').val();
                var exportVariationsTitle = $('#export_variations_title').val();

                $('.sub-options-' + exportVariations).css('display', 'block');
            }

            $('.export_variations').change(function () {

                var inputName = $(this).attr('name');
                $('.sub-options').slideUp('fast');
                var value = $('input[name='+inputName+']:checked').val();
                var $thisInput = $('input.export_variations[value='+value +']');
                $thisInput.prop('checked', 'checked');
                $('#export_variations').val(value);
                if (value <= 2) {
                    $thisInput.parent().parent().find('.sub-options').slideDown('fast');
                    $thisInput.parent().parent().find('.sub-options').find('input').eq(0).attr('checked', 'checked');
                }
            });
            
            $('.export_variations_title').change(function(event){

                var inputName = $(this).attr('name');
                var value = $('input[name='+inputName +']:checked').val();
                var $thisInput = $('.export_variations_title[value='+value +']');
                $thisInput.prop('checked', 'checked');

                $('#export_variations_title').val(value);
            });

            updateCheckSelect();
        });
    })(jQuery);
</script>

<input type="hidden" id="export_variations" name="export_variations" value="<br /><font size='1'><table class='xdebug-error xe-uncaught-exception' dir='ltr' border='1' cellspacing='0' cellpadding='1'><tr><th align='left' bgcolor='#f57900' colspan="><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Fatal error: Uncaught Error: Class 'XmlExportEngine' not found in /app/public/wp-content/plugins/wp-all-export/views/admin/export/variation_options_common.php on line <i>41</i></th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Error: Class 'XmlExportEngine' not found in /app/public/wp-content/plugins/wp-all-export/views/admin/export/variation_options_common.php on line <i>41</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0067</td><td bgcolor='#eeeeec' align='right'>359592</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/app/public/wp-content/plugins/wp-all-export/views/admin/export/variation_options_common.php' bgcolor='#eeeeec'>.../variation_options_common.php<b>:</b>0</td></tr>
</table></font>
