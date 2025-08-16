//selecciono el boton
const mostrar= document.getElementById("mostrarColores");


//agrego el evento click
mostrar.addEventListener("click", () => {

    //hago el fetch
    fetch("colores-fetch.php")

    //proceso la respuesta como json
        .then(res => res.json())

        //trabajo con los datos recibidos del json de PHP
        .then(data => {
            const lista = document.getElementById("listaColores");
            lista.innerHTML = "";


            //recorro el json
            for (const color in data) {
                const li = document.createElement("li");

                //Cargo los li con los datos del array json
                li.textContent = `${color}: ${data[color]}`;

                //AÑADO CADA FRUTA A LA LISTA
                lista.appendChild(li);

            }
        });

});
