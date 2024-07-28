@extends('frontend.app')
@section('title', 'Hasil Pencarian Tiket')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl text-black font-bold mb-4">Hasil Pencarian Tiket</h1>

    @if(count($dataRute) > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y shadow-sm border border-black divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Harga</th>
                        <th class="px-4 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Rute Awal</th>
                        <th class="px-4 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Rute Akhir</th>
                        <th class="px-4 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Transportasi</th>
                        <th class="px-4 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Kursi Tersisa</th>
                        <th class="px-4 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Waktu</th>
                        <th class="px-4 py-3 text-left text-xs font-bold text-black uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($dataRute as $ticket)
                        <tr>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-black">Rp.{{ number_format($ticket['harga'], 0, ',', '.') }}</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-black">{{ $ticket['start'] }}</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-black">{{ $ticket['end'] }}</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-black">{{ $ticket['transportasi'] }}</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-black">{{ $ticket['kursi'] }} Kursi</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-black">{{ $ticket['waktu'] }}</td>
                            <td class="px-4 py-4 whitespace-nowrap text-sm text-black">
                                <a href="{{ route('login') }}">
                                    <button class="no-arrow text-white bg-green-600 text-center p-2 text-sm rounded-sm">
                                        Pesan Ticket
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-gray-500">Tidak ada tiket yang ditemukan untuk pencarian ini.</p>
    @endif
</div>
@endsection
