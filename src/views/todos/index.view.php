<h1 class="mt-4 mb-3">
    To do list
    <a href="/todo-list/add" class="btn btn-primary float-end">Agregar</a>
</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Completed</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($todos as $todo){ ?>
        <tr>
            <th><?= $todo->id ?></th>
            <td><?= $todo->title ?></td>
            <td><?= $todo->description ?></td>
            <td>
                <span class="badge bg-<?= $todo->completed ? 'success' : 'danger' ?>"><?= $todo->completed ? 'Completada' : 'Pendiente' ?></span>
            </td>
        </tr>
    <?php } ?>
  </tbody>
</table>