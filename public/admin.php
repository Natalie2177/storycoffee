<?
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/master.css">
    <script src="/js/master.js"></script>
</head>
<body>

<div class="cont">

<? require_once "$path/components/header.php";?>

<main class = "mainStart">
    <div class = "mainStart_window">
        <div class = "mainStart_window_menu">
           <div id = "catsPointMenu"> Категории</div>
           <div id = "productsPointMenu"> Товары</div>
           <div id = "usersPointMenu"> Пользователи</div>
        </div>
        <div class = "mainStart_window_cont" id = "contMenu" >
            
        </div>
    </div>
</main>

<footer>
    <div>
    
    </div>
</footer>
<script>
    catsPointMenu.addEventListener('click',()=>{
        fetch("/getCat")
        .then(response => response.json())
        .then(data => {
            contMenu.innerHTML = `<h3> Категории продукции </h3>`;

            function addBtnEdit(parent, dataid){
                let newBtnEdit = document.createElement("div");
                newBtnEdit.innerHTML = "Редактировать";
                newBtnEdit.setAttribute("data-btn-id", dataid);
                newBtnEdit.onclick = ()=>{
                    console.log(dataid);
                }
                parent.append(newBtnEdit);
            }
            function addBtnRemove(parent, dataid){
                let newBtnRemove = document.createElement("div");
                newBtnRemove .innerHTML = "Удалить";
                newBtnRemove.setAttribute("data-btn-id", dataid);
                newBtnRemove.onclick = ()=>{
                    let removeElem = document.querySelector(`[data-id = "${dataid}"]`);
                    contMenu.removeChild(removeElem);
                }
                parent.append(newBtnRemove);
            }


            data.forEach((value, index)=>{
                let newDiv = document.createElement("div");
                newDiv.setAttribute("data-id", value.id);
                newDiv.innerHTML = `
                   <div><b> ${++index}. ${value.name} </b></div>
                `;
                addBtnEdit(newDiv,value.id);
                addBtnRemove(newDiv,value.id);
                contMenu.append(newDiv);
            })
        });
       
    })
    productsPointMenu.addEventListener('click',()=>{
        contMenu.innerHTML = ` `;
        fetch(`/getProducts`)
        .then(response => response.json())
        .then(data => {
            for(let row of data){
            const newDivCart = document.createElement("div");
            newDivCart.innerHTML = `
            <div> <img src="/img/coffee/${row.link_img}"/> </div>
            <div>
                <div>
                <div><b>${row.name}</b></div>
                <div>${row.price} &#8381 </div>
                </div>
                <div> ${row.desc_product} </div>
                <div> 
                <button class="card" data-btn-id=${row.id}> Редактировать </button>
                <button class="card" data-btn-id=${row.id}> Удалить </button>
                </div>
            </div>`;
            newDivCart.setAttribute("data-card-id", row.id);
            newDivCart.classList.add("totalCard");
            contMenu.append(newDivCart);
            }
        })
    })
    usersPointMenu.addEventListener('click',()=>{
       
        contMenu.innerHTML = ` <h3> Пользователи </h3> `;
        
        fetch(`/getUsers`)
            .then(response => response.json())
            .then(data => {
                contMenu.innerHTML = `<h3>Получено объектов:</h3>`;
                for (let row of data){
                let newDivUser = document.createElement("table");
                newDivUser.setAttribute("data-id", row.id);
                newDivUser.innerHTML = `
                 
                    <table>
                        <tr><th>Id</th><th>Имя</th></tr>
                        <tr>
                            <td> ${row['id']} </td>
                            <td> ${row['login']} </td>
                        </tr>
                   </table>
                
                   `;
                newDivUser.classList.add("user");
                contMenu.append(newDivUser);
                } 
            })
    })
        
    onclick = e=>{
        if(e.target.dataset.btnId){
            myElem = document.querySelector(`[data-card-id="${e.target.dataset.btnId}"]`);
            myElem.setAttribute("contenteditable", "true");
        }
    }
</script>


</div>

</body>
</html>