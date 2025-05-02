<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Lista de Protocolos
        </h2>
    </x-slot>
<!--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
-->

    <div class="py-4 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
            @if(session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <table class="table-auto w-full text-left">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Protocolo</th>
                        <th class="px-4 py-2">Nome</th>
                        <th class="px-4 py-2">Assunto</th>
                        <th class="px-4 py-2">Status</th>
                        <th class="px-4 py-2">Criado em</th>
                        <th class="px-4 py-2">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($protocolos as $protocolo)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $protocolo->numero_protocolo }}</td>
                            <td class="px-4 py-2">{{ $protocolo->nome }}</td>
                            <td class="px-4 py-2">{{ $protocolo->assunto }}</td>
                            
                            <!-- Status com atribuição de cores -->
                            @php $status = strtolower($protocolo->status ?? 'pendente'); @endphp

                            <td class="px-4 py-2">
                                <!--
                            {{-- TEMPORÁRIO: Mostra o valor do status para debug --}}
                            <p class="text-red-600 text-sm">{{ $protocolo->status }}</p>
                            <p class="text-red-600 text-sm">{{ $status }}</p> 
                            -->

                                @switch($status)
                                    @case('recebido')
                                        <span class="px-2 py-1 rounded-full text-sm font-semibold bg-blue-100 text-blue-600">Recebido</span>
                                        @break

                                    @case('pendente')
                                        <span class="px-2 py-1 rounded-full text-sm font-semibold bg-red-100 text-red-600">Pendente</span>
                                        @break

                                    @case('em andamento')
                                        <span class="px-2 py-1 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-600">Em Andamento</span>
                                        @break

                                    @case('concluído')
                                        <span class="px-2 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-600">Concluído</span>
                                        @break

                                    @default
                                        <span class="px-2 py-1 rounded-full text-sm font-semibold bg-gray-100 text-gray-600">{{ ucfirst($status) }}</span>
                                @endswitch
                            </td>

                            <td class="px-4 py-2">{{ $protocolo->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-4 py-2">
                                <a href="{{ route('protocolo.edit', $protocolo->id) }}"
                                class="text-blue-500 hover:underline">Editar</a>
                            </td>
                        </tr>                        
                    @empty
                        <tr>
                            <td colspan="5" class="px-4 py-2">Nenhum protocolo encontrado.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
