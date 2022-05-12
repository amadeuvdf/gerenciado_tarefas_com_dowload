<form action="editar.php">
    <input type="hidden" name="id" value="<?php echo $tarefa['id']; ?>">

    <label>
        Tarefa:
        <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>" />
    </label>
    <label>
        Descrição (opcional):
        <textarea name="descricao" id="" cols="30" rows="10"> <?php echo $tarefa['descricao']; ?> </textarea>
    </label>
    <label>
        Prazo (Opcional):
        <input type="text" name="prazo" value=" <?php traduz_data_exibir($tarefa['prazo']); ?> " disabled/>
    </label>
    <fieldset>
        <legend>Prioridade:</legend>
        <label >
            <input type="radio" name="prioridade" value="1" <?php echo ($tarefa['prioridade'] == '1')? 'checked' : ''; ?> />
            Baixa
            <input type="radio" name="prioridade" value="2" <?php echo ($tarefa['prioridade'] == '2')? 'checked' : ''; ?> />
            Media
            <input type="radio" name="prioridade" value="3" <?php echo ($tarefa['prioridade'] == '3')? 'checked' : ''; ?> />
            Alta
        </label>
    </fieldset>
    <label>
        Tarefa concluida:
        <input type="checkbox" name="concluida" value="1" <?php echo ($tarefa['prioridade'] == '1')? 'checked' : ''; ?> />
    </label>
    <input type="submit" value="Editar" />
</form>