@props([
    'labelsize' => '1/4',
    'formsize' => '1/2',
    'label' => '',
])
{{-- gapはグリッドとフレックスボックスのアイテム間の間隔を制御します。 --}}
{{-- mbはmargin bottom　アイテムの下部の感覚を制御します。 --}}

{{-- ラベル要素を定義（Slotは親が子を知ってる状態、子は継承される側） --}}
{{-- 下の要素がSlotに書き込まれる --}}

{{-- IdNameが入力されてたら反映して、されていなかったらidとnameを入力しない --}}

<div {{ $attributes->merge(['class' => 'gap-6 mb-2 flex']) }}>

    <div {{ $attributes->merge(['class' => 'basis-' . $labelsize]) }}>
        <x-label label="{{ $label }}"></x-label>
    </div>
    <div {{ $attributes->merge(['class' => 'basis-' . $formsize]) }}>
        <input type="text" {{ empty($attributes->id) ? null : $attributes->merge(['name' => $attributes->id]) }}
            class="mr-8 h-fit bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="" required>
    </div>

</div>
