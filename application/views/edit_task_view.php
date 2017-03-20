<div class="form-add-task">
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" name="fullName" disabled="disabled" class="form-control"
                   id="fullName" value=<? echo $data['name'] ?>>
        </div>
        <div class="form-group">
            <input type="email" disabled="disabled" name="email" class="form-control" id="email"
                   value=<? echo $data['email'] ?>>
        </div>
        <?= ' <img src="data:image/jpeg; base64, ' . base64_encode($data['image']) . '">'; ?>
        <div class="form-group">
            <label for="taskTextarea">Edit your task:</label>
            <textarea name="taskTextarea" class="form-control" id="taskTextarea"
                      rows="3"><? echo $data['task'] ?></textarea>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" id="done" name="done" class="form-check-input"
                    <?
                    if ($data['done'] == 'yes')
                        echo 'checked="checked"';
                    ?>
                >
                Already done!
            </label>
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
            <td><input id="donePreview" type="checkbox" disabled="disabled"></td>
            <td id="fullNamePreview"></td>
            <td id="emailPreview"></td>
            <td id="taskTextareaPreview"></td>
            <td>
                <img id="taskImagePreview">
            </td>
        </tr>
        </tbody>
    </table>
</div>

<script>
    function previewTask() {
        if ($("#done").is(":checked")) {
            $("#donePreview").prop("checked", true);
        }
        else {
            $("#donePreview").prop("checked", false);
        }

        $("#taskTextareaPreview").text($("#taskTextarea").val());

        $("#previewTask").show();
    }
</script>