
function listarDDV(){
    fetch('models/listar.php',{
      method: 'POST'
    })
    .then(response => response.text())
    .then(response =>{
      console.log(response)
    })
}
registrar.addEventListener('click', () => {
  fetch('models/servidor.php',{
    method: 'POST',
    body: new FormData(modalDdv)
  }).then(response => response.text())
  .then(response =>{
    //console.log(response);
    if(response == "ok"){
    //  alert('datos registrados con exito');
      console.log(response);
      modalDdv.reset();
      $('#modalDDV').modal('hide')
    }
  })
})
