const tbody = document.getElementById('tbody');

tbody.innerHTML = '<p>Iniciando</p>';

fetch('http://localhost/crud-tareas/crud-backend/db.php')
    .then(res => {
        tbody.innerHTML = '<p>Cargando...</p>'
        return res.json();
    }) //Promesa cumplida
    .then(res => {
        tbody.innerHTML = '';

        res.forEach(tarea => {

            const tr = document.createElement('tr');

            const tdId = document.createElement('td');
            const tdName = document.createElement('td');
            const tdDescrip = document.createElement('td');

            tdId.textContent = tarea[0];
            tdName.textContent = tarea[1];
            tdDescrip.textContent = tarea[2];

            tr.appendChild(tdId);
            tr.appendChild(tdName);
            tr.appendChild(tdDescrip);

            tbody.appendChild(tr);

        });
    })
    .catch(error => {
        tbody.innerHTML = '<p>Error...</p>'

        console.error(error);
    }); // Promesa no cumplida