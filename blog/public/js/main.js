window.onload = function() {
    var elBoton = document.querySelector('.elboton');
    
    console.log(elBoton)

    elBoton.onclick = function (event){
        event.preventDefault();
        swal({
            title: "Seguro desea realizar esta compra?",
            text: "Su compra sera confirmada en un periodo de 5 dias",
            icon: "warning",
            buttons: ['Volver', true],
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                var elForm = document.querySelector('#caja');
                elForm.submit();
            } else {
              
            }
          });
    }

};