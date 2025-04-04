<x-layout>
    <h1>{{$task->title}}</h1>
    <p>{{$task->description}}</p>
    <i>{{$task->completed ? 'Done' : 'Not done'}}</i>
    <a href="{{ route('tasks.edit', $task) }}" class="edit-task">edit</a>
    
    <form action="{{ route('tasks.destroy', $task) }}" method="post" class="delete-task">
        @csrf
        @method('DELETE')
        <button>Delete</button>
    </form>
</x-layout>
