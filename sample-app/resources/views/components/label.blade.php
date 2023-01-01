@props([
    'label' => 'ラベル名',
])
{{-- gapはグリッドとフレックスボックスのアイテム間の間隔を制御します。 --}}
{{-- mbはmargin bottom　アイテムの下部の感覚を制御します。 --}}

{{-- ラベル要素を定義（Slotは親が子を知ってる状態、子は継承される側） --}}
{{-- 下の要素がSlotに書き込まれる --}}


<label class="break-word block my-1 text-sm font-medium text-gray-900 dark:text-white">
    {{ $label }}
</label>
