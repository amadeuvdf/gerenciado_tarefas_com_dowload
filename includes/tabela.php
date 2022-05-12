<table class="tabela">
<tr>
    <th>Nome</th>
    <th>Descrição</th>
    <th>Prazo</th>
    <th>Prioridade</th>
    <th>Concluido</th>
    <th>Opções</th> <!-- Coluna para as opções -->
</tr>
<?php foreach($lista_tarefas as $tarefa): ?>
<tr>
    <td> <?php echo $tarefa['nome']; ?> </td>
    <td> <?php echo $tarefa['descricao']; ?> </td>
    <td> <?php echo (traduz_data_exibir($tarefa['prazo'])); ?> </td>
    <td> <?php echo (traduz_prioridades($tarefa['prioridade'])); ?> </td>
    <td> <?php echo (traduz_concluidas($tarefa['concluida'])); ?> </td>
    <td>
        <a href="template_editar.php?id= <?php echo $tarefa['id']; ?>">Editar</a>
        <a href="remover.php?id= <?php echo $tarefa['id']; ?>">Remover</a>
    </td>
</tr>
<?php endforeach; ?>
</table>