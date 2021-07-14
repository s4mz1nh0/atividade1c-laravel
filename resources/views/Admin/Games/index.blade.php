@extends('Admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th>Games</th>
                    <th class="right-align">Opções</th>
                </tr>
            </thead>

            <tbody>
              @forelse ($games as $game)
                <tr>
                    <td>{{$game}}</td>
                    
                    <td class="right-align">Editar - Remover</td>
                </tr>
                @empty
                    <tr>
                        <td colspan="3">Não há games inseridos no site.</td>
                    </tr>
              @endforelse
            </tbody>

        </table>

    </section>

@endsection