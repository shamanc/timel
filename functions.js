// Get items form the DOM and send to server
function saveItems() {
    let itemsCollection = document.querySelectorAll('#items div');
    let obj = {}; // Это объект!

    for (let i=0; i<itemsCollection.length; i++) {
        let name = itemsCollection[i].querySelectorAll('span')[0].innerText;

        let age = itemsCollection[i].querySelectorAll('span')[1].innerText;

        let note = itemsCollection[i].querySelectorAll('span')[2].innerText;

        //obj[name] = age;
        obj[name] = {
            age:age,
            note:note
        };
    }

        let mAge = document.querySelector('#mileage span:nth-child(2)').innerText;
        obj['mileage'] = mAge;

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
    let newItemNote = document.querySelector('#newitem_note').value;

    div.innerHTML = "<hr><span>" + newItem + "</span> | <span>0</span>" + " " + "<span>" + newItemNote + "</span>";

    let itemsDiv = document.querySelector('#items');
    itemsDiv.append(div);

}

// Update all items in the DOM
function updateAll() {
    let newMileage = document.querySelector('#newMileage').value;

    let currentMileage = document.querySelector('#mileage span:nth-child(2)').innerHTML;

    let delta = newMileage - currentMileage;
    
    let itemsCollection = document.querySelectorAll('#items div');

    for (let i=0; i<itemsCollection.length; i++) {
        let age = itemsCollection[i].querySelectorAll('span')[1];
        
        age.innerText = Number(age.innerText) + delta; // to update an innetText of a <span>
    }    
    
    //🚨 to update MILEAGE itself
    document.querySelector('#mileage span:nth-child(2)').innerText = Number(currentMileage) + delta;
}