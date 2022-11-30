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
    <div class="conteiner">
        <div class="center-screen">
            <div class="row">
                <div class="col-4">
                    <form>
                        <div class="form-group">
                            <div class="centered-element">
                                <img alt="Imagem não encontrada"
                                     class="img-fluid logo"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAh1BMVEX///8AAAD8/Pzv7+/5+fnq6uq+vr719fXV1dW4uLjg4OBmZmbt7e1tbW3Gxsbo6OiioqIxMTF3d3fMzMywsLDc3NzT09Oenp5aWlpUVFSHh4dKSkqrq6sQEBCUlJRAQEA5OTkmJiYYGBh/f3+IiIghISFWVlZGRkYzMzOVlZUkJCR6enoLCwsPsonKAAAMm0lEQVR4nO2daVsiOxCF2fdVYMBhbVBRx///+66gaPfp5FQKutM898n5OBMwL5WlUkkqpVJQUFBQUFBQUFBQUFBQUFBQUFDQ/0K15nDQXo3e5qv2YNisFV2djFWfPHVfy3GNF0+TetHVsqo1aIw27YFrDYej40fZpI/jvJNvTa9Rs92NGWI+k8rXplsj3UW70X2112Efaxg1WPnehuJ9aXM/rbX311TB48BWvmksb9C/qk8Mu9q2CnYrxvIrc+8zauSZxagHe/0+DANGa+zO96noj3+ipCpdWsFU/eYqvpPeisCKaUFrN4bBosmLm/XYKwbtS7zGEYwUM0UPjKtVDNxJvIm+N5OlJ9fxfco6LOctDogWtI65DpreI+AzdJ/pDYAFIQqAYMHbAMvlAjzVlKOW0D5jwPL2zgCfYZq4GdD/aMMB1wB4yyBzUf+uADMdZL419rqcIr7oCXCYA2C57NO10QFm0URP8rhc5IAfOQF6JPzHK6IHjJb9t0Zj9XZY7kmptbfl8IHWFpeEImB0mPwOIdXW5t1WcHkfgOh6NAS+fRvjAJV2ZC66uUtAyYLmIIX5U0Nj2cwlxJB0gEtbz6o/pgv/zZ3trCdeZYiSCk30wRyoOisVbYzyBbsoU8A5/VPYWPy00UwBpTjhKF5462emEOLUEEy5EbBUav3EgD7mpD1nKAEQ4oaDWwE/1Zl3d9Hy0GjKRbPQm8qCWQB6VqaAOMjUp4fu48Nm5qcxmiWEqifJ0jrA4Y8nv2v7IwLpAIW4KAAm3IKFP6aE8rQgNP/I07CS1Mhc1UwAU5PKoz+uHwmAEAMTmijsJP0RfwIPWvkFLJd9b+B7Byyv/MGdJMTJbgJsmUu9+KMriYBw4MJskx/BKt0CWH72hycuYQFQsKAjYPnD4wmMQgB9hn4FQHCxsmmin9p7AxRWeABIqnzSU7L0jBTdiTWr9Tr1DHwfHaBgQQUgmfJrndWm+/xTcL3YjFrXz56FAdpCMsNR3xgS776JxwSNErxL2FbnVU4BrlnhB1N1qtMl+ch2pA9U6QCVfZCeqsHt8ZOGfC/opIXyzE2mgBDL7fDS6Zq2+JGIi5aabXABEBxHnQU7/FxUqppV2X4XvTif1xCmbgAU+iBakG2gGQCFpRv+MbdIjzAu3gbISyPgcKcC/JxAXA5r5mpBXhpPTkt7cybJC2jBghDpzLWJCpvNFi0Eb0cYNgBQsMkhWXrIAdGCL0q0i8Z0baIDFCwIgLom2tR2wZjImCoAQhvXAQ6pJ4Nu4PCVlhZknf6H/HMYq+alEfCZlgbAXqRDQlm8uCb/lQFQaHT/AJD3QQCs8tKy1sbhpsZb/m2A3JMBwDq3t4t2plUVP40HcTLlKMqrDH5uXXclwyzDUUYeVoMghNAHYQVUtx4DOgsAq1kAGs5Nc6NsNIVTgLx/I+CtffAinDPoD4eAvMoA2OOlwQ3sZWPBT42TX0x9eFgAKZtoREsDYPWGiR6V8E+qrCQC8nERLRi51+JzwuKlv7Xedo8ubTnuvrFlpg4QxrAerwkAViOp0lG/cal3bXAQWnTsx2YjB6wPBOcLLFjl0wQCSk10MYElbotHAH4HG1IOAHsqCwoDPzZRAXALu81nzdjlsp/fm/RCnQURMKKlwUuq8dLWi0ET0hEuLdp+phIBea9CQN5EAVBoojt7SJTcavyuf8VaALzLug6QN1EAbPLb60cavbc7nF/91ho8xCpzwC5UmQOCEyG4/UshiGZF/IqM2CKucPBDcL4AsMp9UXDka/znkI+g2EIe51pVLTX/SK6xhCUN2FuYusGCQhN1OGNjW9ue7zDYGmky9CU0UQTkQQgEPNLSRxmQU1hG0uT9BmUf5IDgJWn7YG0wXbVToRjD6feTTqOpZd8qET0WmigCRhpAYaJHwMEF5Sm532+Jon0aquZQ6Y4OUGVBqYkmAavxISXpE1kGzJqNPe4hCdF1BOQ2gQBHjQNuk4Cwc5Xwgi3R+pYlevEem2GFKKpuHgTAiqqJVtErjvtclcj4FVPL4dHY2NhUDTLCzKazIADW0kNGPEpnnvbnln+Pxdj5EW9I0SI0UXADDVWOaweDjGFaf40VMXemfsn8K8auM9JKwLHlGp+6McTHLYgxT6PfEjNiz/gtR0sI6vdzdMsbAfkoCsvjiuBsJy1YMTtm8R/NWGBcMk8Evx9jN0kQkDdRABSa6DZpwYptiSQRPpeMDl0sEkdOQixgIFA10YrFCfkWNlHrGjBWxtiC1mbwmK9rrwgcdRUAYcxV9kH7IjcWUDNXVbShdekFHr/QRNGCuiZKGpJsw2v7oc8mys4MxYoZ//9ZHEstZzMeYaTjjQ7vwnDAMez+OYXTbITjK+dDaKLCwJ9XHywnXBNzyPBoiZXGPmja0kALqgClJgoWpMfa4mlrzD7Ng+yXGjzNRxgI+LCBTVTIgKYBTAQibH6peW0RxRhSMX9wiAVAjLLo+iAHjIdDrGsLy9oovsSHItjoshxkVE3UcX3ossaPpwD4wCuuqiZqdb6+hBbkZwuSbqB1je8UpykNvj8/nuM5Dm4TbKJCkr7rLUjiNG6xttNXNNqT1JGxAvtg3+mrT1EAt3ipRRwQL2lxC77C78ebKAAyCseYt1FCE4U1ui7NogqQxrxd9y0M4gckMYkctyAm6eOA6CXRfQvnvaeUuAWxI/OfQzeKIqCw92TfP6SIwjz4qFgfpBNl8v15BLSfJv7uJ/Y9YHKkWDhljluaujySOgvaEx9d4qlkH39vOh1wknB1DwOBvA++qyyIXhLJ7FR1+caF6eLUhC8mlBaM4E5lZoC/PgE/ifcAO1mViZTw+KiaujGXqw6Qpa7quH5peXwYXIxSbfQjXvhz6lYB7iGZngAIzZ8lPoq7dfRc26Umy+6Rb+V/S7VGL7+rANFLopmdEr1bd7+IaquyYASA/BoJOiEUEBZBmR3r3KkGfszlKgBC66CZneB8qXTs11nPKt8EM4FywKUGMH2vJJs8qrpBBtMNC4BQYw5oOAbHf203vfY037kHC/KkjDoLmhxOISzvIt3UjblcOSDOsXzj1njfQrozIwtvKWdpQdjJEADNd2bEI+qS0IJCym8VIPq5Quoq61FN4dQF1yt8ra6J8ryhOMcKgOTq+g1zBkY6BUcQxnLBgvDdgn9C7+ZffSUH3SmhDwIgt+Ar9MFbAK98KCV1jESY2XIFlK9z6x+7SV2vU6YbFgBhhNaljzPqj/Y5GBxjpFvYAMgzv2IcXEg+5vZ6UsX1Ua0vpa7AC1npdYDQRAVAFwue1XG/Kt7HtE5CT8ac5gIgNFFd+jiqAY/XX9RNtwoeZMR0wwKg7h0J5Ssff+RRtW+4+S7kWlEBKh+r0T9jMpyzkNpyZUo7xtNqfAAgXx/sYZDJHPCk2ZvRJvv+yJK4gLdRFaDysRr64iJVbTbavPxOIPvFZtWx3tHhbp8KUPlYzfWAP2oOZ0Nxw42OdTpA3ZNfGQC6iTkz4C9makF/OZaJw60DBDdJlz4uT9ndGQDka3RcPd4PoN0yKkB8NUcA9PrsnG0/WWdB3Vsuft/Va5orAb6dYEEA1KWPy13GZQkACivQ+wY0GjFPwAKeWUh3Gh0guAVC+rhC3pFAAgAUghA6QP8J3M9KWBGfPNI10fsELJV6P77bFufi/4MFz2oOng4Pf0cdvMKri3QKIfii37M2SQcopHD0A1gZHHblctSdOuVRzxTQz0tzjd8txzc5OaouECg0UT+AiYUEnlBISQeoSy+dkzAkwz1gXTD+LgDTy3nW94Unv+4R0DQQdG0RKmlHCwKBwjamp7cQjXXemz39kbDXowM8GP9G5rLt+a9TQa/KVDoBcZeAZGR8PUx+g45VMalaGpAb3Bcg33B4fulvpoPpU//RITUeGF04EIKbzfnJPRm8ElCVszBPXZdsWwZUpfTLVcKjpK7CFND3A5jRg+KYAlqV0i9nuZyb1gLqchbmrgwOa+pSQPsGlFxHB+kSCHsHFAPXakBVti0/uq2dAmDvDgHFFREV5pmP7hHwlikD1oNNnkeyMMCrh5s1xEUFCxb1hu5X3dyOTkGN4cCDkEi/UMDSNUNqKlTN44bdIh+zPmsWqfjGhiO8bEno1Re1aa44kGreDrOnSSruqe6Emq4HUv9ag6oD43Gxv/5e7JQ0dFlNbWh9G6nxpq9/9C9PVVZ8RNxOxecmZ/NYtq5uu5BHyLk6I8vcsV7OHc1Rnwzam1FjoHzO0KOGk003StDtuk+T++lN2ajWrE+mq9F8vmpPOs3CZ7OgoKCgoKCgoKCgoKCgoKCgoKCgbPQfhjjYt4d7r7UAAAAASUVORK5CYII=" />
                            </div>
                            <label for="taskInput" class="h5" >New Task</label>
                            <input aria-describedby="emailHelp"
                                   class="form-control"
                                   id="taskInput"
                                   placeholder="Enter Task"
                                   type="text" />
                            <small class="form-text text-muted" id="emailHelp">
                                And do It
                            </small>
                        </div>
                    </form>
                    <button class="btn btn-primary" onclick= "saveTask()">Save</button>
                </div>
                <div class="col-7 offset-1">
                    <div>
                        <h1>To do List</h1>
                    </div>
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
            <div aria-hidden="true"
                 aria-labelledby="editionModalLabel"
                 class="modal fade"
                 id="editionModal"
                 role="dialog"
                 tabidex="-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editionModalLabel">
                                Task edition
                            </h5>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <input id="task-id" type="hidden" />
                                    <label class="col-form-label"
                                           for="task-description">
                                        Name:
                                    </label>
                                    <input class="form-control"
                                           id="task-description"
                                           type="text" />
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary"
                                    data-bs-dismiss="modal"
                                    type="button">
                                Close
                            </button>
                            <button class="btn btn-primary"
                                    onclick="editTask()"
                                    type="button">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function getTasks() {
    $.ajax(
        {
            type: "GET",
            url: "/backend",
            success: function (data) {
                console.log(data);
                const table = document.getElementsByName("tbody")[0];
                table.innerHTML = "";
                if (data.length > 0) {
                    const row = table.insertRow(0);
                    const cell = row.insertCell(0);
                    cell.innerHTML = "Sem Informações";

                } else {
                    for (let index = 0; index < data.length; index++) {
                        const row = table.insertRow(index);
                        const cell1 = row.insertCell(0);
                        const cell2 = row.insertCell(1);
                        const cell3 = row.insertCell(2);
                        const cell4 = row.insertCell(3);
                        cell1.innerHTML = data[index].id;
                        cell1.innerHTML = data[index].name;
                        cell1.innerHTML = `<button class="btn btn-primary" onClick="openModal( ${data[index].id}, '${data[index].name}' )">Edit</button>`;
                        cell1.innerHTML = `<button class="btn btn-danger" onClick="deleteTask(${data[index].id})">Remove</button>`;
                    }
                }
            },
        },
    );


}

function saveTask() {
    const todo = document.getElementsById("taskInput").value;
    if (todo.trim().length === 0) {
        return alert("Please, enter a task");
    }
    $.ajax({
        type: "POST",
        url: "backend",
        data: {
            name: todo

        },
        success: function () {
            getTasks();
        },
        error: function () {
            alert(`Error ${JSON.stringify(data)}`);
        }
    });
}
function deleteTask(id) {
    $.ajax({
        type: "DELETE",
        url: `backend/${id}`,
        success: function (data) {
            getTasks();

        },
        error: function (data) {
            alert(`Error ${JSON.stringify(data)}`);
        }

    });

}

function openModal(id, name) {
    $('#editionModal').modal('show');
    $('#task-id').val(id);
    $('#task-description').val(name);

}

function editTask(id, name) {
    const idTask = $("#task-id").val();
    const nameTask = $("#task-description").val();
    if (nameTask.trim().length === 0) {
        return alert("Please, enter a task");

    }
    $.ajax({
        type: "PUT",
        url: `backend/${id}`,
        data: {
            name: nameTask
        },
        success: function () {
            getTasks();
        },
        error: function (data) {
            alert(`Error ${JSON.stringify(data)}`);
        }
    });




}

</script>
</body>
</html>