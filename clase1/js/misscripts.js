ejemploGet();

function ejemploGet() {
    fetch('/pruebafaker.php')
        .then(function(response) {
            return response.json();
        })
        .then(function(arrdata) {
            let tmpl = document.getElementById('tmplTablaFaker').innerHTML;
            let outHtml = Mustache.render(tmpl, {rep: arrdata})
            document.getElementById('contenido').innerHTML = outHtml;
        })
        .catch(function(err) {
            console.error(err);
        });
}

function ejemploPostFormulario() {
    fetch('http://localhost:8080/mi', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
            'Access-Control-Allow-Origin':'*'
        },
        body: 'a=1&b=2'
        })
        .then(function(response) {
            console.log('response =', response);
            return response.json();
        })
        .then(function(data) {
            console.log('data = ', data);
        })
        .catch(function(err) {
            console.error(err);
        });
}

function ejemploPostObject() {
    fetch('http://localhost:8080/mi', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Access-Control-Allow-Origin':'*'
        },
        body: JSON.stringify({nombre:'aldo', apellido:'sierra'})
        })
        .then(function(response) {
            console.log('response =', response);
            return response.json();
        })
        .then(function(data) {
            console.log('data = ', data);
        })
        .catch(function(err) {
            console.error(err);
        });
}
