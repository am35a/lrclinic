    $( document ).ready( function(){

        /* start - send message control's action */
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        $( "#f-name, #f-email, #f-message" ).keyup( function(){
            ableMessage();
            $( "#f-sendmessage" ).attr( "disabled" );
        });
        $( "#f-robot, #f-human" ).change( function(){
            ableMessage();
        });
        function ableMessage(){
            if( $( "#f-human" ).prop("checked") && $( "#f-name" ).val()!="" && $( "#f-message" ).val()!="" && pattern.test( $( "#f-email" ).val() ) )
            {
                $( "#f-sendmessage" ).removeAttr( "disabled" );
                $( "#form-sm" ).attr( "action", "sendmail.php" );
            }
            else
            {
                $( "#f-sendmessage" ).attr( "disabled", true );
                $( "#form-sm" ).removeAttr( "action" );
            }
        }
        /* end */

    });
