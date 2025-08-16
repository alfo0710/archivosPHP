//selecciono el boton
const mostrar= document.getElementById("mostrarAnimales");


//agrego el evento click
mostrar.addEventListener("click", () => {

    //hago el fetch
    fetch("animales.php")

    //proceso la respuesta como json
        .then(res => res.json())

        //trabajo con los datos recibidos del json de PHP
        .then(data => {
            const lista = document.getElementById("listaAnimales");
            lista.innerHTML = "";


            //recorro el json
            for (const animal in data) {
                const gridArea = document.createElement("div");
                // AGREGAR CLASE PARA ESTILO
                gridArea.classList.add("area");

                //Cargo los li con los datos del array json
                gridArea.textContent = `${animal}: ${data[animal]}`;

                //AÑADO CADA FRUTA A LA LISTA
                lista.appendChild(gridArea);

            }
        });
});