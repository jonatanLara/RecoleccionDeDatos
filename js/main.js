
  let data = new FormData();
  data.append('a', 5);
  data.append('b', 5);

  fetch('models/servidor.php',{
    method: 'POST',
    body:data
  })
  .then(function (response){
    //console.log(response.text());
    if (response.ok){
      return response.text();
    }else{
      throw "error en la llamada";
    }

  })
  .then(function (texto){
    console.log(texto);
  })
  .catch(function (error){
    console.log(error);
  });
