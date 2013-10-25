$(document).ready(function() {
    //persona = new Personas();
    //App.PersonasControl.newUser(persona);
    Hmaster = $('#masterPage').height();
    Wmaster = $('#masterPage').width();

    $('#capa_control').css({height: Hmaster, width: Wmaster});

    $('#btn_participa').on('click', function(event) {
        facebookLogin();
    });

    $('#btn_participa_off').on('click', function(event) {
        $('#capa_control').fadeIn();
    });

    $('#btn_close').on('click', function(event) {
        $('#formulario').fadeOut();
        $('#capa_control').fadeOut();
        $('.validity-tooltip').fadeOut();
    });

    if($("form")){
        $(function() {
            //$.validity.setup({ outputMode:"modal"});
            $("form").validity(function() {
                $('#nombre').require();
                $('#mail').require().match("email");
                $("#birthday").require().match("date").lessThanOrEqualTo(new Date());
                $('#localidad').require();
                $('#apellido').require();
                $("#dni").require().match("number");
                $("#telefono").require().match("number");
                $('#provincia').require();
                $('#domicilio').require();
                var result = $.validity.end();
                console.log(result.valid);    
                if (result.valid == true) {
                    Envia_form();
                    $('#formulario').fadeOut();
                    $('#capa_control').fadeOut();
                    $('#btn_participa_off').show();
                    $('#btn_participa').hide();
                    return false
                }else{
                    
                };
            });
        });     
    }

});


function Envia_form() {
    $.ajax({    
        url: "script_form.php",
        type: 'POST',
        data:{
            Nombre : document.getElementById('nombre').value,
            Email : document.getElementById('mail').value,
            fechaNac : document.getElementById('birthday').value,
            Sexo : document.getElementById('sexo').options.selectedIndex,
            Localidad : document.getElementById('localidad').value,
            Apellido : document.getElementById('apellido').value,
            Dni : document.getElementById('dni').value,
            Telefono3 : document.getElementById('telefono').value,
            Provincia : document.getElementById('provincia').value,
            Domicilio : document.getElementById('domicilio').value,
            Perfil : document.getElementById('perfil').value,
            datosInternos : document.getElementById('id').value,
            Email2 : document.getElementById('usuario').value,
            idSitio : document.getElementById('idSitio').value,
            idSegmento : document.getElementById('idSegmento').value,
            idPromocion : document.getElementById('idPromocion').value
        },
        beforeSend: function (datos) {
            console.log(datos);
        },
        complete: function(datos) {
            console.log(datos);
        },
        error : function(xhr, textStatus, errorThrown) {
            console.log(xhr+"- "+textStatus+"- "+errorThrown);
        },
        success: function(datos){ 
            shareApp('facebook');
            console.log(datos);
        }
    });
    return false;
}

