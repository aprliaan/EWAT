<x-app-layout>
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                    <table class="border-b">
                        <tr class="border-b">
                            <th class="p-5">No</th>
                            <th class="p-5">Tanggal</th>
                            <th class="p-5">Waktu</th>
                        </tr>
                        @foreach ($laporan as $item)
                        <tr>
                            <td class="p-5">{{$loop->index+1}}</td>    
                            <td class="p-5">{{$item->Tanggal}}</td>
                            <td class="p-5">{{$item->Waktu}}</td>
                        </tr> 
                        @endforeach
                    <table>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
