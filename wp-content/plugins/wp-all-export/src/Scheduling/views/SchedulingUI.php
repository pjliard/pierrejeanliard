<style type="text/css">
    .days-of-week {
        margin-left: 5px;
    }

    .days-of-week li {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px 30px;;
        display: inline-block;
        margin-right: 10px;
        cursor: pointer;
        font-weight: bold;
        width: 38px;
        text-align: center;
        height: 16px;
        color: rgb(68,68,68);
        float: left;
    }

    .days-of-week li.selected {
        color: #fff;
        background-color: #425F9A;
        border-color: #585858;
    }

    #weekly, #monthly {
        height: 40px;
    }

    .timepicker {
        width: 100px;
        padding: 10px;
        border-radius: 5px;
        margin-right: 10px;
    }

    #times {
        margin-top: 5px;
        width: 800px;
    }

    #times input {
        margin-top: 10px;
        margin-left: 0;
        float: left;
    }

    #times input.error {
        border-color: red !important;
    }

    .subscribe {

    }

    .subscribe .button-container {
        float: left;
        width: 150px;
    }

    .subscribe .text-container {
        float: left;
        width: auto;
    }

    .subscribe .text-container p {
        margin: 0;
        color: #425F9A;
        font-size: 14px;
        font-weight: bold;
    }

    .subscribe .text-container p a {
        color: #425F9A;
        text-decoration: underline;
    }

    .save {
        padding-left: 5px;
        padding-top: 5px;
        width: auto;
    }

    .ui-timepicker-wrapper {
        width: 98px;
    }

    .easing-spinner {
        width: 30px;
        height: 30px;
        position: relative;
        display: inline-block;

        margin-top: 7px;
        margin-left: -15px;

        float: left;
    }

    .double-bounce1, .double-bounce2 {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background-color: #fff;
        opacity: 0.6;
        position: absolute;
        top: 0;
        left: 0;

        -webkit-animation: sk-bounce 2.0s infinite ease-in-out;
        animation: sk-bounce 2.0s infinite ease-in-out;
    }

    .double-bounce2 {
        -webkit-animation-delay: -1.0s;
        animation-delay: -1.0s;
    }

    .wpae-export-complete-save-button svg {
        margin-top: 7px;
        margin-left: -15px;
        position: relative;
        display: none;
    }

    @-webkit-keyframes sk-bounce {
        0%, 100% {
            -webkit-transform: scale(0.0)
        }
        50% {
            -webkit-transform: scale(1.0)
        }
    }

    @keyframes sk-bounce {
        0%, 100% {
            transform: scale(0.0);
            -webkit-transform: scale(0.0);
        }
        50% {
            transform: scale(1.0);
            -webkit-transform: scale(1.0);
        }
    }

    #add-subscription-field {
        position: absolute;
        left: -152px;
        top: -2px;
        height: 46px;
        border-radius: 5px;
        font-size: 17px;
        padding-left: 10px;
        display: none;
        width: 140px;
    }

    #find-subscription-link {
        position: absolute;
        left: 133px;
        top: 14px;
        height:30px;
        width: 230px;
        display: none;
    }

    #find-subscription-link a {
        display: block;
        width: 100%;
        height: 46px;
        white-space: nowrap;
    }

    #weekly li.error, #monthly li.error {
        border-color: red;
    }

    .chosen-single {
        margin-bottom: 0 !important;
    }

    .chosen-container.chosen-with-drop .chosen-drop {
        margin-top: -3px;
    }

    .wpallexport-preview-content h4{
        font-size: 14px;
        margin-bottom: 5px;
        color: #40acad;
        text-decoration: none;
    }

    #scheduling-form h4 {
        display: inline-block;;
    }

    .manual-scheduling {
        margin-left: 26px;
    }
</style>
<br />
<font size='1'><table class='xdebug-error xe-uncaught-exception' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Fatal error: Uncaught Error: Class 'Wpae\Scheduling\Scheduling' not found in /app/public/wp-content/plugins/wp-all-export/src/Scheduling/views/SchedulingUI.php on line <i>203</i></th></tr>
<tr><th align='left' bgcolor='#f57900' colspan="5"><span style='background-color: #cc0000; color: #fce94f; font-size: x-large;'>( ! )</span> Error: Class 'Wpae\Scheduling\Scheduling' not found in /app/public/wp-content/plugins/wp-all-export/src/Scheduling/views/SchedulingUI.php on line <i>203</i></th></tr>
<tr><th align='left' bgcolor='#e9b96e' colspan='5'>Call Stack</th></tr>
<tr><th align='center' bgcolor='#eeeeec'>#</th><th align='left' bgcolor='#eeeeec'>Time</th><th align='left' bgcolor='#eeeeec'>Memory</th><th align='left' bgcolor='#eeeeec'>Function</th><th align='left' bgcolor='#eeeeec'>Location</th></tr>
<tr><td bgcolor='#eeeeec' align='center'>1</td><td bgcolor='#eeeeec' align='center'>0.0019</td><td bgcolor='#eeeeec' align='right'>359568</td><td bgcolor='#eeeeec'>{main}(  )</td><td title='/app/public/wp-content/plugins/wp-all-export/src/Scheduling/views/SchedulingUI.php' bgcolor='#eeeeec'>.../SchedulingUI.php<b>:</b>0</td></tr>
</table></font>
