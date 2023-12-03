<!-- chatbot.php -->

<style>
    /* Estilos del chatbot */
    #chatbot-container {
        position: fixed;
        bottom: 10px;
        right: 10px;
        width: 450px; /* Cambié el ancho predeterminado */
        height: 50px; /* Añadí la altura para el estado minimizado */
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        overflow: hidden;
        transition: height 0.3s, width 0.3s, transform 0.3s; /* Añadí transición para la altura y la transformación */
        z-index: 9999; 
    }

    #chat-header {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .minimize {
        font-size: 30px;
    }

    #chat-messages {
        height: 800px;
        overflow-y: auto;
        padding: 10px;
    }

    .user-message,
    .bot-message {
        margin: 5px 0;
        padding: 10px;
        border-radius: 8px;
    }

    .user-message {
        margin-top: 2em !important;
        background-color: #c0c0c0; /* Un tono más oscuro que el blanco */
        text-align: right;
        width: max-content;
        padding: 10px; /* Añadí un relleno para resaltar el mensaje */
        border-radius: 8px; /* Redondear las esquinas para un aspecto más agradable */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Agregar una sombra sutil para destacar el mensaje */
    }

    .options-container {
        background-color: #F9F9F9;
        padding: 15px;
        transition: background-color 0.3s ease;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Agrega una sombra sutil */
    }

    .options {
        color: #859304;
    }

    .options-container:hover {
        background-color: #DDEECC; /* Cambia el color de fondo al pasar el mouse */
    }

    .options-container a:hover {
        text-decoration: none !important;
    }

    #minimized-icon {
        display: none;
        cursor: pointer;
        background-color: #4CAF50;
        color: #fff;
        padding: 10px;
        border-radius: 0 0 10px 10px;
    }

    .msg-response {
        background-color: #E1F5FE;
        padding: 10px;
        border-radius: 8px;
    }
    @media (max-width: 768px) {
        #chatbot-container {
            width: 80%; /* Reducir el ancho en pantallas más pequeñas */
            max-width: none; /* Eliminar el ancho máximo en pantallas más pequeñas */
        }

        #chat-messages {
            max-height: 400px; /* Ajustar la altura máxima en pantallas más pequeñas */
            padding:30px;
        }
    }
</style>

<!-- Contenedor del chatbot -->
<div id="chatbot-container" class="">
    <div id="chat-header">
        <span>ChatBot</span>
        <span id="minimize-chat" class="minimize" onclick="chatbot.toggleChat()">-</span>
    </div>
    <div id="chat-messages"></div>
    <div class="options"></div>
    <div id="minimized-icon" onclick="chatbot.toggleChat()">C</div>
</div>

<!-- Script del chatbot -->
<script>
    var chatbot = {
        isChatMinimized: false,

        options: [
            {
                text: 'Acerca de la empresa, filosofía y servicios',
                response: 'Mueblería Joaquín se dedica a proporcionar soluciones tecnológicas innovadoras. Nos enorgullece ofrecer muebles de alta calidad que transforman hogares. Creemos en ofrecer muebles que no solo sean hermosos, sino también funcionales y duraderos. Nos esforzamos por superar las expectativas de nuestros clientes en diseño y calidad. ¿En qué área estás interesado?'
            },
            {
                text: 'Información de contacto',
                response: 'Puedes seguirnos en <a href="https://www.facebook.com/muebleriajoaquiin?mibextid=2JQ9oc" target="_blank">Facebook</a> y <a href="https://www.instagram.com/muebleriajoaquin/" target="_blank">Instagram</a> para mantenerte al tanto de nuestras últimas novedades. Nuestra tienda física está ubicada en Mega Muebles, San Martín de Porres, Lima-Perú. Puedes llamarnos al +51 920 838 291 o enviarnos un correo a MuebleríaJoaquin@gmail.com. También puedes contactarnos a través de <a href="https://api.whatsapp.com/send/?phone=%2B51920838291&text=Hola%2C+me+gustaría+obtener+más+información&type=phone_number&app_absent=0" target="_blank">WhatsApp</a>.'
            },
            {
                text: 'Ver productos',
                response: 'Puedes explorar nuestros productos en <a href="https://muebleríajoaquín.site/Producto.php" target="_blank">nuestra tienda en línea</a>.'
            },
            {
                text: 'Iniciar Sesión',
                response: 'Puedes iniciar sesión en <a href="https://muebleríajoaquín.site/login.php" target="_blank">nuestra página de inicio de sesión</a>.'
            },
            {
                text: 'Registrarse',
                response: 'Puedes registrarte en <a href="https://muebleríajoaquín.site/register.php" target="_blank">nuestra página de registro</a>.'
            }
        ],

        initialize: function () {
            this.showBotResponse('¡Bienvenido al ChatBot de Mueblería Joaquín! ¿Cómo puedo ayudarte hoy?');
        },

        toggleChat: function () {
            var chatContainer = document.getElementById('chatbot-container');
            var minimizedIcon = document.getElementById('minimized-icon');

            this.isChatMinimized = !this.isChatMinimized;

            if (this.isChatMinimized) {
                chatContainer.style.height = '50px';
                minimizedIcon.style.display = 'block';
                chatContainer.style.transform = 'translateY(calc(100% - 50px))';
            } else {
                chatContainer.style.height = 'auto';
                minimizedIcon.style.display = 'none';
                chatContainer.style.transform = 'translateY(0)';
            }

            setTimeout(function () {
                minimizedIcon.style.opacity = chatbot.isChatMinimized ? '1' : '0';
            }, 100);
        },

        showBotResponse: function (response) {
            var chatMessages = document.getElementById('chat-messages');
            var userMessages = document.getElementsByClassName('user-message');
            
            chatMessages.innerHTML += '<p class="msg-response"><strong>ChatBot:</strong> ' + response + '</p>';
            this.showOptions(this.options);

            // Hacer scroll hasta el último mensaje del usuario
            var lastUserMessage = userMessages[userMessages.length - 1];
            if (lastUserMessage) {
                lastUserMessage.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        },



        showOptions: function (options) {
            var optionsHTML = '';

            options.forEach(function (option) {
                optionsHTML += '<p class="options-container"><a href="#" class="options" onclick="chatbot.selectOption(\'' + option.text + '\', event)">' + option.text + '</a></p>';

            });

            document.getElementById('chat-messages').innerHTML += optionsHTML;
        },

        selectOption: function (selectedText, event) {
            this.showUserMessage(selectedText);
            var selectedOption = this.options.find(option => option.text === selectedText);

            if (selectedOption) {
                this.showBotResponse(selectedOption.response);

                // Si hay opciones adicionales, mostrarlas
                if (selectedOption.additionalOptions) {
                    this.showOptions(selectedOption.additionalOptions);
                }

                // Evitar el comportamiento predeterminado de navegación
                if (event) {
                    event.preventDefault();
                }
            }
        },


        showUserMessage: function (message) {
            var chatMessages = document.getElementById('chat-messages');
            chatMessages.innerHTML += '<hr><p class="user-message"><strong>Usuario:</strong> ' + message + '</p>';
        }
    };

    // Inicializa el chatbot
    chatbot.initialize();
</script>
