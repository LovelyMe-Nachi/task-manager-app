<x-layout>

    <h1>Task manager</h1>

    <a href="{{ route('tasks.create') }}" class="create-btn">Create new tasks</a>

    @foreach ($tasks as $task)
        <div class="tasks_row" class="task-row">
            <h2>{{ $task->title }}</h2>
            <p>{{ $task->description }}</p>
            
            <div class="task-footer">
                <span class="task-status {{ $task->completed ? 'status-done' : 'status-pending' }}">
                    {{ $task->completed ? 'Done' : 'Not done'}}
                </span>
                <a href="{{ route('tasks.show', $task->id) }}" class="view-link">View task</a>
            </div>
        </div>
    @endforeach

    {{ $tasks->links('vendor/pagination/simple-default') }}

</x-layout>