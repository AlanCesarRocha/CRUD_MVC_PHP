<table class="table table-striped table-bordered table-hover table-sm table-responsive-sm text-center">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>

        <?php foreach ($data as $users) : ?>
        <tr>
            <td><?php echo $users['id']; ?></td>
            <td><?php echo $users['u_nome']; ?></td>
            <td><?php echo $users['u_email']; ?></td>
            <td><?php echo $users['u_tel']; ?></td>
            <td><a href="/update?id=<?php echo $users['id'];?>">Atualizar</a></td>
            <td><a href="/delete/delete/<?php echo $users['id'];?>">Excluir</a></td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>