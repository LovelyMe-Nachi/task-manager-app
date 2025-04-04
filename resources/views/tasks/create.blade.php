<x-layout>

    <h1>Create Task</h1>

    <x-errors />
    
    <form action="{{ route('tasks.store') }}" method="post">
       <x-tasks.form />
    </form>

    <a href="{{ route('tasks.index') }}" class="back-link">Back to tasks</a>

</x-layout>
