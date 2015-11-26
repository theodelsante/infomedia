    $(function(){

        $(".contact_formulaire input,.contact_formulaire textarea").on('blur', function()
        {
            $(this).next().addClass("hidden");
            var value = $(this).val();
            if ($(this).attr('name')=="email")
            {
                var re = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
                if(!re.test(value))
                { 
                $("#msg_email").removeClass("hidden");
                }
            }
            else
            {
                /*console.log(value);
                console.log($(this).next());*/
                if (value=="")
                {
                    $(this).next().removeClass("hidden");
                }
            }
        });


        $(".contact_formulaire form").submit(function(event){
            event.preventDefault();
            var name        = $("#name").val();
            console.log(name);
            var subject      = $("#subject").val();
            console.log(subject);
            var email      = $("#email").val();
            console.log(email);
            var message    = $("#message").val();
            console.log(message);
            var human    = $("#human").is(":checked");
            console.log(human);
            var dataString = name + subject + email + message;
            //alert(dataString);
            var msg_all    = "Merci de remplir tous les champs";
            var msg_alert  = "Merci de remplir ce champ";

            if (dataString === undefined || dataString === null) {
                $("#msg_all").html(msg_all);
            } else if (name == "") {
                $("#msg_name").html(msg_alert);
            } else if (subject == "") {
                $("#msg_subject").html(msg_alert);
            } else if (email == "" /*|| !validateEmail(email)*/) {
                $("#msg_email").html(msg_alert);
            } else if (message == "") {
                $("#msg_message").html(msg_alert);
            } else if (human == "robot") {
                $("#msg_human").html(msg_alert);
            }else {
                $.ajax({
                    type : "POST",
                    url: $(this).attr("action"),
                    data: $(this).serialize(),
                    success : function() {
                        $(".contact_formulaire form").html("<p>Formulaire bien envoyé</p>");
                    },
                    error: function() {
                        $(".contact_formulaire form").html("<p>Erreur d'appel, le formulaire ne peut pas fonctionner</p>");
                    }
                });
            }

            return false;
        });
    });
