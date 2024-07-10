<x-app-layout>
    <section class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">特選メニュー</h2>
        <p class="text-gray-600">ラグジュアリーホテルが誇る贅沢な食事をお楽しみください。</p>
    </section>

    <section class="p-6">
        @if($menus)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($menus as $menu)
            <div class="bg-white rounded-lg shadow-lg p-6">
                <img class="w-full h-48 object-cover rounded-t-lg mb-4" src="/images/menus/{{ $menu['image_name'] }}" alt="{{ $menu['name'] }}">
                <h4 class="text-xl font-bold text-gray-800">{{ $menu['name'] }}</h4>
                <p class="text-gray-600 mt-2">{{ $menu['summary'] }}</p>
                <p class="text-gray-800 font-bold mt-2">¥{{ number_format($menu['price']) }}</p>
                <a class="text-blue-800 font-bold mt-2" href="menu/detail/{{ $menu['id'] }}">More...</a>
            </div>
            @endforeach
        </div>
        @endif
    </section>
</x-app-layout>