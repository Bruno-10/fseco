window.onload=function(){
var labelProvincia = document.querySelector("#provincia");
var campoPaises = document.querySelector("select[name=pais]");


fetch('https://restcountries.eu/rest/v2/all')
    .then( function (response){
        return response.json(); 
    })

    .then(function (paises){ 

        for (pais of paises) {
                var option = document.createElement('option');
                option.setAttribute("value", pais.name);
                var optionText = document.createTextNode(pais.name);
                option.append(optionText);
                campoPaises.append(option);
            }
    })

    .catch(function(error){
        console.log(error);
    })
    campoPaises.onchange = function(){

        if(this.name.toUpperCase() === "Argentina".toUpperCase()){  

            fetch('https://apis.datos.gob.ar/georef/api/provincias')
            .then( function (response){
                return response.json(); 
            })
        
            .then(function (provincias){
                var objeto = provincias.provincias;
                labelProvincia.innerHTML = "";
                labelProvincia.insertAdjacentHTML('afterend', '<select class="custom-select d-block w-100 provincia form-control @error("provincia") is-invalid @enderror" name="provincia" id="provincia" value="{{old("provincia")}}" required></select>') 
                var selectProvincia = document.querySelector("select[name='provincia']");
                for (indice of objeto) {                                  
                        var option = document.createElement('option');
                        option.setAttribute("value", indice.nombre);
                        var optionText = document.createTextNode(indice.nombre);
                        option.append(optionText);
                        selectProvincia.append(option);
                    }   
            })
            .catch(function(error){
                console.log(error);
            })    
        }
        else{labelProvincia.innerHTML = "No hay provincias para el país seleccionado.";}

    }
    
    
    
 };