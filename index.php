<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<input type="text" id='t1'>
<input type="text" id='t2'>

<button onclick='send2serv()'>Send</button>



<script>

    function send2serv() {

       let text1 = document.querySelector('#t1').value;
       let text2 = document.querySelector('#t2').value;
       
       let obj = {
        t1 : text1,
        t2 : text2
       }

       fetch("additem.php", {
        method: "POST",
        headers: {'Content-Type': 'application/JSON'},
        body: JSON.stringify(obj)
       }).then((response)=>{console.log(response)});

       //alert(obj.t2);

    }
    
</script>

</body>
</html>