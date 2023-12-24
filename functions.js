
// Get items form DOM and send to file
function saveItems() {
    let itemsCollection = document.querySelectorAll('#items div');
    let obj = {};

    for (let i=0; i<itemsCollection.length; i++) {
        let name = itemsCollection[i].querySelectorAll('span')[0].innerText;
        let age = itemsCollection[i].querySelectorAll('span')[1].innerText;
        obj[name] = age;
    }
        //alert(obj['Масло']);

    fetch("additem.php", {
        method: "POST",
        headers: {'Content-Type': 'application/JSON'},
        body: JSON.stringify(obj)
       }).then((response)=>{console.log(response)});
}

// Add new item to the DOM
function addItem() {
    let newItem = document.querySelector('#newitem').value;
    let div = document.createElement('div');
    div.innerHTML = "<span>" + newItem + "</span>: <span>0</span>";
    let itemsDiv = document.querySelector('#items');
    itemsDiv.append(div);
}