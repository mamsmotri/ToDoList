<table id="main-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th class="no-sort">Done</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Task</th>
        <th class="no-sort">Picture</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $tableRow = null;

    foreach ($data as $row) {

        $tableRow = " <tr><td><input type='checkbox'";
        $tableRow .= ' disabled="disabled" ';

        if ($row['done'] == 'yes')
            $tableRow .= ' checked="checked" ';

        $tableRow .= " </td>";

        $tableRow .= "<td>" . $row['name'] . "</td>";
        $tableRow .= "<td>" . $row['email'] . "</td>";

        if (!array_key_exists('admin', $_SESSION)) {
            $tableRow .= "<td>" . $row['task'] . "</td>";
        } else {
            $tableRow .= "<td id=task" . $row['id'] . ">" . "<a href=/task/edit/" . $row['id'] . " >" . $row['task'] . "</a>" . "</td>";
        }

        $tableRow .= '
            <td>
                <img src="data:image/jpeg; base64, ' . base64_encode($row['image']) . '">
            </td>
        ';

        $tableRow .= "</tr>";

        echo $tableRow;
    }
    ?>
    </tbody>
</table>
<a href="/task/add" class="btn btn-primary">New task</a>

<script type="text/javascript">
    $(document).ready(function () {
        $('#main-table').DataTable({
                "lengthMenu": [[3, -1], [3, "All"]]
            }
        );
    });
</script>