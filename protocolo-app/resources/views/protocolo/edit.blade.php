<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Status do Protocolo
        </h2>
    </x-slot>

    <div class="py-4 max-w-2xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded shadow">
            <form method="POST" action="{{ route('protocolo.update', $protocolo->id) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700">Número do Protocolo</label>
                    <p class="mt-1 text-gray-600">{{ $protocolo->numero_protocolo }}</p>
                </div>

                <div class="mb-4">
                    <label for="status" class="block font-medium text-sm text-gray-700">Status</label>
                    <select name="status" id="status" class="form-select rounded-md shadow-sm mt-1 w-full">
                        <option value="Pendente" {{ $protocolo->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                        <option value="Em andamento" {{ $protocolo->status == 'Em andamento' ? 'selected' : '' }}>Em andamento</option>
                        <option value="Concluído" {{ $protocolo->status == 'Concluído' ? 'selected' : '' }}>Concluído</option>
                    </select>
                </div>

                <div class="mt-4">
                    <x-primary-button>Atualizar</x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
