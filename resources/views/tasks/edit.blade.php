<x-layout>
    <h1>Edit tasks</h1>

    <x-errors />
    
    <form action="{{ route('tasks.update', $task) }}" method="post">
        @method('PATCH')
       <x-tasks.form :task="$task" />
    </form>

</x-layout>
