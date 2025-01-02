let currentRow = null;

document.getElementById('dataTable').addEventListener('click', function(e) {
    const target = e.target;
    if (target.tagName === 'TD' && target.parentNode.tagName === 'TR') {
        if (currentRow) currentRow.classList.remove('edit-row');
        currentRow = target.parentNode;
        currentRow.classList.add('edit-row');

        const cells = currentRow.querySelectorAll('td');
        for (let i = 1; i < cells.length - 1; i++) {
            const value = cells[i].innerText;
            cells[i].innerHTML = `<input type="text" value="${value}" />`;
        }
    }
});

function saveData() {
    if (!currentRow) return;

    const cells = currentRow.querySelectorAll('td');
    const id = cells[0].innerText;
    const updatedData = {
        id,
        nome: cells[1].querySelector('input').value,
        email: cells[2].querySelector('input').value,
        senha: cells[3].querySelector('input').value,
        telefone: cells[4].querySelector('input').value,
        dtnasci: cells[5].querySelector('input').value,
    };

    fetch('src/controller/update/update.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(updatedData),
    })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                alert('Dados atualizados com sucesso!');
                cells[1].innerText = updatedData.nome;
                cells[2].innerText = updatedData.email;
                cells[3].innerText = updatedData.senha;
                cells[4].innerText = updatedData.telefone;
                cells[5].innerText = updatedData.dtnasci;
                currentRow.classList.remove('edit-row');
                currentRow = null;
            } else {
                alert('Erro ao atualizar os dados.');
            }
        });
}