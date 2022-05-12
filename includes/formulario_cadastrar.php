<form action="cadastrar.php">
    <label>
        Tarefa:
        <input type="text" name="nome" />
    </label>
    <label>
        Descrição (opcional):
        <textarea name="descricao" id="" cols="30" rows="10"></textarea>
    </label>
    <label>
        Prazo (Opcional):
        <input type="date" name="prazo" value="" />
    </label>
    <fieldset>
        <legend>Prioridade:</legend>
        <label >
            <input type="radio" name="prioridade" value="1" checked />
            Baixa
            <input type="radio" name="prioridade" value="2"  />
            Media
            <input type="radio" name="prioridade" value="3"  />
            Alta
        </label>
    </fieldset>
    <label>
        Tarefa concluida:
        <input type="checkbox" name="concluida" value="1" />
    </label>
    <input type="submit" value="Cadastrar" />
</form>