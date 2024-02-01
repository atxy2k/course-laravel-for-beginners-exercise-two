<h1 class="mt-4 mb-3">
    Add To do
</h1>

<form action="/todo-list/store" method="post">
    <div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Write the title" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Write the content" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">
                <input type="checkbox" name="completed" value="1" id="completed" placeholder="Write the content">
                Description
            </label>
        </div>
        <div class="mb-3">
            <a href="/todo-list/index" class="btn btn-secondary">Cancelar</a>
            <button class="btn btn-primary" type="submit">Agregar</button>
        </div>

    </div>
    </div>
</form>