window.fbAsyncInit = function() {
    FB.init({
        appId      : '477155915687015', // App ID
        channelUrl : 'https://www.fidelitytools.info/ariel/', // Channel File
        status     : true, // check login status
        cookie     : true, // enable cookies to allow the server to access the session
        xfbml      : true  // parse XFBML
    });
    FB.Canvas.setAutoGrow();

    /* Revisar es status del usuario al entrar a la pagina */
    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') { // Esta conectado
            var uid = response.authResponse.userID;
            var accessToken = response.authResponse.accessToken;
            console.log("Entro");
            flag = true;
            chekUser();
        } else if (response.status === 'not_authorized') { // La aplicacion no esta atoriada
            logout();
        } else { // No esta conectado
            logout();
        }
    });
        
    /* Eventos para capturar el login del usuario */
    FB.Event.subscribe('auth.login', function(response) { // cuando autoriza conexion
        login();
    });
    
    /* Funcion que se ejecuta cuando ya se autoriza la conexion */
    function login(){
        FB.api('/me', function(response) {
            //page_fan = 46074266686;
            //fanPage(page_fan,user_id);
            //fanPage1(page_fan);
        });
    }
    
    /* Funcion que se ejecuta cuando aun no se hace la conexion con facebook */
    function logout(){
        console.log("no conectado")
    }
    
    /* Funcion para extraer algunos datos del susuario, como nombre y foto */
    function fqlQuery(){
        FB.api('/me', function(response) {
            var query = FB.Data.query('select name,email from user where uid={0}', response.id);
            query.wait(function(rows) {
                console.log(rows);
            });
        });
    }

    /* Funcion para extraer Fanpage */
    function fanPage(page_fan,user_id){
        FB.api('/me/likes', function(response) {
            console.log(page_fan+user_id);
            var query = FB.Data.query('SELECT uid FROM page_fan WHERE uid='+ user_id +' AND page_id='+ page_fan +'', response.id);
            query.wait(function(rows) {
                console.log(rows);
            });
        });
    }

    /* Funcion para extraer Fanpage */
    function fanPage1(page_fan){
        FB.api('/me/likes/' + page_fan, function(response) {
            console.log(page_fan);
            if(response.data){
                if(!isEmpty(response.data)){
                    console.log("Le gusta la pagina " + response.data[0].name);
                    //chekUser();
                }else{
                    console.log("No le gusta");
                }
            }else{
                console.log("ERROR");
            }
            function isEmpty(obj) {
                for(var prop in obj) {
                    if(obj.hasOwnProperty(prop))
                        return false;
                }
                return true;
            }
        });
    }
    
    function chekUser(){
        FB.api('/me', function(response) {
            var query = FB.Data.query('select name,email from user where uid={0}', response.id);
            query.wait(function(rows) {
                persona = new Personas();
                persona.id = response.id;
                persona.usuario = response.username;
                persona.nombre = response.first_name;
                persona.apellido = response.last_name;
                persona.mail = response.email;
                persona.birthday = response.birthday;
                persona.edad = response.edad;
                persona.sexo = response.gender;
                persona.loguin = true;
                persona.avatar = '<img src="https://graph.facebook.com/'+ response.id +'/picture?width=200&height=200">'
                console.log(response);
                console.log(persona.avatar);
                console.log(response.id);
            });
        });
    }
};

/* abrir ventana y logear */
flag = false;
function facebookLogin() {
    if (flag === false){
        console.log(flag);
        FB.login(function(response) {
            if (response.authResponse) {
                flag = true;
                console.log(flag);
                UsuarioControl();
                console.log("Hola");
                console.log(response.authResponse);
            } else {
                console.log("chau");
                console.log(response.authResponse);
            }   
        }, {scope: 'email, user_birthday, publish_actions,user_likes'});
    }else{
        App.PersonasControl.newUser(persona);
    }
}

function facebookLogOut() {
    FB.logout();
};

function UsuarioControl(){
    FB.api('/me', function(response) {
        var query = FB.Data.query('select name,email from user where uid={0}', response.id);
        query.wait(function(rows) {
            persona = new Personas();
            persona.id = response.id;
            persona.usuario = response.username;
            persona.nombre = response.first_name;
            persona.apellido = response.last_name;
            persona.mail = response.email;
            persona.birthday = response.birthday;
            persona.edad = response.edad;
            persona.sexo = response.gender;
            persona.loguin = true;
            persona.avatar = '<img src="https://graph.facebook.com/'+ response.id +'/picture?width=200&height=200">'
            console.log(response);
            console.log(persona.avatar);
            console.log(response.id);
            App.PersonasControl.newUser(persona);
        });
    });
}

function shareApp(media_type){     
    switch (media_type){
        case 'facebook':
            var fb = {
                link: 'https://www.facebook.com/JairalaOller/app_477155915687015',
                title: 'Bodega Jairala Oller | Concurso semanal',
                picture: 'https://www.fidelitytools.info/ariel/img/btn.jpg',
                caption: 'Concurso semanal',
                description: 'Todos los jueves del 2013 en el programa “Viva la Radio” emitido por Cadena 3, sortearemos 3 (tres) kits de vinos compuestos por un merlot y un cabernet sauvignon, para que pueda disfrutar de los productos Jairala Oller.'
            }
            share_facebook(fb);
            break;
        case 'twitter':
            //share_twitter(data['title']+ ' ' + data['url']);
            break;
        case 'google':
            //share_google(data['url']);
            break;
        default:
            break;
    }
}

function share_facebook(fb){
    FB.ui(
    {
        method: 'feed',
        name: fb.title,
        link: fb.link,
        picture: fb.picture,
        caption: fb.caption,
        description: fb.description,
        actions: [{
            name: 'Participar!',
            link: fb.link
        }]
    });
}