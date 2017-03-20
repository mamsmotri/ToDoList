<h2>Create task</h2>
<small>Помни, после того, как ты создашь здесь записи, удалить их уже не сможешь.</small>
<div class="form-add-task">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="fullName">Your Name</label>
            <input type="text" name="fullName" class="form-control" id="fullName" placeholder="The name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email"
                   placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else (no).
            </small>
        </div>
        <div class="form-group">
            <label for="taskTextarea">Describe your task here:</label>
            <textarea name="taskTextarea" class="form-control" id="taskTextarea" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="taskImage">You can attach image</label>
            <input type="file" onchange="readURL(this);" name="taskImage" class="form-control-file" id="taskImage"
                   aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Требования к изображениям - формат JPG/GIF/PNG, не более
                320х240 пикселей. <br>При попытке загрузить изображение большего размера, картинка будет
                пропорционально уменьшена до заданных размеров.
            </small>
        </div>
        <a class="btn btn-primary" onclick="previewTask();">Preview</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<div id="previewTask">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Done</th>
            <th>Name</th>
            <th>e-mail</th>
            <th>Text</th>
            <th>Picture</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input id="donePreview" type="checkbox" disabled="disabled"/></td>
            <td id="fullNamePreview"></td>
            <td id="emailPreview"></td>
            <td id="taskTextareaPreview"></td>
            <td>
                <img id="taskImagePreview"/>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#taskImagePreview')
                    .attr('src', e.target.result)
                    .width(320)
                    .height(240);
            };

            reader.readAsDataURL(input.files[0]);
            $("#taskImagePreview").hide();
        }
    }

    function previewTask() {
        if ($("#done").is(":checked"))
            $("#donePreview").prop("checked", true);
        else
            $("#donePreview").prop("checked", false);

        $("#fullNamePreview").text($("#fullName").val());
        $("#emailPreview").text($("#email").val());
        $("#taskTextareaPreview").text($("#taskTextarea").val());

        $("#previewTask").show();
        $("#taskImagePreview").show();

    }


</script>