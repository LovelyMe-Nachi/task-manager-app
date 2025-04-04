@csrf

<label for="title">Title</label>
<input type="text" name="title" id="title" value="{{ old('title', $task->title ?? '') }}">

<label for="description">Description</label>
<textarea name="description" id="description">{{ old('description', $task->description ?? '') }}</textarea>

<label for="completed">Completed:</label>
<input type="checkbox" id="completed" name="completed" value="1" {{ old('completed', false ? 'checked' : '') }}>

<button>Submit</button>