<div class="container">
    <div class="row">

        <form method="POST" action="/update/update/<?php echo $_GET['id']; ?>">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control form-control-sm" name="eNome">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control form-control-sm" name="eEmail">
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control form-control-sm" name="eTelefone">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>