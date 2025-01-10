@extends('layouts.personal')

@section('content')
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Expenses List</h1>

        <!-- Mensajes de éxito o error -->
        @if (session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4 shadow">
                {{ session('success') }}
            </div>
        @elseif (session('error'))
            <div class="bg-red-500 text-white p-4 rounded mb-4 shadow">
                {{ session('error') }}
            </div>
        @endif

        <!-- Botón para crear un nuevo gasto -->
        <div class="flex justify-start mb-4">
            <a href="{{ route('expenses.create') }}"
                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">+</a>
        </div>

        <!-- Tabla de gastos -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 text-left text-gray-700">Expense Name</th>
                        <th class="px-4 py-2 text-left text-gray-700">Amount</th>
                        <th class="px-4 py-2 text-left text-gray-700">Category</th>
                        <th class="px-4 py-2 text-left text-gray-700">Date</th>
                        <th class="px-4 py-2 text-center text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expenses as $expense)
                        <tr>
                            <td class="px-4 py-2">{{ $expense->name }}</td>
                            <td class="px-4 py-2">$ {{ number_format($expense->amount) }}</td>
                            <td class="px-4 py-2">{{ $expense->category->name }}</td>
                            <td class="px-4 py-2">{{ $expense->date }}</td>
                            <td class="px-4 py-2 text-center">
                                <!-- Botón para editar -->
                                <a href="{{ route('expenses.edit', $expense->id) }}" class="text-blue-500 hover:text-blue-700">Edit</a>
                                
                                <!-- Botón para eliminar (Formulario con confirmación de SweetAlert) -->
                                <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this expense?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function confirmDelete(expenseId) {
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción no se puede deshacer.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Si el usuario confirma, enviar el formulario de eliminación
                        document.getElementById('delete-form-' + expenseId).submit();
                    }
                });
            }
        </script>
    @endsection
@endsection
