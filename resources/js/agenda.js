document.addEventListener("DOMContentLoaded", function () {
    let formulario = document.querySelector("#formEventos");
    var calendarEl = document.getElementById("agenda");
    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        locale: "Es",
        displayEventTime: false,
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "dayGridMonth",
        },
        eventColor: '#378006',

        //events: "/agenda/public/evento/mostrar",
        eventSources:{
            url: "/agenda/public/evento/mostrar",
            method: "POST",
            extraParams: {
                _token: formulario._token.value,
            }
        },

        dateClick: function (info) {

            formulario.reset();
            formulario.start.value=info.dateStr;
            formulario.end.value=info.dateStr;

            $("#evento").modal("show");

        },

        eventClick:function (info) {
            var evento= info.event;
            console.log(evento);

            axios.post("/agenda/public/evento/editar/"+info.event.id).
            then(
                (respuesta) => {

                    formulario.id.value=respuesta.data.id;
                    formulario.title.value=respuesta.data.title;
                    formulario.descripcion.value= respuesta.data.descripcion;
                    formulario.start.value= respuesta.data.start;
                    formulario.end.value= respuesta.data.end;

                    $("#evento").modal("show");
                }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            );

        }

    });

    calendar.render();

    document.getElementById("btnGuardar").addEventListener("click",function(){
        enviarDatos('/agenda/public/evento/agregar');
    });

    document.getElementById("btnEliminar").addEventListener("click",function(){
        enviarDatos('/agenda/public/evento/borrar/'+formulario.id.value);
    });

    document.getElementById("btnEditar").addEventListener("click",function(){
        enviarDatos('/agenda/public/evento/actualizar/'+formulario.id.value);
    });

    function enviarDatos(url){
        const datos= new FormData(formulario);
        axios.post(url, datos).
            then(
                (respuesta) => {
                    calendar.refetchEvents();
                    $("#evento").modal("hide");
                }
            ).catch(
                error=>{
                    if(error.response){
                        console.log(error.response.data);
                    }
                }
            );
    }
    

});