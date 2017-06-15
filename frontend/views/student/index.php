<table class="table">
    <tr>
        <th>ID</th>
        <th>姓名</th>
        <th>年龄</th>
        <th>操作</th>
    </tr>
    <?php foreach ($students as $student):?>
    <tr>
        <td><?=$student->id?></td>
        <td><?=$student->name?></td>
        <td><?=$student->age?></td>
        <td>删除 修改</td>
    </tr>
    <?php endforeach;?>
</table>
