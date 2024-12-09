<?php
$data = DB('menu')->all();
?>
<table class="table table-stripted border">
    <thead class="table-dark">
        <tr>
            <th>S.No</th>
            <th>Item Name</th>
            <th>Categories</th>
            <th>Status</th>
            <th>Item Inserted</th>
            <th>Item Updated</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $index=0;
        foreach($data as $info){  ?>
        <tr>
            <td><?= ++$index; ?></td>
            <td><?= $info['item']; ?></td>
            <td><?= $info['category']; ?></td>
            <td><?= $info['status']; ?></td>
            <td><?= $info['created_at']; ?></td>
            <td><?= $info['updated_at']; ?></td>
        </tr>
       <?php  }  ?>
    </tbody>
</table>