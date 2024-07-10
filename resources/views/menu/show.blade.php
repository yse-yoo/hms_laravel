<x-app-layout>
    <div class="w-full max-w-2xl">
        <img src="/images/menus/{{ $menu->image_name }}" alt="" class="mb-4 rounded mx-auto">
        <h2 class="text-2xl font-bold text-gray-800 text-center">
            {{ $menu->name }}
        </h2>
        <div class="text-right mb-6">
            <label for="" class="bg-green-500 text-white p-2 rounded">
            </label>
        </div>
        <p class="text-gray-600 mt-2 text-left">
                <?= nl2br($menu->summary)  ?>
            </p>
            <p class="text-gray-600 mt-2 text-left mb-6">
                <?= nl2br($menu->description)  ?>
            </p>
        <?php if ($menu->calorie > 0) : ?>
            <p class="mb-6 text-left">
                <strong>カロリー:</strong>
            </p>
        <?php endif ?>
        <p class="mb-6 text-left">
            ルームサービス:
        </p>

        <p class="text-gray-800 text-xl font-bold mt-2 text-left">
            Price: &yen;<?= number_format($menu->price) ?>
        </p>

        <div class="mt-5 text-center">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Order
            </button>
            <a href="{{ route('menu.index') }}" class="border border-blue-700 text-blue-500 py-2 px-4 rounded hover:underline">Back</a>
        </div>
    </div>
</x-app-layout>