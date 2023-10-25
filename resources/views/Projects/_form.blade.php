<label>
    Titulo del proyecto
    <input type="text" name="title" value="{{ old('title', $project->title) }}">
    </label>
    <br>
    <label>
    <!-- URL del proyecto
    <input type="text" name="url">
    </label> -->
    <br>
    <label>
    Descripcion del proyecto
    <textarea name="description" value="{{ old('title', $project->description) }}"></textarea>
    </label>
    <br>