function editTitular(event, id) {
    event.preventDefault();
    alert('editar titular '+id);
}

async function removeTitular(event, element, id) {
    event.preventDefault();

    const icon = element.children[0];
    icon.classList = "fa fa-spinner spin"

    const response = await fetch('/titular/remove/' + id, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-Token": $('input[name="_token"]').val()
        },
        credentials: "same-origin",
        method: "delete",
    });

    const data = await response.json();

    if(data.success) {
        toastr['success'](data.success, 'Sucesso!');
        document.getElementById('titular-'+id).remove();
    } else {
        icon.classList = "fa fa-trash-o";
        toastr["error"](data.error, "Ooops!");
        
    }
}