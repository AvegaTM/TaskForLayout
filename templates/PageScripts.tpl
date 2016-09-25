</article>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" type="text/javascript"></script>
<script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script>
    $( document ).ready();
</script>
{$myScript}
{literal}<script>
var p_name;
var p_phone;
var p_email;
function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

$('#name')
        .keyup(function( event ){
            p_name = $(this);
            if (p_name.val().search(/\d/i) >= 0){
                console.log('---===['+p_name.val()+']===---');
                $(p_name).popover({
                    title: 'Warning!',
                    placement: 'top',
                    content: 'Enter Symbols!',
                    constraints: 'focus'
                }).popover('show');
            } else {
                $(p_name).popover('destroy');
            }
        })
        .keydown(function( event ){
            if ( event.which == 13 ) {
                event.preventDefault();
            }
        });

$('#phone')
        .keyup(function( event ) {
            p_phone = $(this);
            if (!isNumeric(p_phone.val())){
                console.log('-=[ '+p_phone+' ]=-');
                $(p_phone).popover({
                    title: 'Warning!',
                    content: 'Enter Numbers!',
                    placement: 'top'
                }).popover('show');
            } else {
                $(p_phone).popover('destroy');
            }
        })
        .keydown(function( event ) {
            if ( event.which == 13 ) {
                event.preventDefault();
            }
        });
</script>{/literal}