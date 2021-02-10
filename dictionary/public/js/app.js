function getTaskFromForm() {
    const form = document.forms;
    const addTaskForm = form['addTask'];
    const value = addTaskForm.elements["value"].value;
    const lang_id = addTaskForm.elements["lang_id"].value;
    return {value: value, lang_id: lang_id};
}

function createDictionaryItem() {
    const data = getTaskFromForm();
    let sendData = new FormData();

    for (const [key, value] of Object.entries(data)) {
        sendData.append(key, value);
    }
    let request = new XMLHttpRequest();
    request.open('POST', '/api/dictionary-item/add/');
    request.onload = () => {
        window.location.replace('/');
    };
    request.send(sendData);
}

async function remove(item, id) {
    const response = await fetch('/api/dictionary-item/delete/' + id, {method: "DELETE"});
    item.parentElement.parentElement.style.display = "none"
}
