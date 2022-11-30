<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Lista de Compras</title>
    <link href="/Css/app.css" rel="stylesheet" />
    <link crossorigin="anonymous"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          rel="stylesheet" />
    <script crossorigin="anonymous"
            integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js">
    </script>
    <script crossorigin="anonymous"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            src="https://code.jquery.com/jquery-3.6.0.min.js">
    </script>
</head>

<body class="bg-img bory-class" onload="getTasks()">
    <div class="paginainicial">
        <form>
        <div class="incluirdados">
        <img class = "logo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVCWQ_d287X7KFfDlZzikWpRDFvNZTK9rCDQ&usqp=CAU" alt="Logo não encontrada">
            <label for="taskInput" class="h5">New task</label>
            <input class="form-control" placeholder="Digite Seu Item" id="taskInput" type="text" arial-describedby="emailHelp">
            <button class="btn btn-primary" onclick="saveTask()">Save</button>
        </div>
        </form>
        
        <div class="exibirdados">
            <h1 class="titulo2">To do List</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Description</th> 
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            </div>
    </div>
    <script>
        function getTasks(){
            $.ajax(
                {
                    type: "GET",
                    url: "backend",
                    success: function(data) {
                        console.log(data);
                        const table = document.getElementsByTagName("tbory")[0];
                        table.innerHTML = "";
                        if (data.length === 0) {
                            const row = table.insertRow(0);
                            const cell = row.insertCell(0);
                            cell.innerHTML = "No Tasks Yet";                                                   
                        } else{
                            for (let index = 0; index < data.length; index++){
                                const row = table.insertRow(index);
                                const cell1 = row.insertCell(0);
                                const cell2 = row.insertCell(1);
                                const cell3 = row.insertCell(2);
                                const cell4 = row.insertCell(3);
                                cell1.innerHTML = data[index].id;
                                cell2.innerHTML = data[index].name;
                                cell3.innerHTML =  '<button class="btn btn-primary">Edit</button>'
                                cell4.innerHTML =  '<button class="btn btn-danger" onClick="deleteTask(${data[index].id})">Delete</button>'
                                

                            }

                        }
                        

                    },
                }
            );
           
             
        }
        function saveTask(){
                    const todo = document.getElementsByTagId("taskInput").value;
                    if (todo.trim().length === 0){
                        return alert ("Please,enter a task");
                    }
                    $.ajax({
                        type:"POST",
                        url:"backend",
                        data:{
                            name: todo
                        },
                        success: function() {
                            getTasks();
                        },
                        error:function(data){
                            alert('Error ${JSON.stringify(data)}');
                        }

                    });
                }
    function 
    </script>
       
</body>
</html>
