var contenido = document.querySelector('#contenido')

function traer(){
    fetch('js/tabla.json')
    .then(res => res.json())
    .then(datos => {
      //console.log(datos);
      tabla(datos)
    })
}
function tabla(datos){
  //console.log(datos.nombre);
  contenido.innerHTML = ''
  for(let valor of datos){
    //console.log(valor.minuta);
    contenido.innerHTML +=`
      <tr>
        <td scope="col" width="5%">${valor.id}</td>
        <td scope="col" width="5%">${valor.minuta}</td>
        <td scope="col" width="20%">${valor.fecha_s}</td>
        <td scope="col" width="20%">${valor.fecha_e}</td>
        <td class="d-flex justify-content-end">
          <a type="button" class="btn btn-primary" href=index.php?action=
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
            <i class="fas fa-pen-square pe-1"></i> Editar
          </a>
          <a type="button" class="btn btn-danger" href=index.php?action=
            style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;margin: 2px;">
            <i class="fas fa-trash-alt"></i> Eliminar
          </a>
        </td>
      </tr>
    `
  }
}
traer();
